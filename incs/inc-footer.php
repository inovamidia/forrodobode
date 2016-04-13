<footer id="footer">
	
    <div class="content">
    	
        <!--Section-->
        <section class="section-footer">
            <div class="box-informacoes col-esq">          
                <h3>Informações:</h3>
                <p><small>(71)</small>99925-6599</p>
            </div>
            <img class="img-logo" src="img/logo-bode-rodape.png" alt=""/>
            <div class="col-dir">
                <a class="powered" href="http://www.inovamidia.com.br" target="_blank">
                    <img src="img/logo-inovamidia.png" alt="inovamidia creative agency">
                </a>
            </div>
        
        </section>
        <!--Fim-Section--> 
        
	</div>
    
</footer>

<!--Biblioteca JS-->
<script src="js/jquery-1.6.2.js"></script>
<script src="js/jquery-ui-1.8.16.js"></script>
<!--Fim-Biblioteca-->    

<!--Página-Ativa--> 
<script src="js/pagina-ativa/pagina-ativa.js"></script>
<!--Fim-Página-Ativa--> 
	
<!--JS-Internas-->
<?php	
$script = $_SERVER['SCRIPT_NAME'];

if ($script=='/edsa-forro-bode/index.php') {
	echo '
	<!--Twitter-->
	<link rel="stylesheet" href="js/twitter-widget/twitter.css">
	<!--Fim-Twitter-->
	';
}	

if ($script=='/edsa-forro-bode/contatos.php') {
	echo '
	<!--Form-->
	<script src="js/form/jquery.validate.js"></script>
	<script>
		$(function(){
			$("form").each(function() {
				$(this).validate();
			});
		});
	</script>
	<!--Fim-Form-->
	';
}

if ($script=='/edsa-forro-bode/atracoes.php') {
	echo '
	<!--Script--> 
	<script>
    function mudarConteudo(legenda){
		$(legenda).show();
	}
	
	$(function(){
		
		ativarMenu();
		
		function ativarMenu() {
	
			function hideObj() {
				$("article .box").each(function(index, item) {  
					var linke =	$(this);
					var ico = $(".link");
					
					linke.hide();
					ico.removeClass("link-ativo");
				});
			}			
			
			$(".link").click(function() {
				var alvo = $(this).parent().find("article .box");
				if(alvo.css("display")!="block"){
					hideObj();
					
					var ico = $(this);
					alvo.show();					
					ico.addClass("link-ativo");
				}else{
					hideObj();
				}
			});	
			
		}

	});
    </script>
	<!--Fim-Script-->
	';
}	
?>	





<!--Fim-JS-Internas-->

<!--Google-Analytics-antigo-->
<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
	try {
	var pageTracker = _gat._getTracker("UA-15260032-1");
	pageTracker._trackPageview();
	} catch(err) {}
</script>
<!--Fim-Google-Analytics-antigo-->
	
<!--Google-Analytics-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-10184443-42']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!--Fim-Google-Analytics-->