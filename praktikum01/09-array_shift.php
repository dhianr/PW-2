<!DOCTYPE html>
<html>
    <body>
        <?php
        $tims = ["Revina", "Risca", "Renti", "Rissa"];
        array_shift($tims);
        foreach ($tims as $person) {
            echo $person. '<br/>';
        }
        ?>
    </body>
</html>