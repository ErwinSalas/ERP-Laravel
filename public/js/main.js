
/**
 * Created by Erwin on 18/11/2016.
 */
$('#admin').on('change' ,function(){
    var radio = $('#admin');
    if (radio.val()=="user"){
        radio.val('admin');
        return;
    }
    else {
        radio.val('user');
    }

});

$(document).ready(function(){
    $(".push_menu").click(function(){
        $(".wrapper").toggleClass("active");
    });
});


$(document).ready(function(){
    loadProducts();
});
$(document).on('click','.pagination a',function(e){
    e.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    var route = "http://localhost:8000/productlist";
    var search=$('#input-search').val();
    $.ajax({
        url: route,
        data: {
            page: page,
            filter: search
        },
        type: 'GET',
        dataType: 'json',
        success: function(data){
            $("#data_view").html(data);
        }
    });
});
$('#btn-search').on('click',function(e){
    e.preventDefault();
    loadProducts();

});
$('#products').on('click',function(){
    loadProducts();
})
function loadProducts(){
    var page = 1;
    var route = "http://localhost:8000/productsList";
    var search=$('#input-search').val();
    $.ajax({
        url: route,
        data: {
            page: page,
            filter: search
        },
        type: 'GET',
        dataType: 'json',
        success: function(data){
            $("#data_view").html(data);
        }
    });
}

$('#add_product').on('click',function (){
    var route = "http://localhost:8000/products/create";
    $.ajax({
        url: route,
        type: 'GET',
        dataType: 'html',
        success: function(data){
            $("#data_view").html(data);
        }
    });
});

function Eliminar(id){
    var route = "http://localhost:8000/products/"+id+"";
    var token = $("meta[name='csrf-token']").attr('content');

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'DELETE',
        dataType: 'json',
        success: function(){
            loadProducts();

        }
    });
   loadProducts();
}

function Mostrar(id){
    var route = "http://localhost:8000/products/"+id;

    $.ajax({
        url: route,
        type: 'GET',
        dataType: 'html',
        success: function(data){
            $("#data_view").html(data);
        }
    });
}

function actualizar(id){
    var route = "http://localhost:8000/products/"+id+"";
    var token = $("meta[name='csrf-token']").attr('content');

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'PUT',
        dataType: 'json',
        data: {
            name:$('#name').val(),
            brand:$('#brand').val(),
            family:$('#family').val(),
            manufacturing_house:$('#manufacturing_house').val(),
            unit_type:$('#unit_type').val(),
            department:$('#department').val(),
            register_day:$('#register_day').val(),
            sales_tax:$('#sales_tax').val(),

        },
        success: function(){

        }
    });
}
