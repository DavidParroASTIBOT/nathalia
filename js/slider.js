$(document).ready(function(){
    n=14;
    c=1;
    $('#slider').append("<img src='./img/slide_"+c+"_mini.jpg' alt='fondo' />");
    function fondo(){
      n=14;
      if(c==n){
        c=1;
      }else{
        c++;
      }
      $('#slider>img').attr("src","./img/slide_"+c+"_mini.jpg"); 
    }
  setInterval(fondo,8000);
});
