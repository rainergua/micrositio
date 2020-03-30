$(document).ready(inicio);

function inicio(){
    $("#preg_off").on("click", ".prueba", function(e){
        var preg_id = this.id;
        console.log(this.id);
        $('#resp_on').html('');     
        $(this).clone(true,true).appendTo("#resp_on");
    });
}

function base_url()
{
	var base = window.location.href.split('/');
	var todo = window.location.href;
	return base[0]+ '//' + base[2] + '/' + base[3] + '/';
}