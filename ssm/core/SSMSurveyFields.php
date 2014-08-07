<?php
	class SSMCheckSurveyFields{
		public function getFields($code){
			$fields = array(
				'_URI' => '_URI',
				'SSM002_START' => 'SSM002_START',
				'SSM003_DEVICEID' => 'SSM003_DEVICEID',
				'SSM004_END' => 'SSM004_END',
				'SSM005_TODAY' => 'SSM005_TODAY',
				'SSM006_SURVEYOR_NAME' => 'SSM006_SURVEYOR_NAME',
				'SSM007_SURVEYOR_ID' => 'SSM007_SURVEYOR_ID',
				'SSM009_COUNTRY' => 'SSM009_COUNTRY',
				'ADMIN_SSM011_PRGRM' => 'ADMIN_SSM011_PRGRM',
				'ADMIN_SSM012_COUNTY' => 'ADMIN_SSM012_COUNTY',
				'ADMIN_SSM013_DISTRICT' => 'ADMIN_SSM013_DISTRICT',
				'ADMIN_SSM014_DIVISN' => 'ADMIN_SSM014_DIVISN',
				'ADMIN_SSM015_LOCATN' => 'ADMIN_SSM015_LOCATN',
				'ADMIN_SSM016_SUBLOC' => 'ADMIN_SSM016_SUBLOC',
				'ADMIN_SSM019_ASSCHIF_NAME' => 'ADMIN_SSM019_ASSCHIF_NAME',
				'ADMIN_SSM020_ASSCHIF_CONTACT' => 'ADMIN_SSM020_ASSCHIF_CONTACT'
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
			  'SSM002_START' => 'ssm002_start ',
			  'SSM003_DEVICEID' => 'ssm003_deviceid',
			  'SSM004_END' => 'ssm004_end_date ',
			  'SSM005_TODAY' => 'ssm005_today',
			  'SSM006_SURVEYOR_NAME' => 'ssm006_surveyor_name',
			  'SSM007_SURVEYOR_ID' => 'ssm007_surveyor_id',
			  'SSM009_COUNTRY' => 'ssm009_country',
			  'ADMIN_SSM011_PRGRM' => 'ssm011_prgrm',
			  'ADMIN_SSM012_COUNTY' => 'ssm012_county',
			  'ADMIN_SSM013_DISTRICT' => 'ssm013_district',
			  'ADMIN_SSM014_DIVISN' => 'ssm014_divisn',
			  'ADMIN_SSM015_LOCATN' => 'ssm015_locatn',
			  'ADMIN_SSM016_SUBLOC' => 'ssm016_subloc',
			  'ADMIN_SSM019_ASSCHIF_NAME' => 'ssm019_asschif_name',
			  'ADMIN_SSM020_ASSCHIF_CONTACT' => 'ssm020_asschif_contact'
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