<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>testing Api</title>
	<style type="text/css">
		.clocks>div{
			height: 50px;
			width: 50px;
			background-color: #C70039;
			margin: 0px 5px;
			border-radius: 4px;
			font-size: 2em;
			display: flex;
			justify-content: center;
			color: white;
		}
		.clocks{
			display: flex;

		}
	</style>
</head>
<body>
	<!-- read JSON header and mysqli fetch all -->
	<?php 
	function World_clock($zone){
		$link = "https://worldtimeapi.org/api/timezone/".$zone;
		$cow=file_get_contents($link);
		$cow=json_decode($cow);

		$timezone=$cow->timezone;
		$timezone=explode("/", $timezone);
		$timezone=$timezone[1];
		$timezone=str_replace("_", " ", $timezone);

		$cow = $cow->datetime;
		$cow=explode("T", $cow);
		$cow=$cow[1];
		$cow=explode(".", $cow);
		$cow=$cow[0];
		$cow=explode(":", $cow);
		$hour=$cow[0];
		$mins=$cow[1];
		$secs=$cow[2];
		?>
		<h4><?=$timezone?></h4>
		<div class="clocks">
			<div><?=$hour ?></div>
			<div><?=$mins ?></div>
			<div><?=$secs ?></div>
		</div>
		<p><?=$cow?></p>
		<?php
	}
	World_clock("Africa/Lagos").'<br>';
	World_clock("America/New_York").'<br>';
	World_clock("Europe/Paris").'<br>';
	World_clock("Europe/Isle_of_Man");
	?>
</body>
</html>