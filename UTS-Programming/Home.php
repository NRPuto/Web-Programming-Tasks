<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jo-Portfolio</title>
    <!-- Importing custom CSS file -->
    <link href="./index.css" rel="stylesheet">
    <link href="./fonts.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.13/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class=" mx-auto p-4">
      
      <!-- Navigation Bar -->
      <nav class="flex justify-between gap-4 px-4 lg:my-2 my-4">
        <h1 class="text-2xl font-mono ">Jo-Portfolio</h1>
        <ul class="flex gap-4 font-mono">
          <li><a href="#">Home</a></li>
          <li><a href="./pages/About.php">About</a></li>
          <li><a href="./pages/Projects.php">Projects</a></li>
          <li><a href="./pages/Services.php">Services</a></li>
          <li><a href="./pages/Odyssey.php">Odyssey</a></li>
          <li><a href="./pages/Contact.php">Contact</a></li>
        </ul>
      </nav>

      <!-- Main Bento Layout -->
      <div class="grid lg:grid-cols-5 gap-4 mb-4">

        <!-- Profile Section -->
        <div class="lg:p-6 p-4 col-span-3 rounded-xl backdrop-blur-sm bg-opacity-20 bg-[#101010] border border-[#505050]">
          <div class="flex items-center">
              <img src="./assets/images/nobg.png" alt="Profile Picture" class="lg:size-56 size-32 rounded-lg">
              <div class="ml-4 space-y-4">
                  <h2 class="font-mono tracking-wide font-bold leading-none lg:text-[1.7rem]">Nathan Rahmavanya Pradhana</h2>
                  <p class="lg:text-lg text-sm font-mono ">UI/UX Designer</p>
              
              <p class="lg:text-base text-[0.6rem] font-mono "> A self-taught design enthusiast seeking internship opportunities to sprinkle my creative magic and turn ideas into user-friendly delights! Excited to grow and collaborate!</p>
              <a href="./pages/About.php" class="font-mono txtBtn text-[#ababab] flex items-center gap-2  z-10 relative">
                  Know More
                  <span class="arrowLink">→</span>
              </a>
              </div>
            </div>
        </div>

        <!-- Project Section -->
        <div class="lg:p-6 p-4 col-span-2 rounded-xl backdrop-blur-sm border bg-opacity-20 bg-[#101010] font-mono space-y-4 border-[#505050]">
            <h3 class="text-lg ">Projects</h3>
            <div class="projectList shadow-sm shadow-white rounded-lg">
                <ul class="space-y-2 p-4 underline decoration-solid " >
                  <li >Regrant</li>
                  <li>WaterWise</li>
                  <li>Class Manager</li>
                  <li>Eventour</li>
                  <li>UtoVault</li>
                  <li>Happier, Healthier"</li>
                </ul>
                
            </div>
            <a href="./pages/Projects.php" class="font-mono txtBtn text-[#ababab] bg-opacity-20 bg-[#101010] flex items-center gap-2  z-10 relative">
              See more 
              <span class="arrowLink">→</span>
          </a>
        </div>
      </div>

      <!-- Row Two of Bento -->
      <div class="grid grid-cols-6 gap-4  ">
          <!-- Services Section -->
        <div class="backdrop-blur-sm font-mono border border-[#505050] p-4 min-h-[35vh]  bg-opacity-20 bg-[#101010] col-span-2 rounded-xl space-y-4">
          <h3 class="text-lg  ">Services</h3>
          <ul class="services px-4">
              <li>Prototyping & Wireframing</li>
              <li>Responsive Design</li>
              <li>Usability Testing</li>
              
          </ul>
          <a href="./pages/Services.php" class="font-mono txtBtn text-[#ababab] flex items-center gap-2  z-10 relative">
              Read more about services 
              <span class="arrowLink">→</span>
          </a>
           
        </div>

        <!-- Odyssey Section -->
        <div class="backdrop-blur-sm font-mono border bg-opacity-20 bg-[#101010] border-[#505050] p-4 lg:col-span-2 rounded-xl space-y-4">
          <h3 class="text-lg">My Odyssey</h3>
          <p>I’m currently mastering FrontEnd development with React, and CSS. I’m in the thick of this learning phase!</p>
          <a href="./pages/Odyssey.php" class="font-mono txtBtn text-[#ababab] flex items-center gap-2  z-10 relative">
              Discover my journey
              <span class="arrowLink">→</span>
          </a>
        </div>
        <div class="backdrop-blur-sm border bg-opacity-20 bg-[#101010] border-[#505050] p-4 lg:col-span-2 rounded-xl space-y-4">
            <h3 class="text-lg font-mono">Drop a Quick Message!</h3>
            <form action="./save_msg.php" method="POST">
              <textarea  id="quickMessage" name="quick_message"
                  placeholder="Your message (include your email)"
                  class=" bg-transparent mb-4 text-white p-2  font-mono shadow-sm shadow-white rounded-md h-16 w-full" required>
              </textarea>
            
                  
              <div class="flex justify-between">
                <a href="./pages/Contact.php" class="font-mono txtBtn  text-[#ababab] flex items-center gap-2  z-10 relative">
                    Go to contact page  
                    <span class="arrowLink">→</span>
                </a>
                <button class="font-mono underline text-white" type="submit">
                  Submit 
                </button>

              </div>  
            </form>
            
              
        </div>
        <!-- Toast Notification -->
        <?php if (!empty($successMessage)): ?>
        <div class="toast toast-center">
            <div class="alert alert-success">
                <span><?php echo $successMessage; ?></span>
            </div>
        </div>
        <?php endif; ?>

          
      </div>
    </div>
</body>
</html>
