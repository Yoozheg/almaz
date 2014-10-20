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
  <h2>О компании</h2>
 </main>
</section>

<section id='content'>
 <main>
  <article class="leftMenu">
	<a href="index.php?link=about">О компании</a>
	<!--<a href="index.php?link=reviews">Отзывы партнёров</a>-->
	<a href="index.php?link=sertificates">Сертификаты</a>
  </article>
  <article class="contentRight">
   <?php
	
	    if (isset($_GET['link']))
			{if (file_exists('content/company/'.$_GET['link'].'.html'))
				{include('content/company/'.$_GET['link'].'.html');}
				else{include('blocks/404.php');}}
			else{include('content/company/about.html');}
		
	?>
  </article>
 </main>
</section>

<?php
	include "blocks/footer.php";
?>
</body></html>