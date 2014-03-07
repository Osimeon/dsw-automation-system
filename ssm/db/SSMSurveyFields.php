<?php
	class SSMCheckSurveyFields{
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
			  '' => 'ssm002_start ',
			  '' => 'ssm003_deviceid',
			  '' => 'ssm004_end_date ',
			  '' => 'ssm005_today',
			  '' => 'ssm006_surveyor_name',
			  '' => 'ssm007_surveyor_id',
			  '' => 'ssm009_country',
			  '' => 'ssm011_prgrm',
			  '' => 'ssm012_county',
			  '' => 'ssm013_district',
			  '' => 'ssm014_divisn',
			  '' => 'ssm015_locatn',
			  '' => 'ssm016_subloc',
			  '' => 'ssm019_asschif_name',
			  '' => 'ssm020_asschif_contact',
			  '' => 'ssm102_rep_name',
			  '' => 'ssm103_rep_title',
			  '' => 'ssm104_rep_phone1',
			  '' => 'ssm105_rep_phone2',
			  '' => 'ssm106_rep_present'
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