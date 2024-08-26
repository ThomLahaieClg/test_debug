<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventes</title>
    <style>
        .main {
            margin: auto;
            width: 80%;
            max-width: 1024px;
        }
        .semestersLayout {
            display: grid;
            grid-template-columns: 150px auto 60px;
            row-gap: 10px;
            align-items: center;
        }
        .incomeBar {
            height: 45px;
        }
    </style>
</head>
<body class="main">
    <?php
    $year = 2024;
    $incomes = array("Janvier - Mars" => 2000, "Avril - Juin" => 4000, "Juillet - Septembre" => 7000, "Octobre - Décembre" => 5000);
    $semestersColor = array("Janvier - Mars" => "#F00", "Avril - Juin" => "#0F0", "Juillet - Septembre" => "#00F", "Octobre - Décembre" => "#F80");
    echo "<h2> Ventes $year par semestres </h2>\n";
    echo "<hr>\n";
    $maxIncome = 10000;
    echo "<div class='semestersLayout'>\n";
    foreach ($incomes as $semester => $income) {
        $incomePercent = $income / $maxIncome * 100;
        $color = $semestersColor[$semester];
        $incomeBarStyle = "style='width:$incomePercent%; background-color:$color'";
        echo "<div>$semester</div>\n";
        echo "<div class='incomeBar' $incomeBarStyle/></div>\n";
        echo "<div>$$income</div>\n";
    }
    echo "<div>\n";
    ?>
</body>
</html>