<?php
	include '../../rest/external.php';	
	class PromoterMetaData extends SQLite3{
		function __construct(){
			$this->open('promoter_database.db');		
		}
		
		/*
		 * Get Remote Table Count From External Server
		 */
		 public function getPromoterTableCount(){
		 	$table_type = "BASE TABLE";
			$table_name1 = "^ME005";
			$table_name2 = "^ME005.*CORE";
			$table_name3 = "^ME005.*TEST";
			$table_name4 = "^ME005.*TEST1";
			$tableSchema = "odk_prod";
			$dbname = "odk_prod";		
			$sql = "SELECT count(table_name) AS mcount
					FROM information_schema.tables 
					WHERE table_schema = '$tableSchema'
					AND table_type = '$table_type'
					AND table_name ~ '$table_name1'
					AND table_name ~ '$table_name2'
					AND table_name !~ '$table_name3'
					AND table_name !~ '$table_name4'";
			
			try{
				$obj = new Funcs();
				$query_result = $obj->runQuery($sql,'odk_prod');
				
				if(pg_num_rows($query_result) > 0){
					while($row = pg_fetch_array($query_result)){
						$count = $row["mcount"];
					}
					return $count;
				}
				else{
					return FALSE;
				}
			}
			catch(Exception $e){
				echo('Error Processing Promoter Table Count');
			}
		 }
		 
		 #When Meta Goes Out Of Sync, Run This Function
		 public function updateMetaData(){
		 	$table_type = "BASE TABLE";
			$table_name1 = "^ME005";
			$table_name2 = "^ME005.*CORE";
			$table_name3 = "^ME005.*TEST";
			$table_name4 = "^ME005.*TEST1";
			$tableSchema = "odk_prod";
			$dbname = "odk_prod";		
			$sql = "SELECT count(table_name) AS mcount
					FROM information_schema.tables 
					WHERE table_schema = '$tableSchema'
					AND table_type = '$table_type'
					AND table_name ~ '$table_name1'
					AND table_name ~ '$table_name2'
					AND table_name !~ '$table_name3'
					AND table_name !~ '$table_name4'";
			
			try{
				$obj = new Funcs();
				#$count;
				$query_result = $obj->runQuery($sql,'odk_prod');
				
				if(pg_num_rows($query_result) > 0){
					while($row = pg_fetch_array($query_result)){
						$count = $row["mcount"];
						$this->insertMetaRecord('promoter', $count);
					}
				}
			}
			catch(Exception $e){
				echo('Error Processing Update Of Meta Data');
			}
		 }
		 
		 #Get All Installation Tables
		 public function getPromoterTables(){
		 	$table_type = "BASE TABLE";
			$table_name1 = "^ME005";
			$table_name2 = "^ME005.*CORE";
			$table_name3 = "^ME005.*TEST";
			$table_name4 = "^ME005.*TEST1";
			$tableSchema = "odk_prod";
			$dbname = "odk_prod";		
			$sql = "SELECT table_name
					FROM information_schema.tables 
					WHERE table_schema = '$tableSchema'
					AND table_type = '$table_type'
					AND table_name ~ '$table_name1'
					AND table_name ~ '$table_name2'
					AND table_name !~ '$table_name3'
					AND table_name !~ '$table_name4'";
			try{
				$obj = new Funcs();			
				$metatable = '_META_DATA';
				$this->exec('DELETE FROM _PROMOTER_TABLE');
				$query_result = $obj->runQuery($sql,'odk_prod');
				if(pg_num_rows($query_result) > 0){
					while($row = pg_fetch_array($query_result)){
						$tablename = $row["table_name"];
						$this->insertPromoterRecord($tablename);
					}
					return TRUE;
				}	
				else{
					return FALSE;
				}
			}
			catch(Exception $e){
				echo('Error Processing Get Promoter Tables');
			}
		 }
		 
		  #Function To Compare Local vs Remote Table Count
		 public function getTableCountStatus(){
		 	try{
				$remotecount = $this->getPromoterTableCount();
				$localcount = $this->getMetaRecordsLocal();
				if(($remotecount != $localcount) || ($localcount != $remotecount)){
					return TRUE;
				}
				else{
					return FALSE;
				}
			}
			catch(Exception $e){
				echo('Error Processing Table Count Status');
			}
		 }
		 
		 #Insert Installation
		 public function insertPromoterRecord($tablename){
		 	try{
				$this->exec("INSERT INTO _Promoter_TABLE (TABLE_NAME) VALUES('$tablename')");
			}
			catch(Exception $e){
				echo $this->lastErrorMsg();
			}
		 }
		 
		  #Get All Promoter Records
		 public function getPromterRecords(){
		 	$tables;
		 	try{
				$result = $this->query("SELECT TABLE_NAME FROM _Promoter_TABLE ORDER BY TABLE_NAME");
				while($row = $result->fetchArray(SQLITE3_ASSOC) ){
				 	$name = $row['TABLE_NAME'];
					$tables[] = array('tablename' => $name);
				}
				return $tables;
			}
			catch(Exception $e){
				echo $this->lastErrorMsg();
			}
		 }
		 
		 #Insert New MetaData Record Of Table Count
		 public function insertMetaRecord($table_tag, $table_count){
		 	try{
				$this->exec("INSERT INTO _META_DATA(TABLE_TAG, TABLE_COUNT) VALUES ('$table_tag', '$table_count')");				
			}
			catch(Exception $e){
				echo $this->lastErrorMsg();
			}
			echo('Record Was Successfully Inserted');
		 }
		 
		 #Get Local MetaData Count Of Installation Tables
		 public function getMetaRecordsLocal(){
		 	$table_tag = 'promoter';
			try{
				$result = $this->query("SELECT TABLE_COUNT FROM _META_DATA WHERE TABLE_TAG = '$table_tag'");
				 while($row = $result->fetchArray(SQLITE3_ASSOC) ){
				 	$count = $row['TABLE_COUNT'];
					return $count;
				 }
			}
			catch(Exception $e){
				echo $this->lastErrorMsg();
			}
		 }
		 
		 #Initialize Database
		 public function createTables(){
		 	try{
		 		$this->exec('CREATE TABLE _META_DATA (ID INTEGER PRIMARY KEY AUTOINCREMENT, TABLE_TAG TEXT NOT NULL, TABLE_COUNT INT NOT NULL)');
				$this->exec('CREATE TABLE _PROMOTER_TABLE(ID INTEGER PRIMARY KEY AUTOINCREMENT, TABLE_NAME TEXT NOT NULL)');
			}
			catch(Exception $e){
				echo $this->lastErrorMsg();
			}
		 }
		 
		 #Entry Point Into The Application
		 public function main(){
		 	try{
				if($this -> getTableCountStatus()){		
					$this->updateMetaData();
					$this->getPromoterTables();
				}
				else{
					echo('In Sync'."<br />");
				}
			}
			catch(Exception $e){
				echo('Error Processing Main');
			}
		 }
	}
?>