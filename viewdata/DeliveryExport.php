<?php
	include '../rest/external.php'; 
	
	class DeliveryExport {
		public $db;
		public $query_result;
		public $sql = "SELECT * FROM chlorine_delivery_survey.chlorine_delivery_survey WHERE cr002_start > '2013-12-31'";
		public $filename; 
	 	public $handle;
		
		function __construct(){
			$this -> filename = "logs/delivery_data_".date('Y-m-d')."_".time().".csv";
			$this -> db = new Funcs();	
			$this -> query_result = $this -> db -> runQuery($this -> sql, 'dsw_db_v2');	
			$this -> handle = fopen($this -> filename, 'w+'); 
			
			fputcsv($this -> handle, array('cr002_start','cr003_deviceid','cr004_end','cr006_surveyor_name',
											'cr007_surveyor_id','cr009_country','cr011_prgrm','cr016_subloc',
											'cr016a_subloc_other','cr017_village','cr017a_vil_other','cr101_wpt_name',
											'cr102_wpt_id','cr102a_wpt_id_other','cr103_wpt_hub','cr103a_wpt_healthfac',
											'cr103b_wpt_schl','cr105_cr_whp_received','cr107_wpt_gps_latitude',
											'cr107_wpt_gps_longitude','cr107_wpt_gps_altitude','cr107_wpt_gps_accuracy',
											'cr113_date_of_deliv','cr201_person_receivd_name','cr202_person_receivd_title',
											'cr203_person_receivd_contact','cr204_max_stock','cr205_jerricans_deliv',
											'cr206_cl_used_sinc_lastdeliv','cr207_cl_instock_from_lastdeliv',
											'cr208_oldest_expiry_date_on_jerrican','cr209_oldest_expiry_date_howmany_jerricans',
											'c_fa2','cr201_disp_gen','cr202_disp_barcode','cr203_disp_locatn',
											'cr204_disp_facing_wpt','cr205_stker_misng_instrn','cr206_tag_misng',
											'cr207_disp_sag','cr208_cas_brok_by_wt_of_cl','cr209_tnk_cap_lid_misng',
											'cr209a_disp_what_misg','cr210_disp_prob','cr211_disp_prob_what',
											'cr212_disp_prob_details','cr212b_tank_in_disp','cr213_cl_in_tank',
											'cr214_cl_level','cr215_cl_sampl','cr216_cl_sampl_whynot','cr217_wpt_usable',
											'cr218_wpt_usable_whynot','cr219_dispprob','cr220_wpt_turbidity',
											'r221_latitude','r221_longitude','r221_altitude','r221_accuracy',
											'sig','cr005_today')); 
								   
			while ($row = pg_fetch_array($this -> query_result, NULL, PGSQL_ASSOC)){			
				fputcsv($this -> handle, array($row['cr002_start'],$row['cr003_deviceid'],$row['cr004_end'],$row['cr006_surveyor_name'],
											$row['cr007_surveyor_id'],$row['cr009_country'],$row['cr011_prgrm'],$row['cr016_subloc'],
											$row['cr016a_subloc_other'],$row['cr017_village'],$row['cr017a_vil_other'],
											$row['cr101_wpt_name'],$row['cr102_wpt_id'],$row['cr102a_wpt_id_other'],
											$row['cr103_wpt_hub'],$row['cr103a_wpt_healthfac'],
											$row['cr103b_wpt_schl'],$row['cr105_cr_whp_received'],$row['cr107_wpt_gps_latitude'],
											$row['cr107_wpt_gps_longitude'],$row['cr107_wpt_gps_altitude'],$row['cr107_wpt_gps_accuracy'],
											$row['cr113_date_of_deliv'],$row['cr201_person_receivd_name'],$row['cr202_person_receivd_title'],
											$row['cr203_person_receivd_contact'],$row['cr204_max_stock'],$row['cr205_jerricans_deliv'],
											$row['cr206_cl_used_sinc_lastdeliv'],$row['cr207_cl_instock_from_lastdeliv'],
											$row['cr208_oldest_expiry_date_on_jerrican'],$row['cr209_oldest_expiry_date_howmany_jerricans'],
											$row['c_fa2'],$row['cr201_disp_gen'],$row['cr202_disp_barcode'],$row['cr203_disp_locatn'],
											$row['cr204_disp_facing_wpt'],$row['cr205_stker_misng_instrn'],$row['cr206_tag_misng'],
											$row['cr207_disp_sag'],$row['cr208_cas_brok_by_wt_of_cl'],$row['cr209_tnk_cap_lid_misng'],
											$row['cr209a_disp_what_misg'],$row['cr210_disp_prob'],$row['cr211_disp_prob_what'],
											$row['cr212_disp_prob_details'],$row['cr212b_tank_in_disp'],$row['cr213_cl_in_tank'],
											$row['cr214_cl_level'],$row['cr215_cl_sampl'],$row['cr216_cl_sampl_whynot'],$row['cr217_wpt_usable'],
											$row['cr218_wpt_usable_whynot'],$row['cr219_dispprob'],$row['cr220_wpt_turbidity'],
											$row['r221_latitude'],$row['r221_longitude'],$row['r221_altitude'],$row['r221_accuracy'],
											$row['sig'],$row['cr005_today'])); 
			}			
			fclose($this -> handle);
		}
	}
	
	$obj = new DeliveryExport();
?>