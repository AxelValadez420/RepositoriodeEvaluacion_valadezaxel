<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$empleados = array(
    array("axel", 3000),
    array("marino", 2500),
    array("felix", 4000),
    array("alejandro", 1500),
    array("jose", 3500),
);
array_push($empleados, array("luis", 2800));
array_push($empleados, array("arumy", 7000));
usort($empleados, function($a, $b) {
    return $a[1] <=> $b[1];
});
foreach ($empleados as $empleado) {
    echo "Empleado: " . $empleado[0] . ", Sueldo: " . $empleado[1] . " ";
}
?>
</body>
</html>