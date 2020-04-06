  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Envío de mensaje por WhatsApp</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form action="" method="post" id="formwap">
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-ld-6">
                            <label for="exampleFormControlInput1">Nombre Completo</label>
                            <input type="text" class="form-control" id="nombrew" name="nombre" placeholder="Nombre Completo">
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-ld-6">
                            <label for="exampleFormControlInput1">Teléfono</label>
                            <input type="number" class="form-control" id="fonow" name="fono" placeholder="Teléfono">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">                
                        <div class="col-12 col-sm-12 col-md-6 col-ld-6">
                            <label for="exampleFormControlInput1">Edad</label>
                            <input type="number" class="form-control" id="edadw" name="edad" placeholder="Edad">
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-ld-6">
                            <label for="exampleFormControlInput1">Ocupación</label>
                            <input type="text" class="form-control" id="ocupacionw" name="ocupacion" placeholder="Ocupación">
                        </div>
                    </div>
                </div>                   
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">¿Qué sientes en este momento?</label>
                    <textarea class="form-control" id="preg1" name="preg1" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">¿Desde cuando te sientes asi? </label>
                    <textarea class="form-control" id="preg2" name="preg2" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">¿Por qué crees sentirte asi?</label>
                    <textarea class="form-control" id="preg3" name="preg3" rows="2"></textarea>
                </div>  
                <div class="form-group" style="display: none;">
                    <label for="nospam">Este es un campo de control. Si lo ves, pasa de él.</label>
                    <input type="text" name="nopasaw" id="nopasaw"/>
                </div>       
        </div><!--Modal-BODY-->        
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="submit" class="btn btn-success" id="modalwap">Enviar consulta</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
            </form>
      </div>
    </div>
  </div>
  
</div>





</div> <!--End main-->
<footer class="bg-gray-1000  my-2">
    <div class="container">
        <div class="row  justify-content-center align-items-center">
            <div class="col  text-center">
                Ministerio de Educación | Dirección Avenida Arce Nro. 2147, La Paz - Bolivia | Teléfono (591 -2) 2442144 | Linea Gratuita 800-10-0050 | Casilla de correo 3116 <br />
                <a href="http://www.minedu.gob.bo/">Ministerio de Educación</a> © <?=date("Y")?>
            </div>
        </div>
    </div>
</footer>
</body>
