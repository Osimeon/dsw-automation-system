<?php 
	 include '../rest/external.php'; 
	 
	 class CEMExport {
	 	public $db;
		public $query_result;
		public $sql = "SELECT * FROM cem_survey.cem_survey";
		public $filename; 
	 	public $handle;
		
	 	function __construct(){
			$this -> filename = "logs/cem_data_".date('Y-m-d')."_".time().".csv";
			$this -> db = new Funcs();	
			$this -> query_result = $this -> db -> runQuery($this -> sql, 'dsw_db_v2');	
			$this -> handle = fopen($this -> filename, 'w+'); 
			
			fputcsv($this -> handle, array('cem002_start','cem003_deviceid','cem004_end','cem005_today','cem006_surveyor_name',
								   'cem007_surveyor_id','cem009_country','cem011_prgrm','cem016_subloc',
								   'cem016a_subloc_other','cem017_vil','cem017a_vil_other','cem101_wpt_name',
								   'cem102_wpt_id','cem102a_wpt_id_other','cem107_wpt_gps_latitude',
								   'cem107_wpt_gps_longitude','cem107_wpt_gps_altitude','cem107_wpt_gps_accuracy',
								   'cem019_headofboma_name','cem020_headofboma_contact','cem021_mtg_reschduld',
								   'cem022_mtg_reschduld_initialdate','cem023_mtg_reschduld_why','cem023_mtg_reschduld_why_other',
								   'cem024_total_hholds_using_wpt','cem201_ve_name','cem201b_ve_contact',
								   'cem202_ve_attend','cem203_ve_mobilize','cem103_chw_name','cem104_chw_contact',
								   'cem108_chw_attend','cem109_chw_mobilize','cem204_prom_name','cem204b_prom_gender',
								   'cem205_prom_phone1','cem205b_prom_phone2','cem206_prom_language',
								   'cem207_assprom_name','cem207b_assprom_gender','cem208_assprom_phone1',
								   'cem208b_assprom_phone2','cem209_assprom_language','cem209b_wqt_done',
								   'cem210_wgt_number_hholds','cem211_wqt_treatmnt_pos','cem212_wqt_control_pos',
								   's_fa2','cem301_attendees_total','cem302a_attendees_female','cem302b_attendees_male',
								   'cem303a_attendees_over16','cem303b_attendees_under17','cem304_challengesatcem',
								   'cem304b_what_challenges','cem305_loudspkr_used','cem306_loudspkr_who_used',
								   'villagecontact','s_fa3', '_uri')); 
								   
			while ($row = pg_fetch_array($this -> query_result, NULL, PGSQL_ASSOC)){			
				fputcsv($this -> handle, array($row['cem002_start'],$row['cem003_deviceid'],$row['cem004_end'],$row['cem005_today'],
													$row['cem006_surveyor_name'],$row['cem007_surveyor_id'],$row['cem009_country'],
													$row['cem011_prgrm'],$row['cem016_subloc'],$row['cem016a_subloc_other'],$row['cem017_vil'],
													$row['cem017a_vil_other'],$row['cem101_wpt_name'],$row['cem102_wpt_id'],
													$row['cem102a_wpt_id_other'],$row['cem107_wpt_gps_latitude'],$row['cem107_wpt_gps_longitude'],				
													$row['cem107_wpt_gps_altitude'],$row['cem107_wpt_gps_accuracy'],$row['cem019_headofboma_name'],
													$row['cem020_headofboma_contact'],$row['cem021_mtg_reschduld'],
													$row['cem022_mtg_reschduld_initialdate'],$row['cem023_mtg_reschduld_why'],
													$row['cem023_mtg_reschduld_why_other'],$row['cem024_total_hholds_using_wpt'],
													$row['cem201_ve_name'],$row['cem201b_ve_contact'],$row['cem202_ve_attend'],
													$row['cem203_ve_mobilize'],$row['cem103_chw_name'],$row['cem104_chw_contact'],
													$row['cem108_chw_attend'],$row['cem109_chw_mobilize'],$row['cem204_prom_name'],
													$row['cem204b_prom_gender'],$row['cem205_prom_phone1'],$row['cem205b_prom_phone2'],
													$row['cem206_prom_language'],$row['cem207_assprom_name'],$row['cem207b_assprom_gender'],
													$row['cem208_assprom_phone1'],$row['cem208b_assprom_phone2'],$row['cem209_assprom_language'],
													$row['cem209b_wqt_done'],$row['cem210_wgt_number_hholds'],$row['cem211_wqt_treatmnt_pos'],
													$row['cem212_wqt_control_pos'],$row['s_fa2'],$row['cem301_attendees_total'],
													$row['cem302a_attendees_female'],$row['cem302b_attendees_male'],
													$row['cem303a_attendees_over16'],$row['cem303b_attendees_under17'],
													$row['cem304_challengesatcem'],$row['cem304b_what_challenges'],
													$row['cem305_loudspkr_used'],$row['cem306_loudspkr_who_used'],$row['villagecontact'],
													$row['s_fa3'], $row['_uri'])); 
			}			
			fclose($this -> handle);
		}	
		
	 }	 
	 
	 $obj = new CEMExport();
	 
?>