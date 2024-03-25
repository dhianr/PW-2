<!DOCTYPE html>
<html>
    <body>
        <?php
        $tims = ["Revina", "Risca", "Renti", "Rissa"];
        array_pop($tims);
        foreach ($tims as $person) {
            echo $person. '<br/>';
        }
        ?>
    </body>
</html>