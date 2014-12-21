// add_member function
function add_member() {
	// initialisation
	var url = 'add_member.php';
	var method = 'POST';
	var params = 'PersNr='+document.getElementById('PersNr').value;
	params += '&Full_name='+document.getElementById('Full_name').value;
	params += '&Telefon='+document.getElementById('Telefon').value;
	var container_id = 'list_container' ;
	var loading_text = '<img src="images/ajax_loader.gif">' ;
	// call ajax function
	ajax (url, method, params, container_id, loading_text) ;
}

// add_maschinen function
function add_maschinen() {
	// initialisation
	var url = 'add_maschinen.php';
	var method = 'POST';
	var params = 'Anschaffungsdatum='+document.getElementById('Anschaffungsdatum').value;
	params += '&Kategorie='+document.getElementById('Kategorie').value;
	params += '&Halle='+document.getElementById('Halle').value;
	params += '&Hersteller_Name='+document.getElementById('Hersteller_Name').value;
	params += '&Platz='+document.getElementById('Platz').value;
	params += '&Hersteller_Strasse='+document.getElementById('Hersteller_Strasse').value;
	params += '&Hersteller_Plz='+document.getElementById('Hersteller_Plz').value;
	params += '&Hersteller_Ort='+document.getElementById('Hersteller_Ort').value;
	var container_id = 'list_container' ;
	var loading_text = '<img src="images/ajax_loader.gif">' ;
	// call ajax function
	ajax (url, method, params, container_id, loading_text) ;
}

// delete_member function
function delete_member(id) {
	if (confirm('Are you sur to delete this member ?')) {
		// initialisation
		var url = 'delete_member.php';
		var method = 'POST';
		var params = 'id='+id;
		var container_id = 'list_container' ;
		var loading_text = '<img src="images/ajax_loader.gif">' ;
		// call ajax function
		ajax (url, method, params, container_id, loading_text) ;
	}
}

// delete_maschinen function
function delete_maschinen(id) {
	if (confirm('Are you sur to delete this maschine ?')) {
		// initialisation
		var url = 'delete_maschinen.php';
		var method = 'POST';
		var params = 'id='+id;
		var container_id = 'list_container' ;
		var loading_text = '<img src="images/ajax_loader.gif">' ;
		// call ajax function
		ajax (url, method, params, container_id, loading_text) ;
	}
}

// ajax : basic function for using ajax easily
function ajax (url, method, params, container_id, loading_text) {
    try {
    	xhr = new XMLHttpRequest();
    } catch(e) {
	    try{ 
	    	xhr = new ActiveXObject("Microsoft.XMLHTTP");
	    } catch(e1) { 
		    alert("Not supported!");
		}
	}
	xhr.onreadystatechange = function() {
						       if(xhr.readyState == 4) { 
							       document.getElementById(container_id).innerHTML = xhr.responseText;
							   } else { 
							       document.getElementById(container_id).innerHTML = loading_text;
							   }
						   	}
	xhr.open(method, url, true);
	xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	xhr.send(params);
}