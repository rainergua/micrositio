$(document).ready(inicio);

function inicio(){
    $("#btn_preg").click(dataPregunta);
    $("#btn_resp").click(dataRespuesta);
    //$("#btn_login").click(respLogin);
    $('.exito').hide();
    //$('#formresp').hide();
    $("#btn_resp").attr("disabled",true);
    
    isMobile();
    $("#preg_off").on("click", ".prueba", function(e){
        var preg_id = this.id;
        console.log(preg_id);
        $("#preg_id").val(preg_id);
        console.log($("#preg_id").val());
        $("#btn_resp").attr("disabled",false);
        $('#resp_on').html('');     
        $(this).clone(true,true).appendTo("#resp_on");
    });
}
function dataPregunta(){
    var url = base_url() + "consultas/guardaMensaje";
    console.log(url);
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
function dataRespuesta(){
    var url = base_url() + "consultas/guardaRespuesta";
    console.log(url);
    $.post(url, $("#formresp").serialize(), function(res){
        $("#formresp").fadeOut("slow");   // Hacemos desaparecer el div "formulario" con un efecto fadeOut lento.
        if(res == 1){
            $("#formresp")[0].reset();
            $("#formresp").delay(500).fadeIn("slow");
            $(".exito").show('slow').fadeIn("slow");      // Si hemos tenido éxito, hacemos aparecer el div "exito" con un efecto fadeIn lento tras un delay de 0,5 segundos.
        } else {
            $("#formresp").delay(500).fadeIn("slow");
            $(".exito").val('HUBO UN ERROR AL GUARDAR POR FAVOR VUELVE A INTENTARLO!!!!');
            $(".exito").show('slow').fadeIn("slow");     // Si no, lo mismo, pero haremos aparecer el div "fracaso"
        }
    });
}
function respLogin(){
    var url = base_url() + "consultas/ingresar";
    console.log(url);
    $.post(url, $("#formlogin").serialize(), function(res){
        $("#formlogin").fadeOut("slow");
        console.log(res);   // Hacemos desaparecer el div "formulario" con un efecto fadeOut lento.
        if(res == 1){
            console.log('hola gato');
            $("formlogin").hide();
            $("#formresp").show('slow').fadeIn("slow");
            $(".exito").show('slow').fadeIn("slow");      // Si hemos tenido éxito, hacemos aparecer el div "exito" con un efecto fadeIn lento tras un delay de 0,5 segundos.
        } else {
            console.log('existe errores');
            $(".error").val('USUARIO O CONTRSEÑA INCORRECTOS');
                // Si no, lo mismo, pero haremos aparecer el div "fracaso"
        }
    });
}
function isMobile() {
    try{ 
        document.createEvent("TouchEvent");
        wap = '<p class="card-title"><a href="https://api.whatsapp.com/send?phone=59173031403&text=Hola!%20Tengo%20una%20consulta!" class="text-light" target="_blank">715-12345 - Especialista 1</a></p>';
        wap += '<p class="card-title"><a href="https://api.whatsapp.com/send?phone=59173031403&text=Hola!%20Tengo%20una%20consulta!" class="text-light" target="_blank">715-12345 - Especialista 2</a></p>';
        wap += '<p class="card-title"><a href="https://api.whatsapp.com/send?phone=59173031403&text=Hola!%20Tengo%20una%20consulta!" class="text-light" target="_blank">715-12345 - Especialista 3</a></p>';
        wap += '<p class="card-title"><a href="https://api.whatsapp.com/send?phone=59173031403&text=Hola!%20Tengo%20una%20consulta!" class="text-light" target="_blank">715-12345 - Especialista 4</a></p>';
        $('#whatsapp').html(wap);
        return;
    }
    catch(e){ 
        wap = '<p class="card-title"><a href="https://web.whatsapp.com/send?phone=59173031403&text=Hola!%20Tengo%20una%20consulta!" class="text-light" target="_blank">715-12345 - Especialista 1</a></p>';
        wap += '<p class="card-title"><a href="https://web.whatsapp.com/send?phone=59173031403&text=Hola!%20Tengo%20una%20consulta!" class="text-light" target="_blank">715-12345 - Especialista 2</a></p>';
        wap += '<p class="card-title"><a href="https://web.whatsapp.com/send?phone=59173031403&text=Hola!%20Tengo%20una%20consulta!" class="text-light" target="_blank">715-12345 - Especialista 3</a></p>';
        wap += '<p class="card-title"><a href="https://web.whatsapp.com/send?phone=59173031403&text=Hola!%20Tengo%20una%20consulta!" class="text-light" target="_blank">715-12345 - Especialista 4</a></p>';
        $('#whatsapp').html(wap);  
        return;
    }      
}

function base_url()
{
	var base = window.location.href.split('/');
	var todo = window.location.href;
	return base[0]+ '//' + base[2] + '/' + base[3] + '/';
}


