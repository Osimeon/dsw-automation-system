"_URI" character varying(80) NOT NULL,
  "_CREATOR_URI_USER" character varying(80) NOT NULL,
  "_CREATION_DATE" timestamp without time zone NOT NULL,
  "_LAST_UPDATE_URI_USER" character varying(80),
  "_LAST_UPDATE_DATE" timestamp without time zone NOT NULL,
  "_MODEL_VERSION" integer,
  "_UI_VERSION" integer,
  "_IS_COMPLETE" boolean,
  "_SUBMISSION_DATE" timestamp without time zone,
  "_MARKED_AS_COMPLETE_DATE" timestamp without time zone,
  "INSTRUCTION_NOTE1_1" character varying(255),
  "INSTRUCTION_NOTE1_2" character varying(255),
  "INSTRUCTION_NOTE1_3" character varying(255),
  "S6B_P616_DISP_DISCSD_BARAZA" character varying(255),
  "INSTRUCTION_NOTE1_4" character varying(255),
  "S5_NOTE5_1" character varying(255),
  "S5_RELOCATE_NOTE5_2" character varying(255),
  "S5_RELOCATE_NOTE5_3" character varying(255),
  "P013_DISTRICT" character varying(255),
  "S6A_P601_MANG_WPT" character varying(255),
  "C116A_PANEL_SURVEY_OTHER" character varying(255),
  "S8_TOTAL2_P803_TCR_READING" numeric(38,10),
  "S5_REFILL_NOTE5_4" character varying(255),
  "P114B_REPLACD_PROM_WHY" character varying(255),
  "S5_REFILL_NOTE5_5" character varying(255),
  "S2_P201A_GET_WATR_DISPSOURCE_WHYNOT_OTHER" character varying(255),
  "S5_P501_RECENT_FILL_DISP" character varying(255),
  "S7_DISPSTEPS_P703B_KNOW_STEP2" character varying(255),
  "S9_NOTANK_P901_TANKREMVD_PROM" character varying(255),
  "S3_CHILDA_DIARH1_RESERVED_NAME_FOR_FIELD_LIST_LABELS_95" character varying(255),
  "S6A_P602_INVLVD_MANG_WPT" character varying(255),
  "C115A_SURVEY_ACTIVITY" character varying(255),
  "S5_P512_PROB_CL_DELIV_WHAT_OTHER" character varying(255),
  "S3_CHILDA_DIARH1_P313A_CHLD1_DRHEA_YSTRDAY" character varying(255),
  "S6A_SOURCEFNCTNG_P605_WPT_PROB_REFILL" character varying(255),
  "S3_CHILDA_DIARH1_P314A_CHLD1_DRHEA_BFOYSTRDAY" character varying(255),
  "S5_P504_STORE_CL" character varying(255),
  "P008_CWHEEL_ID" character varying(255),
  "S7_DISPSTEPS_P703A_KNOW_STEP1" character varying(255),
  "RESP_P112_RESP_CONTCT" character varying(255),
  "S2_P210_YRS_LIVD_VIL_OTHER" character varying(255),
  "S3_CHILDA_AGEYRS1_P307A_CHLD1_AGE_YRS" numeric(38,10),
  "C115B_SPECIAL_ACTIV_SURVEY_TYPE_OTHER" character varying(255),
  "S2_P204_RESP_AGE" integer,
  "S7_P701_KNOW_TURNS_OTHER" character varying(255),
  "S4_C705_INTERVIEW_LANGUAGE" character varying(255),
  "P114A_REPLACD_PROM_DATE" timestamp without time zone,
  "S3_CHILDA_DIARH1_GENERATED_TABLE_LIST_LABEL_94" character varying(255),
  "P015_LOCATN" character varying(255),
  "P103A_WPT_HEALTHFAC" character varying(255),
  "P101_WPT_NAME" character varying(255),
  "S4_P_FA4" character varying(255),
  "S6B_P614_ACTIVTY_HRS" integer,
  "S7_P702_KNOW_WAIT" integer,
  "P107_WPT_GPS_ACC" numeric(38,10),
  "P114_PROM_AT_INSTALTN" character varying(255),
  "RESP_P113_RESP_PROM_ASPROM" character varying(255),
  "CONSENT_NOTE1_5" character varying(255),
  "CONSENT_NOTE1_6" character varying(255),
  "S9_P906_PROB_HARDWR_CL" character varying(255),
  "CONSENT_NOTE1_7" character varying(255),
  "S5_P508_RECEIVD_CL_SINCE_INSTALN" character varying(255),
  "P103C_WPT_OAF_SUBLOC" character varying(255),
  "S4_P401A_GIV_GLASS_WATR_WHYNOT" character varying(255),
  "NOTE10_1" character varying(255),
  "S6A_SOURCEFNCTNG_NOTE6_1" character varying(255),
  "S5_P509_RECEIVD_CL_LAST" character varying(255),
  "S5_P501_RECENT_FILL_DISP_OTHER" character varying(255),
  "S6A_SOURCEFNCTNG_P603_WPT_PROB_HOWLONG" integer,
  "S8_P804_FCR_TEST" character varying(255),
  "S3_CHILDA_P308A_CHLD1_AGE_MONTHS" numeric(38,10),
  "S4_C707_INTERVIEW_TRANSLATOR" character varying(255),
  "S5_DISPEMPTY_P514_DISP_EMPTY_LAST_TIME" character varying(255),
  "META_INSTANCE_ID" character varying(255),
  "P004_END" timestamp without time zone,
  "S8_NOTE8_1" character varying(255),
  "WPT_P102A_WPT_ID_OTHER" character varying(255),
  "S8_NOTE8_2" character varying(255),
  "P100B_SPOT_TANK_IN_DISP" character varying(255),
  "S4_P407_WATR_COLLECT_BY_OTHER" character varying(255),
  "S3_CHILDA_P311A_CHLD1_DRHEA_PAST2WKS" character varying(255),
  "S5_DISPEMPTY_P516_DISP_EMPTY_WHY_OTHER" character varying(255),
  "S4_C706_INTERVIEW_FA" character varying(255),
  "S9_P911A_PROB_RUMOR_TYP_OTHER" character varying(255),
  "S5_P518_CHARG_COMM_CURENTLY" character varying(255),
  "S6A_P_FA6" character varying(255),
  "S3_U5_P305A_CMPD_CHILD" integer,
  "S3_U5_P305B_HHOLD_CHILD" integer,
  "C116B_PANEL_SURVEY_HHOLD" character varying(255),
  "S9_NOTANK_NOTE9_1" character varying(255),
  "S5_P520_CHARG_COMM_HOWMUCH" integer,
  "S4_P411_WATR_TREATD_HOW_OTHER" character varying(255),
  "S5_P505_STORE_TEMP_FLACTN" character varying(255),
  "S6B_P612_PERFMD_ACTIVTY_OTHER" character varying(255),
  "S6A_P607_WORK_HRS" character varying(255),
  "S5_P504A_STORE_CL_WHYNOT" character varying(255),
  "S8_NOTE8_4" character varying(255),
  "S8_NOTE8_3" character varying(255),
  "P007_SURVEYOR_ID" integer,
  "S8_NOTE8_6" character varying(255),
  "S5_DISPEMPTY_P514_DISP_EMPTY_LAST_TIME_OTHER" character varying(255),
  "S8_NOTE8_5" character varying(255),
  "WPT_P102_WPT_ID" character varying(255),
  "S5_P509_RECEIVD_CL_LAST_OTHER" character varying(255),
  "P103_WPT_HUB" character varying(255),
  "S3_CHILDA_DIARH1_P312A_CHLD1_DRHEA_TODAY" character varying(255),
  "P012_COUNTY" character varying(255),
  "S6A_SOURCEFNCTNG_P606_WPT_PROB_USE" character varying(255),
  "S6A_P608_INVLVD_COMM_ACTIVTY" character varying(255),
  "S8_TOTAL2_P802_TCR_SAMPL_COLOR" character varying(255),
  "P006_SURVEYOR_NAME" character varying(255),
  "P011_PRGRM" character varying(255),
  "P100C_SPOT_CL_IN_TANK" character varying(255),
  "S5_P513_DISP_EMPTY_EVER" character varying(255),
  "S8_FREE2_P805_FCR_SAMPL_COLOR" character varying(255),
  "S2_P201_GET_WATR_DISPSOURCE_OTHER" character varying(255),
  "S7_P701_KNOW_TURNS" character varying(255),
  "S2_P205_RESP_SCHLING_OTHER" character varying(255),
  "C116A_PANEL_SURVEY" character varying(255),
  "S9_P911B_PROB_RUMOR_RESPONS_OTHER" character varying(255),
  "NOTE1_8" character varying(255),
  "S5_P504A_STORE_CL_WHYNOT_OTHER" character varying(255),
  "P107_WPT_GPS_LNG" numeric(38,10),
  "S8_FREE2_P806_FCR_READING" numeric(38,10),
  "S6B_P615_COMTEE_PERFMD_PROMO" character varying(255),
  "P003_DEVICEID" character varying(255),
  "P014_DIVISN" character varying(255),
  "S5_P_FA5" character varying(255),
  "P103A_WPT_HEALTHFAC_OTHER" character varying(255),
  "P005_TODAY" timestamp without time zone,
  "S9_P912A_PROB_DISP_NGO" character varying(255),
  "S9_P910_PROB_RUMOR" character varying(255),
  "S8_P_FA8" character varying(255),
  "S9_P907B_PROB_HARDWR_CL_RESPONS_OTHER" character varying(255),
  "SUBLOC_P016_SUBLOC" character varying(255),
  "S9_P907A_PROB_HARDWR_CL_TYP_OTHER" character varying(255),
  "S5_DISPEMPTY_P515_DISP_EMPTY_LAST_DAYS" integer,
  "S9_P_FA9" character varying(255),
  "S9_P909B_PROB_COMM_RESPONS_OTHER" character varying(255),
  "S3_CHILDA_P309A_CHLD1_AGE_WKS" numeric(38,10),
  "P107_WPT_GPS_ALT" numeric(38,10),
  "S7_P_FA7" character varying(255),
  "P_FA1" character varying(255),
  "S6A_SOURCEFNCTNG_P604_WPT_PROB_REPAIR" character varying(255),
  "S5_P506_STORE_CHLD_ACES" character varying(255),
  "S7_DISPSTEPS_NOTE7_1" character varying(255),
  "P002_START" timestamp without time zone,
  "S3_CHILDA_DIARH1_P315A_CHLD1_DRHEA_PASTWK" character varying(255),
  "S2_P203_RESP_GENDER" character varying(255),
  "S5_P511_PROB_CL_DELIV" character varying(255),
  "S5_P503A_KEY_SHOW_WHYNOT" character varying(255),
  "S5_P519_CHARG_COMM_WHO_OTHER" character varying(255),
  "S5_P503_KEY_DISP" character varying(255),
  "P100A_SPOT_WPT_USABLE" character varying(255),
  "S3_CHILDA_P310A_CHLD1_BRSTFDG" character varying(255),
  "S2_P201_GET_WATR_DISPSOURCE" character varying(255),
  "S5_P507_UNOPEND_REFILLS" integer,
  "S9_NOTANK_P905_TANKRETURN_CONDITS_OTHER" character varying(255),
  "S3_CHILDA_AGEYRS1_P306A_CHLD1_GENDER" character varying(255),
  "S9_NOTE9_2" character varying(255),
  "S4_P407_WATR_COLLECT_BY" character varying(255),
  "VIL_P017A_VIL_OTHER" character varying(255),
  "S5_P510_RECEIVD_CL_TIMES" integer,
  "S8_P801_TCR_TEST" character varying(255),
  "S9_P908_PROB_COMM" character varying(255),
  "S5_P517_CHARG_COMM" character varying(255),
  "S6B_P613_WHO_ACOMPANID_OTHER" character varying(255),
  "P107_WPT_GPS_LAT" numeric(38,10),
  "S9_NOTANK_P903_TANKREMVD_WHY_OTHER" character varying(255),
  "S4_P411A_WATR_TREATD_FILTER_TYPE_OTHER" character varying(255),
  "P103C_WPT_OAF_SUBLOC_OTHER" character varying(255),
  "CONSENT_P109_RESP_CONSENT" character varying(255),
  "S5_DISPEMPTY_NOTE5_6" character varying(255),
  "S6B_P611_PERFMD_PROMO" character varying(255),
  "S4_P411A_WATR_TREATD_FILTER_TYPE" character varying(255),
  "P011_PRGRM_OTHER" character varying(255),
  "P100AI_SPOT_WPT_NOTUSABLE" character varying(255),
  "RESP_P110_RESP_NAME" character varying(255),
  "S5_P502_MIX_CL" character varying(255),
  "S6A_P601_MANG_WPT_OTHER" character varying(255),
  "S9_NOTANK_P904_TANKRETURN_PLAN" character varying(255),
  "VIL_P017_VIL" character varying(255),
  "S8_P804A_FCR_TEST_WHYNOT" character varying(255),
  "C115B_SPECIAL_ACTIV_SURVEY_TYPE" character varying(255),
  "S8_P801A_TCR_TEST_WHYNOT" character varying(255),
  "S5_P503A_KEY_SHOW_WHYNOT_OTHER" character varying(255),
  "S9_NOTANK_P902A_TANKREMVD_WHO_EXPLAIN" character varying(255),
  "S6A_P609_INVLVD_GRPS_OTHER" character varying(255),
  "S2_P205_RESP_SCHLING" character varying(255),
  "C116C_PANEL_SURVEY_HHOLD_ROUND_OTHER" character varying(255),
  "S7_DISPSTEPS_P703C_KNOW_STEP3" character varying(255),
  "S2_P200_GET_WATR_RSPONSBL" character varying(255),
  "S4_C705_INTERVIEW_LANGUAGE_OTHER" character varying(255),
  "S9_NOTANK_P902_TANKREMVD_WHO" character varying(255),
  "S9_P912_PROB_DISP_ACTION_OTHER" character varying(255),
  "SUBLOC_P016A_SUBLOC_OTHER" character varying(255),
  "S2_P202_WALK_DISP" integer,
  "S9_P909A_PROB_COMM_TYP_OTHER" character varying(255),
  "S4_C708_INTERVIEW_WHO_TRANSLATE" character varying(255),
  "S6A_NOTE6_2" character varying(255),
  "S2_P210_YRS_LIVD_VIL" character varying(255),
  "S4_P401_GIV_GLASS_WATR" character varying(255),
  "P009_COUNTRY" character varying(255),
  "S4_P410_WATR_TREATD" character varying(255),