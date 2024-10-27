<?php
include '../connection.php'; 

// SELECT data from the tasks table
$sql = "SELECT title, description, github_link, website_link FROM projects";
$result = $conn->query($sql)

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jo - Projects</title>
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
        <h1 class="text-2xl font-mono">Jo-Projects</h1>
        <ul class="flex gap-4 font-mono">
          <li><a href="../Home.php">Home</a></li>
          <li><a href="./About.php">About</a></li>
          <li><a href="#">Projects</a></li>
          <li><a href="./Services.php">Services</a></li>
          <li><a href="./Odyssey.php">Odyssey</a></li>
          <li><a href="./Contact.php">Contact</a></li>
      </ul>
    </nav>

    <!-- Projects Detailed -->
    <section class=" lg:my-8  ">
      <?php if ($result->num_rows > 0): ?>
          <?php while ($project = $result->fetch_assoc()): ?>
              <div class="flex-col font-mono backdrop-blur-sm border p-6 rounded-xl border-[#505050] bg-[#101010] bg-opacity-20 space-y-4 py-4 my-4 lg:items-start gap-6">
                <p class="text-lg lg:text-4xl mt-2 underline decoration-2"><?php echo htmlspecialchars($project['title']); ?></p>
                <p class="text-lg lg:text-lg text-[#ababab]"><?php echo htmlspecialchars($project['description']); ?></p>
                <div class="d-flex align-items-center">
                  <!-- Check if GitHub link exists -->
                  <?php if (!empty($project['github_link'])): ?>
                    <a href="<?php echo htmlspecialchars($project['github_link']); ?>" target="_blank" class="me-2" title="GitHub">
                        <i class="bi bi-github text-green-600" style="font-size: 24px;"></i>
                    </a>
                  <?php endif; ?>

                  <!-- Check if Website link exists -->
                  <?php if (!empty($project['website_link'])): ?>
                    <a href="<?php echo htmlspecialchars($project['website_link']); ?>" target="_blank" title="Website">
                        <i class="bi bi-globe text-cyan-600" style="font-size: 24px;"></i>
                    </a>
                  <?php endif; ?>
                </div>
              </div>
            <?php endwhile; ?>
          <?php else: ?>
              <p class="text-center">No projects found.</p>
          <?php endif; ?>
            
       
    </section>
  
</body>
</html>