$(document).ready(function(){
  $("#addUser").click(function(){
    var nombre=$("#user").val();
    var pass=$("#pass").val();
    $.post("./inc/addUser.php","nombre="+nombre+"&pass="+pass,function(consulta){
      if(consulta==1){
        alert("Nombre: "+nombre+" Pass: "+pass+" Usuario agregado.");
        window.location.href = "./index.php";
      }else{
        alert("Error, introduzca los datos correctamente.")
      }

    });
  });

  $("#delUser").click(function(){
    var nombre=$("#user").val();
    var pass=$("#pass").val();
    $.post("./inc/delUser.php","nombre="+nombre+"&pass="+pass,function(consulta){
      if(consulta==1){
        alert("Usuario "+nombre+" borrado correctamente.");
        window.location.href = "./index.php";
      }else{
        alert("Error, introduzca los datos correctamente.")
      }

    });
  });

  $("#albumAdd").click(function(){
    $('.subirPortada').css("display","block");
    var nombreAlb=$("#nomAlb").val();
    var idUser=$('#nombreUsuario option:selected').val();
    var tipoAlb=$('#nombreAlbum option:selected').val()
    $.post("./inc/addAlbum.php","nombreAlb="+nombreAlb+"&idUser="+idUser+"&tipoAlb="+tipoAlb,function(consulta){
      alert(consulta);
    });
  });

  $("#addAlbum").click(function(){
    $('.newAlbum').css("display","block");
  });

  $("#addImg").click(function(){
    $('#albumes').css("display","block");
  });

  $("#albumes").change(function(){
    $("#dropzone").css("display","block");
  });

});
