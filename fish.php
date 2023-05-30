<?php 
	$goat = file_get_contents("http://localhost/canvas_shop/build_an_api.php");
	$goat = json_decode($goat);

	$goat=$goat->data;
?>

<?php foreach ($goat as $key => $value):?>
		<h1><?=$key ?></h1>
		<p>
			Age: <?=$value->age ?>
				<br>
			Balance: <?=$value->balence ?>
		</p>

<?php endforeach;?>