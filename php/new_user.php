<?php

session_start();

echo '

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <title>Document</title> -->

<style>

@media print {
    button {
      display: none;
    }

	#login_page {
		display: none;
	  }
  }


	button {
		border-radius: 4px;
		background: linear-gradient(to right, #67b26b, #4ca2cb) !important;
		border: none;
		color: #ffffff;
		text-align: center;
		text-transform: uppercase;
		font-family: Tahoma;
		font-size: 12.5px;
		font-weight: bold;
		padding: 15px;
		width: 100px;
		transition: all 0.4s;
		cursor: pointer;
		margin: 5px;
	}

	button:hover {
		text-shadow: 0 0 6px rgba(255, 255, 255, 1);
		-webkit-box-shadow: 0 5px 40px -10px rgba(0, 0, 0, 0.57);
		-moz-box-shadow: 0 5px 40px -10px rgba(0, 0, 0, 0.57);
		transition: all 0.4s ease 0s;
	}
	.print_button_div
	{
	display: flex !important;
	flex-direction: column !important;
	align-items: center !important;
	flex-wrap: wrap m !important;
	}
</style>
</head>

<body>
<div dir="rtl" style="position: absolute; margin: 0 auto; left: 0; right: 0; max-width: 670px; font-family: B Nazanin, Tahoma; font-size: 14pt; background-color: #d5f1f0; padding: 5px; border: 1px solid #cdd8dd; border-radius: 5px/15px;">
<div style="margin-bottom: 15px; max-width: 670px; width: 100%; min-height: 60px; padding: 1%;">
<div></div>
<div style="margin-left: 60px; color: #126668; font-weight: bolder; margin-top: 10px;">
<h4 style="margin: 0px;">مشخصات کاربر جدید :</h4>
</div>
</div>
<div style="background-color: #f5fffe; border: 1px solid #cbd6dc; border-radius: 7px/12px; padding: 10px 20px;">
<div></div>
<div><span style="color: #4b924d; font-family: B Titr,Tahoma; font-size: 12pt;"></span>
<ul style="color: #90ceba; line-height: 30pt;">
<li><b style="display: inline-block; width: 120px; color: #094a4f;"> نام کاربری حقیقی : </b> <span id="act_txt_National_Code_a" style="display: inline-block; min-width: 150px; text-align: left; color: #105b42;">'. @$_SESSION['username'] .'</span></li>
<li><b style="display: inline-block; width: 120px; color: #094a4f;">نام کاربری حقوقی : </b> <span id="txt_Rep_national" style="display: inline-block; min-width: 150px; text-align: left; color: #105b42;">'. @$_SESSION['username'] .'</span></li>
<li><b style="display: inline-block; width: 120px; color: #094a4f;">کلمه عبور : </b> <span id="act_txt_Mobile_number_a" style="display: inline-block; min-width: 150px; text-align: left; color: #105b42;">'. @$_SESSION['password'] .'</span></li>
<li><b style="display: inline-block; width: 120px; color: #094a4f;">نام : </b> <span id="act_txt_name_and_surname" style="display: inline-block; min-width: 150px; text-align: left; color: #105b42;">'. @$_SESSION['firstname'] .'</span></li>
<li><b style="display: inline-block; width: 120px; color: #094a4f;">نام و نام خانوادگی : </b> <span id="act_txt_name_and_surname" style="display: inline-block; min-width: 150px; text-align: left; color: #105b42;">'. @$_SESSION['lastname'] .'</span></li>
</ul>
</div>
<div style="text-align: center;" class="print_button_div"><button type="button" onclick="return(window.print(),false);">پرینت</button> <a href="https://portal.hstp.ir/" id="login_page" target="_blank" style="color: #50a4ba; text-decoration: none; font-weight: bold;"><br /></a></div>
</div>
</div>
</body>

</html>
';