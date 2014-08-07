<?php
	include '../rest/external.php';
	class Community extends SQLite3{
		public function __construct(){
			$this->open('comm.db');
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
		
		public function getCommunityRecords(){
		 	$tables;
		 	try{
				$result = $this->query("SELECT TABLE_NAME FROM _META_DATA ORDER BY TABLE_NAME");
				while($row = $result->fetchArray(SQLITE3_ASSOC) ){
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
		
		public function getServerTables(){
			$sql = "SELECT table_name
					FROM information_schema.tables 
					WHERE table_schema = 'odk_prod'
					AND table_type = 'BASE TABLE'
					AND table_name ~ '^ME006'
					OR table_name ~ '^BSA' 
					AND table_name ~ '^KKM' 
					AND table_name ~ '^SYA' 
					AND table_name ~ '^VHG' 
					AND table_name ~ '^UJA' 
					AND table_name ~ '^OAF_HU'";
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
		
		public function setSQL($tables){	
			$ext = new Funcs();		
			foreach($tables as $table){				
				$currtable = $table['tablename'];
				$filename = "logs/$currtable".date('Y-m-d')."_".time().".csv";
				$fp = fopen($filename, 'w+');
				$sql = "SELECT * FROM odk_prod.\"$currtable\"";
				$query_result = $ext ->runQuery($sql, 'odk_prod');
				
				$row = pg_fetch_assoc($query_result);
				
				$line = "";
				$comma = "";
				foreach($row as $name => $value) {
					$line .= $comma . '"' . str_replace('"', '""', $name) . '"';
					$comma = ",";
				}
				
				$line .= "\n";
				fputs($fp, $line);
				
				pg_result_seek($query_result, 0);
				
				while($row = pg_fetch_assoc($query_result)){
					$line = "";
					$comma = "";
					foreach($row as $value) {
						$line .= $comma . '"' . str_replace('"', '""', $value) . '"';
						$comma = ",";
					}
					$line .= "\n";
					fputs($fp, $line);
				}
				fclose($fp);
			}
		}
	}
	
	$obj = new Community();
	$obj -> setSQL($obj -> getCommunityRecords());
?>