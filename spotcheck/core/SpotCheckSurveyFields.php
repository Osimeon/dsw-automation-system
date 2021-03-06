<?php
	class SpotCheckSurveyFields{
		public function getFields($code){
			$fields = array(
			  '_URI' => '_URI',
			  'S002_START' => 'S002_START',
			  'S003_DEVICEID' => 'S003_DEVICEID',
			  'S004_END' => 'S004_END',
			  'S005_TODAY' => 'S005_TODAY',
			  'S006_SURVEYOR_NAME' => 'S006_SURVEYOR_NAME',
			  'S007_SURVEYOR_ID' => 'S007_SURVEYOR_ID',
			  'S009_COUNTRY' => 'S009_COUNTRY',
			  'S011_PRGRM' => 'S011_PRGRM',
			  'S012_COUNTY' => 'S012_COUNTY',
			  'S013_DISTRICT' => 'S013_DISTRICT',
			  'S014_DIVISN' => 'S014_DIVISN',
			  'S015_LOCATN' => 'S015_LOCATN',
			  'SUBLOC_S016_SUBLOC' => 'SUBLOC_S016_SUBLOC',
			  'VIL_S017_VIL' => 'VIL_S017_VIL',
			  'S018A_SURVEY_ACTIVITY' => 'S018A_SURVEY_ACTIVITY',
			  'S018B_SPECIAL_ACTIV_SURVEY_TYPE_OTHER' => 'S018B_SPECIAL_ACTIV_SURVEY_TYPE_OTHER',
			  'S019A_PANEL_SURVEY' => 'S019A_PANEL_SURVEY',
			  'S019B_PANEL_SURVEY_HHOLD' => 'S019B_PANEL_SURVEY_HHOLD',
			  'S019C_PANEL_SURVEY_HHOLD_ROUND_OTHER' => 'S019C_PANEL_SURVEY_HHOLD_ROUND_OTHER',
			  'S019CII_PANEL_SAME_RESPONDENT' => 'S019CII_PANEL_SAME_RESPONDENT',
			  'S101_WPT_NAME' => 'S101_WPT_NAME',
			  'S102_WPT_ID' => 'S102_WPT_ID',
			  'S107_WPT_GPS_LAT' => 'S107_WPT_GPS_LAT',
			  'S107_WPT_GPS_LNG' => 'S107_WPT_GPS_LNG',
			  'S107_WPT_GPS_ALT' => 'S107_WPT_GPS_ALT',
			  'S107_WPT_GPS_ACC' => 'S107_WPT_GPS_ACC',
			  'S108_SEASON' => 'S108_SEASON',
			  'S109_WPT_USABLE' => 'S109_WPT_USABLE',
			  'S109A_WPT_USABLE_WHYNOT_OTHER' => 'S109A_WPT_USABLE_WHYNOT_OTHER',
			  'S110_WPT_TURBIDITY' => 'S110_WPT_TURBIDITY',
			  'S100_DISP_AT_WPT' => 'S100_DISP_AT_WPT',
			  'S100A_DISP_AT_WPT_WHYNOT' => 'S100A_DISP_AT_WPT_WHYNOT',
			  'S105_DISP_SERIAL' => 'S105_DISP_SERIAL',
			  'S106_DISP_BARCODE' => 'S106_DISP_BARCODE',
			  'INSPECTION_S201_DISP_GEN' => 'INSPECTION_S201_DISP_GEN',
			  'INSPECTION_S202_TANK_VOLM' => 'INSPECTION_S202_TANK_VOLM',
			  'INSPECTION_S203_TANK_IN_DISP' => 'INSPECTION_S203_TANK_IN_DISP',
			  'INSPECTION_S204_CL_IN_TANK' => 'INSPECTION_S204_CL_IN_TANK',
			  'INSPECTION_S205_CL_LEVEL' => 'INSPECTION_S205_CL_LEVEL',
			  'INSPECTION_REFILL_S205A_FILL_TANK' => 'INSPECTION_REFILL_S205A_FILL_TANK',
			  'INSPECTION_REFILL_S205B_FILL_TANK_WHYNOT' => 'INSPECTION_REFILL_S205B_FILL_TANK_WHYNOT',
			  'INSPECTION_S206_CL_DISPENSED' => 'INSPECTION_S206_CL_DISPENSED',
			  'INSPECTION_S207_CL_SAMPL' => 'INSPECTION_S207_CL_SAMPL',
			  'INSPECTION_S207A_CL_SAMPL_WHYNOT' => 'INSPECTION_S207A_CL_SAMPL_WHYNOT',
			  'INSPECTION_S208_DISPPROB' => 'INSPECTION_S208_DISPPROB',
			  'INSPECTION_PROBLEMS_S209_DISPPROB_CAS_PADLK' => 'INSPECTION_PROBLEMS_S209_DISPPROB_CAS_PADLK',
			  'INSPECTION_PROBLEMS_S210_DISPPROB_TNK_VLV' => 'INSPECTION_PROBLEMS_S210_DISPPROB_TNK_VLV',
			  'INSPECTION_PROBLEMS_S211_DISPPROB_STKER_TAG_PAINT' => 'INSPECTION_PROBLEMS_S211_DISPPROB_STKER_TAG_PAINT',
			  'INSPECTION_CASING_S209A_CAS_BROK_SAG' => 'INSPECTION_CASING_S209A_CAS_BROK_SAG',
			  'INSPECTION_CASING_S209B_CAS_CRACK' => 'INSPECTION_CASING_S209B_CAS_CRACK',
			  'INSPECTION_CASING_S209C_CAS_HING_BROK' => 'INSPECTION_CASING_S209C_CAS_HING_BROK',
			  'INSPECTION_CASING_S209D_CAS_LOKHOLE_BROK' => 'INSPECTION_CASING_S209D_CAS_LOKHOLE_BROK',
			  'INSPECTION_CASING_S209DI_CAS_BROK_OTHERLOCTN' => 'INSPECTION_CASING_S209DI_CAS_BROK_OTHERLOCTN',
			  'INSPECTION_CASING_S209E_LID_MISNG' => 'INSPECTION_CASING_S209E_LID_MISNG',
			  'INSPECTION_CASING_S209F_LID_BENT_CRACK' => 'INSPECTION_CASING_S209F_LID_BENT_CRACK',
			  'INSPECTION_CASING_S209G_PADLK_BROK' => 'INSPECTION_CASING_S209G_PADLK_BROK',
			  'INSPECTION_CASING_S209H_PADLK_MISNG' => 'INSPECTION_CASING_S209H_PADLK_MISNG',
			  'INSPECTION_CASING_S209I_PADLK_RUST' => 'INSPECTION_CASING_S209I_PADLK_RUST',
			  'INSPCTON_TANKNDVLVE_S210A_TNK_CAP_MISNG' => 'INSPCTON_TANKNDVLVE_S210A_TNK_CAP_MISNG',
			  'INSPCTON_TANKNDVLVE_S210B_DISP_LEAK' => 'INSPCTON_TANKNDVLVE_S210B_DISP_LEAK',
			  'INSPCTON_TANKNDVLVE_S210C_VLV_BROK' => 'INSPCTON_TANKNDVLVE_S210C_VLV_BROK',
			  'INSPCTON_TANKNDVLVE_S210D_VLV_NOTDISPNG' => 'INSPCTON_TANKNDVLVE_S210D_VLV_NOTDISPNG',
			  'INSPCTON_TANKNDVLVE_S210E_VLV_MISNG' => 'INSPCTON_TANKNDVLVE_S210E_VLV_MISNG',
			  'INSPCTN_STCKRSNDTAGS_S211A_STKER_MISNG_INSTRN' => 'INSPCTN_STCKRSNDTAGS_S211A_STKER_MISNG_INSTRN',
			  'INSPCTN_STCKRSNDTAGS_S211B_TAG_MISNG' => 'INSPCTN_STCKRSNDTAGS_S211B_TAG_MISNG',
			  'INSPCTN_STCKRSNDTAGS_S211C_STKR_MISNG_OTHER' => 'INSPCTN_STCKRSNDTAGS_S211C_STKR_MISNG_OTHER',
			  'INSPCTN_STCKRSNDTAGS_S211D_DISP_RUST_PAINT_PLNG' => 'INSPCTN_STCKRSNDTAGS_S211D_DISP_RUST_PAINT_PLNG',
			  'INSPCTON_BASNDSTAND_S212A_CONCRT_CRACK' => 'INSPCTON_BASNDSTAND_S212A_CONCRT_CRACK',
			  'INSPCTON_BASNDSTAND_S212B_PST_BROK_METAL' => 'INSPCTON_BASNDSTAND_S212B_PST_BROK_METAL',
			  'INSPCTON_BASNDSTAND_S212C_PST_BROK_PVC' => 'INSPCTON_BASNDSTAND_S212C_PST_BROK_PVC',
			  'INSPCTON_BASNDSTAND_S212D_BLTNUT_LOOSE' => 'INSPCTON_BASNDSTAND_S212D_BLTNUT_LOOSE',
			  'INSPCTON_BASNDSTAND_S212E_BLTNUT_MISNG' => 'INSPCTON_BASNDSTAND_S212E_BLTNUT_MISNG',
			  'INSPCTON_BASNDSTAND_S212F_BLTNUT_RUST' => 'INSPCTON_BASNDSTAND_S212F_BLTNUT_RUST',
			  'INSPECTION_S213_DTAILS_WRONG_DISP' => 'INSPECTION_S213_DTAILS_WRONG_DISP',
			  'INSPECTION_S214_SUSPCT_VNDLSM' => 'INSPECTION_S214_SUSPCT_VNDLSM',
			  'INSPCTON_INSTALLTON_S215_DISP_LOCATN' => 'INSPCTON_INSTALLTON_S215_DISP_LOCATN',
			  'INSPCTON_INSTALLTON_S216_DISP_FACING_WPT' => 'INSPCTON_INSTALLTON_S216_DISP_FACING_WPT'
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
			  'S002_START' => 's002_start',
			  'S003_DEVICEID' => 's003_deviceid',
			  'S004_END' => 's004_end',
			  'S005_TODAY' => 's005_today',
			  'S006_SURVEYOR_NAME' => 's006_surveyor_name',
			  'S007_SURVEYOR_ID' => 's007_surveyor_id',
			  'S009_COUNTRY' => 's009_country',
			  'S011_PRGRM' => 's011_prgrm',
			  'S012_COUNTY' => 's012_county',
			  'S013_DISTRICT' => 's013_district',
			  'S014_DIVISN' => 's014_divisn',
			  'S015_LOCATN' => 's015_locatn',
			  'SUBLOC_S016_SUBLOC' => 's016_subloc',
			  'VIL_S017_VIL' => 's017_vil',
			  'S018A_SURVEY_ACTIVITY' => 's018a_survey_activity',
			  'S018B_SPECIAL_ACTIV_SURVEY_TYPE_OTHER' => 's018b_special_activ_survey_type',
			  'S019A_PANEL_SURVEY' => 's019a_panel_survey',
			  'S019B_PANEL_SURVEY_HHOLD' => 's019b_panel_survey_hhold',
			  'S019C_PANEL_SURVEY_HHOLD_ROUND_OTHER' => 's019c_panel_survey_hhold_round',
			  'S019CII_PANEL_SAME_RESPONDENT' => 's019cii_panel_same_respondent',
			  'S101_WPT_NAME' => 's101_wpt_name',
			  'S102_WPT_ID' => 's102_wpt_id',
			  'S107_WPT_GPS_LAT' => 's107_wpt_gps_latitude',
			  'S107_WPT_GPS_LNG' => 's107_wpt_gps_longitude',
			  'S107_WPT_GPS_ALT' => 's107_wpt_gps_altitude',
			  'S107_WPT_GPS_ACC' => 's107_wpt_gps_accuracy',
			  'S108_SEASON' => 's108_season',
			  'S109_WPT_USABLE' => 's109_wpt_usable',
			  'S109A_WPT_USABLE_WHYNOT_OTHER' => 's109a_wpt_usable_whynot',
			  'S110_WPT_TURBIDITY' => 's110_wpt_turbidity',
			  'S100_DISP_AT_WPT' => 's100_disp_at_wpt',
			  'S100A_DISP_AT_WPT_WHYNOT' => 's100a_disp_at_wpt_whynot',
			  'S105_DISP_SERIAL' => 's105_disp_serial',
			  'S106_DISP_BARCODE' => 's106_disp_barcode',
			  'INSPECTION_S201_DISP_GEN' => 's201_disp_gen',
			  'INSPECTION_S202_TANK_VOLM' => 's202_tank_volm',
			  'INSPECTION_S203_TANK_IN_DISP' => 's203_tank_in_disp',
			  'INSPECTION_S204_CL_IN_TANK' => 's204_cl_in_tank',
			  'INSPECTION_S205_CL_LEVEL' => 's205_cl_level',
			  'INSPECTION_REFILL_S205A_FILL_TANK' => 's205a_fill_tank',
			  'INSPECTION_REFILL_S205B_FILL_TANK_WHYNOT' => 's205b_fill_tank_whynot',
			  'INSPECTION_S206_CL_DISPENSED' => 's206_cl_dispensed',
			  'INSPECTION_S207_CL_SAMPL' => 's207_cl_sampl',
			  'INSPECTION_S207A_CL_SAMPL_WHYNOT' => 's207a_cl_sampl_whynot',
			  'INSPECTION_S208_DISPPROB' => 's208_dispprob',
			  'INSPECTION_PROBLEMS_S209_DISPPROB_CAS_PADLK' => 's209_dispprob_cas_padlk',
			  'INSPECTION_PROBLEMS_S210_DISPPROB_TNK_VLV' => 's210_dispprob_tnk_vlv',
			  'INSPECTION_PROBLEMS_S211_DISPPROB_STKER_TAG_PAINT' => 's211_dispprob_stker_tag_paint',
			  'INSPECTION_CASING_S209A_CAS_BROK_SAG' => 's209a_cas_brok_sag',
			  'INSPECTION_CASING_S209B_CAS_CRACK' => 's209b_cas_crack',
			  'INSPECTION_CASING_S209C_CAS_HING_BROK' => 's209c_cas_hing_brok',
			  'INSPECTION_CASING_S209D_CAS_LOKHOLE_BROK' => 's209d_cas_lokhole_brok',
			  'INSPECTION_CASING_S209DI_CAS_BROK_OTHERLOCTN' => 's209di_cas_brok_otherloctn',
			  'INSPECTION_CASING_S209E_LID_MISNG' => 's209e_lid_misng',
			  'INSPECTION_CASING_S209F_LID_BENT_CRACK' => 's209f_lid_bent_crack',
			  'INSPECTION_CASING_S209G_PADLK_BROK' => 's209g_padlk_brok',
			  'INSPECTION_CASING_S209H_PADLK_MISNG' => 's209h_padlk_misng',
			  'INSPECTION_CASING_S209I_PADLK_RUST' => 's209i_padlk_rust',
			  'INSPCTON_TANKNDVLVE_S210A_TNK_CAP_MISNG' => 's210a_tnk_cap_misng',
			  'INSPCTON_TANKNDVLVE_S210B_DISP_LEAK' => 's210b_disp_leak',
			  'INSPCTON_TANKNDVLVE_S210C_VLV_BROK' => 's210c_vlv_brok',
			  'INSPCTON_TANKNDVLVE_S210D_VLV_NOTDISPNG' => 's210d_vlv_notdispng',
			  'INSPCTON_TANKNDVLVE_S210E_VLV_MISNG' => 's210e_vlv_misng',
			  'INSPCTN_STCKRSNDTAGS_S211A_STKER_MISNG_INSTRN' => 's211a_stker_misng_instrn',
			  'INSPCTN_STCKRSNDTAGS_S211B_TAG_MISNG' => 's211b_tag_misng',
			  'INSPCTN_STCKRSNDTAGS_S211C_STKR_MISNG_OTHER' => 's211c_stkr_misng_other',
			  'INSPCTN_STCKRSNDTAGS_S211D_DISP_RUST_PAINT_PLNG' => 's211d_disp_rust_paint_plng',
			  'INSPCTON_BASNDSTAND_S212A_CONCRT_CRACK' => 's212a_concrt_crack',
			  'INSPCTON_BASNDSTAND_S212B_PST_BROK_METAL' => 's212b_pst_brok_metal',
			  'INSPCTON_BASNDSTAND_S212C_PST_BROK_PVC' => 's212c_pst_brok_pvc',
			  'INSPCTON_BASNDSTAND_S212D_BLTNUT_LOOSE' => 's212d_bltnut_loose',
			  'INSPCTON_BASNDSTAND_S212E_BLTNUT_MISNG' => 's212e_bltnut_misng',
			  'INSPCTON_BASNDSTAND_S212F_BLTNUT_RUST' => 's212f_bltnut_rust',
			  'INSPECTION_S213_DTAILS_WRONG_DISP' => 's213_dtails_wrong_disp',
			  'INSPECTION_S214_SUSPCT_VNDLSM' => 's214_suspct_vndlsm',
			  'INSPCTON_INSTALLTON_S215_DISP_LOCATN' => 's215_disp_locatn',
			  'INSPCTON_INSTALLTON_S216_DISP_FACING_WPT' => 's216_disp_facing_wpt'
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