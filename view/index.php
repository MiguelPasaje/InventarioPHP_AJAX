<?php

    session_start();

    if (!isset($_SESSION['usuario'])) {
        echo("user".$_SESSION['usuario']);
        echo "loggd aout";
        echo header('location:../index.php');
    }

?>

<?php
//include('../utils/conexionBD.php');
include '../inc/head.php';
?>
<body>

<?php
include '../inc/nav.php';
?>


    
    <div class='container'>

        <div class="my-5">
            <button class="btn btn-primary ">
            Nuevo Producto
            </button>            
        </div>


        <form action="">
        <input type="hidden" id="id_update">
        <div class="formProducto form-group card "style="width: 18rem;">
            <div class="card-header">
                nuevo producto
            </div>
                <div class="col-md-12 my-4 h3">
                    <!-- <input type="text" id="id-marca" class="form-control" placeholder="Marca"> -->
                    
                    <select class="form-control" id="option_marca">
                        <option class="form-control" value="">Sleccione Marca</option>                        
                            <?php        
                                include('../utils/conexionBD.php');
                                $query = "select * from marca order by id_marca";
                                $result = mysqli_query($connection, $query);

                                if (!$result) {
                                    die('query pq-list failed'.mysqli_error($connection));
                                }

                                while ($row_m = mysqli_fetch_array($result)) {
                                    $id_m=$row_m['id_marca'];
                                    $marca=$row_m['nombre_marca'];
                                ?>
                                <option id="id-marca" class="form-control" value="<?php echo $id_m;?>"><?php echo $marca; ?></option>
                                <?php
                                }
                            ?>
                        
                    </select>

                    <select class="form-control" id="option_marca">
                        <option class="form-control" value="">Sleccione Proveedor</option>                        
                            <?php        
                                include('../utils/conexionBD.php');
                                $query = "select * from proveedor order by id_proveedor";
                                $result = mysqli_query($connection, $query);

                                if (!$result) {
                                    die('query pq-list failed'.mysqli_error($connection));
                                }

                                while ($row_m = mysqli_fetch_array($result)) {
                                    $id_m=$row_m['id_proveedor'];
                                    $marca=$row_m['descripcion_proveedor'];
                                ?>
                                <option id="id-proveedor" class="form-control" value="<?php echo $id_m;?>"><?php echo $marca; ?></option>
                                <?php
                                }
                            ?>
                        
                    </select>
                    <select class="form-control" id="option_marca">
                        <option class="form-control" value="">Sleccione Zona</option>                        
                            <?php        
                                include('../utils/conexionBD.php');
                                $query = "select * from zonas order by id_zona";
                                $result = mysqli_query($connection, $query);

                                if (!$result) {
                                    die('query pq-list failed'.mysqli_error($connection));
                                }

                                while ($row_m = mysqli_fetch_array($result)) {
                                    $id_m=$row_m['id_zona'];
                                    $marca=$row_m['descripcion_zona'];
                                ?>
                                <option id="id-zona" class="form-control" value="<?php echo $id_m;?>"><?php echo $marca; ?></option>
                                <?php
                                }
                            ?>
                        
                    </select>                    
                    <input type="text" id="id-codigo" class="form-control" placeholder="Codigo">
                    <input type="text" id="id-descripcion" class="form-control" placeholder="Descripción">
                    <input type="text" id="id-precio" class="form-control" placeholder="Precio">
                    <button type="button" id="btn_add"class="btn btn-primary">Guardar</button>
                    
                </div>
        </div>
        </form>


        <div> 
        
            <div class=" table-responsive col-md-12 my-4 h3">           
                <table class="table table-bordered table-sm table-striped tabñe-condensed">
                    <thead>
                        <tr>
                            <td>id</td>
                            <td>Marca</td>   
                            <td>proveedor</td>   
                            <td>Zona</td>  
                            <td>Codigo</td>
                            <td>Descripción</td>        
                            <td>Precio</td>  
                            <td>opcion</td> 
                        </tr>
                    </thead>
                    <tbody id="listarProductos"></tbody>
                    <tbody id="searchProductos"></tbody>
                </table>
            </div>
        </div>
    </div>
                        
    
</body>
<?php
include '../inc/footer.php';
 ?>

