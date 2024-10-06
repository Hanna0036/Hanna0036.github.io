<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"], input[type="date"], input[type="submit"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="radio"] {
            margin-right: 10px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .result {
            background-color: #e9ecef;
            padding: 15px;
            margin-top: 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Input Data</h2>
    <form action="" method="POST">
        <label for="npm">NPM:</label>
        <input type="text" id="npm" name="npm" required>

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required>

        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir" required>

        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="radio" id="pria" name="jenis_kelamin" value="Pria" required> Pria
        <input type="radio" id="wanita" name="jenis_kelamin" value="Wanita" required> Wanita

        <label for="hobi">Hobi:</label>
        <input type="text" id="hobi" name="hobi" required>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $npm = $_POST['npm'];
        $nama = strtoupper($_POST['nama']);
        $alamat = strtoupper($_POST['alamat']); 
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $hobi = $_POST['hobi'];

        echo "<div class='result'>";
        echo "<h3>Hasil Input Data:</h3>";
        echo "<p><strong>NPM:</strong> " . $npm . "</p>";
        echo "<p><strong>Nama:</strong> " . $nama . "</p>";
        echo "<p><strong>Alamat:</strong> " . $alamat . "</p>";
        echo "<p><strong>Tempat Lahir:</strong> " . $tempat_lahir . "</p>";
        echo "<p><strong>Tanggal Lahir:</strong> " . $tanggal_lahir . "</p>";
        echo "<p><strong>Jenis Kelamin:</strong> " . $jenis_kelamin . "</p>";
        echo "<p><strong>Hobi:</strong> " . $hobi . "</p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
