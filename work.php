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
  <h2>работа в компании</h2>
 </main>
</section>

<section id='content'>
 <main>
  <article class="leftMenu">
	<a href="work.php?link=codex">Кодекс деловой этики</a>
	<a href="work.php?link=reserv">Программы кадровых резервов</a>
	<a href="work.php?link=vacancys">Вакансии</a>
  </article>
  <article class="contentRight">
   <?php
	
	    if (isset($_GET['link']))
			{if (file_exists('content/work/'.$_GET['link'].'.html'))
				{include('content/work/'.$_GET['link'].'.html');}
				else{include('blocks/404.php');}}
			else{include('content/work/codex.html');}
		
	?>
  </article>
 </main>
</section>

<?php
	include "blocks/footer.php";
?>
</body></html>