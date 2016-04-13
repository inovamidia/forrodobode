<?php /* include */ include("incs/includes.php"); $Pagina = 'Contatos'; ?>
<!DOCTYPE HTML>

<html class="no-js" lang="pt-br">
	
<!--Head-->
<head>	      
    <?php include("incs/inc-head.php"); ?>  
</head>
<!--Fim-Head-->

<body id="contatos">

    <!--Wrapper-->  
    <div id="wrapper">
    
        <!--Header-->
        <?php include("incs/inc-nav.php"); ?> 
        <!--Fim-Header-->  

        <!--Section-->
        <section class="section-banner">
            <img src="img/bg-banner-interna.jpg" alt=""/>
        </section>
        <!--Fim-Section-->

        <!--Main-->    	
        <main role="main"> 
        
       		<!--Content-->   
            <div class="content bg">
				<article class="article">
					<h1 class="titulo tit-contato">Contato</h1>
					<p>
						<?php include("js/form/form-contato.php"); ?> 
					</p>										
				</article>
            </div>
            <!--Fim-Content--> 
                
        </main>
        <!--Fim-Main-->
        
        <!--Footer--> 
        <?php include("incs/inc-footer.php"); ?>
        <!--Fim-Footer--> 
        
    </div>
    <!--Fim-Wrapper-->
    
</body>
</html>