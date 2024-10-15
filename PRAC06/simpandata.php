<!DOCTYPE html>

<?php
  $judul = "Simpan Data Karyawan";

?>

<html lang="en">
<head>
  <title><?= $judul; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
    $namaDepan = $namaBelakang = "";
    include "koneksi.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tombol"])){
        if (isset($_POST["namadepan"])){
            $namaDepan = $_POST["namadepan"];
        }
        if (isset($_POST["namabelakang"])){
            $namaBelakang = $_POST["namabelakang"];
        }
        $sql = "INSERT INTO biodata (namadepan, namabelakang) VALUES ('$namaDepan', '$namaBelakang')";
        if (mysqli_query($koneksi, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysql_error($koneksi);
        }

        mysqli_close($koneksi);
    }
?>
<div class="container mt-3">
    <h2><?php echo $judul ?></h2>
    <div class="mb-3 mt-3">
        <label for="namadepan">Nama depan: <?= $namaDepan ?></label>
    </div>
    <div class="mb-3 mt-3">
        <label for="namabelakang">Nama belakang: <?= $namaBelakang ?></label>
    </div>
</div>

</body>
</html>
