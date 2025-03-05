<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Luas Segitiga</title>
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
    <h2>Hasil Luas Segitiga</h2>
    <div class="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $alas = floatval($_POST["alas"]);
            $tinggi = floatval($_POST["tinggi"]);
            $luas = 0.5 * $alas * $tinggi;
            echo "Luas segitiga dengan alas $alas dan tinggi $tinggi adalah $luas.";
        }
        ?>
    </div>
</body>
</html>