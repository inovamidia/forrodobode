<?php /* include */ include("incs/includes.php"); $Pagina = ''; ?>
<!DOCTYPE HTML>

<html class="no-js" lang="pt-br">
	
<!--Head-->
<head>	      
    <?php include("incs/inc-head.php"); ?> 
    <script type="text/javascript">
	function showStuffAbove(id) {
    	document.getElementById(id).style.display = 'none';
	}
    </script> 
    <style>
	#area_popup {
		width: 100%;
		position: fixed;
		height: 100%;
		top: 0;
		background: rgba(255,255,255,0.9);
		text-align: center;
		z-index: 1000;
		-moz-opacity: 0.9;
		filter: alpha(opacity=90); 
	}
	#area_popup #popup {
		width: 550px;
		left: 50%;
		position: relative;
		margin-left: -283px;
		top: 50%;
		margin-top: -335px;
		height: 550px;
	}
	#area_popup #popup #botao_fechar {
		float: right;
	}
	</style>
</head>
<!--Fim-Head-->

<body id="index">

    <!--Wrapper-->  
    <div id="wrapper">
    
    	<!--////////////Pop-up

        <div id="area_popup">
    
          <div id="popup">
             <div id="botao_fechar">
                    <a href="#" onClick="showStuffAbove('area_popup'); return false;">
                        <img src="http://www.escolatempodecrianca.com.br/img/btn_fechar_popup.gif" width="41" height="41" alt="fechar">
                    </a>
              </div>
                    <img src="img/troca-de-camisas.jpg" width="451" height="580">
            </div>
        </div>-->

    
        <!--Header-->
        <?php include("incs/inc-header.php"); ?> 
        <!--Fim-Header-->  

        <!--Main-->    	
        <main role="main"> 
        
       		<!--Content-->   
            <div class="content">
                	
                <!--Col-Esq-->   
                <div class="col-esq">
                                         
                    <section class="section-vendas">
                        <h2 class="titulo">Aqui você</h2>
                        <h3 class="subtitulo">Escolhe</h3>
                    </section>

                    <section class="bg-txt-vendas">
                        <p>Conheça cada serviço que iremos oferecer e escolha o que melhor lhe atender.</p>
                    </section>
                
                </div>
                <!--Fim-Col-Esq-->   
                
                <!--Col-Dir-->   
                <div class="box-dir col-dir" >
                    
                    <!--Section-->
                    <section class="section-facebook">
                        <h2 class="titulo">Facebook</h2>
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.6&appId=360940843991902";
                          fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                        <div class="fb-page" data-href="https://www.facebook.com/Forr%C3%B3-do-Bode-215119598501651/?fref=ts" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
                    </section>
                    <!--Fim-Section-->

                </div>
                <!--Fim-Col-Dir--> 
                
            </div>
            <!--Fim-Content--> 
                
        </main>
        <!--Fim-Main-->
        
        <br class="clr"/>
        <br class="clr"/>
        <br class="clr"/>
        <br class="clr"/>
        <br class="clr"/>
        
        <!--Footer--> 
        <?php include("incs/inc-footer.php"); ?>
        <!--Fim-Footer--> 
        
    </div>
    <!--Fim-Wrapper-->
    
</body>
</html>