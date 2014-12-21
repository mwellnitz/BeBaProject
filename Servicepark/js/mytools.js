//******** die klasse request ****************************************************************
function Request(action,ziel,parameter) {
	if (parameter === undefined)    parameter = "";
	this.evalResponse=function(str) {				// javascript-bereich im response ausführen
		do {
			var n1 = str.search("<script>");
			var n2 = str.search("</script>");
			if (n1==-1)		break;
			else {	s1=str.substring(n1+8, n2);
					eval(s1);
					str=str.slice(n2+9);
			}
		} while (1);
	}
	this.ausgeben = function() {                   	// die ausgeben-methode/funktion der klasse
      if (http.readyState == 4) {
         var c=document.getElementById(ziel);
		 if (!http.responseText) http.responseText="";
		 c.innerHTML = http.responseText;
		 evalResponse(http.responseText);			// script-bereich auswerten
      }
	}
	this.sendRequest=function(param) {              	// die sende-methode/funktion der klasse
      if (http != null) {
         http.open("POST", action, true);
         http.onreadystatechange = this.ausgeben;
         http.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
         http.send(param);
      }
	}
	var http = null;                                      // hiermit wird ein objekt der klasse angelegt
	if (window.XMLHttpRequest) {
      http = new XMLHttpRequest();                       // variante mozilla u.a.
	} else if (window.ActiveXObject) {
      http = new ActiveXObject("Microsoft.XMLHTTP");     // variante microsoft
	}
	this.sendRequest(parameter);                          // und zuletzt auch gleich die send-methode aufgerufen
}
//********** ende der klasse request **************************************************************************
//*************************** dirty little helpers ************************************************************
function sendForm(formular,action,ziel){
   var f=document.getElementById(formular);
   var i=0;
   var s="";	// parameterstring zusammenbauen
   while (f.elements[i]){
      s+=f.elements[i].name+"="+f.elements[i].value;
      s+='&';
      i++;
   }
   Request(action,ziel,s);
}
function test() {
	alert("test");
}
function setStyle(id,style) {
	var s="document.getElementById('"+id+"').style."+style+';';
	eval(s);
}
function sleep(ms){
   var zeit=(new Date()).getTime();
   var stoppZeit=zeit+ms;
   while((new Date()).getTime()<stoppZeit){};
}
function switch_bg(element_id) {
var s;
s=document.getElementById(element_id).style.backgroundColor;
   if (document.getElementById(element_id).style.backgroundColor=="rgb(204, 204, 204)")
      document.getElementById(element_id).style.backgroundColor = "#FF9933";
   else
      document.getElementById(element_id).style.backgroundColor = "#CCCCCC";
}