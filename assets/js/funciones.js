$(document).ready(inicio);

function inicio(){
    //$("#btn_preg").click(dataPregunta);
    //$("#btn_resp").click(dataRespuesta);
    //$("#modalwap").click(envWap);
    $("#categoria").change(cambiaCategoria);
    $('.exito').hide();
    $("#btn_resp").attr("disabled",true);   
    isMobile();
    //////////////
    $("#myBtn").click(function(){
        $("#myModal").modal();
      });
    
    ////////////////77
    $("#preg_off").on("click", ".prueba", function(e){
        var preg_id = this.id;
        $("#preg_id").val(preg_id);
        $("#btn_resp").attr("disabled",false);
        $('#resp_on').html('');     
        $(this).clone(true,true).appendTo("#resp_on");
        var url = base_url() + "consultas/obtUsuario";
        $.post(url, { preg_id : preg_id }, function(res){
            var usuario = JSON.parse(res);
            datos = "Nombre = " + usuario.user_name + " | Teléfono: " + usuario.user_fono + " <br />";
            datos +=  "Edad: " + usuario.user_edad + " | Ocupación: " + usuario.user_ocupacion;
            $("#datoUser").html(datos);
        });
    });

    
    /***********
     * ********** */

    $("#formpreg").validate({
        rules: {
            'nombre': {required: true},
            'fono': {required: true, min:60000000, max: 79999999},
            'edad': {required: true},
            'ocupacion': {required: true},
            'mensaje': {required: true}
        },
        messages: {
            'nombre': {required: "El Nombre Completo es Obligatorio"},
            'fono': {required: "El Teléfono es  obligatorio", min: "Teléfono Celular Inválido", max: "Teléfono Celular Inválido"},
            'edad': {required: "Elija su Edad"},
            'ocupacion': {required: "Debe ingresar su ocupación"},
            'mensaje': {required: "Debe enviar su pregunta"}
        },
        submitHandler: function(form){
            if($('#nopasa').val()=='')
                dataPregunta();
            return false;
        }
    });


    $("#formwap").validate({
        rules: {
            'nombre': {required: true},
            'fono': {required: true, min:60000000, max: 79999999},
            'edad': {required: true, min: 18},
            'ocupacion': {required: true},
            'preg1': {required: true},
            'preg2': {required: true},
            'preg3': {required: true}
        },
        messages: {
            'nombre': {required: "El Nombre Completo es Obligatorio"},
            'fono': {required: "El Teléfono es  obligatorio", min: "Teléfono Celular Inválido", max: "Teléfono Celular Inválido"},
            'edad': {required: "La edad es obligatoria", min: "Debes ser mayor de 18 años"},
            'ocupacion': {required: "Debe ingresar su ocupación"},
            'preg1': {required: "Debe enviar su respuesta"},
            'preg2': {required: "Debe enviar su respuesta"},
            'preg3': {required: "Debe enviar su respuesta"}
        },
        submitHandler: function(form){
            if($('#nopasaw').val()=='')
            {
                envWap();
            }
            return false;
        }
    });

    
    $("#formresp").validate({
        rules: {
            'categoria': {required: true},
            'tipo': {required: true},
            'respuesta': {required: true},
        },
        messages: {
            'categoria': {required: "Debe elegir una opción"},
            'tipo': {required: "Debe elegir una opción"},
            'respuesta': {required: "La respuesta es obligatoria"},
        },
        submitHandler: function(form){
            if($('#nopasa').val()=='')
                dataRespuesta();
            return false;
        }
    });
    /***************
     ************ */
}

function cambiaCategoria(){
    catsel = $('#categoria').val().toLowerCase();
    $("#tipo").html('');
    if(catsel=='individual'){
        sel = '<option value="">--Elija una Opción--</option>';
        sel += '<option value=miedo>Miedo</option>';
        sel += '<option value=soledad>Soledad</option>';
        sel += '<option value=angustia>Angustia</option>';
    }else{ 
        if(catsel=='familiar'){
            sel = '<option value="">--Elija una Opción--</option>';
            sel += '<option value=hijos>Hijos</option>';
            sel += '<option value=conyugue>Conyugue</option>';
            sel += '<option value=disf_familiar>Disfuncion Familiar</option>';
        }else{
            sel = '<option value="">--Elija una Opción--</option>';
            sel += '<option value=proteccion>Protección</option>';
            sel += '<option value=intervencion>Intervención</option>';
            sel += '<option value=derivar>Derivación</option>';
        }
    }
    $("#tipo").html(sel);
}
function envWap(){
    var url = base_url() + "consultas/guardaWap";
    $.post(url, $("#formwap").serialize(), function(res){
        $("#formwap").fadeOut("slow");   // Hacemos desaparecer el div "formulario" con un efecto fadeOut lento.
        if(res != ''){
            if(isMobile()){
                url = 'https://api.whatsapp.com/send?phone=' + res;
            }
            else{
                url = 'https://web.whatsapp.com/send?phone=' + res;
            }
            $("#formwap")[0].reset();
            $("#formwap").delay(500).fadeIn("slow");
            window.open(url, '_blank');
            //$(".exito").show('slow').fadeIn("slow");      // Si hemos tenido éxito, hacemos aparecer el div "exito" con un efecto fadeIn lento tras un delay de 0,5 segundos.
        } else {
            $(".exito").val('HUBO UN ERROR AL GUARDAR POR FAVOR VUELVE A INTENTARLO!!!!');
            $("#formwap").delay(500).fadeIn("slow");
            $(".exito").show('slow').fadeIn("slow");      // Si no, lo mismo, pero haremos aparecer el div "fracaso"
        }
    });
}

function dataPregunta(){
    var url = base_url() + "consultas/guardaMensaje";
    $.post(url, $("#formpreg").serialize(), function(res){
        $("#formpreg").fadeOut("slow");   // Hacemos desaparecer el div "formulario" con un efecto fadeOut lento.
        if(res == 1){
            $("#formpreg")[0].reset();
            $("#formpreg").delay(500).fadeIn("slow");
            $(".exito").show('slow').fadeIn("slow");      // Si hemos tenido éxito, hacemos aparecer el div "exito" con un efecto fadeIn lento tras un delay de 0,5 segundos.
        } else {
            $(".exito").val('HUBO UN ERROR AL GUARDAR POR FAVOR VUELVE A INTENTARLO!!!!');
            $("#formpreg").delay(500).fadeIn("slow");
            $(".exito").show('slow').fadeIn("slow");      // Si no, lo mismo, pero haremos aparecer el div "fracaso"
        }
    });
}
function generaLista(data){
    var preg = JSON.parse(data);
    var fichas = '<h5>Listado de Preguntas Pendientes</h5>';
    $.each(preg, function(i, item)
    {
        fichas += '<div class="card">';
        fichas += '<div class="card-body">';
        fichas += '<h5 class="pregunta"><a href="#" id="'+ preg[i]["pregunta_codigo"] + '" class="prueba">' + preg[i]["pregunta_cont"] + '</a></h5></div>';
        fichas += '<p class="card-text pl-3"><small class="text-muted"><b>'+ preg[i]["user_name"] + ', '+ preg[i]["user_ocupacion"] + ', Edad: '+ preg[i]["user_edad"] + '</b></small></p>';
        fichas += '</div>';
    });
    $("#resp_on").html('Haga click en un pregunta para responderla');
    $("#preg_off").html(fichas);
    $("#preg_off").delay(500).fadeIn("slow");
    $("#resp_on").delay(500).fadeIn("slow");
    $("#datoUser").delay(500).fadeIn("slow");
    return;
}
function dataRespuesta(){
    var url = base_url() + "consultas/guardaRespuesta";
    $.post(url, $("#formresp").serialize(), function(res){
        $("#formresp").fadeOut("slow");   // Hacemos desaparecer el div "formulario" con un efecto fadeOut lento.
        $("#preg_off").fadeOut("slow");
        $("#resp_on").fadeOut("slow");
        $("#datoUser").fadeOut("slow");
        if(res == 1){
            $("#formresp")[0].reset();
            $("#preg_off").html('');
            $("#resp_on").html('');
            $("#datoUser").html('');
            var url2 = base_url() + "consultas/obtPregUsu";
            $.post(url2, {}, function(data){
                generaLista(data);
            });
            $("#formresp").delay(500).fadeIn("slow");
            $(".exito").show('slow').fadeIn("slow");      // Si hemos tenido éxito, hacemos aparecer el div "exito" con un efecto fadeIn lento tras un delay de 0,5 segundos.
        } else {
            $("#formresp").delay(500).fadeIn("slow");
            $(".exito").val('HUBO UN ERROR AL GUARDAR POR FAVOR VUELVE A INTENTARLO!!!!');
            $(".exito").show('slow').fadeIn("slow");     // Si no, lo mismo, pero haremos aparecer el div "fracaso"
        }
    });
}
/*function respLogin(){
    var url = base_url() + "consultas/ingresar";
    //console.log(url);
    $.post(url, $("#formlogin").serialize(), function(res){
        $("#formlogin").fadeOut("slow");
        //console.log(res);   // Hacemos desaparecer el div "formulario" con un efecto fadeOut lento.
        if(res == 1){
            //console.log('hola gato');
            $("formlogin").hide();
            $("#formresp").show('slow').fadeIn("slow");
            $(".exito").show('slow').fadeIn("slow");      // Si hemos tenido éxito, hacemos aparecer el div "exito" con un efecto fadeIn lento tras un delay de 0,5 segundos.
        } else {
            //console.log('existe errores');
            $(".error").val('USUARIO O CONTRSEÑA INCORRECTOS');
                // Si no, lo mismo, pero haremos aparecer el div "fracaso"
        }
    });
}*/
function isMobile() {
    try{ 
        document.createEvent("TouchEvent");
        return true;
    }
    catch(e){ 
        return false;
    }      
}

function base_url(){
	var base = window.location.href.split('/');
	var todo = window.location.href;
	return base[0]+ '//' + base[2] + '/' + base[3] + '/';
}


