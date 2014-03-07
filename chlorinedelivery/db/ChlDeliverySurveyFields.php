<?php
	class ChlDeliverySurveyFields{
		public function getFields($code){
			$fields = array(
				'CR002_START' => 'CR002_START',
				'CR003_DEVICEID' => 'CR003_DEVICEID',
				'CR004_END' => 'CR004_END',
				'CR006_SURVEYOR_NAME' => 'CR006_SURVEYOR_NAME',
				'CR007_SURVEYOR_ID' => 'CR007_SURVEYOR_ID',
				'CR009_COUNTRY' => 'CR009_COUNTRY',
				'CR011_PRGRM' => 'CR011_PRGRM',
				'SUBLOC_CR016_SUBLOC' => 'SUBLOC_CR016_SUBLOC',
				'VIL_CR017_VIL' => 'VIL_CR017_VIL',
				'CR101_WPT_NAME' => 'CR101_WPT_NAME',
				'WPT_CR102_WPT_ID' => 'WPT_CR102_WPT_ID',
				'INSTR_CR105_CR_WHP_RECEIVED' => 'INSTR_CR105_CR_WHP_RECEIVED',
				'CR107_WPT_GPS_LAT' => 'CR107_WPT_GPS_LAT',
				'CR107_WPT_GPS_LNG' => 'CR107_WPT_GPS_LNG',
				'CR107_WPT_GPS_ACC' => 'CR107_WPT_GPS_ACC',
				'CR107_WPT_GPS_ACC' => 'CR107_WPT_GPS_ACC',
				'CR113_DATE_OF_DELIV' => 'CR113_DATE_OF_DELIV',
				'CHLORINEDELIV_CR201_PERSON_RECEIVD_NAME' => 'CHLORINEDELIV_CR201_PERSON_RECEIVD_NAME',
				'CHLORINEDELIV_CR202_PERSON_RECEIVD_TITLE' => 'CHLORINEDELIV_CR202_PERSON_RECEIVD_TITLE',
				'CHLORINEDELIV_CR203_PERSON_RECEIVD_CONTACT' => 'CHLORINEDELIV_CR203_PERSON_RECEIVD_CONTACT',
				'CHLORINEDELIV_CR204_MAX_STOCK' => 'CHLORINEDELIV_CR204_MAX_STOCK',
				'CHLORINEDELIV_CR205_JERRICANS_DELIV' => 'CHLORINEDELIV_CR205_JERRICANS_DELIV',
				'CHLORINEDELIV_CR206_CL_USED_SINC_LASTDELIV' => 'CHLORINEDELIV_CR206_CL_USED_SINC_LASTDELIV',
				'CHLORINEDELIV_CR207_CL_INSTOCK_FROM_LASTDELIV' => 'CHLORINEDELIV_CR207_CL_INSTOCK_FROM_LASTDELIV',
				'CHLORINEDELIV_CR208_OLDEST_EXPIRY_DATE_ON_JERRICAN' => 'CHLORINEDELIV_CR208_OLDEST_EXPIRY_DATE_ON_JERRICAN',
				'CHLORINEDELIV_CR209_OLDEST_EXPIRY_DATE_HOWMANY_JERRICANS' => 'CHLORINEDELIV_CR209_OLDEST_EXPIRY_DATE_HOWMANY_JERRICANS',
				'CHLORINEDELIV_C_FA2' => 'CHLORINEDELIV_C_FA2',
				'S3_CR201_DISP_GEN' => 'S3_CR201_DISP_GEN',
				'S3_CR202_DISP_BARCODE' => 'S3_CR202_DISP_BARCODE',
				'S3_CR203_DISP_LOCATN' => 'S3_CR203_DISP_LOCATN',
				'S3_CR204_DISP_FACING_WPT' => 'S3_CR204_DISP_FACING_WPT',
				'S3_CR205_STKER_MISNG_INSTRN' => 'S3_CR205_STKER_MISNG_INSTRN',
				'S3_CR206_TAG_MISNG' => 'S3_CR206_TAG_MISNG',
				'S3_CR207_DISP_SAG' => 'S3_CR207_DISP_SAG',
				'S3_CR208_CAS_BROK_BY_WT_OF_CL' => 'S3_CR208_CAS_BROK_BY_WT_OF_CL',
				'S3_CR209_TNK_CAP_LID_MISNG' => 'S3_CR209_TNK_CAP_LID_MISNG',
				'S3_CR209A_DISP_WHAT_MISG' => 'S3_CR209A_DISP_WHAT_MISG',
				'S3_CR210_DISP_PROB' => 'S3_CR210_DISP_PROB',
				'S3_CR211_DISP_PROB_WHAT_OTHER' => 'S3_CR211_DISP_PROB_WHAT_OTHER',
				'S3_CR212_DISP_PROB_DETAILS' => 'S3_CR212_DISP_PROB_DETAILS',
				'S3_CR212B_TANK_IN_DISP' => 'S3_CR212B_TANK_IN_DISP',
				'S3_CR213_CL_IN_TANK' => 'S3_CR213_CL_IN_TANK',
				'S3_CR214_CL_LEVEL' => 'S3_CR214_CL_LEVEL',
				'S3_CR215_CL_SAMPL' => 'S3_CR215_CL_SAMPL',
				'S3_CR216_CL_SAMPL_WHYNOT' => 'S3_CR216_CL_SAMPL_WHYNOT',
				'S3_CR217_WPT_USABLE' => 'S3_CR217_WPT_USABLE',
				'S3_CR218_WPT_USABLE_WHYNOT_OTHER' => 'S3_CR218_WPT_USABLE_WHYNOT_OTHER',
				'S3_CR219_DISPPROB' => 'S3_CR219_DISPPROB',
				'S3_CR220_WPT_TURBIDITY' => 'S3_CR220_WPT_TURBIDITY',
				'S3_CR221_GPS_LAT' => 'S3_CR221_GPS_LAT',
				'S3_CR221_GPS_LNG' => 'S3_CR221_GPS_LNG',
				'S3_CR221_GPS_ALT' => 'S3_CR221_GPS_ALT',
				'S3_CR221_GPS_ACC' => 'S3_CR221_GPS_ACC',
				'CR005_TODAY' => 'CR005_TODAY'
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
				'CR002_START' => 'cr002_start',
				'CR003_DEVICEID' => 'cr003_deviceid',
				'CR004_END' => 'cr004_end',
				'CR006_SURVEYOR_NAME' => 'cr006_surveyor_name',
				'CR007_SURVEYOR_ID' => 'cr007_surveyor_id',
				'CR009_COUNTRY' => 'cr009_country',
				'CR011_PRGRM' => 'cr011_prgrm',
				'SUBLOC_CR016_SUBLOC' => 'cr016_subloc',
				'VIL_CR017_VIL' => 'cr017_village',
				'CR101_WPT_NAME' => 'cr101_wpt_name',
				'WPT_CR102_WPT_ID' => 'cr102_wpt_id',
				'INSTR_CR105_CR_WHP_RECEIVED' => 'cr105_cr_whp_received',
				'CR107_WPT_GPS_LAT' => 'cr107_wpt_gps_latitude',
				'CR107_WPT_GPS_LNG' => 'cr107_wpt_gps_longitude',
				'CR107_WPT_GPS_ALT' => 'cr107_wpt_gps_altitude',
				'CR107_WPT_GPS_ACC' => 'cr107_wpt_gps_accuracy',
				'CR113_DATE_OF_DELIV' => 'cr113_date_of_deliv',
				'CHLORINEDELIV_CR201_PERSON_RECEIVD_NAME' => 'cr201_person_receivd_name',
				'CHLORINEDELIV_CR202_PERSON_RECEIVD_TITLE' => 'cr202_person_receivd_title',
				'CHLORINEDELIV_CR203_PERSON_RECEIVD_CONTACT' => 'cr203_person_receivd_contact',
				'CHLORINEDELIV_CR204_MAX_STOCK' => 'cr204_max_stock',
				'CHLORINEDELIV_CR205_JERRICANS_DELIV' => 'cr205_jerricans_deliv',
				'CHLORINEDELIV_CR206_CL_USED_SINC_LASTDELIV' => 'cr206_cl_used_sinc_lastdeliv',
				'CHLORINEDELIV_CR207_CL_INSTOCK_FROM_LASTDELIV' => 'cr207_cl_instock_from_lastdeliv',
				'CHLORINEDELIV_CR208_OLDEST_EXPIRY_DATE_ON_JERRICAN' => 'cr208_oldest_expiry_date_on_jerrican',
				'CHLORINEDELIV_CR209_OLDEST_EXPIRY_DATE_HOWMANY_JERRICANS' => 'cr209_oldest_expiry_date_howmany_jerricans',
				'CHLORINEDELIV_C_FA2' => 'c_fa2',
				'S3_CR201_DISP_GEN' => 'cr201_disp_gen',
				'S3_CR202_DISP_BARCODE' => 'cr202_disp_barcode',
				'S3_CR203_DISP_LOCATN' => 'cr203_disp_locatn',
				'S3_CR204_DISP_FACING_WPT' => 'cr204_disp_facing_wpt',
				'S3_CR205_STKER_MISNG_INSTRN' => 'cr205_stker_misng_instrn',
				'S3_CR206_TAG_MISNG' => 'cr206_tag_misng',
				'S3_CR207_DISP_SAG' => 'cr207_disp_sag',
				'S3_CR208_CAS_BROK_BY_WT_OF_CL' => 'cr208_cas_brok_by_wt_of_cl',
				'S3_CR209_TNK_CAP_LID_MISNG' => 'cr209_tnk_cap_lid_misng',
				'S3_CR209A_DISP_WHAT_MISG' => 'cr209a_disp_what_misg',
				'S3_CR210_DISP_PROB' => 'cr210_disp_prob',
				'S3_CR211_DISP_PROB_WHAT_OTHER' => 'cr211_disp_prob_what',
				'S3_CR212_DISP_PROB_DETAILS' => 'cr212_disp_prob_details',
				'S3_CR212B_TANK_IN_DISP' => 'cr212b_tank_in_disp',
				'S3_CR213_CL_IN_TANK' => 'cr213_cl_in_tank',
				'S3_CR214_CL_LEVEL' => 'cr214_cl_level',
				'S3_CR215_CL_SAMPL' => 'cr215_cl_sampl',
				'S3_CR216_CL_SAMPL_WHYNOT' => 'cr216_cl_sampl_whynot',
				'S3_CR217_WPT_USABLE' => 'cr217_wpt_usable',
				'S3_CR218_WPT_USABLE_WHYNOT_OTHER' => 'cr218_wpt_usable_whynot',
				'S3_CR219_DISPPROB' => 'cr219_dispprob',
				'S3_CR220_WPT_TURBIDITY' => 'cr220_wpt_turbidity',
				'S3_CR221_GPS_LAT' => 'r221_latitude',
				'S3_CR221_GPS_LNG' => 'r221_longitude',
				'S3_CR221_GPS_ALT' => 'r221_altitude',
				'S3_CR221_GPS_ACC' => 'r221_accuracy',
				'CR005_TODAY' => 'cr005_today'
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