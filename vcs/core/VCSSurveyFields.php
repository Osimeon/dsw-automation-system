<?php
	class VCSSurveyFields{
		public function getFields($code){
			$fields = array(
				'_URI' => '_URI',
				'VCS002_START' => 'VCS002_START',
				'VCS003_DEVICEID' => 'VCS003_DEVICEID',
				'VCS004_END' => 'VCS004_END',
				'VCS005_TODAY' => 'VCS005_TODAY',				
				'VCS006_SURVEYOR_NAME' => 'VCS006_SURVEYOR_NAME',
				'VCS007_SURVEYOR_ID' => 'VCS007_SURVEYOR_ID',
				'VCS009_COUNTRY' => 'VCS009_COUNTRY',
				'VCS011_PRGRM' => 'VCS011_PRGRM',
				'T013_DISTRICT' => 'T013_DISTRICT',				
				'SUBLOC_VCS016_SUBLOC' => 'SUBLOC_VCS016_SUBLOC',
				'SUBLOC_VCS016A_SUBLOC_OTHER' => 'SUBLOC_VCS016A_SUBLOC_OTHER',
				'VIL_VCS017_VIL' => 'VIL_VCS017_VIL',
				'VCS017A_VIL_VERIF_ID' => 'VCS017A_VIL_VERIF_ID',
				'VILLAGELDER_VCS101_VE_NAME' => 'VILLAGELDER_VCS101_VE_NAME',				
				'VILLAGELDER_VCS102_VE_CONTACT' => 'VILLAGELDER_VCS102_VE_CONTACT',
				'VILLAGELDER_VCS103_CHW_NAME' => 'VILLAGELDER_VCS103_CHW_NAME',
				'VILLAGELDER_VCS104_CHW_CONTACT' => 'VILLAGELDER_VCS104_CHW_CONTACT',
				'VILLAGELDER_VCS105_TOTAL_VIL_POPLN' => 'VILLAGELDER_VCS105_TOTAL_VIL_POPLN',
				'VILLAGELDER_VCS106_VE_ATTEND' => 'VILLAGELDER_VCS106_VE_ATTEND',				
				'VILLAGELDER_VCS106A_VE_MOBILIZE' => 'VILLAGELDER_VCS106A_VE_MOBILIZE',
				'VILLAGELDER_VCS108_CHW_ATTEND' => 'VILLAGELDER_VCS108_CHW_ATTEND',
				'VILLAGELDER_VCS109_CHW_MOBILIZE' => 'VILLAGELDER_VCS109_CHW_MOBILIZE',
				'VCS201_ATTENDEES_TOTAL' => 'VCS201_ATTENDEES_TOTAL',
				'ATTENDEESGENDER_VCS202A_ATTENDEES_FEMALE' => 'ATTENDEESGENDER_VCS202A_ATTENDEES_FEMALE',
				'ATTENDEESGENDER_VCS202B_ATTENDEES_MALE' => 'ATTENDEESGENDER_VCS202B_ATTENDEES_MALE',
				'ATTENDEESAGE_VCS203A_ATTENDEES_OVER16' => 'ATTENDEESAGE_VCS203A_ATTENDEES_OVER16',
				'ATTENDEESAGE_VCS203B_ATTENDEES_UNDER17' => 'ATTENDEESAGE_VCS203B_ATTENDEES_UNDER17',
				'CHALLENGES1_VCS204A_CHALLENGESATCEM' => 'CHALLENGES1_VCS204A_CHALLENGESATCEM',
				'CHALLENGES1_VCS204B_WHAT_CHALLENGES' => 'CHALLENGES1_VCS204B_WHAT_CHALLENGES'
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
				'_URI' => '_uri',
				'VCS002_START' => 'vcs002_start',
				'VCS003_DEVICEID' => 'vcs003_deviceid',
				'VCS004_END' => 'vcs004_end',
				'VCS005_TODAY' => 'vcs005_today',
				'VCS006_SURVEYOR_NAME' => 'vcs006_surveyor_name',
				'VCS007_SURVEYOR_ID' => 'vcs007_surveyor_id',
				'VCS009_COUNTRY' => 'vcs009_country',
				'VCS011_PRGRM' => 'vcs011_prgrm',
				'T013_DISTRICT' => 't013_district',
				'SUBLOC_VCS016_SUBLOC' => 'vcs016_subloc',
				'SUBLOC_VCS016A_SUBLOC_OTHER' => 'vcs016a_subloc_other',
				'VIL_VCS017_VIL' => 'vcs017_vil',
				'VCS017A_VIL_VERIF_ID' => 'vcs017a_vil_other',
				'VILLAGELDER_VCS101_VE_NAME' => 'vcs101_ve_name',
				'VILLAGELDER_VCS102_VE_CONTACT' => 'vcs102_ve_contact',
				'VILLAGELDER_VCS103_CHW_NAME' => 'vcs103_chw_name',
				'VILLAGELDER_VCS104_CHW_CONTACT' => 'vcs104_chw_contact',
				'VILLAGELDER_VCS105_TOTAL_VIL_POPLN' => 'vcs105_total_vil_popln',
				'VILLAGELDER_VCS106_VE_ATTEND' => 'vcs106_ve_attend',
				'VILLAGELDER_VCS106A_VE_MOBILIZE' => 'vcs106a_ve_mobilize',
				'VILLAGELDER_VCS108_CHW_ATTEND' => 'vcs108_chw_attend',
				'VILLAGELDER_VCS109_CHW_MOBILIZE' => 'vcs109_chw_mobilize',
				'VCS201_ATTENDEES_TOTAL' => 'vcs201_attendees_total',
				'ATTENDEESGENDER_VCS202A_ATTENDEES_FEMALE' => 'vcs202a_attendees_female',
				'ATTENDEESGENDER_VCS202B_ATTENDEES_MALE' => 'vcs202b_attendees_male',
				'ATTENDEESAGE_VCS203A_ATTENDEES_OVER16' => 'vcs203a_attendees_over16',
				'ATTENDEESAGE_VCS203B_ATTENDEES_UNDER17' => 'vcs203b_attendees_under17',
				'CHALLENGES1_VCS204A_CHALLENGESATCEM' => 'vcs204a_challengesatcem',
				'CHALLENGES1_VCS204B_WHAT_CHALLENGES' => 'vcs204b_what_challenges'
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