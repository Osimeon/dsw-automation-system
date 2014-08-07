<?php
	include 'CEMMetaData.php';
	include 'CEMSurveyFields.php';
	
	class CEMOperations {
		public function __construct(){
			$this -> generateSQL();
		}
		
		public function generateSQL(){
			$obj = new CEMMetaData();
			$obj -> main();	
			$fields = new CEMSurveyFields();
			$cems = $obj -> getCEMRecords();	
			$ext = new Funcs();
			$dbname = 'odk_prod';
			
			foreach($cems as $cem){				 
				$currtable = $cem['tablename'];
				$tablemeta = $ext->getMetaData('odk_prod.'.$currtable, $dbname);		
				$currsql = "SELECT ";
				$fieldsofinterest = "";
				
				if(is_array($tablemeta)){
					$keys = array_keys($tablemeta);
					$keys_size = sizeof($keys);
										
					for($i = 0; $i < $keys_size; $i++){
						$curr = $keys[$i];
						$found = $fields->getFields($curr);
						if($found){	
							$myinsertvalue = $fields->getDBFields($found);
							$fieldsofinterest .= " $myinsertvalue,";	
							$currsql .= " \"$found\",";
						}
					}
					
					$currsql = substr($currsql, 0, -1);
					$fieldsofinterest = substr($fieldsofinterest, 0, -1);
					$currsql .= " FROM odk_prod.\"$currtable\"";
					
					$this->getTableData($currsql, $fieldsofinterest);				
				}				
			}
		}
		
		public function getTableData($selectsql, $fields){
			$ext = new Funcs();
			$query_result = $ext->runQuery($selectsql,'odk_prod');
			$numrows = pg_num_rows($query_result);
			if($numrows > 0){
				$this -> generateRows($query_result, $fields); 
				//$this -> deleteRecord($query_result);
			}			
		}
		
		public function checkForRecord($_uri){
			$sql = "SELECT count(_uri) as recs FROM cem_survey.cem_survey WHERE _uri = '$_uri'";
			$ext = new Funcs();
			$query_result = $ext -> runQuery($sql,'dsw_db_v2');
			
			while ($row = pg_fetch_array($query_result, NULL, PGSQL_ASSOC)){
				$recs = $row['recs'];
			}
			
			if($recs > 0){
				echo('Record - $_uri Exists'.'<br/>');
				return TRUE;
			}
			else{
				echo('Record - $_uri Does Not Exist'.'<br/>');
				return FALSE;
			}
		}
		
		public function deleteRecord($result){	
			$ext = new Funcs();
			while ($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)){
				$_uri = $row['_URI'];
				
				if($this -> checkForRecord($_uri) == true){
					$sql = "DELETE FROM cem_survey.cem_survey WHERE _uri = '$_uri'";
					$query_result = $ext -> runQuery($sql,'dsw_db_v2');
				}
			}
		}
		
		public function generateRows($result, $fields){			
			while ($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)){
				$_uri = $row['_URI'];
				
				if($this -> checkForRecord($_uri) != true){	
					echo('New Record Found'.'<br/>');
					$sql = "INSERT INTO cem_survey.cem_survey($fields) VALUES(";
					$count = count($row);
					$y = 0;
					while ($y < $count){
						$c_row = current($row);					
						if(empty($c_row)){
							$c_row = -1999;
							$c_row = pg_escape_string($c_row);
							$sql .= " '$c_row',";
						}
						else{
							$c_row = pg_escape_string($c_row);
							$sql .= " '$c_row',";
						}
						next($row);
						$y = $y + 1;
					}
					$sql = substr($sql, 0, -1);
					$sql .= ")";
					#echo('My Current SQL: '.$sql."</br>"."</br>");
					$ext = new Funcs();
					$query_result = $ext->runQuery($sql,'dsw_db_v2');
					$sql = "INSERT INTO cem_survey.cem_survey($fields) VALUES(";
				}
				else{
					echo('Record Already Exists In Database'.'<br/>');
				}
			}
		}
	}
	$obj = new CEMOperations();
?>