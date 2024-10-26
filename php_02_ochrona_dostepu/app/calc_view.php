<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
	<head>
		<meta charset="utf-8" />
		<title>Kalkulator kredytowy</title>
	</head>
	<body>
		<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
		<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
			<legend>Kalkulator kredytowy</legend>
			<fieldset>
				<label for="id_kwota">Kwota: </label>
				<input id ="id_kwota" type="text" name="kwota" value="<?php print($kwota); ?>"/><br />
				<label for="id_odsetki">Oprocentowanie</label>
				<input id="id_odsetki" type="text" name="odsetki" value="<?php print($odsetki); ?>"/>
				<label for="id_odsetki">%</label><br />
				<label for="id_okres">Okres (miesiące): </label>
				<input id="id_okres" type="text" name="okres" value="<?php print($okres); ?>"/><br />
			</fieldset>
			<input type="submit" value="Oblicz">
		</form>

		<?php
		
		if (isset($messages)) {
			if (count ( $messages ) > 0) {
				echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
				foreach ( $messages as $key => $msg ) {
					echo '<li>'.$msg.'</li>';
				}
				echo '</ol>';
			}
		}
		?>

		<?php if (isset($result)){ ?>
			<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
			<?php echo 'Wynik: '.number_format($result, 2, ',', ' ').' zł.'; ?>
			</div>
		<?php } ?>

	</body>
</html>