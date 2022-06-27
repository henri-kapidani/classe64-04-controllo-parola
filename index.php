<?php
/*
1. Inserire delle parole all’interno di un array
2. controllare che la parola passata dall’utente è presente nell'array.
*/

$arr_nomi = [
	'pippo',
	'pinco',
	'name' => 'pallino'
];

if (empty($_GET['name'])) {
	$message = 'Non mi hai passato il nome';
	$class = '';
	$success = false;
} else {
	$ricercato = $_GET['name'];
	if (in_array($ricercato, $arr_nomi)) {
		$message = 'Il nome ' . $ricercato . ' è stato trovato nella lista';
		$class = 'success';
		$success = true;
	} else {
		$message = "Il nome $ricercato NON è stato trovato";
		$class = 'fail';
		$success = false;
	}
}
// $risultato = "<h1 class=\"$class\">$message</h1>";

/*
$arr_numeri = [
	45,
	20,
	10,
	150
];
var_dump(in_array('20', $arr_numeri, true));
var_dump(array_search('20', $arr_numeri, true));
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1 class="<?= $class ?>"><?= $message ?></h1>
	<h1 class="<?= $success ? 'success' : 'fail' ?>"><?= $message ?></h1>
</body>
</html>
