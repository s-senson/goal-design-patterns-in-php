<?php
include 'Strategy.php';

$data = array(10=>'apple', 12=>'banana', 14=>'chocolate');


$serialized = new SerializedArrayOutput();
$serialized_data = $serialized->load($data);

$jsoned = new JsonStringOutput();
$jsoned_data = $jsoned->load($data);

$arrayed = new ArrayOutput();
$arrayed_data = $arrayed->load($data);

echo "serialized: <br />";
echo var_dump($serialized_data);
echo "json:<br />";
echo var_dump($jsoned_data);
echo "array:<br />";
echo var_dump($arrayed_data);