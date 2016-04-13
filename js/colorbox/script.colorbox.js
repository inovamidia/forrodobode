$(window).load(function(){
						
	//PopUp imagem ou vídeo
	//$.colorbox({ open:false, inline:true, fixed:true, iframe:true, href:'http://www.youtube.com/embed/08zg6ewap0U?rel=0&autohide=1&theme=light&wmode=transparent&showinfo=0', width:570, height:325 });
	
	//PopUp automatico com link
	$.colorbox({ open:true, fixed:true, html:"<a href='http://www.inovamidia.com.br' target='_blank'><img src='images/image.jpg' alt=''/></a>" });
	
	//PopUp com multiplos
	//$(".popup").colorbox({rel:"mypopup", open:true, inline:true, fixed:true, previous:"<", next:">", close: "x", slideshow:true});
	
	//PopUp link
	$(".link-popup").colorbox({ inline:true, fixed:true });
	
	//PopUp image
	$(".image-popup").colorbox({ });
	
});