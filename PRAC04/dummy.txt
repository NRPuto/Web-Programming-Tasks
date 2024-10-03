<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak</title>
  <link rel="stylesheet" href="index.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <header class="text-gray-600 body-font">
    <div class="bg-purple-900 text-white w-full flex flex-wrap p-6 flex-col md:flex-row items-center">
      <!-- NavBar -->
      <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center space-x-12 justify-center">
        <a href="./dashboard.html" class="hover:bg-gray-900 hover:cursor-pointer text-2xl">Home</a>
        <a href="./kontak.php" class="hover:bg-gray-900 hover:cursor-pointer text-2xl">Kontak</a>
        <a href="./about.html" class="hover:bg-gray-900 hover:cursor-pointer text-2xl">About</a>
      </nav>
    </div>

    <!-- Contact Form -->
    <div class="flex flex-col justify-center p-6 space-y-4">
      <h1 class="text-[3rem] text-purple-900 font-bold">Formulir Kontak</h1>
      
      <!-- Form tag with GET method -->
      <form action="kontak.php" method="GET">
        <div class="flex text-[2rem] space-x-4">
          <label for="fname">First name:</label><br>
          <input class="border border-black" type="text" id="fname" name="fname" value=""><br>
        </div>
        
        <h1 class="text-[2rem]">Kewarganegaraan:</h1>
        <div class="container flex items-center space-x-10">
          <div class="text-[1.5rem]">
              <input class="hover:cursor-pointer w-4 h-4" type="radio" name="citizenship" value="WNI">
              <label for="wni">WNI</label>
          </div>
          <div class="text-[1.5rem]">
              <input class="hover:cursor-pointer w-4 h-4" type="radio" name="citizenship" value="Asing">
              <label for="asing">Asing</label>
          </div>
        </div>

        <h1 class="text-[2rem]">Layanan:</h1>
        <div class="container flex items-center space-x-10">
          <div class="text-[1.5rem]">
              <input class="hover:cursor-pointer w-4 h-4" type="checkbox" name="service[]" value="Website">
              <label for="website">Website</label>
          </div>
          <div class="text-[1.5rem]">
              <input class="hover:cursor-pointer w-4 h-4" type="checkbox" name="service[]" value="Hosting">
              <label for="hosting">Hosting</label>
          </div>
        </div>

        <div class="flex py-6 space-x-6">
          <button type="submit" class="bg-purple-900 p-2 px-4 text-[1.5rem] text-white rounded-md hover:cursor-pointer">Kirim</button>
          <button type="reset" class="p-2 px-4 text-[1.5rem] text-purple-900 rounded-md hover:bg-gray-300">Hapus</button>
        </div>
      </form>

      <!-- PHP to handle GET request -->
      <?php
      if (isset($_GET['fname']) && isset($_GET['citizenship'])) {
          $fname = htmlspecialchars($_GET['fname']);
          $citizenship = htmlspecialchars($_GET['citizenship']);
          $services = isset($_GET['service']) ? $_GET['service'] : [];

          echo "<h2>Hasil Formulir</h2>";
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
      }
      ?>
    </div>
  </header>
</body>
</html>
