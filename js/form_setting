
var fildid = [
  "#48704924165bf8d45c74c79007797641","#79056818365bcf2077e7616038066780","#15748990565bd0c2d689494086836548","#34376130965af66606b5d39032984547","#39598767665af6504477025015044246","#95796324265af511cd9f8b0076483650"];

$.each(fildid, function(index, id) {
  $(id).hide();
});

//.............


$("#btn_record").click(function(){
  Register();
}).find('button').addClass('btn-success');

function Register(){  

  var rad_Applicant = $("#rad_Applicant").getValue('');
  if (rad_Applicant == '') {
    dispAlert('لطفاً وضعیت متقاضی را انتخاب کنید.');
    return;
  }

  if (rad_Applicant === '1') {

    for(let i=0;i<required_filed_id_array_actual.length;i++){
      if ($("#"+required_filed_id_array_actual[i]).getValue() == '') {
        dispAlert('لطفاً '+required_filed_id_array_actual_txt[i]+' را وارد نمایید.');
        return;
      }
    }

    var nationalCode = $("#act_txt_National_Code_a").getValue();
    var postalCode = $("#txt_Postal_code").getValue();

    if (nationalCode == postalCode) {
      dispAlert('کد ملی حقیقی و کد پستی حقوقی نمی توانند یکسان باشند.');
      $("#act_txt_National_Code_a, #txt_Postal_code").css("border", "1px solid red");
      return;
    }


    var actual_array=[];
    actual_array.push($("#act_txt_National_Code_a").getValue());
    actual_array.push($("#act_txt_name_and_surname").getValue());
    actual_array.push($("#act_txt_father_name").getValue());
    actual_array.push($("#act_dat_Date_of_birth").getValue());
    actual_array.push($("#act_txt_Id").getValue());
    actual_array.push($("#act_txt_place_of_birth").getValue());
    actual_array.push($("#act_txt_fixed_number_a").getValue());
    actual_array.push($("#act_txt_Mobile_number_a").getValue());
    actual_array.push($("#act_rad_gender").getValue());
    actual_array.push($("#act_rad_gender").getText() || '');

    $.ajax({ 
      type: "POST",
      url: window.location,
      data: {
        actual_array: actual_array,
        act:"add_actual"
      },
      async: false,
      success: function (reg) {
        console.log(reg);
        if (reg == '1') {

          dispAlert('داده های فرم حقیقی با موفقیت ثبت شد','yellow');

        }
        else if (reg == 'Duplicate') {
          dispAlert('کد ملی حقیقی تکراری است');
          $("#act_txt_National_Code_a").css("border", "1px solid red");
          return;
        }
        else {
          dispAlert('وقوع خطا در ثبت!');
        }
      },
      error: function(a,b,c) {alert(c);}
    });
  }


  if (rad_Applicant === '2') {


    for(let i=0;i<required_filed_id_array_legal.length;i++){
      if ($("#"+required_filed_id_array_legal[i]).getValue() == '') {
        dispAlert('لطفاً '+required_filed_id_array_legal_txt[i]+' را وارد نمایید.');
        return;
      }
    }

    var legal_array=[];
    legal_array.push($("#leg_txt_company_name").getValue());
    legal_array.push($("#leg_drp_company_type").getValue());
    legal_array.push($("#leg_drp_company_type").getText() || '');
    legal_array.push($("#leg_txt_national_id").getValue());
    legal_array.push($("#leg_txt_economic_code").getValue());
    legal_array.push($("#leg_txt_reg_number").getValue());
    legal_array.push($("#leg_txt_regplace").getValue());
    legal_array.push($("#leg_dat_reg_date").getValue());
    legal_array.push($("#leg_txt_statute_no").getValue());
    legal_array.push($("#leg_dat_ad_date").getValue());
    legal_array.push($("#leg_txt_ad_number").getValue());
    legal_array.push($("#txt_Rep_national").getValue());
    legal_array.push($("#txt_rep_name_and_surname").getValue());
    legal_array.push($("#txt_rep_fix_phone").getValue());
    legal_array.push($("#txt_rep_mobile").getValue());
    legal_array.push($("#txt_fix_owner_number").getValue());
    legal_array.push($("#txt_owner_mobile").getValue());
    legal_array.push($("#txt_Postal_code").getValue());
    legal_array.push($("#drp_city").getValue());
    legal_array.push($("#drp_city").getText() || '');
    legal_array.push($("#txr_address").getValue());



    $.ajax({ 
      type: "POST",
      url: window.location,
      data: {
        legal_array: legal_array,
        act:"add_legal"
      },
      async: false,
      success: function (reg) {
        console.log(reg);
        if (reg == '1') {
          var form_id = $("form").prop('id');
          $("#"+form_id).submit();
          dispAlert('داده های فرم حقوقی با موفقیت ثبت شد','yellow');
        }
        else if (reg == 'Duplicate') {
          dispAlert('کد ملی نماینده با وکیل حقوقی تکراری است');
          dispAlert('کد پستی مالک حقوقی تکراری است');
          $("#txt_Rep_national, #txt_Postal_code").css("border", "1px solid red");
          return;   
        }
        else {
          dispAlert('وقوع خطا در ثبت!');
        }
      },
      error: function(a,b,c) {alert(c);}
    });
  }

}


//.............................

function legal_info(newVal)
{
  const legal = (newVal == '2');
  legalFields = $("[id^='leg_']");
  for(field in legalFields)
  {
    if(legalFields[field].getAttribute)
    {
      const id = legalFields[field].getAttribute('id');
      legal ? $('#'+id).enableValidation() : $('#'+id).disableValidation();
      legal ? $('#'+id).show() : $('#'+id).hide();
    }
  }
}


function actual_info(newVal)
{
  const actual = (newVal == '1');
  actualFields = $("[id^='act_']");
  for(field in actualFields)
  {
    if(actualFields[field].getAttribute)
    {
      const id = actualFields[field].getAttribute('id');
      actual ? $('#'+id).enableValidation() : $('#'+id).disableValidation();
      actual ? $('#'+id).show() : $('#'+id).hide();
    }
  }
}




$("#rad_Applicant").setOnchange(function(){

  var rad_Applicant=$("#rad_Applicant").getValue();
  if(rad_Applicant=='1'){
    var idsactualToHide = [
      "#34376130965af66606b5d39032984547","#39598767665af6504477025015044246","#95796324265af511cd9f8b0076483650"];

    $.each(idsactualToHide, function(index, id) {
      $(id).hide();
    });

    $("#15748990565bd0c2d689494086836548").show();

  }

  else  if(rad_Applicant=='2'){

    var idslegalToHide = ["15748990565bd0c2d689494086836548"];
    var idslegalToShow = ["34376130965af66606b5d39032984547", "39598767665af6504477025015044246", "95796324265af511cd9f8b0076483650" ];

    $.each(idslegalToHide, function(index, id) {
      $("#" + id).hide();
    });

    $.each(idslegalToShow, function(index, id) {
      $("#" + id).show();
    });
  }


});


//..........................

function check_nationalcode(id){
  var temp=$("#"+id).getValue();

  if(temp=="")
    return false;

  if (!/^\d{10}$/.test(temp))
  {        
    new jBox('Notice', {
      content: "کد ملی نامعتبر است",
      color: 'red'
    });
    $("#"+id).getControl().css("borderColor", "red");
    $("#"+id).getControl().focus();
    $("#"+id).setValue("");
    return;
  }
  var check = parseInt(temp[9]);
  var sum = 0;
  var i;
  for (i = 0; i < 9; ++i) {
    sum += parseInt(temp[i]) * (10 - i);
  }
  sum %= 11;
  var r= (sum < 2 && check == sum) || (sum >= 2 && check + sum == 11);
  if(r)
  {
    $("#"+id).getControl().css("borderColor", "");
    // return;
  }
  else
  {    
    new jBox('Notice', {
      content: "کد ملی نامعتبر است",
      color: 'red'
    });
    $("#"+id).getControl().css("borderColor", "red");
    $("#"+id).getControl().focus();
    $("#"+id).setValue("");
    return;
  }
}

$("#act_txt_National_Code_a").setOnchange(function(newVal,oldVal){
  check_nationalcode("act_txt_National_Code_a");
});



//...................................................


/* تابع نمایش پیام به صورت نوتیفیکیشن: */
function dispAlert(msg, color = 'yellow') {
  try{
    new jBox('Notice', {
      position: {x: 'left',y: 'center'},
      content: msg,
      color: color
    });
  }catch(e){alert(msg);}
}

//...........................................................



function addCssToGrids(){
  var arr_elems = $('div[id] .pmdynaform-grid-thead');
  for (let i = 0, p; i < arr_elems.length; i++) {
    p = $(arr_elems[i]);
    p.css('font-weight', 'bold');
    p.find('.title-column').css('white-space', 'normal').css('width', '95%').css('margin-bottom', '-10px');
    $(p.find('div.wildcard').first())
      .css({'transform' : 'rotate(-90deg)'})
      .css('margin-bottom', '20px').text('ردیف');
  }
}
$(function(){
  addCssToGrids();
});


//....................................



var required_filed_id_array_actual = [
  'act_txt_National_Code_a',
  'act_txt_name_and_surname',
  'act_txt_Mobile_number_a'
],
    required_filed_id_array_actual_txt = [
      'کد ملی',
      'ننام و نام خانوادگی',
      'شماره همراه'
    ];


var required_filed_id_array_legal = [
  'leg_txt_company_name',
  'leg_drp_company_type',
  'leg_txt_national_id',
  'leg_txt_economic_code',
  'leg_txt_reg_number',
  'leg_txt_regplace',
  'leg_dat_reg_date',
  'leg_txt_statute_no',
  'leg_dat_ad_date',
  'leg_txt_ad_number',
  'txt_Rep_national',
  'txt_Postal_code',
  'txr_address'

],
    required_filed_id_array_legal_txt = [
      'نام شرکت',
      'نوع شرکت',
      'شناسه  ملی شرکت',
      'کد اقتصادی',
      'شماره ثبت',
      'محل ثبت',
      'تاریخ ثبت',
      'شماره اساسنامه',
      'تاریخ آگهی',
      'شماره آگهی',
      'کد ملی ',
      'کد پستی مالک',
      'آدرس مالک'

    ];
