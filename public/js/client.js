/**
 * Created by Erwin on 21/11/2016.
 */
$(document).ready(function(){
    loadClients();
});
$(document).on('click','.pagination a',function(e){
    e.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    var route = "http://localhost:8000/clientslist";
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
    loadClients();

});
$('#products').on('click',function(){
    loadClients();
})
function loadClients(){
    var page = 1;
    var route = "http://localhost:8000/clientsList";
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

$('#add_Client').on('click',function (){
    var route = "http://localhost:8000/clients/create";
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
    var route = "http://localhost:8000/clients/"+id+"";
    var token = $("meta[name='csrf-token']").attr('content');

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'DELETE',
        dataType: 'json',
        success: function(){
            loadClients();

        }
    });
    loadClients();
}

function Mostrar(id){
    var route = "http://localhost:8000/clients/"+id;

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
    var route = "http://localhost:8000/clients/"+id+"";
    var token = $("meta[name='csrf-token']").attr('content');

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'PUT',
        dataType: 'json',
        data: {

            name:$('#name').val(),
            last_name:$('#last_name').val(),
            sex:$('#sex').val(),
            id:$('#id').val(),
            type:$('#type').val(),
            birthday:$('#department').val(),
            register_day:$('#register_day').val(),
            discount:$('#discount').val(),
            civil_state: $('#civil_state').val(),
            address:$('#address').val()

        },
        success: function(){
            window.location.href="http://localhost:8000/clients"
        }
    });
}
