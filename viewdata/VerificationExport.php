<?php
	include '../rest/external.php'; 
	
	class VerificationExport {
		public $db;
		public $query_result;
		public $sql = "SELECT * FROM verification_survey.verification_survey WHERE t002_start > '2013-12-31'";
		public $filename; 
	 	public $handle;
		
		function __construct(){
			$this -> filename = "logs/verification_data_".date('Y-m-d')."_".time().".csv";
			$this -> db = new Funcs();	
			$this -> query_result = $this -> db -> runQuery($this -> sql, 'dsw_db_v2');	
			$this -> handle = fopen($this -> filename, 'w+'); 
			
			fputcsv($this -> handle, array('t002_start','t003_deviceid','t004_end','t005_today','t006_surveyor_name',
											't007_surveyor_id','t009_country','t011_prgrm','t012_county','t013_district',
											't014_divisn','t015_locatn','t016_subloc','t016a_subloc_other','t017_vil',
											't017a_vil_other','t101_wpt_name','t101a_wpt_verifn_id','t107_latitude',
											't107_longitude','t107_altitude','t107_accuracy','t108_season','t200_wpt_who_manage',
											't200a_landowner_talked_to','t201_landowner_name','t201b_landowner_contact',
											't202_bomanearest_name','t202b_bomanearest_contact','t300_wpt_clearwithnodirt',
											't300b_turbitube_used','t301_wpt_flow_rate','t302_landowner_personality',
											't302a_rep_wsb_talkedto','t302b_rep_wsb_accepted_disp','t303_turbidity_wet',
											't303b_turbitube_100ntu','t303c_turbitube_10ntu','t303d_turbidity_degree_wet',
											't304_turbidity_dry','t304b_turbidity_degree_dry','t305_flow_all_year',
											't305b_flow_how_many_months','t306_hholds_dry','t307_hholds_wet',
											't308_months_wet_season','t309_months_dry_season','t310_wpt_drinking_water',
											't311_wpt_pass','t312_wpt_fail_why','t313_wpt_fail','t314_wpt_pass_why',
											't400_wpt_nearest_mrkt_days','t401_wpt_nearest_mrkt','t402_wpt_reglar_activ',
											't403_wpt_type_activ','t404_wpt_activ_days','t501_wpt_directions',
											't502_waterdelivery','t503_watersourcetype','t504_locatntype','t505_wpt_locatn',
											't506_wpt_centralizd_treatmnt','t507_wpt_ppl_paytocollect','t508_wpt_payinterval',
											't509_wpt_payhowmuch','t510_wpt_supported_ngo','t511_what_ngo','t512_nearestmama_name',
											't513_nearestmama_contact','t514_neighbor_name','t515_neaighbor_contact',
											't609_cmpds_dry','t610_cmpds_dry_total','t611_hholds_dry_total',
											't612_cmpds_wet','t613_cmpds_wet_total','t614_hholds_wet_total',
											's_fa7','_uri')); 
								   
			while ($row = pg_fetch_array($this -> query_result, NULL, PGSQL_ASSOC)){			
					fputcsv($this -> handle, array($row['t002_start'], $row['t003_deviceid'], $row['t004_end'], $row['t005_today'], 
							$row['t006_surveyor_name'], $row['t007_surveyor_id'], $row['t009_country'], $row['t011_prgrm'], $row['t012_county'], 
							$row['t013_district'], $row['t014_divisn'], $row['t015_locatn'], $row['t016_subloc'], $row['t016a_subloc_other'], 
							$row['t017_vil'], $row['t017a_vil_other'], $row['t101_wpt_name'], $row['t101a_wpt_verifn_id'], $row['t107_latitude'],
							$row['t107_longitude'], $row['t107_altitude'], $row['t107_accuracy'], $row['t108_season'], 
							$row['t200_wpt_who_manage'],
							$row['t200a_landowner_talked_to'], $row['t201_landowner_name'], $row['t201b_landowner_contact'],
							$row['t202_bomanearest_name'], $row['t202b_bomanearest_contact'], $row['t300_wpt_clearwithnodirt'],
							$row['t300b_turbitube_used'], $row['t301_wpt_flow_rate'], $row['t302_landowner_personality'],
							$row['t302a_rep_wsb_talkedto'], $row['t302b_rep_wsb_accepted_disp'], $row['t303_turbidity_wet'],
							$row['t303b_turbitube_100ntu'], $row['t303c_turbitube_10ntu'], $row['t303d_turbidity_degree_wet'],
							$row['t304_turbidity_dry'], $row['t304b_turbidity_degree_dry'], $row['t305_flow_all_year'],
							$row['t305b_flow_how_many_months'], $row['t306_hholds_dry'], $row['t307_hholds_wet'],
							$row['t308_months_wet_season'], $row['t309_months_dry_season'], $row['t310_wpt_drinking_water'],
							$row['t311_wpt_pass'], $row['t312_wpt_fail_why'], $row['t313_wpt_fail'], $row['t314_wpt_pass_why'],
							$row['t400_wpt_nearest_mrkt_days'], $row['t401_wpt_nearest_mrkt'], $row['t402_wpt_reglar_activ'],
							$row['t403_wpt_type_activ'], $row['t404_wpt_activ_days'], $row['t501_wpt_directions'],
							$row['t502_waterdelivery'], $row['t503_watersourcetype'], $row['t504_locatntype'], $row['t505_wpt_locatn'],
							$row['t506_wpt_centralizd_treatmnt'], $row['t507_wpt_ppl_paytocollect'], $row['t508_wpt_payinterval'],
							$row['t509_wpt_payhowmuch'], $row['t510_wpt_supported_ngo'], $row['t511_what_ngo'], $row['t512_nearestmama_name'],
							$row['t513_nearestmama_contact'], $row['t514_neighbor_name'], $row['t515_neaighbor_contact'],
							$row['t609_cmpds_dry'], $row['t610_cmpds_dry_total'], $row['t611_hholds_dry_total'],
							$row['t612_cmpds_wet'], $row['t613_cmpds_wet_total'], $row['t614_hholds_wet_total'],
							$row['s_fa7'], $row['_uri'])); 
			}			
			fclose($this -> handle);
		}
	}
	
	$obj = new VerificationExport();
?>