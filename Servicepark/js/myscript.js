			$(document).ready(function()	{ 		/* ausführen, wenn html-seite geladen wurde */
				$(function() {
					$("li").click(function(e) {
						e.preventDefault();
						$("li").removeClass("selected");
						$(this).addClass("selected");
					});
				});
			});
function sendForm(idform,action,reload,dest) {
	$("#"+idform).submit(function() {
		var form = $("#"+idform);
		var data = form.serialize();	// serialisieren der formulardaten
		$.post(action, data, function(response) {
			alert(response);			// rückmeldung ausgeben
			$("#"+dest).load(reload);	// seite wieder herstellen			
		});
		return false;          
	});
}