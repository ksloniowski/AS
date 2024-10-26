<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
    <head>
        <meta charset = "utf-8"/>
        <title>Logowanie</title>
    </head>
    <body>
        <form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post">
            <legend>Logowanie</legend>
            <fieldset>
                <label for="id_login">Login: </label>
                <input id="id_login" type="text" name="login" value="<?php print($form['login']); ?>" /><br />
                <label for="id_passwd">Hasło: </label>
                <input id="id_passwd" type="password" name="passwd" />
            </fieldset>
            <input type="submit" value="Zaloguj"/>
        </form>

        <?php

            if (isset($messages)) {
                if (count($messages) > 0) {
                    echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
                    foreach ( $messages as $key => $msg ) {
                        echo '<li>'.$msg.'</li>';
                    }
                    echo '</ol>';
                }
            }
        ?>
    </body>
</html>