<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Bulan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .output {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Hasil Bulan</h2>
    <div class="output">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nomor_bulan = intval($_POST["nomor_bulan"]);
            $nama_bulan = [
                1 => "Januari", 2 => "Februari", 3 => "Maret", 4 => "April",
                5 => "Mei", 6 => "Juni", 7 => "Juli", 8 => "Agustus",
                9 => "September", 10 => "Oktober", 11 => "November", 12 => "Desember"
            ];
            if ($nomor_bulan >= 1 && $nomor_bulan <= 12) {
                echo "Bulan ke-$nomor_bulan adalah " . $nama_bulan[$nomor_bulan];
            } else {
                echo "Nomor bulan tidak valid.";
            }
        }
        ?>
    </div>
</body>
</html>