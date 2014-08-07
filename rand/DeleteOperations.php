<?php
	include '../rest/external.php';
	class DeleteOperations extends SQLite3{
		
		public function __construct(){
			$this->open('delete.db');
		}
		
		public function createTables(){
		 	try{
		 		$this->exec('CREATE TABLE _META_DATA (ID INTEGER PRIMARY KEY AUTOINCREMENT, TABLE_NAME TEXT NOT NULL)');
			}
			catch(Exception $e){
				echo $this->lastErrorMsg();
			}
		}
		
		public function insertMetaRecord($table){
		 	try{
				$this->exec("INSERT INTO _META_DATA(TABLE_NAME) VALUES ('$table')");				
			}
			catch(Exception $e){
				echo $this->lastErrorMsg();
			}
			echo('Record Was Successfully Inserted');
		}
		
		public function getTableRecords(){
		 	$tables;
		 	try{
				$result = $this -> query("SELECT TABLE_NAME 
										  FROM _META_DATA 
										  WHERE TABLE_NAME 
										  LIKE 'PDS4RY1_DEWORM_EXCERSISE_PDSCH106_SCH_HEALTH_PROG%' ORDER BY TABLE_NAME");
									  		
				while($row = $result -> fetchArray(SQLITE3_ASSOC) ){
				 	$name = $row['TABLE_NAME'];
					echo('Table Name: '.$name.'</br>');
					$tables[] = array('tablename' => $name);
				}
				return $tables;
			}
			catch(Exception $e){
				echo $this->lastErrorMsg();
			}
		}
		
		public function deleteTables(){
			$main = 'PDS4RY1_DEWORM_EXCERSISE_PDSCH106_SCH_HEALTH_PROG';
			$tables = $this -> getTableRecords();
			
			foreach($tables as $table){	
				$currtable = $table['tablename'];
				
				if($currtable != $main){
					echo('Unmatching Table: '.$currtable.'<br/>');
					$sql = "DROP TABLE odk_prod.\"$currtable\"";
					//echo("Current SQL: " . $sql. '</br>');
					try{
						$obj = new Funcs();	
						$query_result = $obj -> runQuery($sql, 'odk_prod');
					}
					catch(Exception $e){
						echo('Error Processing Delete Operations');
					}
				}
				else{
					echo('Matched Table: '.$currtable.'</br>');
				}
			}
		}
		
		public function getServerTables(){
			$sql = "SELECT table_name
					FROM information_schema.tables 
					WHERE table_schema = 'odk_prod'
					AND table_type = 'BASE TABLE'
					AND table_name ~ '^PDS4RY1_DEWORM_EXCERSISE_PDSCH106_SCH_HEALTH_*PROG'";
					
			try{
				$obj = new Funcs();	
				$query_result = $obj -> runQuery($sql, 'odk_prod');
				
				if(pg_num_rows($query_result) > 0){
					while($row = pg_fetch_array($query_result)){
						$tablename = $row["table_name"];
						$this -> insertMetaRecord($tablename);
					}
					return TRUE;
				}
				else{
					return FALSE;
				}
			}
			catch(Exception $e){
				echo('Error Processing Get COMM Tables');
			}
		}
	}
	
	$obj = new DeleteOperations();
	$obj -> deleteTables();
?>