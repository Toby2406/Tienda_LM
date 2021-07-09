class Fucniones {
  Cargar()
  {
    window.onload = function()
    {
      $('#loader').fadeOut();//oculta el loader
      $('body').removeClass('hidden');//Quita la clase hidden
    }
  }
  NavBar()
  {
    $(document).ready(main);
    var contador = 0;
    function main()
    {
      $('.btn_menuB').click(function(){
          if (contador == 1)
          {
              $('nav').animate({
                left: '0'
              });
              contador = 0;
          }else {
            contador = 1;
            $('nav').animate({
              left: '-100%'
            });
          }
      });
    };
  }
  Editar(id)
    {
      var input = document.getElementById(id);
      input.disabled = false;
      input.style.border = '1px solid #651fff ';
      input.style.color = '#b388ff';
      input.classList.add('editable');
      //Hacer visible los botones
      var btn = document.getElementById('btn_editar').style.visibility = 'visible';
    }
    Nomalidad()
    {
      var btn = document.getElementsByClassName('editable');
      var cant = btn.length;
      var id_btn = Array();
      for (var i = 0; i < cant; i++)
      {//Recuperamos todos los ids seleccionados
      var  id = btn[i].getAttribute('id');
      id_btn.push(id);
      }
      //Cambio de color y modificacion
      for (var i = 0; i < id_btn.length; i++)
      {
        var estilos_id = document.getElementById(id_btn[i]);
        estilos_id.disabled = true;
        estilos_id.style.border = '1px solid #fff';
        estilos_id.style.color =' #fff';
      }
      //Ocultar botones
      var btn = document.getElementById('btn_editar').style.visibility = 'hidden';
    }

    Arriba()
    {
      $(document).ready(function()
      {
        $('.arriba').click(function(){
          $('body, html').animate({//Devuelve  arriba de la apgina
            scrollTop:'0px'
          }, 400);//Velociad de subida
        });
        $(window).scroll(function(){
          if ($(this).scrollTop() > 0)//Si bajo la pagina
          {
            $('.arriba').slideDown(200);//Aparicion de la subida
          }else
          {
            $('.arriba').slideUp(200);//Desaparece la subida
          }
        });
      });
    }

}
function EjecutarNav()
{
  var f = new Fucniones;
  f.NavBar();
}
function EjecutarEditar(id)
{
  var f = new Fucniones;
  f.Editar(id);
}
function EjecutarCargar()
{
  var f = new Fucniones;
  f.Cargar();
}
 function EjecutarNormal()
 {
   var f = new Fucniones;
   f.Nomalidad();
 }
 function EjecutarArriba()
 {
   var f = new Fucniones;
   f.Arriba();
 }
