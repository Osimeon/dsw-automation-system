<?php
	include 'MetaData.php';
	include 'InstallationSurveyFields.php';
	
	class Operations{
		public $installationstatements;		
		
		public function __construct(){
			$this->generateSQL();
		} 
		
		public function generateSQL(){
			$obj = new InstallationTables();
			$obj -> main();			
			$fields = new InstallationSurveyFields();			
			$installations = $obj -> getInstallationRecords();
			
			$ext = new Funcs();
			$dbname = 'odk_prod';			
			
			foreach($installations as $installation){				 
				$currtable = $installation['tablename'];
				$tablemeta = $ext->getMetaData('odk_prod.'.$currtable, $dbname);		
				$currsql = "SELECT ";
				$fieldsofinterest = "";		
				$indicator = "";				
				
				if(is_array($tablemeta)){
					$keys = array_keys($tablemeta);
					$keys_size = sizeof($keys);
										
					for($i = 0; $i < $keys_size; $i++){
						$curr = $keys[$i];
						$found = $fields->getFields($curr);
						if($found){	
							//echo('Ex Key: ' .$curr. ' - '. 'Match Is: ' .$found. '<br/>'.'<br/>');
							$myinsertvalue = $fields->getDBFields($found);
							$fieldsofinterest .= " $myinsertvalue,";	
							$currsql .= " \"$found\",";
							$indicator .= "\"$found\",";
						}
					}
					
					//echo('Table Fields Are: '.$fieldsofinterest.'<br/>');
					
					if(!empty($indicator)){
						$currsql = substr($currsql, 0, -1);
						$fieldsofinterest = substr($fieldsofinterest, 0, -1);
						$currsql .= " FROM odk_prod.\"$currtable\" WHERE \"_CREATION_DATE\" > '2013-12-31 00:00:00'";						
						$this->getTableData($currsql, $fieldsofinterest);
					}				
				}				
			}
		}	
		
		public function getTableData($selectsql, $fields){
			$ext = new Funcs();
			$query_result = $ext->runQuery($selectsql,'odk_prod');
			$numrows = pg_num_rows($query_result);
			if($numrows > 0){
				$this->generateRows($query_result, $fields); 				
			}			
		}	
		
		public function generateRows($result, $fields){			
			while ($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)){
				$sql = "INSERT INTO installation_survey.installation_survey($fields) VALUES(";
				$count = count($row);
				$y = 0;
				while ($y < $count){
					$c_row = current($row);					
					if(empty($c_row)){
						$c_row = -999;
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
				$sql = "INSERT INTO installation_survey.installation_survey($fields) VALUES(";
			}
		}	
	}
	
	$obj = new Operations();
?>