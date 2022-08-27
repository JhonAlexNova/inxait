$('input[soloAlfabeto=true]').keypress(function (e) {
	return soloAlfabeto(e);
});


function soloNumerosAndGuion(e) {
	tecla = (document.all) ? e.keyCode : e.which;
	if (tecla == 8) return true;
	patron = /^[0-9-]*$/;

	te = String.fromCharCode(tecla);
	return patron.test(te);
}


function soloAlfabeto(e) {
	tecla = (document.all) ? e.keyCode : e.which;
	if (tecla == 8) return true;
	patron = /^[a-z,A-Z,ñ]*$/;
	te = String.fromCharCode(tecla);
	return patron.test(te);
}