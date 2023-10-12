<html>
	<head>
	</head>
	<body>
		<form method="get" action="index.php">
			<input type="number" name="number">
			<input type="radio" id="C" name="Temp" value="C">
			<label for="C">C</label>
			<input type="radio" id="F" name="Temp" value="F" checked>
				<label for="F">F</label>
			<input type="submit" value="Przelicz">
		</form>
	</body>
</html>
<?php
/*Utwórz formularz skladający się z inputa liczbowego, który będzie przyjmował stopnie,
dwa inputy tyopu radio, których wybierzesz rodzaj stopni (c i F),
nastepnie guzik z napisem "przelicz", po klikb=nieciu ma wyswietlić się ilość 
stopni w wybranym rodzaju
wszystko rzuc na git'a
*/
if (!empty($_GET['number']) ) {
	if ($_GET['Temp'] =='C') {
		echo 'W przeliczeniu na C: ' . round(($_GET['number']-32)*(5/9));
	} else {
		echo 'W przeliczeniu na F: ' . round(($_GET['number']*(9/5))+32);
	}
}
/* wrzucić wszystko na git
?>