<?php
function complete() : string{
    if (empty($_GET)){
        return "Anonyme";
    }
    return $_GET["name"];
}
?>


<p>Bonjour <?= complete() ?></p>