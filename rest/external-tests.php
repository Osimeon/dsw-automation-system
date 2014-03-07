<?php
	include 'libs/rest.inc.php';
	include 'external.php';
	
	class API extends REST {
		public function __construct(){
			parent::__construct();
		}
		
		/*
		 * Public method for access api.
		 * This method dynmically call the method based on the query string
		 *
		 */
		public function processApi(){
			$func = strtolower(trim(str_replace("/","",$_REQUEST['rquest'])));
			if((int)method_exists($this,$func) > 0)
				$this->$func();
			else
				$this->response('',404);				// If the method not exist with in this class, response would be "Page not found".
		}
		
		/**
		 * Get Installation Tables
		 */
		public function getInstallationTables(){
			/*
			 * Accept Only GET
			 */
			$dbName = "odk_prod";
			$tableSchema = "odk_prod";
			$tableType1 = "BASE TABLE";
			$tableType2 = "^_";
			$tableName = "^IS016";
			
			//Fields
			$catalg = "table_catalog";
			$table_schema = "table_schema";
			$table_type = "table_type";
			if($this->get_request_method() != "GET"){
				$this->response('',406,"");
			}
			
			$sql = "SELECT table_name FROM information_schema.tables 
					WHERE table_schema = '$dbName' AND table_type = '$tableType1' AND table_name ~ '$tableName'
					AND table_type !~ '$tableType2' ORDER BY table_name";
			$this->getInstallations($sql);
		}
		
		//process Query & Return 
		private function getInstallations($sql){
			$obj = new Funcs(); 
			$query_result = $obj->runQuery($sql,'odk_prod');//
			if(pg_num_rows($query_result) > 0){
				$response = array();
				$response["installations"] = array();
				$response["tag"] = 'installation_surveys';
				$response["success"] = 1;			
				$response["error"] = 0;
				while($row = pg_fetch_array($query_result)){
					$installation = array();
					$installation["tablename"] = $row["table_name"];
					array_push($response["installations"], $installation);
				}
				
				$returnformat = 'json';
				$format = (string)@$this->_request['format'];
				
				if(!empty($format)){
					$returnformat = $format;
				}
				
				if($returnformat =='json'){
					$this->response($this->json($response), 200,$returnformat);
				}
				else{
					//Provide implementation for XML Here
				}
			}
			else{
				$this->response('',204,'');
			}
			pg_close($conn);
		}
		
		private function json($data){
			if(is_array($data)){
				return json_encode($data);
			}
		}
	}
	
	// Initiiate Library
	$api = new API;
	$api->processApi();
?>