<!--Biblioteca JS-->
<script src="js/jquery-1.6.2.js"></script>
<script src="js/jquery-ui-1.8.16.js"></script>
<!--Fim-Biblioteca-->    

<!--Browser-->
<link rel="stylesheet" href="js/browser/browser.css">
<script src="js/browser/jquery.browser.js"></script>
<script src="js/browser/script.browser.js"></script>
<!--Fim-Browser--> 

<!--Página-Ativa--> 
<script src="js/pagina-ativa/pagina-ativa.js"></script>
<!--Fim-Página-Ativa--> 

<!--Cufon--> 
<link rel="stylesheet" href="js/cufon/font-atrox.css">
<script src="js/cufon/cufon-yui.js"></script>
<script src="js/cufon/ATROX_400.font.js"></script>

<!--Fim-Cufon--> 

<!--JS-Internas-->
<?php	
$script = $_SERVER['SCRIPT_NAME'];

if ($script=='/salvador_fest/index.php') {
	echo '
	<!--Youtube--> 
	<script src="js/galeria-php-youtube/galeria-php-youtube.js"></script>
	<link rel="stylesheet" href="js/galeria-php-youtube/galeria-youtube.css"/>
	<!--Fim-Youtube--> 
	
	<!--Cufon--> 
	<script>
		Cufon.replace("h1", {fontSize: "23px" });
		Cufon.replace(".link-cufon", {fontSize: "43px" });
		Cufon.replace(".link-blank-cufon", {fontSize: "23px" });
		Cufon.replace(".pergunta", {fontSize: "43px", color:"#f00" });
	</script>
	<!--Fim-Cufon--> 
	
	<!--Cycle--> 
	<script src="js/cycle/jquery.cycle.js"></script>
	<script src="js/cycle/script.cycle.js"></script>
	<!--Fim-Cycle--> 	
	';
}	
?>
<!--Fim-JS-Internas-->

<!--Google-Analytics-->

<!--Fim-Google-Analytics--> 