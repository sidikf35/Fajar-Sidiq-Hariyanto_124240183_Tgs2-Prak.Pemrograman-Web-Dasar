<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Volume Kubus</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Hasil Volume Kubus</h2>
    <div class="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $sisi = floatval($_POST["sisi"]);
            $volume = pow($sisi, 3);
            echo "Volume kubus dengan sisi $sisi adalah $volume.";
        }
        ?>
    </div>
</body>
</html>