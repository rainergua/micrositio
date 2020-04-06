<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-ld-6">
            <div class="jumbotron">
                <p class="lead">Por favor remita su consulta, y le responderemos a la brevedad posible.</p>
                <hr class="my-4">
                <?php
                    $att = array('id' => 'formpreg', 'name' => 'formpreg');
                    echo form_open(base_url().'consultas/guardaMensaje', $att);?>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nombre Completo</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Completo">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-ld-6">
                                <label for="exampleFormControlInput1">Teléfono</label>
                                <input type="number" class="form-control" id="fono" name="fono" placeholder="Teléfono">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-ld-6">
                                <label for="edad">edad</label>
                                <select class="form-control" id="edad" name="edad">
                                    <option value="18-25">18-25</option>
                                    <option value="26-35">26-35</option>
                                    <option value="36-45">36-45</option>
                                    <option value="46-55">46-55</option>
                                    <option value="56-65">56-65</option>
                                    <option value="66 o más">66 o más</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Ocupación</label>
                        <input type="text" class="form-control" id="ocupacion" name="ocupacion" placeholder="Ocupación">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Escriba su Consulta</label>
                        <textarea class="form-control" id="mensaje" name="mensaje" rows="5"></textarea>
                    </div>
                    <div class="form-group" style="display: none;">
                        <label for="nospam">Este es un campo de control. Si lo ves, pasa de él.</label>
                        <input type="text" name="nopasa" id="nopasa"/>
                    </div> 
                    <p class="lead">
                        <button type="submit" class="btn btn-secondary" id="btn_preg">Enviar consulta</button>
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

