<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jo - Contact Me</title>
  <!-- Importing custom CSS file -->
  <link href="../index.css" rel="stylesheet">
  <link href="./fonts.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class=" mx-auto p-4">
      
    <!-- Navigation Bar -->
    <nav class="flex justify-between gap-4 px-4 lg:my-2 my-4">
      <h1 class="text-2xl font-mono">Jo-Contact </h1>
      <ul class="flex gap-4 font-mono">
        <li><a href="../Home.php">Home</a></li>
        <li><a href="./About.php">About</a></li>
        <li><a href="./Projects.php">Projects</a></li>
        <li><a href="./Services.php">Services</a></li>
        <li><a href="./Odyssey.php">Odyssey</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>

    <div class="border border-[#505050] w-full bg-[#101010] bg-opacity-20 rounded-xl backdrop-blur-sm"> 
      <form class="px-80 py-10 text-white font-mono space-y-6 mx-auto" action="../save_msg.php" method="POST">
        <h3 class="text-2xl text-center mb-8 font-mono">Send me a message or an offer!</h3>
          <div class="space-y-2">
              <label class="text"> Name </label>
              <input id="name" name="name" 
                  placeholder="input name..."
                  class="bg-transparent p-2 text-sm shadow-sm shadow-white rounded-md h-10 w-full" required>
              </input>
          </div>
          <div class="space-y-2">
              <label class="text"> Email </label>
              <input id="email" name="email" 
                  placeholder="input email..."
                  type="email"
                  class="bg-transparent p-2 text-sm shadow-sm shadow-white rounded-md h-10 w-full" required>
              </input>
          </div>
          <div class="space-y-2">
              <label class="text"> Message </label>
              <textarea id="message" name="message" 
                  placeholder="input message..."
                  class="bg-transparent p-2 text-sm shadow-sm shadow-white rounded-md h-16 w-full" required>
              </textarea>
          </div>
              
                
          <div class="flex justify-between ">
            <a class="font-mono txtBtn text-sm text-[#ababab] flex items-center gap-2  z-10 relative">
                Send through email  
                <span class="arrowLink">→</span>
            </a>
            <button class="font-mono underline" type="submit">
                Submit 
            </button>

        </div>
      </form>
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