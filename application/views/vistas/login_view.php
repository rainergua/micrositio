
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
                <div class="login">
                    <div class="card">
                        <div class="card-header">
                            <h3>Bienvenido</h3>
                        </div>
                        <div class="card-body">
							<form action="<?=base_url()?>login/ingresar" id="form_login" method="post">
                            <?=form_hidden('token',$token)?>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Usuario" name="username" id="username">
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Contraseña" name="password" id="password">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Iniciar Sesión" class="btn btn-secondary" id="btnlogin">
                            </div>
                            
							</form>
                            <div class="error"></div>
						</div><!--CARD BODY-->
						<div class="card-footer">
							<div class="d-flex justify-content-center links">
								Si usted esta registrado como preofesional puede Ingresar
							</div>
							<div class="d-flex justify-content-center">
								De lo contrario comuníquese con nosotros.
							</div>
                           
						</div>
					</div><!--CARD-->
                </div><!--LOGIN END-->
                    



                    



            
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
