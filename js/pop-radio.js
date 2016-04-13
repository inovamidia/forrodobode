function abrir(pagina) {

  var largura = 355;
  var altura = 434;
  var esquerda = ((screen.width - largura) / 2);
  var topo = ((screen.height - altura) / 2);

Popup = window.open(pagina, 'Janela', 'width = ' + largura + ', height = ' + altura + ', top = ' + topo + ', left = ' + esquerda + ', scrollbars = no, status = no, toolbar = no, location = no, directories = no, menubar = no, resizable = no, fullscreen = no');

}