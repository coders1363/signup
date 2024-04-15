<?php 

if (isset($_POST["act"]))
	$act = $_POST["act"];
if (isset($_POST["actual_array"]))
	$actual_array = $_POST["actual_array"];
if (isset($_POST["legal_array"]))
	$legal_array = $_POST["legal_array"];


if ($act == "add_actual") {
	$result = executeQuery("SELECT act_txt_National_Code_a FROM pmt_applicant_registration_taran WHERE act_txt_National_Code_a = '{$actual_array[0]}'");

	if (is_array($result) && count($result) > 0) {
		die("Duplicate");
	}

	$var = executeQuery("INSERT INTO `pmt_applicant_registration_taran`(`act_txt_National_Code_a`, `act_txt_name_and_surname`, `act_txt_father_name`, `act_dat_Date_of_birth`, `act_txt_Id` , `act_txt_place_of_birth` , `act_txt_fixed_number_a` , `act_txt_Mobile_number_a` , `act_rad_gender` , `act_rad_gender_label`) VALUES ('{$actual_array[0]}', '{$actual_array[1]}' , '{$actual_array[2]}' , '{$actual_array[3]}' , '{$actual_array[4]}' , '{$actual_array[5]}' , '{$actual_array[6]}' , '{$actual_array[7]}' , '{$actual_array[8]}' , '{$actual_array[9]}' )");
		
	
	die("1");
}



else if ($act == "add_legal") {
	$result = executeQuery("SELECT txt_Rep_national AND txt_Postal_code FROM pmt_applicant_registration_taran WHERE txt_Rep_national = '{$legal_array[11]}' AND txt_Postal_code = '{$legal_array[17]}'");

	if (is_array($result) && count($result) > 0) {
		die("Duplicate");
	}

	$var = executeQuery("INSERT INTO `pmt_applicant_registration_taran`(`leg_txt_company_name`, `leg_drp_company_type`, `leg_drp_company_type_label`, `leg_txt_national_id` , `leg_txt_economic_code` , `leg_txt_reg_number` , `leg_txt_regplace` , `leg_dat_reg_date` , `leg_txt_statute_no` , `leg_dat_ad_date` 
, `leg_txt_ad_number`, `txt_Rep_national`, `txt_rep_name_and_surname`, `txt_rep_fix_phone`, `txt_rep_mobile`, `txt_fix_owner_number`, `txt_owner_mobile`, `txt_Postal_code`, `drp_city`, `drp_city_label` , `txr_address`) VALUES ('{$legal_array[0]}', '{$legal_array[1]}' , '{$legal_array[2]}' , '{$legal_array[3]}' , '{$legal_array[4]}' , '{$legal_array[5]}' , '{$legal_array[6]}' , '{$legal_array[7]}' , '{$legal_array[8]}' , '{$legal_array[9]}', '{$legal_array[10]}', '{$legal_array[11]}', '{$legal_array[12]}', '{$legal_array[13]}', '{$legal_array[14]}', '{$legal_array[15]}', '{$legal_array[16]}', '{$legal_array[17]}', '{$legal_array[18]}' , '{$legal_array[19]}', '{$legal_array[20]}' )");
	
	
	
		
	
	die("1");
	
}
?>
