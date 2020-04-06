<div class="container">
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
                <div class="card-header "><h5><a class="text-white"  data-toggle="modal" href="#myModal"  id="myBtn">
                    <i class="fab fa-whatsapp"  style="font-size:24px"></i>  Consulta directa - WhatsApp</a></h5></div>
                    <div class="card-body" id="whatsapp">
                        También puedes introducir tu número de teléfono y encontrar tu pregunta:
                        <div class="input-group form-group mt-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Teléfono" name="username" id="username">
                        </div>
                        <div class="form-group">
                                <button type="button" class="btn btn-secondary" id="btnlogin">
                                <i class="fas fa-search"></i>
                                Buscar
                                </button>
                        </div>
                    </div>
            </div>
        </div>
    </div><!--ROW-->


</div>