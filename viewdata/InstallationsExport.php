<?php
	include '../rest/external.php'; 
	
	class DeliveryExport {
		public $db;
		public $query_result;
		public $sql = "SELECT * FROM installation_survey.installation_survey WHERE i002_start > '2013-12-31'";
		public $filename; 
	 	public $handle;
		
		function __construct(){
			$this -> filename = "logs/installation_data_".date('Y-m-d')."_".time().".csv";
			$this -> db = new Funcs();	
			$this -> query_result = $this -> db -> runQuery($this -> sql, 'dsw_db_v2');	
			$this -> handle = fopen($this -> filename, 'w+'); 
			
			fputcsv($this -> handle, array('i002_start','i003_deviceid','i004_end','i005_today','i006_surveyor_name',
											'i007_surveyor_id','i009_country','i011_prgrm','i016_subloc','i016a_subloc_other',
											'i017_vil','i017a_vil_other','i101_wpt_name','i102_wpt_id','i102a_wpt_id_other',
											'i105_disp_serial_number','i106_disp_barcode','i108_date_instaln',
											'i109_disp_photo','i110_disp_passed_qlty_check','i107_accuracy',
											'i107_altitude','i107_latitude','i107_longitude')); 
								   
			while ($row = pg_fetch_array($this -> query_result, NULL, PGSQL_ASSOC)){			
				fputcsv($this -> handle, array($row['i002_start'],$row['i003_deviceid'],$row['i004_end'],$row['i005_today'],
											$row['i006_surveyor_name'], $row['i007_surveyor_id'],$row['i009_country'],$row['i011_prgrm'],
											$row['i016_subloc'],$row['i016a_subloc_other'],$row['i017_vil'],$row['i017a_vil_other'],
											$row['i101_wpt_name'],$row['i102_wpt_id'],$row['i102a_wpt_id_other'],
											$row['i105_disp_serial_number'],$row['i106_disp_barcode'],$row['i108_date_instaln'],
											$row['i109_disp_photo'],$row['i110_disp_passed_qlty_check'],$row['i107_accuracy'],
											$row['i107_altitude'],$row['i107_latitude'],$row['i107_longitude'])); 
			}			
			fclose($this -> handle);
		}
	}
	
	$obj = new DeliveryExport();
?>