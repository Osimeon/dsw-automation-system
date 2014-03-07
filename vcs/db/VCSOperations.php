<?php
	include 'VCSMetaData.php';
	include 'VCSSurveyFields.php';
	
	class VCSOperations {
		public function __construct(){
			$this->generateSQL();
		}
		
		public function generateSQL(){
			$obj = new VCSMetaData();
			$obj -> main();	
			$fields = new VCSSurveyFields();
			$vcss = $obj -> getVCSRecords();	
			$ext = new Funcs();
			$dbname = 'odk_prod';
			
			foreach($vcss as $vcs){				 
				$currtable = $vcs['tablename'];
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
				$this->generateRows($query_result, $fields); 
			}			
		}
		
		public function generateRows($result, $fields){			
			while ($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)){
				$sql = "INSERT INTO vcs.vcs_installation($fields) VALUES(";
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
				$ext = new Funcs();
				$query_result = $ext->runQuery($sql,'dsw_db_v2');
				$sql = "INSERT INTO vcs.vcs_installation($fields) VALUES(";
			}
		}
	}
?>