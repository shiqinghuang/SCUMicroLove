<?php

// load library
require 'php-excel.class.php';

$json='23895517":{"T":26.099999999999984,"H":38.24999999999998,"FT":25.799999999999976,"co2":459.9655172413793,"tvoc":0.5122413793103449,"pm25":47.90000000000005,"pmi":115,"light":39,"spl":3.086206896551724,"hcho":295,"aqi":4,"co":0.355,"no2":2.2649999999999997,"o3":0.01,"so2":2.065}';

echo $json;
/*// create a simple 2-dimensional array
$data = array(
    1 => array ('Name', 'Surname'),
    array('Schwarz', 'Oliver'),
    array('Test', 'Peter')
);

// generate file (constructor parameters are optional)
$xls = new Excel_XML('UTF-8', false, 'My Test Sheet');
$xls->addArray($data);
$xls->generateXML('my-test');*/

?>