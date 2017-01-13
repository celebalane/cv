function change(){
	anchor = window.location.hash;
	anchor = anchor.substring(1,anchor.length);
	if (anchor == "Masquer"){
		document.getElementById("texte").style.display ="none";
	}else {
		document.getElementById("texte").style.display ="block";
	}
	}
	setInterval("change()",100); //100=temps intervalle, la fonction se lance tout le temps a cet intervalle