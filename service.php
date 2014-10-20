<!doctype html>
<html><head><meta charset="utf-8">
 <link rel="shortcut icon" href="images/favicon.ico" />
 <title>ООО "Алмаз"</title>
 <link rel="stylesheet" href="style.css" />
 <script src="script.js"></script>
</head><body>

<?php
	include "blocks/header.php";
	include "blocks/nav.php";
?>
 
<section id='header'>
 <main>
  <h2>общая информация</h3>
 </main>
</section>

<section id='content'>
 <main>
  <article class="leftMenu">
		<a href="service.php?link=service">Сервисное обслуживание</a>
		<a href="service.php?link=rent">Прокат</a>
		<a href="service.php?link=repair">Капитальный ремонт</a>
  </article>
  <article class="contentRight">
   <?php
	
	    if (isset($_GET['link']))
			{if (file_exists('content/service/'.$_GET['link'].'.html'))
				{include('content/service/'.$_GET['link'].'.html');}
				else{include('blocks/404.php');}}
			else{include('content/service/service.html');}
		
	?>
  </article>
 </main>
</section>

<?php
	include "blocks/footer.php";
?>
</body></html>