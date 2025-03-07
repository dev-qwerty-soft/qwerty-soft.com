<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head() ?>
  <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri()?>/img/fav-small.svg">
</head>
<body>
  <div id="page_wrapper" class="page_wrapper">
    <div class="page_inner">
      <h1>Our new website is on its way</h1>
      <p>We will be celebrating the launch of the new site very soon</p>
      <img class="progress" src="<?= get_template_directory_uri()?>/img/progress.svg" alt="Developmant Progress">
      <img id="rec" class="rec" src="<?= get_template_directory_uri()?>/img/side.png" alt="Developmant Progress">
      <img id="rec2" class="rec2" src="<?= get_template_directory_uri()?>/img/side.png" alt="Developmant Progress">
    </div>
  </div>
<?php wp_footer() ?>
<script>

function getWindowHeight() {
  var windowHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

  return windowHeight;
}

// Применяем высоту к блоку
function setBlockHeight() {
  var block = document.getElementById('page_wrapper'); // Замените 'your-block-id' на ID вашего блока
  var windowHeight = getWindowHeight();
  var windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  if(windowWidth < '750'){
  block.style.height = windowHeight + 'px';
  }
}

// Вызываем функцию при загрузке страницы и изменении размеров окна
window.onload = setBlockHeight;
window.onresize = setBlockHeight;
window.onresize = reciq;

  function reci(){
  var windowHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

  const rec = document.getElementById('rec'); 
  const rec2 = document.getElementById('rec2'); 
  let new_h = windowHeight * 614 / 1024;

  rec.style.height = new_h + 'px';
  rec2.style.height = new_h + 'px';
  }
  reci()
</script>
</body>
</html>