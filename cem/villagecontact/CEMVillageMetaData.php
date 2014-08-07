<?php
	/**
	 * Top Head Include For Cloud Server Database Connection
	 */
	include '../../rest/external.php';	
	
	#Must Extend SQLite DB To Support Local Caching
	class CEMVillageMetaData extends SQLite3{
		
		#Get A Connection To Our Caching SQLite DB
		function __construct(){
			$this->open('cem_villages.db');		
		}
		
		/*
		 * Get Remote Table Count From External Server
		 * @Return - Number Of Remote Tables Found
		 */
		 public function getCEMTableCount(){
		 	$table_type = "BASE TABLE";
			$table_name1 = "^KF005";
			$table_name2 = "^KF005.*VILLAGECONTACT";
			$table_name3 = "^KF005.*TEST";
			$table_name4 = "^KF005.*TEST1";
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
				$query_result = $obj -> runQuery($sql,'odk_prod');
				
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
				echo('Error Processing CEM Table Count');
			}
		 }
		 
		 #When Meta Goes Out Of Sync, Run This Function To Update Local Cache With New Tables
		 public function updateMetaData(){
		 	$table_type = "BASE TABLE";
			$table_name1 = "^KF005";
			$table_name2 = "^KF005.*VILLAGECONTACT";
			$table_name3 = "^KF005.*TEST";
			$table_name4 = "^KF005.*TEST1";
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
				$query_result = $obj -> runQuery($sql,'odk_prod');
				
				if(pg_num_rows($query_result) > 0){
					while($row = pg_fetch_array($query_result)){
						$count = $row["mcount"];
						$this->insertMetaRecord('cem', $count);
					}
				}
			}
			catch(Exception $e){
				echo('Error Processing Update Of Meta Data');
			}
		 }
		 
		 # Get All Installation Tables From Remote Site, Insert Tables To Our Local DB
		 public function getCEMTables(){
		 	$table_type = "BASE TABLE";
			$table_name1 = "^KF005";
			$table_name2 = "^KF005.*VILLAGECONTACT";
			$table_name3 = "^KF005.*TEST";
			$table_name4 = "^KF005.*TEST1";
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
				$this->exec('DELETE FROM _CEM_TABLE');
				$query_result = $obj->runQuery($sql,'odk_prod');
				
				if(pg_num_rows($query_result) > 0){
					while($row = pg_fetch_array($query_result)){
						$tablename = $row["table_name"];
						$this->insertCEMRecord($tablename);
					}
					return TRUE;
				}	
				else{
					return FALSE;
				}
			}
			catch(Exception $e){
				echo('Error Processing Get CEM Tables');
			}
		 }
		 
		  #Function To Compare Local vs Remote Table Count
		 public function getTableCountStatus(){
		 	try{
				$remotecount = $this->getCEMTableCount();
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
		 public function insertCEMRecord($tablename){
		 	try{
				$this->exec("INSERT INTO _CEM_TABLE (TABLE_NAME) VALUES('$tablename')");
			}
			catch(Exception $e){
				echo $this->lastErrorMsg();
			}
		 }
		 
		  #Get All CEM Records
		 public function getCEMRecords(){
		 	$tables;
		 	try{
				$result = $this->query("SELECT TABLE_NAME FROM _CEM_TABLE ORDER BY TABLE_NAME");
				while($row = $result->fetchArray(SQLITE3_ASSOC) ){
				 	$name = $row['TABLE_NAME'];
					#echo('Table Name: '.$name.'</br>');
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
		 	$table_tag = 'cem';
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
				$this->exec('CREATE TABLE _CEM_TABLE(ID INTEGER PRIMARY KEY AUTOINCREMENT, TABLE_NAME TEXT NOT NULL)');
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
					$this->getCEMTables();
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