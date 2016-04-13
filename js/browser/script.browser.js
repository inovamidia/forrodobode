//document.write($.browser.name);
//document.write($.layout.version);

if ($.browser.name=="firefox" && $.layout.version<"14.0") {
	$("body").prepend("<div id='browsername'><div class='content'><img class='simbolo' src='js/browser/exclamacao.png'/><div class='box-texto'><span class='texto'>Seu Firefox está desatualizado.</span><span class='sub-texto'>Para uma melhor visualização do site, atualize-o clicando no botão ao lado.</span></div>" + "<a href='http://br.mozdev.org/download/' target='_blank'><img class='bt' src='js/browser/bt-firefox.png'/></a></div></div>");
} else if ($.browser.name=="msie" && $.layout.version<"9.0") {
	$("body").prepend( "<div id='browsername'><div class='content'><img class='simbolo' src='js/browser/exclamacao.png'/><div class='box-texto'><span class='texto'>Seu Internet Explorer está desatualizado.</span><span class='sub-texto'>Para uma melhor visualização do site, atualize-o clicando no botão ao lado.</span></div>" + "<a href='http://windows.microsoft.com/pt-BR/internet-explorer/products/ie/home' target='_blank'><img class='bt' src='js/browser/bt-ie.png'/></a></div></div>");
} else if ($.browser.name=="chrome" && $.layout.version<"537.1") {
	$("body").prepend( "<div id='browsername'><div class='content'><img class='simbolo' src='js/browser/exclamacao.png'/><div class='box-texto'><span class='texto'>Seu Google Chrome está desatualizado.</span><span class='sub-texto'>Para uma melhor visualização do site, atualize-o clicando no botão ao lado.</span></div>" + "<a href='http://www.google.com/chrome?hl=pt-BR' target='_blank'><img class='bt' src='js/browser/bt-chrome.png'/></a></div></div>");
} else if ($.browser.name=="safari" && $.layout.version<"534.51.22") {
	$("body").prepend( "<div id='browsername'><div class='content'><img class='simbolo' src='js/browser/exclamacao.png'/><div class='box-texto'><span class='texto'>Seu Safari está desatualizado.</span><span class='sub-texto'>Para uma melhor visualização do site, atualize-o clicando no botão ao lado.</span></div>" + "<a href='http://www.apple.com/br/safari/download/' target='_blank'><img class='bt' src='js/browser/bt-safari.png'/></a></div></div>");
} else if ($.browser.name=="opera" && $.layout.version!="futhark") {
	$("body").prepend( "<div id='browsername'><div class='content'>Você esta usando o navegador antigo <b>" + $.browser.name + $.layout.version + " </b>e com falhas de segurança. Por favor, atualize o seu navegador" + "<img src='http://tudoemfoco.net/wp-content/uploads/2010/07/google_chrome-300x290.jpg' width='30'/></div></div>");
} 


/*VER VERSÃO E BROWSER*/
/*
jQuery.each(jQuery.browser, function(i, val) {
$("<p style='display:block'>i" + i + " : <p style='display:block'>v" + val + "</p>")
.appendTo( document.body );

if (i=="mozilla" && val<=3) {
	$("p").html( "<div class='content'>Você esta usando o navegador antigo: <span>" + i + "</span> firefox e com falhas de segurança. Por favor, atualize o seu" + val + "</div>");
} else if (i=="msie" && val=="7") {
	$("p").html( "Você esta usando o navegador antigo: <span>" + i + "</span> firefox e com falhas de segurança. Por favor, atualize o seu" + i );
}
	
});*/	
