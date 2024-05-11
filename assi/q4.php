<!-- Question 4: Chessboard using nested for loop and HTML -->

<!DOCTYPE html>
<html>
<head>
    <title>Chess Board</title>
    <style>
        table { width: 400px; border-collapse: collapse; }
        td { height: 30px; width: 30px; }
    </style>
</head>
<body>
    <table>
        <?php
        for ($row = 0; $row < 8; $row++) {
            echo "<tr>";
            for ($col = 0; $col < 8; $col++) {
                $total = $row + $col;
                if ($total % 2 == 0) {
                    echo "<td style='background-color: black;'></td>";
                } else {
                    echo "<td style='background-color: white;'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
