<!DOCTYPE html>
<html>
    <body>
        <?php
        $tims = ["Revina", "Risca", "Renti", "Rissa"];
        array_push($tims, "Rahma");
        foreach ($tims as $person) {
            echo $person. '<br/>';
        }
        ?>
    </body>
</html>