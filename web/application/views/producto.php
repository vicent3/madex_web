
    <br>
    <!-- <center>

        <img class="me-3" width=" 70%;"
        height=" 150px" src="<?php echo base_url(); ?>/img/banner.jpg" alt="">
    </center> -->
    <br>
    <div class="card-container">
        <?php
        // Suponiendo que $alumnos contiene los datos de los libros
        $cont = 1;
        foreach ($categorias->result() as $row) { ?>
            <div class="card">
                <div class="card-header">
                    <img class="me-3" width="auto;" height=" 50px" src="<?php echo $row->imagen; ?>" alt="">
                    <h5 class="card-title"><?php echo $row->descripcion; ?></h5>
                    <h6 class="card-subtitle">Por <?php echo $row->id_categoria; ?></h6>
                    <h6 class="card-subtitle">Por <?php echo $row->stock; ?></h6>
                    <h6 class="card-subtitle">Por <?php echo $row->precio_venta; ?></h6>
                </div>
                
                <div class="card-footer">
                    <form action="estudiante/eliminarbd" method="post">
                        <input type="hidden" name="idestudiante" value="<?php echo $row->id; ?>">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>

                    <form action="estudiante/editar" method="post">
                        <input type="hidden" name="idestudiante" value="<?php echo $row->id; ?>">
                        <button type="submit" class="btn btn-warning">Editar</button>
                    </form>
                </div>
            </div>
        <?php
            $cont++;
        } ?>
    </div>

</div>


