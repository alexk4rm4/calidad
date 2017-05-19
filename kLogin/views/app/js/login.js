
$(document).ready(function(){
  $('#auth1, #auth2, #registro2').hide();

  $('select[name="ventanas"]').simplecolorpicker({picker: true, theme: 'glyphicons'});
  $('select[name="ventanas"]').simplecolorpicker('selectColor', '#ffffff');
  $('select[name="colorobjeto"]').simplecolorpicker({picker: true, theme: 'glyphicons'});
  $('select[name="colorobjeto"]').simplecolorpicker('selectColor', '#000000');
  $('select[name="ruedas"]').simplecolorpicker({picker: true, theme: 'glyphicons'});
  $('select[name="ruedas"]').simplecolorpicker('selectColor', '#ffffff');
  $('select[name="ventanasAuth1"]').simplecolorpicker({picker: true, theme: 'glyphicons'});
  $('select[name="ventanasAuth1"]').simplecolorpicker('selectColor', '#ffffff');
  $('select[name="colorobjetoAuth1"]').simplecolorpicker({picker: true, theme: 'glyphicons'});
  $('select[name="colorobjetoAuth1"]').simplecolorpicker('selectColor', '#000000');
  $('select[name="ruedasAuth1"]').simplecolorpicker({picker: true, theme: 'glyphicons'});
  $('select[name="ruedasAuth1"]').simplecolorpicker('selectColor', '#ffffff');
  $('select[name="ventanasAuth2"]').simplecolorpicker({picker: true, theme: 'glyphicons'});
  $('select[name="ventanasAuth2"]').simplecolorpicker('selectColor', '#ffffff');
  $('select[name="colorobjetoAuth2"]').simplecolorpicker({picker: true, theme: 'glyphicons'});
  $('select[name="colorobjetoAuth2"]').simplecolorpicker('selectColor', '#000000');
  $('select[name="ruedasAuth2"]').simplecolorpicker({picker: true, theme: 'glyphicons'});
  $('select[name="ruedasAuth2"]').simplecolorpicker('selectColor', '#ffffff');

  $('#loginStep1').click(function(){
    _ini_login();
  });
  $('#authbtn1').click(function(){
    _ini_auth(1);
  });
  $('#authbtn2').click(function(){
    _ini_auth(2);
  });
  $('#auth1').change(function() {
      dibujaCarro2();
  });
  $('#auth2').change(function() {
      dibujaCasa2();
  });
});

function _ini_auth(i) {
  $('#ajax_login2'+i).html('');
  $('#ajax_login2'+i).fadeIn(1);
  $.ajax({
    type : "POST",
    url : "api/login/auth",
    data : "userAuth"+i+"="+$('#userAuth'+i).val()+"&npuertaAuth"+i+"="+$('#npuertaAuth'+i).val()+"&ventanasAuth"+i+"="+$('#ventanasAuth'+i).val()+"&colorobjetoAuth"+i+"="+$('#colorobjetoAuth'+i).val()+"&ruedasAuth"+i+"="+$('#ruedasAuth'+i).val()+"&var="+i,
    success : function(json) {
      var obj = $.parseJSON(json);
      if(obj.success == 1) {
        $('#ajax_login2'+i).html(obj.message);
        setTimeout(function(){
            location.reload();
        },1000);
      } else {
        $('#ajax_login2'+i).html(obj.message);
      }
    },
    error : function() {
      window.alert('#login ERORR');
    }
  });
  $('#ajax_login2'+i).fadeOut(3000);
};

function _ini_login() {
  $('#ajax_login').html('');
  $('#ajax_login').fadeIn(1);
  console.log($('#login_form').serialize());
  $.ajax({
    type : "POST",
    url : "api/login",
    data : $('#login_form').serialize(),
    success : function(json) {
      var obj = jQuery.parseJSON(json);
      if(obj.success == 1) {
        $('#ajax_login').html(obj.message);
        setTimeout(function(){
          if(obj.objeto == 1){
            $('#userAuth1').val($('#user').val());
            $('#auth1').show();
            $('#login').hide();
            dibujaCarro2();
          }else{
            $('#userAuth2').val($('#user').val());
            $('#auth2').show();
            $('#login').hide();
            dibujaCasa2();
          }
        },1000);
      } else {
        $('#ajax_login').html(obj.message);
      }
    },
    error : function() {
      window.alert('#login ERORR');
    }
  });
  $('#ajax_login').fadeOut(3000);
};

function dibujaCarro2(){
  var dib = carro.var1 + carro.var2;
  switch($('#npuertaAuth1').val()){
    case '1' : dib += '';
      break;
    case '2' : dib += carro.var3;
      break;
    default : dib += '';
  }
  dib += carro.var4;
  dib = dib.replace(/ventana/gi, $('#ventanasAuth1').val());
  dib = dib.replace(/accesorios/gi, $('#ventanasAuth1').val());
  dib = dib.replace(/objeto/gi, $('#colorobjetoAuth1').val());
  dib = dib.replace(/ruedas/gi, $('#ruedasAuth1').val());
  $('#objetoAuth1').html(dib);
}

function dibujaCasa2(){
  var dib = casa.var1;
  switch($('#npuertaAuth2').val()){
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
  dib = dib.replace(/ventanas/gi, $('#ventanasAuth2').val());
  dib = dib.replace(/casa/gi, $('#colorobjetoAuth2').val());
  dib = dib.replace(/puerta/gi, $('#ruedasAuth2').val());
  $('#objetoAuth2').html(dib);
}