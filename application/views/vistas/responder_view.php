<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-ld-6">
            <div class="jumbotron" id="preg_off">
                <h5>Listado de Preguntas Pendientes</h5>
                <?php
                    foreach ($preguntas as $row) {
                        echo '<div class="card">
                            <div class="card-body">
                                <h5 class="pregunta"><a href="#" id="'.$row->pregunta_codigo.'" class="prueba">'.$row->pregunta_cont.'</a></h5>
                            </div>
                            <p class="card-text pl-3"><small class="text-muted"><b>'.$row->user_name.', '.$row->user_ocupacion.', Edad: '.$row->user_edad.'</b></small></p>
                        </div>';
                    }
                    ?>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-ld-6">
            <div class="jumbotron">
            <div class="respform" id="respform">
                <p class="lead" id="resp_on">Haga click en un pregunta para responderla</p>
                <small class="text-muted mh-0"><b><span id="datoUser"></span></b></small>
                <hr class="my-4">
                <?php 
                    $att = array('id' => 'formresp', 'name' => 'formresp');
                    echo form_open(base_url().'consultas/guardaRespuesta', $att);?>

                    <input type="hidden" name="preg_id" id="preg_id" value="">
                    <div class="form-group">
                        <h5>
                        Bienvenido(a): <?=$this->session->userdata('nombre');?></h5>
                    </div>
                    <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-ld-6">
                            <label for="categoria">Categoría</label>
                            <select class="form-control" id="categoria" name="categoria">
                                <option value="">--Elija una Opción--</option>
                                <option value="individual">Individual</option>
                                <option value="familiar">Familiar</option>
                                <option value="violencia">Violencia</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-ld-6">
                            <label for="tipo">Tipo</label>
                            <select class="form-control" id="tipo" name="tipo">
                                <option value="">--Elija una Opción--</option>

                            </select>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Escriba su Respuesta</label>
                        <textarea class="form-control" id="repuesta" name="respuesta" rows="5"></textarea>
                    </div>
                    <div class="form-group" style="display: none;">
                        <label for="nospam">Este es un campo de control. Si lo ves, pasa de él.</label>
                        <input type="text" name="nopasa" id="nopasa"/>
                    </div> 
                    <p class="lead">
                        <button type="submit" class="btn btn-secondary" id="btn_resp">Enviar Respuesta</button>
                        <a class="btn btn-danger" href="<?php echo base_url().'login/logout';?>">Salir</a>
                        <div class="exito">Su respuesta fue enviada con éxito.</div>
                    </p>
                </form>
            </div><!--RESP-FORM-->
            </div><!--FIN JUMBOTRON-->
        </div><!--COL-->
    </div><!--row-->

</div> 


