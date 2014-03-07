<?php	
	//require_once("libs/rest.inc.php");
	//include '../../installations/rest/rest.inc.php';
	include 'libs/rest.inc.php';
	include 'funcs.php';
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
		 * Get Database MetaData
		 */
		public function getMetaData(){
			/**
			 * @var TableName
			 * Accept only GET
			 */
			if($this->get_request_method() != "GET"){
				$this->response('',406,"");
			}
			var_dump($this->getMeta('inventory.products'));
		}
		
		/**
		 * Get Meta
		 */
		public function getMeta($tableName){
			$obj = new MainFuncs();
			$meta = $obj->getMetaData($tableName,'portal');
			return $meta;
		}
		
		public function copyDataCross(){
			//Accept only GET
			if($this->get_request_method() != "GET"){
				$this->response('',406,"");
			}
			
			//From Destination
			$sql = "SELECT * FROM data_coordinates WHERE status = 0";
			
			$obj = new MainFuncs(); 
			$query_result_from = $obj -> runQuery($sql,'visual_data');
			
			
			if(pg_num_rows($query_result_from) > 0){
				while($row = pg_fetch_array($query_result_from)){
					$name = $row['name'];
					$lat = $row['lat'];
					$lon = $row['lon'];
					$code = $row['code'];
					
					//Destination
					$sql = "INSERT INTO inventory.data_coordinates(name, lat, lon, code) VALUES('$name','$lat','$lon','$code')";
					$query_result_to = $obj -> runQuery($sql,'portal');
					
					//Update Row After Copying It
					$sql = "UPDATE data_coordinates set status = 1 WHERE code = '$code'";
					$query_result_to = $obj -> runQuery($sql,'visual_data');
				}
			}
		}
		
		function getDataAndCopyData(){
			//Accept only GET
			if($this->get_request_method() != "GET"){
				$this->response('',406,"");
			}
			$response = array();
			$sql = "INSERT INTO inventory.products_backup SELECT * FROM inventory.products";	
			$result = $this->getData($sql);		 
			
			if($result){
				$response["insert"] = array();
				$response["tag"] = 'createissue';
				$response["success"] = 1;			
				$response["error"] = 0;
				echo(json_encode($response));
			}
			else{
				return FALSE;
			}
		}
		
		private function getProducts(){
			 //Accept only GET
			 if($this->get_request_method() != "GET"){
				$this->response('',406,"");
			 }
			 
			 $sql = "SELECT * FROM inventory.products";		
			 $this->getData($sql);
		}
		
		//process Query & Return 
		private function getData($sql){
			$obj = new MainFuncs(); 
			$query_result = $obj->runQuery($sql,'portal');//
			if(pg_num_rows($query_result) > 0){
				$result = array();
				while($rlt = pg_fetch_array($query_result, NULL, PGSQL_ASSOC)){
					$result[] = $rlt;
				}
				
				// If success everythig is good send header as "OK" and return list of users in JSON format
				$returnformat = 'json';
				$format = (string)@$this->_request['format'];
				
				if(!empty($format)){
					$returnformat = $format;
				}
				
				if($returnformat =='json'){
					$this->response($this->json($result), 200,$returnformat);
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