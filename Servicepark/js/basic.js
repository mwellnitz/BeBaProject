function sendFormData(idform,action,response_action){
	$("#"+idform).submit(function() {
		var form = $("#"+idform);
		var data = form.serialize();	// serialisieren der formulardaten
		$.post(action, data, function(response) {
			alert(response);			// r�ckmeldung ausgeben
			$("#content").load(response_action);
		});
		return false;          
	});
}
		