

//$(window).on("load", resaltar);
//function resaltar(jQuery){
////  $(p).css('font-weight':'bold');
//var Slides1 = $('#Slides1').val();
//var carpeta = $('#nombre1').val();
//var str1 = "url(../uploads/imagenes/web/ ";
//var str2 = carpeta;
//var res = str1.concat(str2).concat("/").concat(Slides1);
//var url = res.concat(Slides1);
//$('bg-1').css("background", "");
//$('.bg-1').css("background", "#000000");
//var imagen = document.getElementById(".bg-1");
//imagen.style.backgroundImage = res;
//$('.bg-1').css("background", url(../images/slider-1-1200x900.jpg) no-repeat center; background-size: cover);
//$('.bg-1').css("background", res);
//$('.bg-1').css("background", "url(../uploads/imagenes/slider-2-450x600.jpg)");
//$('.bg-1').css('background-image', url(/another/image/url/there.jpg);
//  alert(res);
  //alert(url);
//}
$( document ).ready(function() { slide1();});
  function slide1(){
    $('.main-header .navbar').attr({
      'style': 'background-color:#810707 ;',
    });
    $('.main-header .logo').attr({
      'style': 'background-color:#810707 ;',
    });
    $('.skin-blue .main-header li.user-header').attr({
      'style': 'background-color:#810707 ;',
    });

  }
$( document ).ready(function() { slide2();});
  function slide2(){
    var Slides2 = $('#Slides2').val();
    var carpeta = $('#nombre2').val();
    var str1 = "url(https://colectivocienciaysociedad.org/uploads/imagenes/web/";
    var str2 = carpeta;
    var res = str1.concat(str2).concat("/").concat(Slides2).concat(")");
    $('.bg-2').attr({
      'style': 'background: '+res+ ' no-repeat center ;background-size: cover;',
    });
  }
$( document ).ready(function() { slide3();});
  function slide3(){
    var Slides3 = $('#Slides3').val();
    var carpeta = $('#nombre3').val();
    var str1 = "url(https://colectivocienciaysociedad.org/uploads/imagenes/web/";
    var str2 = carpeta;
    var res = str1.concat(str2).concat("/").concat(Slides3).concat(")");
    $('.bg-3').attr({
      'style': 'background: '+res+ ' no-repeat center ;background-size: cover;',
    });
}
$( document ).ready(function() { slide4();});
  function slide4(){
    var Slides4 = $('#Slides4').val();
    var carpeta = $('#nombre4').val();
    var str1 = "url(https://colectivocienciaysociedad.org/uploads/imagenes/web/";
    var str2 = carpeta;
    var res = str1.concat(str2).concat("/").concat(Slides4).concat(")");
    $('.bg-4').attr({
      'style': 'background: '+res+ ' no-repeat center ;background-size: cover;',
    });
}
$( document ).ready(function() { slide5();});
  function slide5(){
    var Slides5 = $('#Slides5').val();
    var carpeta = $('#nombre5').val();
    var str1 = "url(https://colectivocienciaysociedad.org/uploads/imagenes/web/";
    var str2 = carpeta;
    var res = str1.concat(str2).concat("/").concat(Slides5).concat(")");
    $('.bg-5').attr({
      'style': 'background: '+res+ ' no-repeat center ;background-size: cover;',
    });
  }
$( document ).ready(function() { slide6();});
  function slide6(){
      var Slides6 = $('#Slides6').val();
      var carpeta = $('#nombre6').val();
      var str1 = "url(https://colectivocienciaysociedad.org/uploads/imagenes/web/";
      var str2 = carpeta;
      var res = str1.concat(str2).concat("/").concat(Slides6).concat(")");
      $('.bg-6').attr({
        'style': 'background: '+res+ ' no-repeat center ;background-size: cover;',
      });
    }
$(document).ready(function() {
  $('#grupo').prop('disabled', true);
  $('#grupo').html('');
  $('#grupo').append('<option value="0" selected="selected">Sin información</option>');
  $('#curso').on('change', function(){
    var id_grupo = $('#curso').val();
    if (id_grupo==0) {
      $('#grupo').prop('disabled', true);
      $('#grupo').html('');
      $('#grupo').append('<option value="0" selected="selected">Sin información</option>');
      $("#area").attr("value","");
      $("#hora_inicio").attr("value","");
      $("#hora_final").attr("value","");
    }
    else {
      $('#grupo').prop('disabled', false);
      $.ajax({
        url:"https://colectivocienciaysociedad.org/web/cursos/getGrupos",
        type: "POST",
        data: {'id_grupo' : id_grupo},
        dataType: 'json',
        success: function(data){
        $('#grupo').html(data);
        },
        error: function(){
        $('#grupo').html('');
        $('#grupo').append('<option value="0" selected="selected">Sin información</option>');
        }
      });
    }
  });
});
$(document).ready(function() {
  $('#grupo').on('change', function(){
    var id_grupo = $('#grupo').val();
    if (id_grupo==0) {
      $("#area").attr("value","");
      $("#hora_inicio").attr("value","");
      $("#hora_final").attr("value","");
    }
    else {
      $.ajax({
        url:"https://colectivocienciaysociedad.org/web/cursos/getAreaGrupo",
        type: "POST",
        data: {'id_grupo' : id_grupo},
        dataType: 'json',
        success: function(data){
          $("#area").attr("value",data);
        },
        error: function(){
          $("#area").attr("value","");
        }
      });
      $.ajax({
        url:"https://colectivocienciaysociedad.org/web/cursos/getHoraInicioGrupo",
        type: "POST",
        data: {'id_grupo' : id_grupo},
        dataType: 'json',
        success: function(data){
          $("#hora_inicio").attr("value",data);
        },
        error: function(){
          $("#hora_inicio").attr("value","");
        }
      });
      $.ajax({
        url:"https://colectivocienciaysociedad.org/web/cursos/getHoraFinalGrupo",
        type: "POST",
        data: {'id_grupo' : id_grupo},
        dataType: 'json',
        success: function(data){
          $("#hora_final").attr("value",data);
        },
        error: function(){
          $("#hora_final").attr("value","");
        }
      });
    }
  });
});
$(document).ready(function() {
  $('#nombres').on('blur', function(){
    var value=$('#nombres').val().toUpperCase();
    $("#nombres").val(value);
    var valuetrim=$.trim($('#nombres').val());
    $("#nombres").val(valuetrim);
  });
  $('#nombres, #primer apellido, #mi_archivo, #password_usuario, #confirmacionPasword_usuario, #rol').focus(function(){
          $(this).css("border", "3px solid #2A0A12")
          $(this).css("background-color", "#d9d7f5");
      });
  $('#nombres, #primer apellido, #mi_archivo, #password_usuario, #confirmacionPasword_usuario, #rol').blur(function(){
          $(this).css("border", "1px solid #2A0A12")
          $(this).css("background-color", "#efefef");
      });
  $('#area_nombres').on('blur', function(){
        var value=$('#area_nombres').val().toUpperCase();
        $("#area_nombres").val(value);
        var valuetrim=$.trim($('#area_nombres').val());
        $("#area_nombres").val(valuetrim);
      });
  $('#area_descripcion').on('blur', function(){
        var valuetrim=$.trim($('#area_descripcion').val());
        $("#area_descripcion").val(valuetrim);
      });
  $('#area_observaciones').on('blur', function(){
        var valuetrim=$.trim($('#area_observaciones').val());
        $("#area_observaciones").val(valuetrim);
      });
  $('#area_nombres').focus(function(){
    $(this).css("border", "3px solid #2A0A12")
    $(this).css("background-color", "#d9d7f5");
    $('#area_nombres').prop('readonly', '');
  });
  $('#area_descripcion').focus(function(){
    $(this).css("border", "3px solid #2A0A12")
    $(this).css("background-color", "#d9d7f5");
    $('#area_descripcion').prop('readonly', '');
  });
  $('#area_observaciones').focus(function(){
    $(this).css("border", "3px solid #2A0A12")
    $(this).css("background-color", "#d9d7f5");
    $('#area_observaciones').prop('readonly', '');
  });
  $('#area_nombres').blur(function(){
    $(this).css("border", "1px solid #2A0A12")
    $(this).css("background-color", "#efefef");
    $('#area_nombres').prop('readonly', 'readonly');
  });
  $('#area_descripcion').blur(function(){
    $(this).css("border", "1px solid #2A0A12")
    $(this).css("background-color", "#efefef");
    $('#area_descripcion').prop('readonly', 'readonly');
  });
  $('#area_observaciones').blur(function(){
    $(this).css("border", "1px solid #2A0A12")
    $(this).css("background-color", "#efefef");
    $('#area_observaciones').prop('readonly', 'readonly');
  });
  $('#materia_nombres').on('blur', function(){
        var value=$('#materia_nombres').val().toUpperCase();
        $("#materia_nombres").val(value);
        var valuetrim=$.trim($('#materia_nombres').val());
        $("#materia_nombres").val(valuetrim);
      });
  $('#materia_descripcion').on('blur', function(){
        var valuetrim=$.trim($('#materia_descripcion').val());
        $("#materia_descripcion").val(valuetrim);
      });
  $('#materia_observaciones').on('blur', function(){
        var valuetrim=$.trim($('#materia_observaciones').val());
        $("#materia_observaciones").val(valuetrim);
      });
  $('#materia_nombres').focus(function(){
    $(this).css("border", "3px solid #2A0A12")
    $(this).css("background-color", "#d9d7f5");
    $('#materia_nombres').prop('readonly', '');
  });
  $('#materia_descripcion').focus(function(){
    $(this).css("border", "3px solid #2A0A12")
    $(this).css("background-color", "#d9d7f5");
    $('#materia_descripcion').prop('readonly', '');
  });
  $('#materia_observaciones').focus(function(){
    $(this).css("border", "3px solid #2A0A12")
    $(this).css("background-color", "#d9d7f5");
    $('#materia_observaciones').prop('readonly', '');
  });
  $('#materia_nombres').blur(function(){
    $(this).css("border", "1px solid #2A0A12")
    $(this).css("background-color", "#efefef");
    $('#materia_nombres').prop('readonly', 'readonly');
  });
  $('#materia_descripcion').blur(function(){
    $(this).css("border", "1px solid #2A0A12")
    $(this).css("background-color", "#efefef");
    $('#materia_descripcion').prop('readonly', 'readonly');
  });
  $('#materia_observaciones').blur(function(){
    $(this).css("border", "1px solid #2A0A12")
    $(this).css("background-color", "#efefef");
    $('#materia_observaciones').prop('readonly', 'readonly');
  });
  $('#menuArea, #menuMateria, #tituloArchivo, #autorArchivo').focus(function(){
    $(this).css("border", "3px solid #2A0A12")
    $(this).css("background-color", "#d9d7f5");
    $('#menuArea').prop('readonly', '');
  });
  $('#menuArea, #menuMateria, #tituloArchivo, #autorArchivo').blur(function(){
    $(this).css("border", "1px solid #2A0A12");
    $(this).css("background-color", "#efefef");
  });
  $('#titulo_pagina').on('keyup', function(){
    var value=$('#titulo_pagina').val().toLowerCase();
    $("#nombre_pagina").val(value);
  });
  $('#titulo_pagina').on('blur', function(){
        var value = $.trim($('#nombre_pagina').val());
        var cadena= value.replace(/\s/g,"_");
        var chars={
		    "á":"a", "é":"e", "í":"i", "ó":"o", "ú":"u",
		    "à":"a", "è":"e", "ì":"i", "ò":"o", "ù":"u", "ñ":"n",
		    "Á":"A", "É":"E", "Í":"I", "Ó":"O", "Ú":"U",
		    "À":"A", "È":"E", "Ì":"I", "Ò":"O", "Ù":"U", "Ñ":"N"
        }
	      var expr=/[áàéèíìóòúùñ]/ig;
	      var res=cadena.replace(expr,function(e){return chars[e]});
        $("#nombre_pagina").val(res);
  });
  $('#titulo_pagina').on('blur', function(){
    var value = $.trim($('#titulo_pagina').val());
    $("#titulo_pagina").val(value);

  });
});
$( document ).ready(function() { inicio();});
  function inicio(){
//Cajas de texto Informacion Personal
    $('#nombres, #primer apellido, #mi_archivo, #password_usuario, #confirmacionPasword_usuario, #rol').css("border", "1px solid #2A0A12");
    $('#nombres, #primer apellido, #mi_archivo, #password_usuario, #confirmacionPasword_usuario, #rol').css("background-color", "#efefef");
    $('#area_nombres, #area_descripcion, #area_observaciones').css("border", "1px solid #2A0A12");
    $('#area_nombres, #area_descripcion, #area_observaciones').css("background-color", "#efefef");
    $('#area_nombres, #area_descripcion, #area_observaciones, #nombre_Old').prop('readonly', 'disabled');
    $('#area, #materia_nombres, #materia_descripcion, #materia_observaciones').css("border", "1px solid #2A0A12");
    $('#area, #materia_nombres, #materia_descripcion, #materia_observaciones').css("background-color", "#efefef");
    $('#autorArchivo, #menuArea, #menuMateria, #tituloArchivo, #materia_observaciones').css("border", "1px solid #2A0A12");
    $('#autorArchivo, #menuArea, #menuMateria, #tituloArchivo, #materia_observaciones').css("background-color", "#efefef");
    var Slides1 = $('#Slides1').val();
    $('bg-1').css("background", "#efefef");
}
