<?php
	class IDEXXSurveyFields{
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
				'' => 'idx002_start',
				'' => 'idx004_end',
				'' => 'idx005_today',
				'' => 'idx101_wpt_name',
				'' => 'idx102_wpt_id',
				'' => 'idx102a_verifctn_id',				
				'' => 'idx105_vil',
				'' => 'idx006_surveyor_name',
				'' => 'idx007_surveyor_id',
				'' => 'idx112_sample_time_dropped',
				'' => 'idx113_sample_date_collect',				
				'' => 'idx200_compd_id',
				'' => 'idx201_compd_name',
				'' => 'idx203_time_endofsample_collectn',
				'' => 'idx204_time_placed_incubator',
				'' => 'idx205_time_removed_incubator',				
				'' => 'idx205a_sample_blank',
				'' => 'idx206_yellow_pos',
				'' => 'idx207_yellow_neg',
				'' => 'idx208_mpn_coliform',
				'' => 'm209_e_coli_pos',				
				'' => 'idx210_blue_pos',
				'' => 'idx211_blue_neg',
				'' => 'idx212_mpn_e_coli',
				'' => 'm213_prob_during_processing',
				'' => 'idx214_prob_what'
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