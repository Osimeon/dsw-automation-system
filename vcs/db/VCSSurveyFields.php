<?php
	class VCSSurveyFields{
		public function getFields($code){
			$fields = array(
				'' => '',
				'' => '',
				'' => '',
				'' => '',				
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',				
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',				
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',				
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => '',
				'' => ''
			);
			if(array_key_exists($code,$fields)){
				return $fields[$code];
			}
			else{
				return FALSE;
			}
		}
		
		public function getDBFields($code){
			$fields = array(
				'' => 'vcs002_start',
				'' => 'vcs003_deviceid',
				'' => 'vcs004_end',
				'' => 'vcs005_today',
				'' => 'vcs006_surveyor_name',
				'' => 'vcs007_surveyor_id',
				'' => 'vcs009_country',
				'' => 'vcs011_prgrm',
				'' => 't013_district',
				'' => 'vcs016_subloc',
				'' => 'vcs016a_subloc_other',
				'' => 'vcs017_vil',
				'' => 'vcs017a_vil_other',
				'' => 'vcs101_ve_name',
				'' => 'vcs102_ve_contact',
				'' => 'vcs103_chw_name',
				'' => 'vcs104_chw_contact',
				'' => 'vcs105_total_vil_popln',
				'' => 'vcs106_ve_attend',
				'' => 'vcs106a_ve_mobilize',
				'' => 'vcs107',
				'' => 'vcs108_chw_attend',
				'' => 'vcs109_chw_mobilize',
				'' => 'vcs201_attendees_total',
				'' => 'vcs202a_attendees_female',
				'' => 'vcs202b_attendees_male',
				'' => 'vcs203a_attendees_over16',
				'' => 'vcs203b_attendees_under17',
				'' => 'vcs204a_challengesatcem',
				'' => 'vcs204b_what_challenges',
				'' => 'villagecontact',
				'' => 's1_comments'
			);
			if(array_key_exists($code,$fields)){
				return $fields[$code];
			}
			else{
				return FALSE;
			}
		}
	}   
?>