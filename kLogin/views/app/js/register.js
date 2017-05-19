$(document).ready(function(){
  $('select[name="regVar21"]').simplecolorpicker({picker: true, theme: 'glyphicons'});
  $('select[name="regVar21"]').simplecolorpicker('selectColor', '#ffffff');
  $('select[name="regVar31"]').simplecolorpicker({picker: true, theme: 'glyphicons'});
  $('select[name="regVar31"]').simplecolorpicker('selectColor', '#ffffff');
  $('select[name="regVar41"]').simplecolorpicker({picker: true, theme: 'glyphicons'});
  $('select[name="regVar41"]').simplecolorpicker('selectColor', '#ffffff');
  $('select[name="regVar22"]').simplecolorpicker({picker: true, theme: 'glyphicons'});
  $('select[name="regVar22"]').simplecolorpicker('selectColor', '#ffffff');
  $('select[name="regVar32"]').simplecolorpicker({picker: true, theme: 'glyphicons'});
  $('select[name="regVar32"]').simplecolorpicker('selectColor', '#ffffff');
  $('select[name="regVar42"]').simplecolorpicker({picker: true, theme: 'glyphicons'});
  $('select[name="regVar42"]').simplecolorpicker('selectColor', '#ffffff');
  dibujaCarro();
  $('#regbtn1, #regbtn2').click(function(){
    _ini_registerAuth();
  });
  $('#register').click(function(){
    _ini_register();
  });
  $('#regObj').change(function() {
    switch($('#regObj').val()){
      case '1' : dibujaCarro();
                $('#auto').show();
                $('#casa').hide();  
        break;
      case '2' : dibujaCasa();
                $('#casa').show();
                $('#auto').hide();
        break;
      default : dib += '';
    }
  });
  $('#auto').change(function() {
    dibujaCarro();
  });
  $('#casa').change(function() {
    dibujaCasa();
  });
});

function _ini_registerAuth() {
  var error_icon = '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> ',
      success_icon = '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> ',
      process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';

  $('#ajax_register2').removeClass('alert-danger');
  $('#ajax_register2').removeClass('alert-warning');
  $('#ajax_register2').addClass('alert-warning');
  $("#ajax_register2").html(process_icon  + 'Procesando información, por favor espere...');
  $('#ajax_register2').removeClass('hide');
  $.ajax({
    type : "POST",
    url : "api/registerAuth",
    data : $('#register_form').serialize()+"&"+$('#regAuth').serialize(),
    success : function(json) {
      var obj = $.parseJSON(json);
      if(obj.success == 1) {
        $('#ajax_register2').html(success_icon + obj.message);
        $("#ajax_register2").removeClass('alert-warning');
        $("#ajax_register2").addClass('alert-success');
        setTimeout(function(){
          location.reload();
        },1000);
      } else {
        $('#ajax_register2').html(error_icon  + obj.message);
        $("#ajax_register2").removeClass('alert-warning');
        $("#ajax_register2").addClass('alert-danger');
      }
    },
    error : function() {
      window.alert('#register ERORR');
    }
  });
};

function _ini_register() {
  var error_icon = '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> ',
      success_icon = '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> ',
      process_icon = '<span class="fa fa-spinner fa-spin" aria-hidden="true"></span> ';

  $('#ajax_register').removeClass('alert-danger');
  $('#ajax_register').removeClass('alert-warning');
  $('#ajax_register').addClass('alert-warning');
  $("#ajax_register").html(process_icon  + 'Procesando información, por favor espere...');
  $('#ajax_register').removeClass('hide');
  $.ajax({
    type : "POST",
    url : "api/register",
    data : $('#register_form').serialize(),
    success : function(json) {
      var obj = $.parseJSON(json);
      if(obj.success == 1) {
        $('#ajax_register').html(success_icon + obj.message);
        $("#ajax_register").removeClass('alert-warning');
        $("#ajax_register").addClass('alert-success');
        setTimeout(function(){
          $('#registro').hide();
          $('#casa').hide();
          $('#registro2').show();
        },1000);
      } else {
        $('#ajax_register').html(error_icon  + obj.message);
        $("#ajax_register").removeClass('alert-warning');
        $("#ajax_register").addClass('alert-danger');
      }
    },
    error : function() {
      window.alert('#register ERORR');
    }
  });
};

function dibujaCarro(){
  var dib = carro.var1 + carro.var2;
  switch($('#regVar11').val()){
    case '1' : dib += '';
      break;
    case '2' : dib += carro.var3;
      break;
    default : dib += '';
  }
  dib += carro.var4;
  dib = dib.replace(/ventana/gi, $('#regVar21').val());
  dib = dib.replace(/accesorios/gi, $('#regVar21').val());
  dib = dib.replace(/objeto/gi, $('#regVar31').val());
  dib = dib.replace(/ruedas/gi, $('#regVar41').val());
  $('#objetoReg').html(dib);
}

function dibujaCasa(){
  var dib = casa.var1;
  switch($('#regVar12').val()){
    case '2' : dib += '';
      break;
    case '3' : dib += casa.var2;
      break;
    case '4' : dib += casa.var2 + casa.var3;
      break;
    case '5' : dib += casa.var2 + casa.var3 + casa.var4;
      break;
    default : dib += '';
  }
  dib = dib.replace(/ventanas/gi, $('#regVar22').val());
  dib = dib.replace(/casa/gi, $('#regVar32').val());
  dib = dib.replace(/puerta/gi, $('#regVar42').val());
  $('#objetoReg').html(dib);
}

