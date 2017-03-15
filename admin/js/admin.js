$(document).ready(function(){
  Dropzone.autoDiscover = false;
  $("#dropzone").dropzone({
    url: "./inc/uploads.php?album="+$('#albumes').val(),
    addRemoveLinks: true,
    maxFileSize: 1000,
    dictResponseError: "Ha ocurrido un error en el server",
    acceptedFiles: 'image/*,.jpeg,.jpg,.png,.gif,.JPEG,.JPG,.PNG,.GIF,.rar,application/pdf,.psd',
    complete: function(file)
    {

      if(file.status == "success")
      {
        console.log(file.name)
      }
    },
    error: function(file)
    {
      alert("Error subiendo el archivo " + file.name);
    },
    removedfile: function(file, serverFileName)
    {
      var name = file.name;
      $.ajax({
        type: "POST",
        url: "./inc/uploads.php?delete=true&album="+$('#albumes').val()+"",
        data: "filename="+name,
        success: function(data)
        {
          var json = JSON.parse(data);
          if(json.res == true)
          {
            var element;
            (element = file.previewElement) != null ?
            element.parentNode.removeChild(file.previewElement) :
            false;
            alert("El elemento fué eliminado: " + name);
          }
        }
      });
    }
  });
});
