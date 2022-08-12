<?php
require_once __DIR__ . "/../lib/auth.php";
use function Auth\is_logged_in;
?>

<header>
    <nav>
        <?php
        
        if (is_logged_in()){ ?>
        <!-- barra de menú de usuarios logeados -->
        <ul>
            <li>Hola: <?php $_SESSION["user"]["username"] ?></li>
            <li>INICIO</li>
            <li>LOGOUT</li>
        </ul>
        <?php } else { ?>
        <!-- barra de menú de la gente que no ha accedido -->
        <ul>
            <li>INICIO</li>
            <li>REGISTRO</li>
            <li>ACCEDER</li>
        </ul>
        <?php } ?>
        
    </nav>
</header>