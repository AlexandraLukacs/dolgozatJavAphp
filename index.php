<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>DolgozatAphp</title>
</head>
<body>
    <?php
        $vezeteknev = array("Vezeténév", "Tóth", "Kovács", "Cserepes", "Horváth", "Nagy");

        $keresztnev = array("Keresztnév");
        $keresztnev[1] = "Ildiko";
        $keresztnev[2] = "Nikolett";
        $keresztnev[3] = "Dániel";
        $keresztnev[4] = "Béla";
        $keresztnev[5] = "Adél";

        $szuletesEve = array("Születés éve");
        for ($i=1; $i < 6; $i++) { 
            $szulEve = rand(1998, 2005);
            array_push($szuletesEve, $szulEve);
        }
        
        echo "<table>";
            echo "<tr>";
                echo "<th>$vezeteknev[0]</th><th>$keresztnev[0]</th><th>$szuletesEve[0]</th>";
            echo "</tr>";
        for ($i=1; $i < count($vezeteknev); $i++) { 
            echo "<tr>";
            echo "<td>$vezeteknev[$i]</td><td>$keresztnev[$i]</td><td>$szuletesEve[$i]</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>