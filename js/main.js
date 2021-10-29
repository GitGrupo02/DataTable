$(document).ready(function() {
    $('#example').DataTable({
        "ajax":{
            "url": "php/consultas.php",
            "method": "POST",
        },
        "columns":[
            {"data": "id"},
            {"data": "nombre"},
            {"data": "documento"},
            {"data": "tel"},
            {"data": "direccion"}
        ]


    });
} );

// function ja(){
//     var nombre     =  $.trim($("#nombre").val());
//     var edad       =  document.getElementById('edad').value;  //$.trim($("#edad").val());

//     //console.log(nombre);
//     $.ajax({
//         url:     "consulta.php",
//         type:    "POST",
//         dataType:"json",
//         data:    {"nom": nombre, "ed": edad},
//         success: function(data){
//             alert(data);
//         },
//         error: function(x){
//             alert('hay un error');
//         }
//     })

//}