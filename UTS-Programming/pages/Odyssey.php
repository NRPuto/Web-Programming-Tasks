<?php
  include '../connection.php'; 

  $sql = "SELECT title, tooltip, status FROM timeline";
  $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jo's Odyssey</title>
    
    <!-- Importing custom CSS file -->
    <link href="../index.css" rel="stylesheet">
    <link href="./fonts.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.13/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
   
  </head>
  <body>
    <div class="mx-auto p-4 ">

      <!-- Navigation Bar -->
      <nav class="flex justify-between gap-4 px-4 lg:my-2 my-4">
        <h1 class="text-2xl font-mono text-[#f1f1f1] ">Jo-Odyssey</h1>
        <ul class="flex gap-4 font-mono">
          <li><a href="../Home.php">Home</a></li>
          <li><a href="./About.php">About</a></li>
          <li><a href="./Projects.php">Projects</a></li>
          <li><a href="./Services.php">Services</a></li>
          <li><a href="#">Odyssey</a></li>
          <li><a href="./Contact.php">Contact</a></li>
        </ul>
      </nav>

      <!-- Odyssey Detailed -->
      <div class="border border-[#505050] w-full bg-[#101010] bg-opacity-20 rounded-xl backdrop-blur-sm"> 
        <div class="justify-center flex py-20  ">
          <ul class="timeline font-mono">
            <?php
              if ($result->num_rows > 0) {
                $isStart = true; // Initialize a flag to alternate between start and end
                while ($row = $result->fetch_assoc()) {
                  // Assign icon and status class based on the status
                  if ($row['status'] === 'Done') {
                      $icon = '<i class="bi-check-circle text-green-700 h-5 w-5"></i>';
                  } elseif ($row['status'] === 'Present') {
                      $icon = '<i class="bi bi-clock text-green-500 loading-icon"></i>';
                  } else { // For "Soon" or any other status
                      $icon = '<i class="bi-circle text-gray-700"></i>';
                  }

                  // Alternate between timeline-start and timeline-end based on the flag
                  if ($isStart) {
                      echo '
                      <li>
                        <hr class="bg-green-500"/>
                          <div class="timeline-start">' . htmlspecialchars($row['title']) . '</div>
                          <div class="timeline-middle">' . $icon . '</div>
                          <hr class="bg-green-700" />
                      </li>';
                  } else {
                      echo '
                      <li>
                          <hr class="bg-green-700" />
                          <div class="timeline-middle">' . $icon . '</div>
                          <div class="timeline-end">' . htmlspecialchars($row['title']) . '</div>
                          <hr class="bg-green-500" />
                      </li>';
                  }

                  // Toggle the flag for the next item
                  $isStart = !$isStart;
                }
              } else {
                  echo "<li>No timeline data found.</li>";
              }
            ?>
          </ul>

          
        </div>

        <div class="m-12 font-mono space-y-4">
          <h1 class="text-[#f1f1f1] text-2xl"> Current Odyssey</h1>
          <p>Saat ini, saya sedang dalam perjalanan untuk menguasai seni pengembangan frontend lanjutan, di mana <span class="text-blue-300"> ReactJS dan CSS </span> menjadi fokus utama saya. Di masa lalu, saya telah menjelajahi bidang <span class="text-purple-300"> desain UI/UX </span> serta dasar-dasar pengembangan frontend, yang telah membangun fondasi yang kuat dengan keterampilan yang telah saya pelajari. 
            Ketika saya menatap masa depan, aspirasi saya beralih kepada pesona <span class="text-green-300">  Web motions, Creative Coding, serta Backend, </span> guna melengkapi keseluruhan proses pembelajaran saya.</p>

        </div>
      
      </div>
     
      
      
      
      
      
    </div>
  
  </body>
</html>