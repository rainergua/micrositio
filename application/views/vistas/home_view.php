<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-ld-6">
            <div class="jumbotron">
                <p class="lead">Por favor remita su consulta, y le responderemos a la brevedad posible.</p>
                <hr class="my-4">
                <?php
                    $att = array('id' => 'formpreg');
                    echo form_open(base_url().'consultas/guardaMensaje', $att);?>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nombre Completo</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Completo">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Teléfono</label>
                        <input type="number" class="form-control" id="fono" name="fono" placeholder="Teléfono">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Escriba su Consulta</label>
                        <textarea class="form-control" id="mensaje" name="mensaje" rows="5"></textarea>
                    </div>
                    <p class="lead">
                        <button type="button" class="btn btn-secondary" id="btn_preg">Enviar consulta</button>
                        <div class="exito">Su pregunta fue enviada con éxito, en breve le responderemos</div>
                    </p>
                </form>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-ld-6">
            <div class="jumbotron">
                <h5>Respuestas</h5>
                <?php
                    foreach ($respondido as $row) {
                        $time = (date_diff(date_create($row->respuesta_date), date_create($row->pregunta_date)));
                        $resp = 'Respondido en '.$time->d.'d ' . $time->h.'h '.$time->i . 'm '.$time->s.'s';
                        //print_r($time);
                        echo'<div class="card">
                            <div class="card-body">
                                <h5 class="card-title">'.$row->pregunta_cont.'</h5>
                                <p class="card-text">'.$row->respuesta_cont.'</p>
                                <p class="card-text"><small class="text-muted">'.$resp.'</small></p>
                            </div></div>';
                       }
                ?>
                <p class="lead my-2">
                        <a class="btn btn-secondary btn-lg" href="<?=base_url()?>login" role="button">Responder</a>
                    </p>
            </div>
        </div>
    </div>
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

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v6.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="809602779140911"
  theme_color="#888888"
  logged_in_greeting="Hola te podemos ayudar???"
  logged_out_greeting="Hola te podemos ayudar???">
      </div>