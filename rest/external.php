<?php 
	ignore_user_abort(true);
	set_time_limit(0);		
?>

<?php
	class Funcs{		
		function connectDatabase($dbname){
		 	 $dbc = pg_connect("host=64.91.229.62 port=5432 dbname=".$dbname." user=postgres password=postgres connect_timeout=60");
			 if (!$dbc) {
				 die("Error in connection: " . pg_last_error());
			 }
			 return $dbc;    
		}
		
		function getMetaData($tableName, $dbName){
			$conn = $this->connectDatabase($dbName);
			$meta = pg_meta_data($conn, $tableName);
			if($meta){
				#pg_close($conn);
				return $meta;
			}
			else{
				#pg_close($conn);
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