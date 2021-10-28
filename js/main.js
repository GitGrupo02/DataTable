// $(document).ready(function() {
//     $('#example').DataTable();
// } );

function ja(){
    var nombre     =  $.trim($("#nombre").val());
    var edad       =  document.getElementById('edad').value;  //$.trim($("#edad").val());

    //console.log(nombre);
    $.ajax({
        url:     "consulta.php",
        type:    "POST",
        dataType:"json",
        data:    {"nom": nombre, "ed": edad},
        success: function(data){
            alert(data);
        },
        error: function(x){
            alert('hay un error');
        }
    })

}