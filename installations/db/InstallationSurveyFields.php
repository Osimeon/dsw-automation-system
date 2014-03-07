<?php
	class InstallationSurveyFields{
		function __construct(){
			#Empty
		}	
		
		public function getFields($code){
			$fields = array(
				'_URI' => '_URI',
				'I002_START' => 'I002_START',
				'I003_DEVICEID' => 'I003_DEVICEID',
				'I004_END' => 'I004_END',
				'I005_TODAY' => 'I005_TODAY',
				'I006_SURVEYOR_NAME' => 'I006_SURVEYOR_NAME',
				'I007_SURVEYOR_ID' => 'I007_SURVEYOR_ID',
				'I009_COUNTRY' => 'I009_COUNTRY',
				'I011_PRGRM' => 'I011_PRGRM',				
				'SUBLOC_I016_SUBLOC' => 'SUBLOC_I016_SUBLOC',
				'VIL_I017_VIL' => 'VIL_I017_VIL',
				'I101_WPT_NAME' => 'I101_WPT_NAME',
				'WPT_I102_WPT_ID' => 'WPT_I102_WPT_ID',
				'INSTALL_I105_DISP_SERIAL_NUMBER' => 'INSTALL_I105_DISP_SERIAL_NUMBER',
				'INSTALL_I106_DISP_BARCODE' => 'INSTALL_I106_DISP_BARCODE',
				'INSTALL_I108_DATE_INSTALN' => 'INSTALL_I108_DATE_INSTALN',
				'CHECKLIST_I208_DISP_PASSED_QLTY_CHECK' => 'CHECKLIST_I208_DISP_PASSED_QLTY_CHECK',
				'INSTALL_I107_WPT_GPS_ACC' => 'INSTALL_I107_WPT_GPS_ACC',
				'INSTALL_I107_WPT_GPS_ALT' => 'INSTALL_I107_WPT_GPS_ALT',
				'INSTALL_I107_WPT_GPS_LAT' => 'INSTALL_I107_WPT_GPS_LAT',
				'INSTALL_I107_WPT_GPS_LNG' => 'INSTALL_I107_WPT_GPS_LNG'				
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
				'I002_START' => 'i002_start',
				'I003_DEVICEID' => 'i003_deviceid',
				'I004_END' => 'i004_end',
				'I005_TODAY' => 'i005_today',
				'I006_SURVEYOR_NAME' => 'i006_surveyor_name',
				'I007_SURVEYOR_ID' => 'i007_surveyor_id',
				'I009_COUNTRY' => 'i009_country',
				'I011_PRGRM' => 'i011_prgrm',				
				'SUBLOC_I016_SUBLOC' => 'i016_subloc',
				'VIL_I017_VIL' => 'i017_vil',
				'I101_WPT_NAME' => 'i101_wpt_name',
				'WPT_I102_WPT_ID' => 'i102_wpt_id',
				'INSTALL_I105_DISP_SERIAL_NUMBER' => 'i105_disp_serial_number',
				'INSTALL_I106_DISP_BARCODE' => 'i106_disp_barcode',
				'INSTALL_I108_DATE_INSTALN' => 'i108_date_instaln',
				'CHECKLIST_I208_DISP_PASSED_QLTY_CHECK' => 'i110_disp_passed_qlty_check',
				'INSTALL_I107_WPT_GPS_ACC' => 'i107_accuracy',
				'INSTALL_I107_WPT_GPS_ALT' => 'i107_altitude',
				'INSTALL_I107_WPT_GPS_LAT' => 'i107_latitude',
				'INSTALL_I107_WPT_GPS_LNG' => 'i107_longitude'
			);
			#echo('At DB Code, Field Is: '.$code."<br/>"."<br/>");
			if(array_key_exists($code, $fields)){
				return $fields[$code];
			}
			else{
				return FALSE;
			}
		}
	}	
?>