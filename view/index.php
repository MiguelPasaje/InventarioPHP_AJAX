<?php
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
        <div class="formProducto form-group card "style="width: 18rem;">
            <div class="card-header">
                nuevo producto
            </div>
                <div class="col-md-12 my-4 h3">
                    <input type="text" id="id-marca" class="form-control" placeholder="Marca">
                    <input type="text" id="id-proveedor" class="form-control" placeholder="proveedor">
                    <input type="text" id="id-zona" class="form-control" placeholder="Zona">
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

