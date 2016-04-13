$(function(){
	$("form").each(function() {
		$(this).validate();
	});
	
	$("input[name='telefone']").mask("(99) 9999-9999");
	
});

