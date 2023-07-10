<?php
///////////https://lhdyerbatero.com/Prueba/portfolio.php
///////////http://localhost/personal/portfolio.php


/////////// portafolios video
//////////https://www.youtube.com/watch?v=oYBC7r5oSzk

/////////tuto con un efecto que quiero
//////////https://www.youtube.com/watch?v=ex7jGbyFgpA
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/Prueba/portfolio.css?v=1">

  <title>Document</title>

</head>
<body>
  <div id="div1" class='div1 active'>
    <div class='div1_1' >
      <div class='div1_1_1' id='' >
        <p class='steven' >Steven Gahona</p>
        <p class='steven' >Web Dev</p>
      </div>
      <div class='div1_1_2' id='' >
        
	      <a class="" target="_blank" href="http://api.whatsapp.com/send?phone=3116148465"><img src='ImgPortfolio/whatsapp9.webp?<?php echo rand(); ?>'  class='botones1'></a>
        <a class="" target="_blank" href="mailto:stevenchif3@gmail.com"><img src='ImgPortfolio/gmail2.webp?<?php echo rand(); ?>'  class='botones1'></a>

        
      </div>
      
      

    </div>
    <div class='div1_2' >
    
      <!-- <img src='ImgPortfolio/1.jpeg'  class='foto'> -->
      <img src='ImgPortfolio/artwork6.webp?<?php echo rand(); ?>'  class='foto'>
      
      
    </div>
    <div class='div1_3' id='' >
    </div>
  </div>
  <div id="div2" class='div2'>
    <div class='div2_1' >
      <p class='p_proyectos' >Portfolio</p>
    </div>
    <div class='div2_2' >
      <div class='div2_2_2' id='' onclick="goLHDY()" >
        <div class='div2_2_1_1' id='' >
          <a class='' target="_blank" href='https://lhdyerbatero.com/'><img src='ImgPortfolio/lhdy2.webp?<?php echo rand(); ?>' class='imgPaginas' alt=''></a>
          <div class='pInfoDiv' id='' >
            <p class='pInfo1'>lhdyerbatero.com</p>
            <p class='pInfo'>Página de ventas de productos de nutrición con el objetivo de promover un estilo de vida saludable.</p>
          </div>
        </div>
        <div class='' id='' >
          <button class=''>Ver sitio web</button>
        </div>

      </div>
      <div class='div2_2_2' id='' onclick="goEstepario()">
        <div class='div2_2_1_1' id='' >
          <a class='' target="_blank" href='https://estepariobooks.com/'><img src='ImgPortfolio/estepario2.webp?<?php echo rand(); ?>' class='imgPaginas' alt=''></a>
          <div class='pInfoDiv' id='' >
            <p class='pInfo1'>estepariobooks.com</p>
            <p class='pInfo'>Plataforma de venta de libros en línea.</p>
          </div>
        </div>
        <div class='' id='' >
          <button class=''>Ver sitio web</button>
        </div>
      </div>
    </div>
  </div>
  <div id="div3"  class='div3'>
    <div class='div3_1' >
      <!-- <p class='p_contactame' >Habilidades</p> -->
      <p class='p_contactame' >Habilidades</p>
    </div>
    <div class='div3_2' >
      <div class='div3_2_1' id='' >
	      <a class=""  href="#"><img src='ImgPortfolio/html2.webp?<?php echo rand(); ?>'  class='botones3'></a>
	      <a class=""  href="#"><img src='ImgPortfolio/css2.webp?<?php echo rand(); ?>'  class='botones3'></a>

      </div>
      <div class='div3_2_2' id='' >
	      <a class=""  href="#"><img src='ImgPortfolio/php2.webp?<?php echo rand(); ?>'  class='botones3'></a>

      </div>
      <div class='div3_2_3' id='' >
	      <a class=""  href="#"><img src='ImgPortfolio/mysql2.webp?<?php echo rand(); ?>'  class='botones3'></a>
	      <a class=""  href="#"><img src='ImgPortfolio/js4.webp?<?php echo rand(); ?>'  class='botones3'></a>

      </div>
    </div>
  </div>
  <div id="div4" class='div4'>
    <div class='div4_1' >
      <p class='p_contactame' >Contáctame</p>
    </div>
    <div class='div4_2' >
      <div class='div4_2_1' id='' >
        <a class="" target="_blank" href="http://api.whatsapp.com/send?phone=3116148465"><img src='ImgPortfolio/whatsapp9.webp?<?php echo rand(); ?>'  class='botones2'></a>
        <a class="" target="_blank" href="mailto:stevenchif3@gmail.com"><img src='ImgPortfolio/gmail2.webp?<?php echo rand(); ?>'  class='botones2'></a>
      </div>
      
      <div class='div4_3' id='' >
        <p class='p_correo'>stevenchif3@gmail.com</p>
      </div>
      <div class='div4_4' id='' >
      </div>
  </div>
</body>
<script>
let currentDiv = 1;
let scrollCount = 0;
let touchStartY = 0;
let touchEndY = 0;


function focusDiv() {
  const div1 = document.getElementById('div1');
  const div2 = document.getElementById('div2');
  const div3 = document.getElementById('div3');
  const div4 = document.getElementById('div4');

  div1.classList.remove('active');
  div2.classList.remove('active');
  div3.classList.remove('active');
  div4.classList.remove('active');

  if (currentDiv === 1) {
    div1.classList.add('active');
  } else if (currentDiv === 2) {
    div2.classList.add('active');
  } else if (currentDiv === 3) {
    div3.classList.add('active');
  }else if (currentDiv === 4) {
    div4.classList.add('active');
  }
  
}

window.addEventListener('wheel', function(event) {
  if (event.deltaY > 0) {
    scrollCount += 1;
  } else if (event.deltaY < 0) {
    scrollCount -= 1;
  }
  if (scrollCount >= 1) {
    currentDiv += 1;
    if (currentDiv > 4) {
      currentDiv = 1;
    }
    scrollCount = 0;
    focusDiv();
  } else if (scrollCount <= -1) {
    currentDiv -= 1;
    if (currentDiv < 1) {
      currentDiv = 4;
    }
    scrollCount = 0;
    focusDiv();
  }
});

window.addEventListener('touchstart', function(event) {
  touchStartY = event.touches[0].clientY;
});

window.addEventListener('touchend', function(event) {
  touchEndY = event.changedTouches[0].clientY;
  if (touchEndY > touchStartY) {
    currentDiv -= 1;
    if (currentDiv < 1) {
      currentDiv = 4;
    }
    focusDiv();
  } else if (touchEndY < touchStartY) {
    currentDiv += 1;
    if (currentDiv > 4) {
      currentDiv = 1;
    }
    focusDiv();
  }
});

function goLHDY() {
  window.open("https://lhdyerbatero.com/", "_blank"); // Reemplaza "https://example.com" con la URL de destino

}
function goEstepario() {
  window.open("https://estepariobooks.com/", "_blank"); // Reemplaza "https://example.com" con la URL de destino

}

</script>
</html>







