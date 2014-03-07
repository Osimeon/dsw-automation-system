<?php
	include '../../rest/external.php';	
	class InstallationTables extends SQLite3{			
		function __construct(){
			$this->open('installations_database.db');		
		}
		
		 /*
		  * Get Remote Table Count From External Server
		  */
		 public function getInstallationTableCount(){
		 	$table_type = "BASE TABLE";
			$table_name1 = "^KF004";
			$table_name2 = "^KF004.*CORE";
			$table_name3 = "^KF004.*TEST";
			$table_name4 = "^KF004.*TEST1";
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
			
			$obj = new Funcs();
			#$count;
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
		 
		 #When Meta Goes Out Of Sync, Run This Function
		 public function updateMetaData(){
		 	$table_type = "BASE TABLE";
			$table_name1 = "^KF004";
			$table_name2 = "^KF004.*CORE";
			$table_name3 = "^KF004.*TEST";
			$table_name4 = "^KF004.*TEST1";
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
			
			$obj = new Funcs();
			#$count;
			$query_result = $obj->runQuery($sql,'odk_prod');
			
			if(pg_num_rows($query_result) > 0){
				while($row = pg_fetch_array($query_result)){
					$count = $row["mcount"];
					$this->insertMetaRecord('installations', $count);
				}
			}
		 }
		 
		 #Get All Installation Tables
		 public function getInstallationTables(){
		 	$table_type = "BASE TABLE";
			$table_name1 = "^KF004";
			$table_name2 = "^KF004.*CORE";
			$table_name3 = "^KF004.*TEST";
			$table_name4 = "^KF004.*TEST1";
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
			
			$obj = new Funcs();			
			$metatable = '_META_DATA';
			$this->exec('DELETE FROM _INSTALLATIONS_TABLE');
			$query_result = $obj->runQuery($sql,'odk_prod');
			if(pg_num_rows($query_result) > 0){
				while($row = pg_fetch_array($query_result)){
					$tablename = $row["table_name"];
					$this->insertInstallationRecord($tablename);
				}
				return TRUE;
			}	
			else{
				return FALSE;
			}
		}
		 
		 #Function To Compare Local vs Remote Table Count
		 public function getTableCountStatus(){
		 	$remotecount = $this->getInstallationTableCount();
			$localcount = $this->getMetaRecordsLocal();
			if(($remotecount != $localcount) || ($localcount != $remotecount)){
				return TRUE;
			}
			else{
				return FALSE;
			}
		 }
		 
		 #Insert Installation
		 public function insertInstallationRecord($tablename){
		 	try{
				$this->exec("INSERT INTO _INSTALLATIONS_TABLE (TABLE_NAME) VALUES('$tablename')");
			}
			catch(Exception $e){
				echo $this->lastErrorMsg();
			}
		 }
		 
		 #Get All Installation Records
		 public function getInstallationRecords(){
		 	$tables;
		 	try{
				$result = $this->query("SELECT TABLE_NAME FROM _INSTALLATIONS_TABLE ORDER BY TABLE_NAME");
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
				echo('Record Was Successfully Inserted');
			}
			catch(Exception $e){
				echo $this->lastErrorMsg();
			}
		 }
		 
		 #Get Local MetaData Count Of Installation Tables
		 public function getMetaRecordsLocal(){
		 	$table_tag = 'installations';
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
				$this->exec('CREATE TABLE _INSTALLATIONS_TABLE(ID INTEGER PRIMARY KEY AUTOINCREMENT, TABLE_NAME TEXT NOT NULL)');
			}
			catch(Exception $e){
				echo $this->lastErrorMsg();
			}
		 }
		 
		 #Entry Point Into The Application
		 public function main(){
		 	if($this -> getTableCountStatus()){		
				$this->updateMetaData();
				$this->getInstallationTables();
			}
			else{
				echo('In Sync'."<br />");
			}
		 }
	}
?>