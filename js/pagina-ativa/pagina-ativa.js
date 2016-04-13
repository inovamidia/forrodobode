$(function(){
	var page = $("body").attr("id");
	$("#nav a[data='"+page+"']").addClass("ativo");
});