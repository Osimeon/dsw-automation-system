<?php
class MainFuncs{
	function connectDatabase($dbname){
		 $dbc = pg_connect("host=127.0.0.1 port=5432 dbname=".$dbname." user=postgres password=postgres");
		 if (!$dbc) {
			 die("Error in connection: " . pg_last_error());
		 }
		 return $dbc;    
	}
	
	function getMetaData($tableName, $dbName){
		$conn = $this->connectDatabase($dbName);
		$meta = pg_meta_data($conn, $tableName);
		if($meta){
			return $meta;
		}
		else{
			return FALSE;
		}
	}
	
	function runQuery($sql,$dbname){
	  $conn = $this->connectDatabase($dbname);
	   $result = pg_query($conn, $sql);
		 if (!$result) {
			 die("Error in SQL query: " . pg_last_error());
		 } 
		 pg_close($conn);
	   return $result;
	}
}	
?>