
var fildid = [
  "#14337938365e56c45cde104081527824","#79056818365bcf2077e7616038066780","#15748990565bd0c2d689494086836548","#34376130965af66606b5d39032984547","#39598767665af6504477025015044246","#95796324265af511cd9f8b0076483650"];

$.each(fildid, function(index, id) {
  $(id).hide();
});

//.............


function Register(){  

  

  if (rad_Applicant === '1') {

  }


  if (rad_Applicant === '2') {


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


//...................................................


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

//.....................................................

$("#txr_Description").hide();

$("#rad_check").setOnchange(function(){
	if($("#rad_check").getValue()=="1"){
    $("#txr_Description").hide();
    }
  	else if($("#rad_check").getValue()=="2"){
    $("#txr_Description").show(1500);
    }
})

$("#txr_Description").hide();




//.........................................

$("#btn_record").click(function(){

  var form_id = $("form").prop('id');
  $("#"+form_id).submit();  
  
}).find('button').addClass('btn-success');

