<?php
  include '../connection.php'; 

  // SELECT data from the tasks(services) table
  $sql = "SELECT points, category, description FROM tasks";
  $result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jo's Services</title>
  <!-- Importing  custom CSS file -->
  <link href="../index.css" rel="stylesheet">
  <link href="./fonts.css" rel="stylesheet">
  <!-- Importing UI Libraries -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
</head>
<body>
  <div class="mx-auto p-4">
    <!-- Navigation Bar -->
    <nav class="flex justify-between gap-4 px-4 lg:my-2 my-4">
        <h1 class="text-2xl font-mono">Jo-Services</h1>
        <ul class="flex gap-4 font-mono">
          <li><a href="../Home.php" >Home</a></li>
          <li><a href="./About.php" >About</a></li>
          <li><a href="./Projects.php" >Projects</a></li>
          <li><a href="#" >Services</a></li>
          <li><a href="./Odyssey.php" >Odyssey</a></li>
          <li><a href="./Contact.php" >Contact</a></li>
      </ul>
    </nav>

    <!-- Services Detailed -->
    <section class=" lg:my-8  ">
      <div class="flex-col font-mono backdrop-blur-sm bg-[#101010] bg-opacity-20 border p-6 rounded-xl border-[#505050]  space-y-4 py-8 lg:items-start items-center gap-4">
        <p class="text-lg lg:text-4xl text-center mt-6 mb-10 ">My Core Services </p>

        <div class="grid grid-cols-3 gap-4  w-full min-h-[60vh] ">
          <?php
          
            if ($result->num_rows > 0) {
              $pointsData = [];
              while ($row = $result->fetch_assoc()) {
                  $pointsData[$row['points']][] = $row;
              }

              foreach ($pointsData as $point => $tasks) {
                  echo "<div class='size-50 shadow-sm shadow-white rounded-lg pt-8'>";
                  echo "<h1 class='text-xl text-center'>" . htmlspecialchars($point) . "</h1>";
                  echo "<ul class='p-8 list-disc'>";
                  
                  foreach ($tasks as $task) {
                      echo "<li>";
                      echo htmlspecialchars($task['category']) . ": ";
                      echo "<span class='text-sm text-[#ababab]'>" . htmlspecialchars($task['description']) . "</span>";
                      echo "</li>";
                  }

                  echo "</ul></div>";
              }
            } else {
                echo "<div class='size-50 shadow-sm shadow-white rounded-lg pt-8'>";
                echo "<h1 class='text-xl text-center'>No Tasks Found</h1>";
                echo "</div>";
            }
          ?>
        </div>
        <div class="justify-end  flex ">
          <a href="./Contact.html" class="font-mono txtBtn text-[#ababab] flex items-center gap-2  ">
            Contact me now 
            <span class="arrowLink">→</span>
          </a>

        </div>
      </div>
            
       
    </section>
  
</body>
</html>