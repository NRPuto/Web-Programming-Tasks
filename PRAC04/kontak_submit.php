<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Submission (POST)</title>
  <link rel="stylesheet" href="index.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <header class="text-gray-600 body-font">
    <div class="bg-purple-900 text-white w-full flex flex-wrap p-6 flex-col md:flex-row items-center">
      <!-- NavBar -->
      <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center space-x-12 justify-center">
        <a href="./dashboard.html" class="hover:bg-gray-900 hover:cursor-pointer text-2xl">Home</a>
        <a href="./kontak.php" class="hover:bg-gray-900 hover:cursor-pointer text-2xl">Kontak (GET)</a>
        <a href="./kontak_post.php" class="hover:bg-gray-900 hover:cursor-pointer text-2xl">Kontak (POST)</a>
        <a href="./about.html" class="hover:bg-gray-900 hover:cursor-pointer text-2xl">About</a>
      </nav>
    </div>

    <!-- Displaying Submitted Form Data -->
    <div class="flex flex-col justify-center p-6 space-y-4">
      <h1 class="text-[3rem] text-purple-900 font-bold">Hasil Formulir Kontak (POST)</h1>
      
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Retrieving the POST data
          $fname = htmlspecialchars($_POST['fname']);
          $citizenship = htmlspecialchars($_POST['citizenship']);
          $services = isset($_POST['service']) ? $_POST['service'] : [];

          echo "<h2>Data yang Diterima:</h2>";
          echo "<p>Nama: $fname</p>";
          echo "<p>Kewarganegaraan: $citizenship</p>";

          if (!empty($services)) {
              echo "<p>Layanan yang dipilih:</p><ul>";
              foreach ($services as $service) {
                  echo "<li>" . htmlspecialchars($service) . "</li>";
              }
              echo "</ul>";
          } else {
              echo "<p>Tidak ada layanan yang dipilih.</p>";
          }
      } else {
          echo "<p>Formulir belum diisi atau ada kesalahan pengiriman.</p>";
      }
      ?>
    </div>
  </header>
</body>
</html>
