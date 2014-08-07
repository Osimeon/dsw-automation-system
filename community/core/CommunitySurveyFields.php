<?php
	class CommunitySurveyFields{
		public function getFields($code){
			$fields = array(
                                '_URI' => '_URI',
				'C002_START' => 'C002_START',
				'C003_DEVICEID' => 'C003_DEVICEID',
				'C004_END' => 'C004_END',
				'C005_TODAY' => 'C005_TODAY',
				'C006_SURVEYOR_NAME' => 'C006_SURVEYOR_NAME',
				'C007_SURVEYOR_ID' => 'C007_SURVEYOR_ID',
				'C008_CWHEEL_ID' => 'C008_CWHEEL_ID',
				'C009_COUNTRY' => 'C009_COUNTRY',
				'C011_PRGRM' => 'C011_PRGRM',
				'C012_COUNTY' => 'C012_COUNTY',
				'C013_DISTRICT' => 'C013_DISTRICT',
				'C014_DIVISN' => 'C014_DIVISN',
				'C015_LOCATN' => 'C015_LOCATN',
				'SUBLOC_C016_SUBLOC' => 'SUBLOC_C016_SUBLOC',
				'SUBLOC_C016A_SUBLOC_OTHER' => 'SUBLOC_C016A_SUBLOC_OTHER',
				'VIL_C017_VIL' => 'VIL_C017_VIL',
				'VIL_C017A_VIL_OTHER' => 'VIL_C017A_VIL_OTHER',
				'C101_WPT_NAME' => 'C101_WPT_NAME',
				'WPT_C102_WPT_ID' => 'WPT_C102_WPT_ID',
				'C107_WPT_GPS_ALT' => 'C107_WPT_GPS_ALT',
				'C107_WPT_GPS_LNG' => 'C107_WPT_GPS_LNG',
				'C107_WPT_GPS_LAT' => 'C107_WPT_GPS_LAT',
				'C107_WPT_GPS_ACC' => 'C107_WPT_GPS_ACC',
				'C108_SEASON' => 'C108_SEASON',
				'C100A_SPOT_WPT_USABLE' => 'C100A_SPOT_WPT_USABLE',
				'C100AI_SPOT_WPT_NOTUSABLE' => 'C100AI_SPOT_WPT_NOTUSABLE',
				'C100B_SPOT_TANK_IN_DISP' => 'C100B_SPOT_TANK_IN_DISP',
				'C100C_SPOT_CL_IN_TANK' => 'C100C_SPOT_CL_IN_TANK',
				'C100D_SPOT_PROB_2WKS' => 'C100D_SPOT_PROB_2WKS',
				'CONSENT_C109_RESP_CONSENT' => 'CONSENT_C109_RESP_CONSENT',
				'RESP_C110_RESP_NAME' => 'RESP_C110_RESP_NAME',
				'RESP_C111_CMPD_ID' => 'RESP_C111_CMPD_ID',
				'CMPD_C112A_CMPD_FAM_NAME' => 'CMPD_C112A_CMPD_FAM_NAME',
				'CMPD_C112B_CMPD_NAME1' => 'CMPD_C112B_CMPD_NAME1',
				'CMPD_C112C_CMPD_NAME2' => 'CMPD_C112C_CMPD_NAME2',
				'CMPD_C112D_CMPD_CLAN_NAME' => 'CMPD_C112D_CMPD_CLAN_NAME',
				'CMPD_C112E_CMPD_CONTACT' => 'CMPD_C112E_CMPD_CONTACT',
				'C113A_SURVEY_ACTIVITY' => 'C113A_SURVEY_ACTIVITY',
				'C113B_SPECIAL_ACTIV_SURVEY_TYPE' => 'C113B_SPECIAL_ACTIV_SURVEY_TYPE',
				'C114A_PANEL_SURVEY' => 'C114A_PANEL_SURVEY',
				'C114B_PANEL_SURVEY_HHOLD' => 'C114B_PANEL_SURVEY_HHOLD',
				'C114C_PANEL_SURVEY_HHOLD_ROUND_OTHER' => 'C114C_PANEL_SURVEY_HHOLD_ROUND_OTHER',
				'C114CII_PANEL_SAME_RESPONDENT' => 'C114CII_PANEL_SAME_RESPONDENT',
				'S2_C201_GET_WATR_DISPSOURCE' => 'S2_C201_GET_WATR_DISPSOURCE',
				'S2_C201A_GET_WATR_DISPSOURCE_WHYNOT_OTHER' => 'S2_C201A_GET_WATR_DISPSOURCE_WHYNOT_OTHER',
				'S2_C202_WALK_DISP' => 'S2_C202_WALK_DISP',
				'S2_C203_RESP_GENDER' => 'S2_C203_RESP_GENDER',
				'S2_C205_RESP_SCHLING' => 'S2_C205_RESP_SCHLING',
				'S2_C206A_READ_NWSPPER_MALE' => 'S2_C206A_READ_NWSPPER_MALE',
				'S2_C206B_READ_NWSPPER_FEMALE' => 'S2_C206B_READ_NWSPPER_FEMALE',
				'S2_C207_PRI_SOURCE_INFO' => 'S2_C207_PRI_SOURCE_INFO',
				'S2_C207A_PRI_SOURCE_INFO_NGO' => 'S2_C207A_PRI_SOURCE_INFO_NGO',
				'S2_WEALTH_C208A_BOMA_WALLS' => 'S2_WEALTH_C208A_BOMA_WALLS',
				'S2_WEALTH_C208B_BOMA_FLOOR' => 'S2_WEALTH_C208B_BOMA_FLOOR',
				'S2_WEALTH_C208C_BOMA_ROOF' => 'S2_WEALTH_C208C_BOMA_ROOF',
				'S2_ASSETS_C209A_BOMA_MOBILES' => 'S2_ASSETS_C209A_BOMA_MOBILES',
				'S2_ASSETS_C209B_BOMA_RADIOS' => 'S2_ASSETS_C209B_BOMA_RADIOS',
				'S2_ASSETS_C209C_BOMA_SHEEP_GOATS' => 'S2_ASSETS_C209C_BOMA_SHEEP_GOATS',
				'S2_ASSETS_C209D_BOMA_CATTLE' => 'S2_ASSETS_C209D_BOMA_CATTLE',
				'S3_C301_CMPD_HHOLD' => 'S3_C301_CMPD_HHOLD',
				'S3_C302A_CMPD_PPL' => 'S3_C302A_CMPD_PPL',
				'S3_C302B_HHOLD_PPL' => 'S3_C302B_HHOLD_PPL',
				'S3_MEN_C303A_CMPD_MALE' => 'S3_MEN_C303A_CMPD_MALE',
				'S3_MEN_C303B_HHOLD_MALE' => 'S3_MEN_C303B_HHOLD_MALE',
				'S3_WOMEN_C304A_CMPD_FEMALE' => 'S3_WOMEN_C304A_CMPD_FEMALE',
				'S3_WOMEN_C304B_HHOLD_FEMALE' => 'S3_WOMEN_C304B_HHOLD_FEMALE',
				'S3_U5_C305A_CMPD_CHILD' => 'S3_U5_C305A_CMPD_CHILD',
				'S3_U5_C305B_HHOLD_CHILD' => 'S3_U5_C305B_HHOLD_CHILD',
				'S3_CHILDA_AGEYRS1_C306A_CHLD1_GENDER' => 'S3_CHILDA_AGEYRS1_C306A_CHLD1_GENDER',
				'S3_CHILDA_AGEYRS1_C307A_CHLD1_AGE_YRS' => 'S3_CHILDA_AGEYRS1_C307A_CHLD1_AGE_YRS',
				'S3_CHILDA_C308A_CHLD1_AGE_MONTHS' => 'S3_CHILDA_C308A_CHLD1_AGE_MONTHS',
				'S3_CHILDA_C309A_CHLD1_AGE_WKS' => 'S3_CHILDA_C309A_CHLD1_AGE_WKS',
				'S3_CHILDA_C310A_CHLD1_BRSTFDG' => 'S3_CHILDA_C310A_CHLD1_BRSTFDG',
				'S3_CHILDA_C311A_CHLD1_DRHEA_PAST2WKS' => 'S3_CHILDA_C311A_CHLD1_DRHEA_PAST2WKS',
				'S3_CHILDA_DIARH1_C312A_CHLD1_DRHEA_TODAY' => 'S3_CHILDA_DIARH1_C312A_CHLD1_DRHEA_TODAY',
				'S3_CHILDA_DIARH1_C313A_CHLD1_DRHEA_YSTRDAY' => 'S3_CHILDA_DIARH1_C313A_CHLD1_DRHEA_YSTRDAY',
				'S3_CHILDA_DIARH1_C314A_CHLD1_DRHEA_BFOYSTRDAY' => 'S3_CHILDA_DIARH1_C314A_CHLD1_DRHEA_BFOYSTRDAY',
				'S3_CHILDA_DIARH1_C315A_CHLD1_DRHEA_PASTWK' => 'S3_CHILDA_DIARH1_C315A_CHLD1_DRHEA_PASTWK',
				'S3_CHILDB_AGEYRS2_C306B_CHLD2_GENDER' => 'S3_CHILDB_AGEYRS2_C306B_CHLD2_GENDER',
				'S3_CHILDB_AGEYRS2_C307B_CHLD2_AGE_YRS' => 'S3_CHILDB_AGEYRS2_C307B_CHLD2_AGE_YRS',
				'S3_CHILDB_C308B_CHLD2_AGE_MONTHS' => 'S3_CHILDB_C308B_CHLD2_AGE_MONTHS',
				'S3_CHILDB_C309B_CHLD2_AGE_WKS' => 'S3_CHILDB_C309B_CHLD2_AGE_WKS',
				'S3_CHILDB_C310B_CHLD2_BRSTFDG' => 'S3_CHILDB_C310B_CHLD2_BRSTFDG',
				'S3_CHILDB_C311B_CHLD2_DRHEA_PAST2WKS' => 'S3_CHILDB_C311B_CHLD2_DRHEA_PAST2WKS',
				'S3_CHILDB_DIARH2_C312B_CHLD2_DRHEA_TODAY' => 'S3_CHILDB_DIARH2_C312B_CHLD2_DRHEA_TODAY',
				'S3_CHILDB_DIARH2_C313B_CHLD2_DRHEA_YSTRDAY' => 'S3_CHILDB_DIARH2_C313B_CHLD2_DRHEA_YSTRDAY',
				'S3_CHILDB_DIARH2_C314B_CHLD2_DRHEA_BFOYSTRDAY' => 'S3_CHILDB_DIARH2_C314B_CHLD2_DRHEA_BFOYSTRDAY',
				'S3_CHILDB_DIARH2_C315B_CHLD2_DRHEA_PASTWK' => 'S3_CHILDB_DIARH2_C315B_CHLD2_DRHEA_PASTWK',
				'S3_CHILDC_AGEYRS3_C306C_CHLD3_GENDER' => 'S3_CHILDC_AGEYRS3_C306C_CHLD3_GENDER',
				'S3_CHILDC_AGEYRS3_C307C_CHLD3_AGE_YRS' => 'S3_CHILDC_AGEYRS3_C307C_CHLD3_AGE_YRS',
				'S3_CHILDC_C308C_CHLD3_AGE_MONTHS' => 'S3_CHILDC_C308C_CHLD3_AGE_MONTHS',
				'S3_CHILDC_C309C_CHLD3_AGE_WKS' => 'S3_CHILDC_C309C_CHLD3_AGE_WKS',
				'S3_CHILDC_C310C_CHLD3_BRSTFDG' => 'S3_CHILDC_C310C_CHLD3_BRSTFDG',
				'S3_CHILDC_C311C_CHLD3_DRHEA_PAST2WKS' => 'S3_CHILDC_C311C_CHLD3_DRHEA_PAST2WKS',
				'S3_CHILDC_DIARH3_C312C_CHLD3_DRHEA_TODAY' => 'S3_CHILDC_DIARH3_C312C_CHLD3_DRHEA_TODAY',
				'S3_CHILDC_DIARH3_C313C_CHLD3_DRHEA_YSTRDAY' => 'S3_CHILDC_DIARH3_C313C_CHLD3_DRHEA_YSTRDAY',
				'S3_CHILDC_DIARH3_C314C_CHLD3_DRHEA_BFOYSTRDAY' => 'S3_CHILDC_DIARH3_C314C_CHLD3_DRHEA_BFOYSTRDAY',
				'S3_CHILDC_DIARH3_C315C_CHLD3_DRHEA_PASTWK' => 'S3_CHILDC_DIARH3_C315C_CHLD3_DRHEA_PASTWK',
				'S3_CHILDD_AGEYRS4_C306D_CHLD4_GENDER' => 'S3_CHILDD_AGEYRS4_C306D_CHLD4_GENDER',
				'S3_CHILDD_AGEYRS4_C307D_CHLD4_AGE_YRS' => 'S3_CHILDD_AGEYRS4_C307D_CHLD4_AGE_YRS',
				'S3_CHILDD_C308D_CHLD4_AGE_MONTHS' => 'S3_CHILDD_C308D_CHLD4_AGE_MONTHS',
				'S3_CHILDD_C309D_CHLD4_AGE_WKS' => 'S3_CHILDD_C309D_CHLD4_AGE_WKS',
				'S3_CHILDD_C310D_CHLD4_BRSTFDG' => 'S3_CHILDD_C310D_CHLD4_BRSTFDG',
				'S3_CHILDD_C311D_CHLD4_DRHEA_PAST2WKS' => 'S3_CHILDD_C311D_CHLD4_DRHEA_PAST2WKS',
				'S3_CHILDD_DIARH4_C312D_CHLD4_DRHEA_TODAY' => 'S3_CHILDD_DIARH4_C312D_CHLD4_DRHEA_TODAY',
				'S3_CHILDD_DIARH4_C313D_CHLD4_DRHEA_YSTRDAY' => 'S3_CHILDD_DIARH4_C313D_CHLD4_DRHEA_YSTRDAY',
				'S3_CHILDD_DIARH4_C314D_CHLD4_DRHEA_BFOYSTRDAY' => 'S3_CHILDD_DIARH4_C314D_CHLD4_DRHEA_BFOYSTRDAY',
				'S3_CHILDD_DIARH4_C315D_CHLD4_DRHEA_PASTWK' => 'S3_CHILDD_DIARH4_C315D_CHLD4_DRHEA_PASTWK',
				'S3_CHILDE_AGEYRS5_C306E_CHLD5_GENDER' => 'S3_CHILDE_AGEYRS5_C306E_CHLD5_GENDER',
				'S3_CHILDE_AGEYRS5_C307E_CHLD5_AGE_YRS' => 'S3_CHILDE_AGEYRS5_C307E_CHLD5_AGE_YRS',
				'S3_CHILDE_C308E_CHLD5_AGE_MONTHS' => 'S3_CHILDE_C308E_CHLD5_AGE_MONTHS',
				'S3_CHILDE_C309E_CHLD5_AGE_WKS' => 'S3_CHILDE_C309E_CHLD5_AGE_WKS',
				'S3_CHILDE_C310E_CHLD5_BRSTFDG' => 'S3_CHILDE_C310E_CHLD5_BRSTFDG',
				'S3_CHILDE_C311E_CHLD5_DRHEA_PAST2WKS' => 'S3_CHILDE_C311E_CHLD5_DRHEA_PAST2WKS',
				'S3_CHILDE_DIARH5_C312E_CHLD5_DRHEA_TODAY' => 'S3_CHILDE_DIARH5_C312E_CHLD5_DRHEA_TODAY',
				'S3_CHILDE_DIARH5_C313E_CHLD5_DRHEA_YSTRDAY' => 'S3_CHILDE_DIARH5_C313E_CHLD5_DRHEA_YSTRDAY',
				'S3_CHILDE_DIARH5_C314E_CHLD5_DRHEA_BFOYSTRDAY' => 'S3_CHILDE_DIARH5_C314E_CHLD5_DRHEA_BFOYSTRDAY',
				'S3_CHILDE_DIARH5_C315E_CHLD5_DRHEA_PASTWK' => 'S3_CHILDE_DIARH5_C315E_CHLD5_DRHEA_PASTWK',
				'S3_CHILDF_AGEYRS6_C306F_CHLD6_GENDER' => 'S3_CHILDF_AGEYRS6_C306F_CHLD6_GENDER',
				'S3_CHILDF_AGEYRS6_C307F_CHLD6_AGE_YRS' => 'S3_CHILDF_AGEYRS6_C307F_CHLD6_AGE_YRS',
				'S3_CHILDF_C308F_CHLD6_AGE_MONTHS' => 'S3_CHILDF_C308F_CHLD6_AGE_MONTHS',
				'S3_CHILDF_C309F_CHLD6_AGE_WKS' => 'S3_CHILDF_C309F_CHLD6_AGE_WKS',
				'S3_CHILDF_C310F_CHLD6_BRSTFDG' => 'S3_CHILDF_C310F_CHLD6_BRSTFDG',
				'S3_CHILDF_C311F_CHLD6_DRHEA_PAST2WKS' => 'S3_CHILDF_C311F_CHLD6_DRHEA_PAST2WKS',
				'S3_CHILDF_DIARH6_C312F_CHLD6_DRHEA_TODAY' => 'S3_CHILDF_DIARH6_C312F_CHLD6_DRHEA_TODAY',
				'S3_CHILDF_DIARH6_C313F_CHLD6_DRHEA_YSTRDAY' => 'S3_CHILDF_DIARH6_C313F_CHLD6_DRHEA_YSTRDAY',
				'S3_CHILDF_DIARH6_C314F_CHLD6_DRHEA_BFOYSTRDAY' => 'S3_CHILDF_DIARH6_C314F_CHLD6_DRHEA_BFOYSTRDAY',
				'S3_CHILDF_DIARH6_C315F_CHLD6_DRHEA_PASTWK' => 'S3_CHILDF_DIARH6_C315F_CHLD6_DRHEA_PASTWK',
				'S3_CHILDG_AGEYRS7_C306G_CHLD7_GENDER' => 'S3_CHILDG_AGEYRS7_C306G_CHLD7_GENDER',				
				'S3_CHILDG_AGEYRS7_C307G_CHLD7_AGE_YRS' => 'S3_CHILDG_AGEYRS7_C307G_CHLD7_AGE_YRS',
				'S3_CHILDG_C308G_CHLD7_AGE_MONTHS' => 'S3_CHILDG_C308G_CHLD7_AGE_MONTHS',
				'S3_CHILDG_C309G_CHLD7_AGE_WKS' => 'S3_CHILDG_C309G_CHLD7_AGE_WKS',
				'S3_CHILDG_C310G_CHLD7_BRSTFDG' => 'S3_CHILDG_C310G_CHLD7_BRSTFDG',
				'S3_CHILDG_C311G_CHLD7_DRHEA_PAST2WKS' => 'S3_CHILDG_C311G_CHLD7_DRHEA_PAST2WKS',
				'S3_CHILDG_DIARH7_C312G_CHLD7_DRHEA_TODAY' => 'S3_CHILDG_DIARH7_C312G_CHLD7_DRHEA_TODAY',
				'S3_CHILDG_DIARH7_C313G_CHLD7_DRHEA_YSTRDAY' => 'S3_CHILDG_DIARH7_C313G_CHLD7_DRHEA_YSTRDAY',
				'S3_CHILDG_DIARH7_C314G_CHLD7_DRHEA_BFOYSTRDAY' => 'S3_CHILDG_DIARH7_C314G_CHLD7_DRHEA_BFOYSTRDAY',
				'S3_CHILDG_DIARH7_C315G_CHLD7_DRHEA_PASTWK' => 'S3_CHILDG_DIARH7_C315G_CHLD7_DRHEA_PASTWK',
				'S3_CHILDH_AGEYRS8_C306H_CHLD8_GENDER' => 'S3_CHILDH_AGEYRS8_C306H_CHLD8_GENDER',
				'S3_CHILDH_AGEYRS8_C307H_CHLD8_AGE_YRS' => 'S3_CHILDH_AGEYRS8_C307H_CHLD8_AGE_YRS',
				'S3_CHILDH_C308H_CHLD8_AGE_MONTHS' => 'S3_CHILDH_C308H_CHLD8_AGE_MONTHS',
				'S3_CHILDH_C309H_CHLD8_AGE_WKS' => 'S3_CHILDH_C309H_CHLD8_AGE_WKS',
				'S3_CHILDH_C310H_CHLD8_BRSTFDG' => 'S3_CHILDH_C310H_CHLD8_BRSTFDG',
				'S3_CHILDH_C311H_CHLD8_DRHEA_PAST2WKS' => 'S3_CHILDH_C311H_CHLD8_DRHEA_PAST2WKS',
				'S3_CHILDH_DIARH8_C312H_CHLD8_DRHEA_TODAY' => 'S3_CHILDH_DIARH8_C312H_CHLD8_DRHEA_TODAY',
				'S3_CHILDH_DIARH8_C313H_CHLD8_DRHEA_YSTRDAY' => 'S3_CHILDH_DIARH8_C313H_CHLD8_DRHEA_YSTRDAY',
				'S3_CHILDH_DIARH8_C314H_CHLD8_DRHEA_BFOYSTRDAY' => 'S3_CHILDH_DIARH8_C314H_CHLD8_DRHEA_BFOYSTRDAY',
				'S3_CHILDH_DIARH8_C315H_CHLD8_DRHEA_PASTWK' => 'S3_CHILDH_DIARH8_C315H_CHLD8_DRHEA_PASTWK',
				'S4_C401_GIV_GLASS_WATR' => 'S4_C401_GIV_GLASS_WATR',
				'S4_C401A_GIV_GLASS_WATR_WHYNOT' => 'S4_C401A_GIV_GLASS_WATR_WHYNOT',
				'S4_WATER_C402_WATR_DRAWN' => 'S4_WATER_C402_WATR_DRAWN',
				'S4_WATER_C403_CONT_TYPE' => 'S4_WATER_C403_CONT_TYPE',
				'S4_WATER_C404_CONT_DIPPER' => 'S4_WATER_C404_CONT_DIPPER',
				'S4_WATER_C405_CONT_COVER' => 'S4_WATER_C405_CONT_COVER',
				'S4_WATER_C406_WATR_SOURCE' => 'S4_WATER_C406_WATR_SOURCE',
				'S4_WATER_C407_WATR_COLLECT_BY' => 'S4_WATER_C407_WATR_COLLECT_BY',
				'S4_WATER_C407A_WATR_COLLECT_AGE_CHLD' => 'S4_WATER_C407A_WATR_COLLECT_AGE_CHLD',
				'S4_WATER_C408_CONT_SIZE' => 'S4_WATER_C408_CONT_SIZE',
				'S4_WATER_C409_WATR_COLLECT_WHEN' => 'S4_WATER_C409_WATR_COLLECT_WHEN',
				'S4_WATER_C410_WATR_TREATD' => 'S4_WATER_C410_WATR_TREATD',
				'S4_WATER_C411_WATR_TREATD_HOW_OTHER' => 'S4_WATER_C411_WATR_TREATD_HOW_OTHER',
				'S4_WATER_C411A_WATR_TREATD_FILTER_TYPE' => 'S4_WATER_C411A_WATR_TREATD_FILTER_TYPE',
				'S4_WATER_C412_WATR_TREATD_WHEN' => 'S4_WATER_C412_WATR_TREATD_WHEN',
				'S4_WATER_C413_WATR_MIX' => 'S4_WATER_C413_WATR_MIX',
				'S4_WATER_C414_WATR_SAFE' => 'S4_WATER_C414_WATR_SAFE',
				'S4_WATER_C415A_WATR_SAFE_WHY_OTHER' => 'S4_WATER_C415A_WATR_SAFE_WHY_OTHER',
				'S4_WATER_C415B_WATR_SAFE_WHYNOT_OTHER' => 'S4_WATER_C415B_WATR_SAFE_WHYNOT_OTHER',
				'S5_C501_USED_DISP_EVER' => 'S5_C501_USED_DISP_EVER',
				'S5_C502_USED_DISP_PASTWK' => 'S5_C502_USED_DISP_PASTWK',
				'S5_C503_USED_DISP_LASTTIME' => 'S5_C503_USED_DISP_LASTTIME',
				'S5_C504A_USED_DISP_WHY_OTHER' => 'S5_C504A_USED_DISP_WHY_OTHER',
				'S5_C504B_USED_DISP_WHYNOT_OTHER' => 'S5_C504B_USED_DISP_WHYNOT_OTHER',
				'S5_C505_DISP_BENEFITS_OTHER' => 'S5_C505_DISP_BENEFITS_OTHER',
				'S5_C506_DISP_TRUST' => 'S5_C506_DISP_TRUST',
				'S5_C513_DISP_EMPTY_EVER' => 'S5_C513_DISP_EMPTY_EVER',
				'S5_C514_DISP_EMPTY_LAST_TIME' => 'S5_C514_DISP_EMPTY_LAST_TIME',
				'S5_C515_DISP_EMPTY_LAST_DAYS' => 'S5_C515_DISP_EMPTY_LAST_DAYS',
				'S5_C517_CHARG_DISP_USE' => 'S5_C517_CHARG_DISP_USE',
				'S5_C519_CHARG_DISP_USE_WHO' => 'S5_C519_CHARG_DISP_USE_WHO',
				'S6_EDUCATION2_C601A_ATTEND_VCS' => 'S6_EDUCATION2_C601A_ATTEND_VCS',
				'S6_EDUCATION2_C601B_ATTEND_CEM' => 'S6_EDUCATION2_C601B_ATTEND_CEM',
				'S6_C602_TALK_ABT_DISP' => 'S6_C602_TALK_ABT_DISP',
				'S6_C603_TALK_ABT_DISP_WHO_OTHER' => 'S6_C603_TALK_ABT_DISP_WHO_OTHER',
				'S6_C604A_NAME_PROM' => 'S6_C604A_NAME_PROM',
				'S6_C604B_NAME_ASPROM' => 'S6_C604B_NAME_ASPROM',
				'S6_C605_PROM_SEEN' => 'S6_C605_PROM_SEEN',
				'S6_C606_PROM_TALKED' => 'S6_C606_PROM_TALKED',
				'S6_C607_PROM_RATE' => 'S6_C607_PROM_RATE',
				'S6_C608A_PROM_WHYGOOD_OTHER' => 'S6_C608A_PROM_WHYGOOD_OTHER',
				'S6_C608B_PROM_WHYBAD_OTHER' => 'S6_C608B_PROM_WHYBAD_OTHER',
				'S7_C701_KNOW_TURNS' => 'S7_C701_KNOW_TURNS',
				'S7_C701B_CHOR_WAIT_HOWLONG' => 'S7_C701B_CHOR_WAIT_HOWLONG',
				'S7_C702_KNOW_WAIT' => 'S7_C702_KNOW_WAIT',
				'S7_DISPSTEPS_C703A_KNOW_STEP1' => 'S7_DISPSTEPS_C703A_KNOW_STEP1',
				'S7_DISPSTEPS_C703B_KNOW_STEP2' => 'S7_DISPSTEPS_C703B_KNOW_STEP2',
				'S7_DISPSTEPS_C703C_KNOW_STEP3' => 'S7_DISPSTEPS_C703C_KNOW_STEP3',
				'S7_C704_KNOW_IFEMPTY_OTHER' => 'S7_C704_KNOW_IFEMPTY_OTHER',
				'S7_C705_INTERVIEW_LANGUAGE' => 'S7_C705_INTERVIEW_LANGUAGE',
				'S7_C706_INTERVIEW_FA' => 'S7_C706_INTERVIEW_FA',
				'S7_C707_INTERVIEW_TRANSLATOR' => 'S7_C707_INTERVIEW_TRANSLATOR',
				'S7_C708_INTERVIEW_WHO_TRANSLATE' => 'S7_C708_INTERVIEW_WHO_TRANSLATE',
				'S8_C801_TCR_TEST' => 'S8_C801_TCR_TEST',
				'S8_C801A_TCR_TEST_WHYNOT' => 'S8_C801A_TCR_TEST_WHYNOT',
				'S8_TOTAL2_C802_TCR_SAMPL_COLOR' => 'S8_TOTAL2_C802_TCR_SAMPL_COLOR',
				'S8_TOTAL2_C803_TCR_READING' => 'S8_TOTAL2_C803_TCR_READING',
				'S8_C804_FCR_TEST' => 'S8_C804_FCR_TEST',
				'S8_C804A_FCR_TEST_WHYNOT' => 'S8_C804A_FCR_TEST_WHYNOT',
				'S8_FREE2_C805_FCR_SAMPL_COLOR' => 'S8_FREE2_C805_FCR_SAMPL_COLOR',
				'S8_FREE2_C806_FCR_READING' => 'S8_FREE2_C806_FCR_READING'
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
				'C002_START' => 'c002_start',
				'C003_DEVICEID' => 'c003_deviceid',
				'C004_END' => 'c004_end',
				'C005_TODAY' => 'c005_today',
				'C006_SURVEYOR_NAME' => 'c006_surveyor_name',
				'C007_SURVEYOR_ID' => 'c007_surveyor_id',
				'C008_CWHEEL_ID' => 'c008_cwheel_id',
				'C009_COUNTRY' => 'c009_country',
				'C011_PRGRM' => 'c011_prgrm',
				'C012_COUNTY' => 'c012_county',
				'C013_DISTRICT' => 'c013_district',
				'C014_DIVISN' => 'c014_divisn',
				'C015_LOCATN' => 'c015_locatn',
				'SUBLOC_C016_SUBLOC' => 'c016_subloc',
				'SUBLOC_C016A_SUBLOC_OTHER' => 'c016a_subloc_other',
				'VIL_C017_VIL' => 'c017_vil',
				'VIL_C017A_VIL_OTHER' => 'c017a_vil_other',
				'C101_WPT_NAME' => 'c101_wpt_name',
				'WPT_C102_WPT_ID' => 'c102_wpt_id',
				'C107_WPT_GPS_ALT' => 'c107_wpt_gps_latitude',
				'C107_WPT_GPS_LNG' => 'c107_wpt_gps_longitude',
				'C107_WPT_GPS_LAT' => 'c107_wpt_gps_altitude',
				'C107_WPT_GPS_ACC' => 'c107_wpt_gps_accuracy',
				'C108_SEASON' => 'c108_season',
				'C100A_SPOT_WPT_USABLE' => 'c100a_spot_wpt_usable',
				'C100AI_SPOT_WPT_NOTUSABLE' => 'c100ai_spot_wpt_notusable',
				'C100B_SPOT_TANK_IN_DISP' => 'c100b_spot_tank_in_disp',
				'C100C_SPOT_CL_IN_TANK' => 'c100c_spot_cl_in_tank',
				'C100D_SPOT_PROB_2WKS' => 'c100d_spot_prob_2wks',
				'CONSENT_C109_RESP_CONSENT' => 'c109_resp_consent',
				'RESP_C110_RESP_NAME' => 'c110_resp_name',
				'RESP_C111_CMPD_ID' => 'c111_cmpd_id',
				'CMPD_C112A_CMPD_FAM_NAME' => 'c112a_cmpd_fam_name',
				'CMPD_C112B_CMPD_NAME1' => 'c112b_cmpd_name1',
				'CMPD_C112C_CMPD_NAME2' => 'c112c_cmpd_name2',
				'CMPD_C112D_CMPD_CLAN_NAME' => 'c112d_cmpd_clan_name',
				'CMPD_C112E_CMPD_CONTACT' => 'c112e_cmpd_contact',
				'C113A_SURVEY_ACTIVITY' => 'c113a_survey_activity',
				'C113B_SPECIAL_ACTIV_SURVEY_TYPE' => 'c113b_special_activ_survey_type',
				'C114A_PANEL_SURVEY' => 'c114a_panel_survey',
				'C114B_PANEL_SURVEY_HHOLD' => 'c114b_panel_survey_hhold',
				'C114C_PANEL_SURVEY_HHOLD_ROUND_OTHER' => 'c114c_panel_survey_hhold_round',
				'C114CII_PANEL_SAME_RESPONDENT' => 'c114cii_panel_same_respondent',
				'S2_C201_GET_WATR_DISPSOURCE' => 'c201_get_watr_dispsource',
				'S2_C201A_GET_WATR_DISPSOURCE_WHYNOT_OTHER' => 'c201a_get_watr_dispsource_whynot',
				'S2_C202_WALK_DISP' => 'c202_walk_disp',
				'S2_C203_RESP_GENDER' => 'c203_resp_gender',
				'S2_C205_RESP_SCHLING' => 'c205_resp_schling',
				'S2_C206A_READ_NWSPPER_MALE' => 'c206a_read_nwspper_male',
				'S2_C206B_READ_NWSPPER_FEMALE' => 'c206b_read_nwspper_female',
				'S2_C207_PRI_SOURCE_INFO' => 'c207_pri_source_info',
				'S2_C207A_PRI_SOURCE_INFO_NGO' => 'c207a_pri_source_info_ngo',
				'S2_WEALTH_C208A_BOMA_WALLS' => 'c208a_boma_walls',
				'S2_WEALTH_C208B_BOMA_FLOOR' => 'c208b_boma_floor',
				'S2_WEALTH_C208C_BOMA_ROOF' => 'c208c_boma_roof',
				'S2_ASSETS_C209A_BOMA_MOBILES' => 'c209a_boma_mobiles',
				'S2_ASSETS_C209B_BOMA_RADIOS' => 'c209b_boma_radios',
				'S2_ASSETS_C209C_BOMA_SHEEP_GOATS' => 'c209c_boma_sheep_goats',
				'S2_ASSETS_C209D_BOMA_CATTLE' => 'c209d_boma_cattle',
				'S3_C301_CMPD_HHOLD' => 'c301_cmpd_hhold',
				'S3_C302A_CMPD_PPL' => 'c302a_cmpd_ppl',
				'S3_C302B_HHOLD_PPL' => 'c302b_hhold_ppl',
				'S3_MEN_C303A_CMPD_MALE' => 'c303a_cmpd_male',
				'S3_MEN_C303B_HHOLD_MALE' => 'c303b_hhold_male',
				'S3_WOMEN_C304A_CMPD_FEMALE' => 'c304a_cmpd_female',
				'S3_WOMEN_C304B_HHOLD_FEMALE' => 'c304b_hhold_female',
				'S3_U5_C305A_CMPD_CHILD' => 'c305a_cmpd_child',
				'S3_U5_C305B_HHOLD_CHILD' => 'c305b_hhold_child',
				'S3_CHILDA_AGEYRS1_C306A_CHLD1_GENDER' => 'c306a_chld1_gender',
				'S3_CHILDA_AGEYRS1_C307A_CHLD1_AGE_YRS' => 'c307a_chld1_age_yrs',
				'S3_CHILDA_C308A_CHLD1_AGE_MONTHS' => 'c308a_chld1_age_months',
				'S3_CHILDA_C309A_CHLD1_AGE_WKS' => 'c309a_chld1_age_wks',
				'S3_CHILDA_C310A_CHLD1_BRSTFDG' => 'c310a_chld1_brstfdg',
				'S3_CHILDA_C311A_CHLD1_DRHEA_PAST2WKS' => 'c311a_chld1_drhea_past2wks',
				'S3_CHILDA_DIARH1_C312A_CHLD1_DRHEA_TODAY' => 'c312a_chld1_drhea_today',
				'S3_CHILDA_DIARH1_C313A_CHLD1_DRHEA_YSTRDAY' => 'c313a_chld1_drhea_ystrday',
				'S3_CHILDA_DIARH1_C314A_CHLD1_DRHEA_BFOYSTRDAY' => 'c314a_chld1_drhea_bfoystrday',
				'S3_CHILDA_DIARH1_C315A_CHLD1_DRHEA_PASTWK' => 'c315a_chld1_drhea_pastwk',
				'S3_CHILDB_AGEYRS2_C306B_CHLD2_GENDER' => 'c306b_chld2_gender',
				'S3_CHILDB_AGEYRS2_C307B_CHLD2_AGE_YRS' => 'c307b_chld2_age_yrs',
				'S3_CHILDB_C308B_CHLD2_AGE_MONTHS' => 'c308b_chld2_age_months',
				'S3_CHILDB_C309B_CHLD2_AGE_WKS' => 'c309b_chld2_age_wks',
				'S3_CHILDB_C310B_CHLD2_BRSTFDG' => 'c310b_chld2_brstfdg',
				'S3_CHILDB_C311B_CHLD2_DRHEA_PAST2WKS' => 'c311b_chld2_drhea_past2wks',
				'S3_CHILDB_DIARH2_C312B_CHLD2_DRHEA_TODAY' => 'c312b_chld2_drhea_today',
				'S3_CHILDB_DIARH2_C313B_CHLD2_DRHEA_YSTRDAY' => 'c313b_chld2_drhea_ystrday',
				'S3_CHILDB_DIARH2_C314B_CHLD2_DRHEA_BFOYSTRDAY' => 'c314b_chld2_drhea_bfoystrday',
				'S3_CHILDB_DIARH2_C315B_CHLD2_DRHEA_PASTWK' => 'c315b_chld2_drhea_pastwk',
				'S3_CHILDC_AGEYRS3_C306C_CHLD3_GENDER' => 'c306c_chld3_gender',
				'S3_CHILDC_AGEYRS3_C307C_CHLD3_AGE_YRS' => 'c307c_chld3_age_yrs',
				'S3_CHILDC_C308C_CHLD3_AGE_MONTHS' => 'c308c_chld3_age_months',
				'S3_CHILDC_C309C_CHLD3_AGE_WKS' => 'c309c_chld3_age_wks',
				'S3_CHILDC_C310C_CHLD3_BRSTFDG' => 'c310c_chld3_brstfdg',
				'S3_CHILDC_C311C_CHLD3_DRHEA_PAST2WKS' => 'c311c_chld3_drhea_past2wks',
				'S3_CHILDC_DIARH3_C312C_CHLD3_DRHEA_TODAY' => 'c312c_chld3_drhea_today',
				'S3_CHILDC_DIARH3_C313C_CHLD3_DRHEA_YSTRDAY' => 'c313c_chld3_drhea_ystrday',
				'S3_CHILDC_DIARH3_C314C_CHLD3_DRHEA_BFOYSTRDAY' => 'c314c_chld3_drhea_bfoystrday',
				'S3_CHILDC_DIARH3_C315C_CHLD3_DRHEA_PASTWK' => 'c315c_chld3_drhea_pastwk',
				'S3_CHILDD_AGEYRS4_C306D_CHLD4_GENDER' => 'c306d_chld4_gender',
				'S3_CHILDD_AGEYRS4_C307D_CHLD4_AGE_YRS' => 'c307d_chld4_age_yrs',
				'S3_CHILDD_C308D_CHLD4_AGE_MONTHS' => 'c308d_chld4_age_months',
				'S3_CHILDD_C309D_CHLD4_AGE_WKS' => 'c309d_chld4_age_wks',
				'S3_CHILDD_C310D_CHLD4_BRSTFDG' => 'c310d_chld4_brstfdg',
				'S3_CHILDD_C311D_CHLD4_DRHEA_PAST2WKS' => 'c311d_chld4_drhea_past2wks',
				'S3_CHILDD_DIARH4_C312D_CHLD4_DRHEA_TODAY' => 'c312d_chld4_drhea_today',
				'S3_CHILDD_DIARH4_C313D_CHLD4_DRHEA_YSTRDAY' => 'c313d_chld4_drhea_ystrday',
				'S3_CHILDD_DIARH4_C314D_CHLD4_DRHEA_BFOYSTRDAY' => 'c314d_chld4_drhea_bfoystrday',
				'S3_CHILDD_DIARH4_C315D_CHLD4_DRHEA_PASTWK' => 'c315d_chld4_drhea_pastwk',
				'S3_CHILDE_AGEYRS5_C306E_CHLD5_GENDER' => 'c306e_chld5_gender',
				'S3_CHILDE_AGEYRS5_C307E_CHLD5_AGE_YRS' => 'c307e_chld5_age_yrs',
				'S3_CHILDE_C308E_CHLD5_AGE_MONTHS' => 'c308e_chld5_age_months',
				'S3_CHILDE_C309E_CHLD5_AGE_WKS' => 'c309e_chld5_age_wks',
				'S3_CHILDE_C310E_CHLD5_BRSTFDG' => 'c310e_chld5_brstfdg',
				'S3_CHILDE_C311E_CHLD5_DRHEA_PAST2WKS' => 'c311e_chld5_drhea_past2wks',
				'S3_CHILDE_DIARH5_C312E_CHLD5_DRHEA_TODAY' => 'c312e_chld5_drhea_today',
				'S3_CHILDE_DIARH5_C313E_CHLD5_DRHEA_YSTRDAY' => 'c313e_chld5_drhea_ystrday',
				'S3_CHILDE_DIARH5_C314E_CHLD5_DRHEA_BFOYSTRDAY' => 'c314e_chld5_drhea_bfoystrday',
				'S3_CHILDE_DIARH5_C315E_CHLD5_DRHEA_PASTWK' => 'c315e_chld5_drhea_pastwk',
				'S3_CHILDF_AGEYRS6_C306F_CHLD6_GENDER' => 'c306f_chld6_gender',
				'S3_CHILDF_AGEYRS6_C307F_CHLD6_AGE_YRS' => 'c307f_chld6_age_yrs',
				'S3_CHILDF_C308F_CHLD6_AGE_MONTHS' => 'c308f_chld6_age_months',
				'S3_CHILDF_C309F_CHLD6_AGE_WKS' => 'c309f_chld6_age_wks',
				'S3_CHILDF_C310F_CHLD6_BRSTFDG' => 'c310f_chld6_brstfdg',
				'S3_CHILDF_C311F_CHLD6_DRHEA_PAST2WKS' => 'c311f_chld6_drhea_past2wks',
				'S3_CHILDF_DIARH6_C312F_CHLD6_DRHEA_TODAY' => 'c312f_chld6_drhea_today',
				'S3_CHILDF_DIARH6_C313F_CHLD6_DRHEA_YSTRDAY' => 'c313f_chld6_drhea_ystrday',
				'S3_CHILDF_DIARH6_C314F_CHLD6_DRHEA_BFOYSTRDAY' => 'c314f_chld6_drhea_bfoystrday',
				'S3_CHILDF_DIARH6_C315F_CHLD6_DRHEA_PASTWK' => 'c315f_chld6_drhea_pastwk',
				'S3_CHILDG_AGEYRS7_C306G_CHLD7_GENDER' => 'c306g_chld7_gender',				
				'S3_CHILDG_AGEYRS7_C307G_CHLD7_AGE_YRS' => 'c307g_chld7_age_yrs',
				'S3_CHILDG_C308G_CHLD7_AGE_MONTHS' => 'c308g_chld7_age_months',
				'S3_CHILDG_C309G_CHLD7_AGE_WKS' => 'c309g_chld7_age_wks',
				'S3_CHILDG_C310G_CHLD7_BRSTFDG' => 'c310g_chld7_brstfdg',
				'S3_CHILDG_C311G_CHLD7_DRHEA_PAST2WKS' => 'c311g_chld7_drhea_past2wks',
				'S3_CHILDG_DIARH7_C312G_CHLD7_DRHEA_TODAY' => 'c312g_chld7_drhea_today',
				'S3_CHILDG_DIARH7_C313G_CHLD7_DRHEA_YSTRDAY' => 'c313g_chld7_drhea_ystrday',
				'S3_CHILDG_DIARH7_C314G_CHLD7_DRHEA_BFOYSTRDAY' => 'c314g_chld7_drhea_bfoystrday',
				'S3_CHILDG_DIARH7_C315G_CHLD7_DRHEA_PASTWK' => 'c315g_chld7_drhea_pastwk',
				'S3_CHILDH_AGEYRS8_C306H_CHLD8_GENDER' => 'c306h_chld8_gender',
				'S3_CHILDH_AGEYRS8_C307H_CHLD8_AGE_YRS' => 'c307h_chld8_age_yrs',
				'S3_CHILDH_C308H_CHLD8_AGE_MONTHS' => 'c308h_chld8_age_months',
				'S3_CHILDH_C309H_CHLD8_AGE_WKS' => 'c309h_chld8_age_wks',
				'S3_CHILDH_C310H_CHLD8_BRSTFDG' => 'c310h_chld8_brstfdg',
				'S3_CHILDH_C311H_CHLD8_DRHEA_PAST2WKS' => 'c311h_chld8_drhea_past2wks',
				'S3_CHILDH_DIARH8_C312H_CHLD8_DRHEA_TODAY' => 'c312h_chld8_drhea_today',
				'S3_CHILDH_DIARH8_C313H_CHLD8_DRHEA_YSTRDAY' => 'c313h_chld8_drhea_ystrday',
				'S3_CHILDH_DIARH8_C314H_CHLD8_DRHEA_BFOYSTRDAY' => 'c314h_chld8_drhea_bfoystrday',
				'S3_CHILDH_DIARH8_C315H_CHLD8_DRHEA_PASTWK' => 'c315h_chld8_drhea_pastwk',
				'S4_C401_GIV_GLASS_WATR' => 'c401_giv_glass_watr',
				'S4_C401A_GIV_GLASS_WATR_WHYNOT' => 'c401a_giv_glass_watr_whynot',
				'S4_WATER_C402_WATR_DRAWN' => 'c402_watr_drawn',
				'S4_WATER_C403_CONT_TYPE' => 'c403_cont_type',
				'S4_WATER_C404_CONT_DIPPER' => 'c404_cont_dipper',
				'S4_WATER_C405_CONT_COVER' => 'c405_cont_cover',
				'S4_WATER_C406_WATR_SOURCE' => 'c406_watr_source',
				'S4_WATER_C407_WATR_COLLECT_BY' => 'c407_watr_collect_by',
				'S4_WATER_C407A_WATR_COLLECT_AGE_CHLD' => 'c407a_watr_collect_age_chld',
				'S4_WATER_C408_CONT_SIZE' => 'c408_cont_size',
				'S4_WATER_C409_WATR_COLLECT_WHEN' => 'c409_watr_collect_when',
				'S4_WATER_C410_WATR_TREATD' => 'c410_watr_treatd',
				'S4_WATER_C411_WATR_TREATD_HOW_OTHER' => 'c411_watr_treatd_how',
				'S4_WATER_C411A_WATR_TREATD_FILTER_TYPE' => 'c411a_watr_treatd_filter_type',
				'S4_WATER_C412_WATR_TREATD_WHEN' => 'c412_watr_treatd_when',
				'S4_WATER_C413_WATR_MIX' => 'c413_watr_mix',
				'S4_WATER_C414_WATR_SAFE' => 'c414_watr_safe',
				'S4_WATER_C415A_WATR_SAFE_WHY_OTHER' => 'c415a_watr_safe_why',
				'S4_WATER_C415B_WATR_SAFE_WHYNOT_OTHER' => 'c415b_watr_safe_whynot',
				'S5_C501_USED_DISP_EVER' => 'c501_used_disp_ever',
				'S5_C502_USED_DISP_PASTWK' => 'c502_used_disp_pastwk',
				'S5_C503_USED_DISP_LASTTIME' => 'c503_used_disp_lasttime',
				'S5_C504A_USED_DISP_WHY_OTHER' => 'c504a_used_disp_why',
				'S5_C504B_USED_DISP_WHYNOT_OTHER' => 'c504b_used_disp_whynot',
				'S5_C505_DISP_BENEFITS_OTHER' => 'c505_disp_benefits',
				'S5_C506_DISP_TRUST' => 'c506_disp_trust',
				'S5_C513_DISP_EMPTY_EVER' => 'c513_disp_empty_ever',
				'S5_C514_DISP_EMPTY_LAST_TIME' => 'c514_disp_empty_last_time',
				'S5_C515_DISP_EMPTY_LAST_DAYS' => 'c515_disp_empty_last_days',
				'S5_C517_CHARG_DISP_USE' => 'c517_charg_disp_use',
				'S5_C519_CHARG_DISP_USE_WHO' => 'c519_charg_disp_use_who',
				'S6_EDUCATION2_C601A_ATTEND_VCS' => 'c601a_attend_vcs',
				'S6_EDUCATION2_C601B_ATTEND_CEM' => 'c601b_attend_cem',
				'S6_C602_TALK_ABT_DISP' => 'c602_talk_abt_disp',
				'S6_C603_TALK_ABT_DISP_WHO_OTHER' => 'c603_talk_abt_disp_who',
				'S6_C604A_NAME_PROM' => 'c604a_name_prom',
				'S6_C604B_NAME_ASPROM' => 'c604b_name_asprom',
				'S6_C605_PROM_SEEN' => 'c605_prom_seen',
				'S6_C606_PROM_TALKED' => 'c606_prom_talked',
				'S6_C607_PROM_RATE' => 'c607_prom_rate',
				'S6_C608A_PROM_WHYGOOD_OTHER' => 'c608a_prom_whygood',
				'S6_C608B_PROM_WHYBAD_OTHER' => 'c608b_prom_whybad',
				'S7_C701_KNOW_TURNS' => 'c701_know_turns',
				'S7_C701B_CHOR_WAIT_HOWLONG' => 'c701b_chor_wait_howlong',
				'S7_C702_KNOW_WAIT' => 'c702_know_wait',
				'S7_DISPSTEPS_C703A_KNOW_STEP1' => 'c703a_know_step1',
				'S7_DISPSTEPS_C703B_KNOW_STEP2' => 'c703b_know_step2',
				'S7_DISPSTEPS_C703C_KNOW_STEP3' => 'c703c_know_step3',
				'S7_C704_KNOW_IFEMPTY_OTHER' => 'c704_know_ifempty',
				'S7_C705_INTERVIEW_LANGUAGE' => 'c705_interview_language',
				'S7_C706_INTERVIEW_FA' => 'c706_interview_fa',
				'S7_C707_INTERVIEW_TRANSLATOR' => 'c707_interview_translator',
				'S7_C708_INTERVIEW_WHO_TRANSLATE' => 'c708_interview_who_translate',
				'S8_C801_TCR_TEST' => 'c801_tcr_test',
				'S8_C801A_TCR_TEST_WHYNOT' => 'c801a_tcr_test_whynot',
				'S8_TOTAL2_C802_TCR_SAMPL_COLOR' => 'c802_tcr_sampl_color',
				'S8_TOTAL2_C803_TCR_READING' => 'c803_tcr_reading',
				'S8_C804_FCR_TEST' => 'c804_fcr_test',
				'S8_C804A_FCR_TEST_WHYNOT' => 'c804a_fcr_test_whynot',
				'S8_FREE2_C805_FCR_SAMPL_COLOR' => 'c805_fcr_sampl_color',
				'S8_FREE2_C806_FCR_READING' => 'c806_fcr_reading'
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