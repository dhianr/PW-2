<!DOCTYPE html>
<html>
    <body>
        <?php
        $tims = ["Revina", "Risca", "Renti", "Rissa"];
        array_unshift($tims, "Rahma", "Raka");
        foreach ($tims as $person) {
            echo $person. '<br/>';
        }
        ?>
    </body>
</html>