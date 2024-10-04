<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi</title>
    <link rel="stylesheet" href="index.css">
    
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.11/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <header class="text-gray-600 body-font">
      <div class="bg-purple-900 text-white w-full flex flex-wrap p-6 flex-col md:flex-row items-center">
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center space-x-12 justify-center">
          <a href="./dashboard.html" class="hover:bg-gray-900 hover:cursor-pointer text-2xl">Home</a>
          <a href="./kontak.php" class="hover:bg-gray-900 hover:cursor-pointer text-2xl">Kontak </a>
          <a href="./konfirmasi.php" class="hover:bg-gray-900 hover:cursor-pointer text-2xl">Konfirmasi</a>
          <a href="./about.html" class="hover:bg-gray-900 hover:cursor-pointer text-2xl">About</a>
        </nav>
      </div>

      <div class="flex flex-col justify-center p-6 space-y-4">
        <h1 class="text-[3rem] text-purple-900 font-bold">Hasil Formulir Kontak </h1>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fname = htmlspecialchars($_POST['fname']);
            $hobby = isset($_POST['hobby']) ? $_POST['hobby'] : [];
            $birthday = htmlspecialchars($_POST['birthday']);

            $formattedBirthday = '';
            if ($birthday) {
              $dateTime = new DateTime($birthday);
              $formattedBirthday = $dateTime->format('j F Y'); 
            }
            
            echo "<h2>Data yang Diterima:</h2>";
            echo "<p>Nama: $fname</p>";

            if (!empty($hobby)) {
                echo "<p>Hobi:</p>";
                foreach ($hobby as $h) {
                    echo "<li>" . htmlspecialchars($h) . "</li>";
                }
                echo "";
            } else {
                echo "<p>Tidak ada hobi yang dipilih.</p>";
            }

            echo "<p>Tanggal Lahir: " . ($formattedBirthday ? $formattedBirthday : "Tidak ada tanggal lahir yang dipilih.") . "</p>"; 
        } else {
            echo "<p>Formulir belum diisi atau ada kesalahan pengiriman.</p>";
        }

        
        ?>
        <?php
          $servername = 'localhost';
          $username = 'root';
          $password = '';
          $db = 'pemweb';

          $conn = new mysqli($servername, $username, $password);

          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          echo "Tersambung successfully";

        
        ?>

        <button type='submit' class="btn btn-primary"> Konfirmasi</button>
      </div>
    </header>
  </body>
</html>
