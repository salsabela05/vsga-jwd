<?php
//menulis variable di php, dimulai dengan tanda $
// buat tampilan sesuai dengan tugas
function hitungTarif($a, $b, $c)
{
    //hasil perkalian tarif * harga
    return $b * $c;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarif Parkir</title>
</head>

<body>
<div class="container">
        <h1>Hitung Tarif Parkir</h1>
        <form method="post" action="">
            <label for="plateNumber">Nomor Polisi:</label>
            <input type="text" id="plateNumber" name="plateNumber" required>

            <label for="hours">Lama Parkir (jam):</label>
            <input type="number" id="hours" name="hours" min="0" step="0.5" required>

            <button type="submit">Hitung Tarif</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $plateNumber = $_POST['plateNumber'];
            $hours = floatval($_POST['hours']);
            $baseRate = 5000;
            $hourlyRate = 3000;
            $total = 0;

            if ($hours <= 1) {
                $total = $baseRate;
            } else {
                $total = $baseRate + ($hours - 1) * $hourlyRate;
            }

            echo "<div id='result'>";
            echo "<h2>Detail Parkir</h2>";
            echo "<p><strong>Nomor Polisi:</strong> $plateNumber</p>";
            echo "<p><strong>Lama Parkir:</strong> $hours jam</p>";
            echo "<p><strong>Tarif:</strong> Rp $total</p>";
            echo "</div>";
        }
        ?>
    </div>

    ?>

</body>

</html>