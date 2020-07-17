$(document).ready(function(){

console.log('jqery funciona');
let edit = false;

  fetchdatapq();

  $('#txt_search').keyup(function(e) {
    //let search = $('#txt_search').val();
    //console.log(search);
    if($('#txt_search').val()) {      
      $('#listarProductos').hide();
      let txt_search = $('#txt_search').val();
      //alert(txt_search);
      $.ajax({
        url: '../config/search.php',
        data: {txt_search}, // datos que envio al servidor
        type: 'POST',
         success: function (response) {

          //alert(response);
          if(!response.error) {
            let tasks = JSON.parse(response);
            //console.log(tasks)
            let template = '';
            var  i = 1;
            tasks.forEach( function (task)  {
              template += `
                    <tr>                 
                        <td>${task.id_producto}</td>
                        <td>${task.idMarca}</td>
                        <td>${task.id_proveerdor}</td>
                        <td>${task.id_zona}</td>
                        <td>${task.codigo}</td>
                        <td>${task.descripcion_producto}</td>
                        <td>${task.precio}</td>
                        <td>
                            <button class="eliminarpq btn btn-danger">
                              Delete
                            </button>
                            <button class="eliminarpq btn btn-success">
                              Update
                            </button>

                        </dt>
                        </tr>
                     
                    ` 
            });
            
            $('#searchProductos').html(template);
          } 
        } 
      });
    }else{
        //$('#listarProductos').show();
        //$('#searchProductos').hide();

                
    }
  });

  $('#btn_add').click(()=>{
    console.log('btn_add');
    const postDate = {
      marca  : $('#id-marca').val(),
      proveedor    : $('#id-proveedor').val(),
      zona : $('#id-zona').val(),
      codigo : $('#id-codigo').val(),
      descripcionP : $('#id-descripcion').val(),
      precio : $('#id-precio').val(),
      id  : $('#id_update').val(),
    }

    let url = edit === false ? '../config/add.php' : '../config/update.php';
    //console.log(url);
    //console.log(postDate);
    $.post(url,postDate,(response)=>{
      console.log(response);
    });

    fetchdatapq();


  });



    function fetchdatapq(){
        $.ajax({
          url : '../config/listar.php',
          type: 'GET',
          success: function(response){
            //console.log(response);
            let consulta = JSON.parse(response);
            let template = '';
            consulta.forEach(cons =>{
              template += `   
                    <tr prodID=${cons.id_producto}>                                     
                        <td>${cons.id_producto}</td>
                        <td>${cons.idMarca}</td>
                        <td>${cons.id_proveerdor}</td>
                        <td>${cons.id_zona}</td>
                        <td>${cons.codigo}</td>
                        <td>${cons.descripcion_producto}</td>
                        <td>${cons.precio}</td>
                        <td>
                        <button class="pro-delete btn btn-danger">
                          Delete
                        </button>
                        <button class="pro-update btn btn-success">
                          Update
                        </button>
                        
                    </tr>

                          ` 
            });

            //alert(template);
            $('#listarProductos').html(template);
      
          }
        });
      }

      

      $(document).on('click', '.pro-delete', (e) => {
        if(confirm('Are you sure you want to delete it?')) {
          const element = $(this)[0].activeElement.parentElement.parentElement;
          const id = $(element).attr('prodID');
          $.post('../config/delete.php', {id}, (response) => {
            fetchdatapq();
            alert(response);
          });
        }
      });



      $(document).on('click', '.pro-update', (e) => {
        //alert('update');
          const element = $(this)[0].activeElement.parentElement.parentElement;
          const id = $(element).attr('prodID');
          $.post('../config/single.php', {id}, (response) => {
            const updateDT = JSON.parse(response);
            
            updateDT.forEach(cons =>{                
              ax=cons.id_proveerdor;
              ay=cons.idMarca;
              az=cons.id_zona;

            });            

            alert(updateDT[2])
           
            $('#id-marca').val(ay);
            $('#id-proveedor').val(ax);
            $('#id-zona').val(az);
            $('#id-codigo').val(updateDT[0].codigo);
            $('#id-descripcion').val(updateDT[0].descripcion_producto);
            $('#id-precio').val(updateDT[0].precio);
            $('#id_update').val(updateDT[0].id_producto);

            /* console.log("sdfsdfsdfasdf  "+ updateDT[0].idMarca); */

            

            


            console.log('qwre'+ ax) ;

            edit = true;

            fetchdatapq();
            console.log(response);
          });
        
      });

      

      


});

