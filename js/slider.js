$(document).ready(function(){
    n=14;
    c=1;
    $('#slider').append("<img src='./img/slider/slider"+c+".jpg' alt='fondo' />");
    function fondo(){
      n=6;
      if(c==n){
        c=1;
      }else{
        c++;
      }
      $('#slider>img').attr("src","./img/slider/slider"+c+".jpg");
    }
  setInterval(fondo,8000);
});
