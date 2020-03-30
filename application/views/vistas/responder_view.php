<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-ld-6">
        <div class="jumbotron" id="preg_off">
                <h5>Listado de Preguntas Pendientes</h5>
                <?php
                        foreach ($preguntas as $row) {
                            echo '<div class="card">
                                    <div class="card-body">
                                        <h5 class="pregunta"><a href="#" id="'.$row->pregunta_id.'" class="prueba">'.$row->pregunta_cont.'</a></h5>
                                    </div>
                                </div>';
                        }
                    ?>
                <p class="lead my-2">
                        <a class="btn btn-secondary btn-lg" href="#" role="button">Cargar Siguiente</a>
                    </p>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-ld-6">
        <div class="jumbotron">
                <p class="lead" id="resp_on">Haga click en un pregunta para responderla</p>
                <hr class="my-4">
                <?php echo form_open(base_url().'consultas/guardaRespuesta');?>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nombre Completo</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Completo">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Teléfono</label>
                        <input type="number" class="form-control" id="fono" name="fono" placeholder="Teléfono">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Escriba su Respuesta</label>
                        <textarea class="form-control" id="mensaje" name="mensaje" rows="5"></textarea>
                    </div>
                    <p class="lead">
                        <button type="submit" class="btn btn-secondary ">Enviar Respuesta</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-4 col-ld-4">
            <div class="card text-white bg-danger mb-4" style="max-width: 24rem;">
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
            <div class="card text-white bg-warning mb-4" style="max-width: 24rem;">
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
            <div class="card text-white bg-success mb-4" style="max-width: 24rem;">
                <div class="card-header"><h5>Consulta directa - WhatsApp</h5></div>
                <div class="card-body">
                    <p class="card-title"><a href="https://web.whatsapp.com/send?phone=59167325245&text=Hola!%20Tengo%20una%20consulta!" class="text-light" target="_blank">715-12345 - Especialista 1</a></p>
                    <p class="card-title"><a href="https://web.whatsapp.com/send?phone=59167325245&text=Hola!%20Tengo%20una%20consulta!" class="text-light" target="_blank">715-12345 - Especialista 2</a></p>
                    <p class="card-title"><a href="https://web.whatsapp.com/send?phone=59167325245&text=Hola!%20Tengo%20una%20consulta!" class="text-light" target="_blank">715-12345 - Especialista 3</a></p>
                    <p class="card-title"><a href="https://web.whatsapp.com/send?phone=59167325245&text=Hola!%20Tengo%20una%20consulta!" class="text-light" target="_blank">715-12345 - Especialista 4</a></p>
                </div>
            </div>
        </div>
    </div><!--ROW-->
</div> 