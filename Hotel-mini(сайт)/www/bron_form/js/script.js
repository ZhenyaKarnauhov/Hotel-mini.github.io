menu.onclick = function myFunction() {
	var x = document.getElementsById("header_Section");
	if (x.className === "header__section") {
		x.className += " responsive";

	}else{
		x.className = "header__section";
	}

}