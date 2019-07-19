<?php 
include('cat.php');
$cat1 = new Cat('luigi', 12, 'Blue', 'male', 'italian');
$cat1 = $cat1->getInfos();
foreach($cat1 as $c) {
	echo $c;
}
$cat2 = new Cat('alexis', 17, 'Red', 'male', 'spanish');
$cat2 = $cat2->getInfos();
foreach($cat2 as $c) {
	echo $c;
}
$cat3 = new Cat('Joao', 10, 'Green', 'Male', 'portugues');
$cat3 = $cat3->getInfos();
foreach($cat3 as $c) {
	echo $c;
}
?>