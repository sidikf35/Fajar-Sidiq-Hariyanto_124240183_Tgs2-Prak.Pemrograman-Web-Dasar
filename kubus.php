<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volume Kubus</title>
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
    <h2>Volume Kubus</h2>
    <form action="outputkubus.php" method="post">
        <label>
            Masukkan sisi:
            <input type="number" name="sisi" placeholder="0" required>
        </label>
        <button type="submit">Hitung</button>
    </form>
</body>
</html>