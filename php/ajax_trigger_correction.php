
if (isset($_POST["act"]))
	$act = $_POST["act"];
if (isset($_POST["actual_array"]))
	$actual_array = $_POST["actual_array"];
if (isset($_POST["legal_array"]))
	$legal_array = $_POST["legal_array"];
if (isset($_POST["id"]))
	$id = $_POST["id"];


if ($act == "update_actual") {

	$var = executeQuery("UPDATE `pmt_applicant_registration_taran` SET `act_txt_National_Code_a`='{$actual_array[0]}', `act_txt_name_and_surname`='{$actual_array[1]}', `act_txt_father_name`='{$actual_array[2]}', `act_dat_Date_of_birth`='{$actual_array[3]}' , `act_txt_Id`='{$actual_array[4]}' , `act_txt_place_of_birth`= '{$actual_array[5]}', `act_txt_fixed_number_a`= '{$actual_array[6]}', `act_txt_Mobile_number_a`= '{$actual_array[7]}' , `act_rad_gender`= '{$actual_array[8]}', `act_rad_gender_label`= '{$actual_array[9]}'WHERE `ID`='$id'");
		
	
	die("1");
}



else if ($act == "update_legal") {
	
	$var = executeQuery("UPDATE `pmt_applicant_registration_taran` SET `leg_txt_company_name`='{$legal_array[0]}', `leg_drp_company_type`='{$legal_array[1]}', `leg_drp_company_type_label`='{$legal_array[2]}', `leg_txt_national_id`= '{$legal_array[3]}' , `leg_txt_economic_code`= '{$legal_array[4]}' , `leg_txt_reg_number`= '{$legal_array[5]}', `leg_txt_regplace`= '{$legal_array[6]}' , `leg_dat_reg_date`=  '{$legal_array[7]}', `leg_txt_statute_no`= '{$legal_array[8]}', `leg_dat_ad_date`= '{$legal_array[9]}'
, `leg_txt_ad_number`='{$legal_array[10]}', `txt_Rep_national`='{$legal_array[11]}', `txt_rep_name_and_surname`='{$legal_array[12]}', `txt_rep_fix_phone`='{$legal_array[13]}', `txt_rep_mobile`='{$legal_array[14]}', `txt_fix_owner_number`='{$legal_array[15]}', `txt_owner_mobile`='{$legal_array[16]}', `txt_Postal_code`='{$legal_array[17]}', `drp_city`='{$legal_array[18]}', `drp_city_label`= '{$legal_array[19]}', `txr_address`='{$legal_array[20]}' WHERE `ID`='$id' ");
			
	
	die("1");
	
}

