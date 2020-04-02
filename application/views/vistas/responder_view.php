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
                                </div>';
                        }
                    ?>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-ld-6">
            <div class="jumbotron">
            <div class="respform" id="respform">
                <p class="lead" id="resp_on">Haga click en un pregunta para responderla</p>
                <hr class="my-4">
                <?php 
                    $att = array('id' => 'formresp', 'name' => 'formresp');
                    echo form_open(base_url().'consultas/guardaRespuesta', $att);?>
                    <?=form_hidden('carnet',$this->session->userdata('carnet'))?>
                    <?=form_hidden('codigo',$this->session->userdata('codigo'))?>
                    <input type="hidden" name="preg_id" id="preg_id" value="0">
                    <div class="form-group">
                        <h5>
                        Bienvenido(a): <?=$this->session->userdata('nombre');?></h5>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Categoría de Pregunta</label>
                        <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoría">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Escriba su Respuesta</label>
                        <textarea class="form-control" id="repuesta" name="respuesta" rows="5"></textarea>
                    </div>
                    <p class="lead">
                        <button type="button" class="btn btn-secondary" id="btn_resp">Enviar Respuesta</button>
                        <a class="btn btn-danger" href="<?php echo base_url().'login/logout';?>">Salir</a>
                        <div class="exito">Su respuesta fue enviada con éxito.</div>
                    </p>
                </form>
            </div><!--RESP-FORM-->
            </div><!--FIN JUMBOTRON-->
        </div><!--COL-->
    </div><!--row-->


    <div class="row">
        <div class="col-12 col-sm-12 col-md-4 col-ld-4">
            <div class="card text-white bg-danger mb-4 cajaspie">
                <div class="card-header"><h5>Preguntas Recientes</h5></div>
                <div class="card-body">
                    <?php
                        foreach ($recientes as $row) {
                            echo '<p class="card-title">'.$row->pregunta_cont.'</p>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-ld-4">
            <div class="card text-white bg-warning mb-4 cajaspie">
                <div class="card-header"><h5>Preguntas Frecuentes</h5></div>
                <div class="card-body">
                    <?php
                        foreach ($frecuentes as $row) {
                            echo '<p class="card-title">'.$row->pregunta_cont.'</p>';
                        }
                    ?>
                </div>
                </div>
            </div>
        <div class="col-12 col-sm-12 col-md-4 col-ld-4">
            <div class="card text-white bg-success mb-4 cajaspie">
                <div class="card-header"><h5>Consulta directa - WhatsApp</h5></div>
                <div class="card-body" id="whatsapp">
                    
                </div>
            </div>
        </div>
    </div><!--ROW-->
</div> 
