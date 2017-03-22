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
    var nombreAlb=$("#nomAlb").val();
    var idUser=$('#nombreUsuario option:selected').val();
    var tipoAlb=$('#nombreAlbum option:selected').val()
    $.post("./inc/addAlbum.php","nombreAlb="+nombreAlb+"&idUser="+idUser+"&tipoAlb="+tipoAlb,function(consulta){
      if(consulta==1){
        alert("Álbum creado correctamente.");
      }else{
        alert("Problema al crear el álbum.");
      }
      window.location.href = "./index.php";
    });
  });

  $("#addAlbum").click(function(){
    $('.newAlbum').css("display","flex");
    $(".delAlbum").css("display","none");
  });

  $("#addImg").click(function(){
    $('#albumes').css("display","block");
    $("#image-upload").css("display","block");
    $(".subirPortada").css("display","none");
  });

  $("#albumes").change(function(){
    $("#image-upload").append('<input type="hidden" name="id_album" value="'+$("#albumes").val()+'" />');
  });

  $("#delAlbum").click(function(){
      $(".newAlbum").css("display","none");
      $(".delAlbum").css("display","flex");
  });

  $("#album2").change(function(){
      if(confirm("Desea borrar el album:"+$("#album2 option:selected").text())){
        var idAlbum=$("#album2").val();
        var nomAlb=$("#album2 option:selected").text();
        $.post("./inc/delFotos.php","idAlb="+idAlbum+"&nomAlb="+nomAlb,function(consulta){
          if(consulta){
            alert("Fotos del album borradas correctamente.");
          }else{
            alert("Problema al borrar las fotos.");
          }
          window.location.href = "./index.php";
        });
      }
  });

  $("#addPor").click(function(){
    $('#albumes').css("display","none");
    $("#image-upload").css("display","none");
    $(".subirPortada").css("display","flex");
  });
});
