<?php
	class CommunityTalkSurveyFields{
		public function getFields($code){
			$fields = array(
				'_URI' => '_URI',
				'_TOP_LEVEL_AURI' => '_TOP_LEVEL_AURI',
				'VALUE' => 'VALUE'
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
				'_TOP_LEVEL_AURI' => '_top_level_auri',
				'VALUE' => 'value'
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