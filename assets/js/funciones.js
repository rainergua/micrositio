$(document).ready(inicio);

function inicio(){
    isMobile();
    $("#preg_off").on("click", ".prueba", function(e){
        var preg_id = this.id;
        console.log(this.id);
        $('#resp_on').html('');     
        $(this).clone(true,true).appendTo("#resp_on");
    });
}
function isMobile() {
    try{ 
        document.createEvent("TouchEvent");
        wap = '<p class="card-title"><a href="https://api.whatsapp.com/send?phone=59167325245&text=Hola!%20Tengo%20una%20consulta!" class="text-light" target="_blank">715-12345 - Especialista 1</a></p>';
        wap += '<p class="card-title"><a href="https://api.whatsapp.com/send?phone=59167325245&text=Hola!%20Tengo%20una%20consulta!" class="text-light" target="_blank">715-12345 - Especialista 2</a></p>';
        wap += '<p class="card-title"><a href="https://api.whatsapp.com/send?phone=59167325245&text=Hola!%20Tengo%20una%20consulta!" class="text-light" target="_blank">715-12345 - Especialista 3</a></p>';
        wap += '<p class="card-title"><a href="https://api.whatsapp.com/send?phone=59167325245&text=Hola!%20Tengo%20una%20consulta!" class="text-light" target="_blank">715-12345 - Especialista 4</a></p>';
        $('#whatsapp').html(wap);
        return;
    }
    catch(e){ 
        wap = '<p class="card-title"><a href="https://web.whatsapp.com/send?phone=59167325245&text=Hola!%20Tengo%20una%20consulta!" class="text-light" target="_blank">715-12345 - Especialista 1</a></p>';
        wap += '<p class="card-title"><a href="https://web.whatsapp.com/send?phone=59167325245&text=Hola!%20Tengo%20una%20consulta!" class="text-light" target="_blank">715-12345 - Especialista 2</a></p>';
        wap += '<p class="card-title"><a href="https://web.whatsapp.com/send?phone=59167325245&text=Hola!%20Tengo%20una%20consulta!" class="text-light" target="_blank">715-12345 - Especialista 3</a></p>';
        wap += '<p class="card-title"><a href="https://web.whatsapp.com/send?phone=59167325245&text=Hola!%20Tengo%20una%20consulta!" class="text-light" target="_blank">715-12345 - Especialista 4</a></p>';
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


