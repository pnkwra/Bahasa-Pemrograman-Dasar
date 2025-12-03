<!DOCTYPE html>
<html>
<head>
    <title>Cek Ganjil/Genap dan Bilangan Prima</title>
</head>
<body>
    <h2>Cek Bilangan</h2>

    <form method="post">
        <label>Masukkan Bilangan:</label>
        <input type="number" name="angka" required>
        <button type="submit" name="submit">Cek</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $angka = $_POST['angka'];

        // Menentukan Ganjil atau Genap
        if ($angka % 2 == 0) {
            echo "<p><strong>$angka</strong> adalah bilangan <b>Genap</b>.</p>";
        } else {
            echo "<p><strong>$angka</strong> adalah bilangan <b>Ganjil</b>.</p>";
        }

        // Menentukan Prima atau Bukan
        function cekPrima($n) {
            if ($n <= 1) return false;
            for ($i = 2; $i <= sqrt($n); $i++) {
                if ($n % $i == 0) return false;
            }
            return true;
        }

        if (cekPrima($angka)) {
            echo "<p><strong>$angka</strong> adalah bilangan <b>Prima</b>.</p>";
        } else {
            echo "<p><strong>$angka</strong> <b>bukan</b> bilangan Prima.</p>";
        }
    }
    ?>
</body>
</html>