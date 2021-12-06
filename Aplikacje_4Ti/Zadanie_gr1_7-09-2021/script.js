function CalcSurf(){
	var x = document.getElementById('x').value;
	var y = document.getElementById('y').value;
	var surface = 2.7*x*2+2.7*y*2;

	document.getElementById('surface').innerHTML="Powierzchnia całkowita ścian: "+surface+"</br>";
	document.getElementById('cost').innerHTML="Koszt malowania: "+surface*8+" zł</br>";
}