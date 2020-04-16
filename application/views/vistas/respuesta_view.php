

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-ld-6">
            <div class="jumbotron">
                <h5>Tus preguntas respondidas</h5>
                <?php $i=0;
                    foreach ($respuesta as $row) {
                        $time = (date_diff(date_create($row->respuesta_date), date_create($row->pregunta_date)));
                        $resp = 'Respondido en '.$time->d.'d ' . $time->h.'h '.$time->i . 'm '.$time->s.'s';
                        echo '<div class="card">
                            <div class="card-body">
                                <h5 class="card-title">'.$row->pregunta_cont.'</h5>
                                <p class="card-text">'.$row->respuesta_cont.'</p>
                            </div>
                            <p class="card-text pl-3"><small class="text-muted"><b>'.$row->user_name.', '.$row->user_ocupacion.', Edad: '.$row->user_edad.'</b> <br />'.$resp.'
                            </small></p>
                        </div>';
                        $i++;
                    }
                    if($i==0) echo '<p class="card-text">AÚN NO TIENE NINGUNA RESPUESTA</p>'
                    ?>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-ld-6">
            <div class="jumbotron">
            <div class="respform" id="respform">
                <p class="lead" id="resp_on">Contactanos por WhatsApp</p>
                <small class="text-muted mh-0"><b><span id="datoUser"></span></b></small>
                <hr class="my-2">
                <form action="" method="post" id="formwap1">
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
                <div class="form-group">
                    <button type="submit" class="btn btn-success" id="modalwap">Enviar consulta</button>
                     <!--button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button-->
                </div>
                </form>
            </div><!--RESP-FORM-->
            </div><!--FIN JUMBOTRON-->
        </div><!--COL-->
    </div><!--row-->

</div> 