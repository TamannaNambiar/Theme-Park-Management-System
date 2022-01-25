<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="login.css" />

    <title>Theme park Ticketing system</title>
  </head>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: "#da373d",
          },
        },
      },
    };
  </script>
  <body>
  <form action="login.php" method="post">
  
    <div class="flex justify-around">
    
      <div class="w-6/12 h-screen flex justify-center items-center">
     
        <div class="gradient c-height rounded-2xl">
        
          <div class="pt-4 pl-10">
            <p class="text-3xl font-bold">Dreamzzz</p>
          </div>
        
          <div class="w-full inherit-h flex justify-center items-center">
            <div class="w-4/5 h-4/5 items-center flex flex-col justify-center">
              <p class="text-2xl font-bold">Login</p>
              <p class="text-lg text-gray-500">Sign in to your account</p>
           
            
              <input
                class="bg-gray-100 m-4 appearance-none border-2 border-gray-200 rounded w-3/5 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="inline-username"
                type="text"
                name="uname"
                placeholder="Username"
                required
              >
              <input
                class="bg-gray-100 m-4 appearance-none border-2 border-gray-200 rounded w-3/5 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="inline-password"
                type="password"
                name="password"
                placeholder="Password"
                required
              >
          
              <div class="mb-6">
                <label class="text-gray-500 font-bold">
                  <input class="mr-2 leading-tight" type="checkbox" />
                  <span class="text-sm"> Keep me logged in </span>
                </label>
              </div>
              <button
                class="shadow w-2/5 bg-green-900 hover:bg-green-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                type="submit"
              >
                Login
              </button>
              <?php if (isset($_GET['error'])) { ?> 
                <script>alert("<?php echo $_GET['error']; ?>")</script> 
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      </form>
      <div class="w-6/12 h-screen flex justify-center items-center">
        <div class="c-height rounded-2xl">
          <img src="image.png" class="w-full h-full rounded-2xl" alt="image" />
        </div>
      </div>
    </div>
  </body>
</html>
