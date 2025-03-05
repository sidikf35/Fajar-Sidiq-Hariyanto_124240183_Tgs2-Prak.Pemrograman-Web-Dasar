<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas Segitiga</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h2 {
            text-decoration: underline;
        }
        label {
            display: block;
            margin: 10px 0;
        }
        input[type="number"] {
            width: 50px;
            text-align: center;
        }
        button {
            margin-top: 10px;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Luas Segitiga</h2>
    <form action="outputsegitiga.php" method="post">
        <label>
            Masukkan alas:
            <input type="number" name="alas" placeholder="0" required>
        </label>
        <label>
            Masukkan tinggi:
            <input type="number" name="tinggi" placeholder="0" required>
        </label>
        <div>
            <button type="submit">Hitung</button>
            <button type="reset">Reset</button>
        </div>
    </form>
</body>
</html>