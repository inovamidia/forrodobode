<meta charset="UTF-8"/>

<title> <?php print ( $Pagina . $TitlePadrao ) ?> </title>
<meta property="og:title" content="<?php print ($Pagina . $TitlePadrao) ?>"/>
<meta property="og:image" content="<?php print $ImgPadrao ?>"/>
<meta property="og:description" content="<?php print ($DescricaoPadrao)?>" />
<meta property="og:url" content="<?php print URL_ABSOLUTA ?>"/>

<meta name="keywords" content="forró do piu piu, forró"/>  
<meta name="author" content="Inovamidia Comunicação Visual - www.inovamidia.com.br | Design: Paulo Chacon | Produção: Everton Paixão"/>
<meta name="robots" content="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<base href=""/>

<link href='https://fonts.googleapis.com/css?family=Chau+Philomene+One:400,400italic' rel='stylesheet' type='text/css'>

<!--Style-->
<link rel="stylesheet" href="css/index.css"/>
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="js/form/form.css"/>
<!--Fim-Style-->

<!--HTML5-->
<script src="js/modernizr-2.0.6.js"></script>
<!--Fim-HTML5--> 

<!--Style-Internas-->
<?php	
$script = $_SERVER['SCRIPT_NAME'];

if ($script=='/edsa-forro-bode/index.php') {
	echo '
	<link rel="stylesheet" href="css/index.css"/>
	';
}	

if ($script!='/edsa-forro-bode/index.php') {
	echo '
	<link rel="stylesheet" href="css/internas.css"/>
	';
}

if ($script=='/edsa-forro-bode/contatos.php') {
	echo '
	<link rel="stylesheet" href="js/form/form.css"/>
	';
}

?>
<!--Fim-Style-Internas-->