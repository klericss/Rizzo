<?php

setcookie('user', $user['name'], time()+3600, "/");  /* expire in 1 hour */

header('Location:/');


?>