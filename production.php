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
  <h2>Наша продукция</h2>
 </main>
</section>

<section id='content'>
 <main>
  <article class="leftMenu">
	<a href='production.php?link=sub_motors'>Погружные эелектродвигатели</a>
	<a href='production.php?link=hydroprotection'>Протекторы (гидрозащиты)</a>
	<a href='production.php?link=add_modules'>Модули дополнительные</a>
	<a href='production.php?link=centrifugal_pumps'>Электроприводные центробежные насосы</a>
	<a href='production.php?link=pumps_modules'>Модули насосные (газосепараторы, диспергаторы)</a>
	<a href='production.php?link=enter_modules'>Модули входные</a>
	<a href='production.php?link=check_valves'>Клапаны обратные шаровые</a>
	<a href='production.php?link=drain_valves'>Клапаны спускные (сбивные)</a>
	<a href='production.php?link=cable'>Кабель</a>
	<a href='production.php?link=cable_kits'>Кабельные удлинители</a>
	<a href='production.php?link=cable_lines'>Кабельные линии</a>
	<a href='production.php?link=thermo_system'>Термо-манометрические системы</a>
  </article>
  <article class="contentRight">
   <?php
	
	    if (isset($_GET['link']))
			{if (file_exists('content/production/'.$_GET['link'].'.html'))
				{include('content/production/'.$_GET['link'].'.html');}
				else{include('blocks/404.php');}}
			else{include('content/production/sub_motors.html');}
		
	?>
  </article>
 </main>
</section>

<?php
	include "blocks/footer.php";
?>
</body></html>