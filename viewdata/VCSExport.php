<?php 
	 include '../rest/external.php'; 
	 
	 class VCSExport {
	 	public $db;
		public $query_result;
		public $sql = "SELECT * FROM vcs_survey.vcs_survey where vcs002_start > '2013-12-31'";
		public $filename; 
	 	public $handle;
		
	 	function __construct(){
			$this -> filename = "logs/vcs_data_".date('Y-m-d')."_".time().".csv";
			$this -> db = new Funcs();	
			$this -> query_result = $this -> db -> runQuery($this -> sql, 'dsw_db_v2');	
			$this -> handle = fopen($this -> filename, 'w+'); 
			
			fputcsv($this -> handle, array('vcs002_start','vcs003_deviceid','vcs004_end','vcs005_today','vcs006_surveyor_name',
								   'vcs007_surveyor_id','vcs009_country','vcs011_prgrm','t013_district',
								   'vcs016_subloc','vcs016a_subloc_other','vcs017_vil','vcs017a_vil_other',
								   'vcs101_ve_name','vcs102_ve_contact','vcs103_chw_name',
								   'vcs104_chw_contact','vcs105_total_vil_popln','vcs106_ve_attend',
								   'vcs106a_ve_mobilize','vcs107','vcs108_chw_attend',
								   'vcs109_chw_mobilize','vcs201_attendees_total','vcs202a_attendees_female',
								   'vcs202b_attendees_male','vcs203a_attendees_over16','vcs203b_attendees_under17',
								   'vcs204a_challengesatcem','vcs204b_what_challenges','villagecontact','s1_comments','_uri')); 
								   
			while ($row = pg_fetch_array($this -> query_result, NULL, PGSQL_ASSOC)){			
				fputcsv($this -> handle, array($row['vcs002_start'],$row['vcs003_deviceid'],$row['vcs004_end'],$row['vcs005_today'],
													$row['vcs006_surveyor_name'],$row['vcs007_surveyor_id'],$row['vcs009_country'],
													$row['vcs011_prgrm'],$row['t013_district'],$row['vcs016_subloc'],$row['vcs016a_subloc_other'],
													$row['vcs017_vil'],$row['vcs017a_vil_other'],$row['vcs101_ve_name'],
													$row['vcs102_ve_contact'],$row['vcs103_chw_name'],$row['vcs104_chw_contact'],				
													$row['vcs105_total_vil_popln'],$row['vcs106_ve_attend'],$row['vcs106a_ve_mobilize'],
													$row['vcs107'],$row['vcs108_chw_attend'],
													$row['vcs109_chw_mobilize'],$row['vcs201_attendees_total'],
													$row['vcs202a_attendees_female'],$row['vcs202b_attendees_male'],
													$row['vcs203a_attendees_over16'],$row['vcs203b_attendees_under17'],
													$row['vcs204a_challengesatcem'],$row['vcs204b_what_challenges'],$row['villagecontact'],
													$row['s1_comments'], $row['_uri'])); 
			}			
			fclose($this -> handle);
		}	
		
	 }	 
	 
	 $obj = new VCSExport();
	 
?>