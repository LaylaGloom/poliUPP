<?php
        $recibe_pagina = "";
        if(isset($_GET['pag']))
        {
          $recibe_pagina = $_GET['pag'];
        }
    ?>
<?php include('head.php') ?>
<?php include('header.php') ?>
<?php include('navbarslide.php') ?>
<main role="main">
	<?php switch ($recibe_pagina) {
		case '1':
			include ("pagina1.php");
		break;
		case '2':
			include ("pagina2.php");
		break;
		case '3':
			include ("pagina3.php");
		break;
		default:
			include ("pagina1.php");
		break;
	} ?>
</main>
<?php include('footer.php') ?>