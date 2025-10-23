<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Mata Uang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f6f7fb;
            color: #333;
            padding: 20px;
        }
        h2 {
            color: #9caaf8ff;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
        }
        input, select, button {
            margin-top: 10px;
            padding: 8px;
            width: 100%;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background: #2b4cff;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
        button:hover {
            background: #1f35b5;
        }
        .hasil {
            margin-top: 20px;
            padding: 15px;
            background: #fff;
            border-radius: 10px;
            border-left: 5px solid #2b4cff;
        }
    </style>
</head>
<body>
    <h2>Konversi Mata Uang</h2>
    <form method="post" action="">
        <label>Masukkan nominal (Rp):</label>
        <input type="number" name="rupiah" placeholder="Contoh: 250000" required>

        <label>Pilih mata uang tujuan:</label>
        <select name="mata_uang" required>
            <option value="usd">Dollar Amerika (USD)</option>
            <option value="euro">Euro (EUR)</option>
            <option value="yen">Yen Jepang (JPY)</option>
            <option value="won">Won Korea (KRW)</option>
            <option value="ringgit">Ringgit Malaysia (MYR)</option>
        </select>

        <button type="submit">Konversi</button>
    </form>

    <?php
    if (isset($_POST['rupiah']) && isset($_POST['mata_uang'])) {
        $rupiah = $_POST['rupiah'];
        $mata_uang = $_POST['mata_uang'];
        $hasil = 0;
        $simbol = "";

        if ($mata_uang == "usd") {
            $hasil = $rupiah / 16200;
            $simbol = "$";
        } elseif ($mata_uang == "euro") {
            $hasil = $rupiah / 19800;
            $simbol = "€";
        } elseif ($mata_uang == "yen") {
            $hasil = $rupiah / 110;
            $simbol = "¥";
        } elseif ($mata_uang == "won") {
            $hasil = $rupiah / 12;
            $simbol = "₩";
        } else {
            $hasil = $rupiah / 3500;
            $simbol = "RM";
        }

        echo "<div class='hasil'>";
        echo "<h3>Hasil Konversi:</h3>";
        echo "Rp " . number_format($rupiah, 0, ',', '.') . " = " . $simbol . number_format($hasil, 2);
        echo "</div>";
    }
    ?>
</body>
</html>
