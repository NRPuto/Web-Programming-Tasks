<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Jo-Portfolio</title>
    <!-- Importing  custom CSS file -->
    <link href="../index.css" rel="stylesheet">
    <link href="./fonts.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-background text-desc">
    <div class="mx-auto p-4">
        <!-- Navigation Bar -->
        <nav class="flex justify-between gap-4 px-4 lg:my-2 my-4">
          <h1 class="text-2xl font-mono">Jo-About</h1>
          <ul class="flex gap-4 font-mono">
            <li><a href="../Home.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="./Projects.php">Projects</a></li>
            <li><a href="./Services.php">Services</a></li>
            <li><a href="./Odyssey.php">Odyssey</a></li>
            <li><a href="./Contact.php">Contact</a></li>
          </ul>
        </nav>

        <!-- About Me Section -->
        <section class="backdrop-blur-sm bg-[#101010] bg-opacity-20 border border-[#505050]   rounded-xl p-4 lg:my-8 my-6 ">
          <div class="flex lg:flex-row flex-col lg:items-start items-center gap-6">
            <img src="../assets/images/nobg.png" alt="Profile Picture" class="lg:size-72 size-32 rounded-lg">
            <div class="space-y-6 py-4 ">
              <div class="font-mono">
                  <p class="text-lg lg:text-2xl ">Hello there! I'm</p>
                  <p class="text-lg lg:text-4xl ">Nathan Rahmavanya Pradhana</p>
                  <p class=" lg:text-lg font-light text-[#a8a8a8] "> 
                      <span class="ordinal">3rd</span> 
                      Year Informatics Student, Pembangunan Jaya University</p>
              </div>
              <p class=" lg:text-lg text-base font-mono">
                  A self-taught UI/UX enthusiast seeking an internship opportunities to apply design skills such as wireframe and protoyping. 
                  Looking forward to gain experience with experts and collaborating in team together using Figma.
                  I’m excited to step up in frontend development, leveraging my skills in HTML, CSS, and JavaScript to create engaging and user-friendly interfaces.
              </p>
              <!-- Social Links -->
              <ul class="flex space-x-2 justify-end">
                <?php
                  include '../connection.php';

                  $sql = "SELECT platform, url FROM social_links";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<li><a href="' . htmlspecialchars($row['url']) . '" target="_blank" title="' . htmlspecialchars($row['platform']) . '">';
                        echo '<i class="bi bi-' . strtolower($row['platform']) . '"> ' . htmlspecialchars($row['platform']) . '</i></a></li>';
                    }
                  } else {
                    echo '<li>No social links available</li>';
                  }

                  // Close the database connection
                  $conn->close();
                ?>
              </ul>
            </div>
          </div>
        </section>


        <!-- More description Section -->
        <section class="backdrop-blur-sm bg-opacity-20 bg-[#101010] border border-[#505050]  rounded-xl p-4 lg:my-8 my-6  ">
          <h1 class="font-mono p-2 text-2xl"> Refining My Craft </h1>
          <div class="flex">
            <article class="leading-relaxed text-[#f1f1f1] font-mono p-2 ">
                
              Learning UI/UX on my own came naturally, but real-world application presents 
              <span className="font-MskyRegular italic font-semibold "> unique challenges </span>
              . I’ve built a solid understanding of design principles and tools, but translating that into practice requires hands-on experience and collaboration.
              My focus is on UI/UX design—not illustration. Knowing my place, I’m determined to gain real-world 
              <span className="font-MskyRegular italic font-semibold "> experience </span>
                  to refine my skills and elevate my design abilities.
                
    
            </article>
            <article class="leading-relaxed text-[#f1f1f1] font-mono p-2">
              
              Knowing that the real world and tech industry are vast, 
              I understand that my journey as a self-taught UI/UX designer can't stop at mastering design principles alone.
              I'm also diving into the tech side of things, such as
              <span className="font-MskyRegular italic font-semibold "> website and app development </span>
              to create designs that are both beautiful and functional, 
              balancing development challenges with delivering the best user experience.
    
                
            </article>
          </div>
        </section>

        <div class="backdrop-blur-sm bg-opacity-20 bg-[#101010] border border-[#505050]  rounded-xl p-4  font-mono text-white flex space-x-4">
          <h3 class="text-[#ababab]">This portfolio was made using : </h3>
          <p class="text-orange-500"> HTML</p>
          <p class="text-blue-500"> CSS</p>
          <p class="text-cyan-400"> Tailwind</p>
          <p > DaisyUI</p>
          <p class="text-purple-600"> Bootstrap</p>
          <p class="text-blue-500"> PHP</p>
        </div>          

    </div>
</body>
</html>
