<?php
	include '../rest/external.php'; 
	
	class SpotcheckExport {
		public $db;
		public $query_result;
		public $sql = "SELECT * FROM spotcheck_survey.spotcheck_survey WHERE s002_start > '2013-12-31'";
		public $filename; 
	 	public $handle;
		
		function __construct(){
			$this -> filename = "logs/spotcheck_data_".date('Y-m-d')."_".time().".csv";
			$this -> db = new Funcs();	
			$this -> query_result = $this -> db -> runQuery($this -> sql, 'dsw_db_v2');	
			$this -> handle = fopen($this -> filename, 'w+'); 
			
			fputcsv($this -> handle, array('s002_start', 's003_deviceid', 's004_end', 's005_today', 's006_surveyor_name',
											's007_surveyor_id', 's009_country', 's011_prgrm', 's012_county', 's013_district',
											's014_divisn', 's015_locatn', 's016_subloc', 's016a_subloc_other', 's017_vil',
											's017a_vil_other', 's018a_survey_activity', 's018b_special_activ_survey_type',
											's019a_panel_survey', 's019b_panel_survey_hhold', 's019c_panel_survey_hhold_round',
											's019cii_panel_same_respondent', 's101_wpt_name', 's102_wpt_id', 's102a_wpt_id_other',
											's103_wpt_hub', 's103a_wpt_healthfac', 's103b_wpt_schl', 's103c_wpt_oaf_subloc',
											's107_wpt_gps_latitude', 's107_wpt_gps_longitude', 's107_wpt_gps_altitude',
											's107_wpt_gps_accuracy', 's108_season', 's109_wpt_usable', 's109a_wpt_usable_whynot',
											's110_wpt_turbidity', 's100_disp_at_wpt', 's100a_disp_at_wpt_whynot',
											's105_disp_serial', 's106_disp_barcode', 's201_disp_gen', 's202_tank_volm',
											's203_tank_in_disp', 's204_cl_in_tank', 's205_cl_level', 's205a_fill_tank',
											's205b_fill_tank_whynot', 's206_cl_dispensed', 's207_cl_sampl', 's207a_cl_sampl_whynot',
											's208_dispprob', 's209_dispprob_cas_padlk', 's210_dispprob_tnk_vlv',
											's211_dispprob_stker_tag_paint', 's212_nut', 's209a_cas_brok_sag',
											's209b_cas_crack', 's209c_cas_hing_brok', 's209d_cas_lokhole_brok',
											's209di_cas_brok_otherloctn', 's209e_lid_misng', 's209f_lid_bent_crack',
											's209g_padlk_brok', 's209h_padlk_misng', 's209i_padlk_rust', 's210a_tnk_cap_misng',
											's210b_disp_leak', 's210c_vlv_brok', 's210d_vlv_notdispng', 's210e_vlv_misng',
											's211a_stker_misng_instrn', 's211b_tag_misng', 's211c_stkr_misng_other',
											's211d_disp_rust_paint_plng', 's212a_concrt_crack', 's212b_pst_brok_metal',
											's212c_pst_brok_pvc', 's212d_bltnut_loose', 's212e_bltnut_misng', 's212f_bltnut_rust',
											's213_dtails_wrong_disp', 's214_suspct_vndlsm', 's215_disp_locatn',
											's216_disp_facing_wpt', '_uri')); 
								   
			while ($row = pg_fetch_array($this -> query_result, NULL, PGSQL_ASSOC)){			
					fputcsv($this -> handle, array($row['s002_start'], $row['s003_deviceid'], $row['s004_end'], $row['s005_today'], 
								$row['s006_surveyor_name'],$row['s007_surveyor_id'], $row['s009_country'], $row['s011_prgrm'], 
								$row['s012_county'], $row['s013_district'],
								$row['s014_divisn'], $row['s015_locatn'], $row['s016_subloc'], $row['s016a_subloc_other'], $row['s017_vil'],
								$row['s017a_vil_other'], $row['s018a_survey_activity'], $row['s018b_special_activ_survey_type'],
								$row['s019a_panel_survey'], $row['s019b_panel_survey_hhold'], $row['s019c_panel_survey_hhold_round'],
								$row['s019cii_panel_same_respondent'], $row['s101_wpt_name'], $row['s102_wpt_id'], $row['s102a_wpt_id_other'],
								$row['s103_wpt_hub'], $row['s103a_wpt_healthfac'], $row['s103b_wpt_schl'], $row['s103c_wpt_oaf_subloc'],
								$row['s107_wpt_gps_latitude'], $row['s107_wpt_gps_longitude'], $row['s107_wpt_gps_altitude'],
								$row['s107_wpt_gps_accuracy'], $row['s108_season'], $row['s109_wpt_usable'], $row['s109a_wpt_usable_whynot'],
								$row['s110_wpt_turbidity'], $row['s100_disp_at_wpt'], $row['s100a_disp_at_wpt_whynot'],
								$row['s105_disp_serial'], $row['s106_disp_barcode'], $row['s201_disp_gen'], $row['s202_tank_volm'],
								$row['s203_tank_in_disp'], $row['s204_cl_in_tank'], $row['s205_cl_level'], $row['s205a_fill_tank'],
								$row['s205b_fill_tank_whynot'], $row['s206_cl_dispensed'], $row['s207_cl_sampl'], $row['s207a_cl_sampl_whynot'],
								$row['s208_dispprob'], $row['s209_dispprob_cas_padlk'], $row['s210_dispprob_tnk_vlv'],
								$row['s211_dispprob_stker_tag_paint'], $row['s212_nut'], $row['s209a_cas_brok_sag'],
								$row['s209b_cas_crack'], $row['s209c_cas_hing_brok'], $row['s209d_cas_lokhole_brok'],
								$row['s209di_cas_brok_otherloctn'], $row['s209e_lid_misng'], $row['s209f_lid_bent_crack'],
								$row['s209g_padlk_brok'], $row['s209h_padlk_misng'], $row['s209i_padlk_rust'], $row['s210a_tnk_cap_misng'],
								$row['s210b_disp_leak'], $row['s210c_vlv_brok'], $row['s210d_vlv_notdispng'], $row['s210e_vlv_misng'],
								$row['s211a_stker_misng_instrn'], $row['s211b_tag_misng'], $row['s211c_stkr_misng_other'],
								$row['s211d_disp_rust_paint_plng'], $row['s212a_concrt_crack'], $row['s212b_pst_brok_metal'],
								$row['s212c_pst_brok_pvc'], $row['s212d_bltnut_loose'], $row['s212e_bltnut_misng'], $row['s212f_bltnut_rust'],
								$row['s213_dtails_wrong_disp'], $row['s214_suspct_vndlsm'], $row['s215_disp_locatn'],
								$row['s216_disp_facing_wpt'], $row['_uri'])); 
			}			
			fclose($this -> handle);
		}
	}
	
	$obj = new SpotcheckExport();
?>