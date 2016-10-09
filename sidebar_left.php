<div class="categorie"><a id="paramecia" onmouseover="overpara()" onmouseleave="leavepara()" href="#">Paramécia</a>
</div>
<div class="categorie"><a id="zoan" onmouseover="overzoan()" onmouseleave="leavezoan()" href="#">Zoan<br></a>
</div>
<div class="categorie"><a id="logia" onmouseover="overlogia()" onmouseleave="leavelogia()" href="#">Logia</a>
</div>

<script>
function overpara() {
    document.getElementById("paramecia").innerHTML = "Permettent à leur possesseur d'obtenir une transformation physique sur un corps, sur l'environnement ou de produire divers substances. Ce type de fruit est le moins rare de tous les fruits du démon.";
}
function leavepara() {
	document.getElementById("paramecia").innerHTML = "Paramécia";
}
function overzoan() {
    document.getElementById("zoan").innerHTML = "Permettent à leur possesseur de prendre une forme animale ou hybride et varient selon l'espèce.";
}
function leavezoan() {
	document.getElementById("zoan").innerHTML = "Zoan";
}
function overlogia() {
    document.getElementById("logia").innerHTML = "Permettent à leur possesseur de transformer leur corps en un élément naturel et de devenir insensible aux attaques physiques.";
}
function leavelogia() {
	document.getElementById("logia").innerHTML = "Logia";
}
</script>