<?php

if(isset($_POST["submit"])){
    if($_POST['name'] === "admin"  && $_POST['password'] === "110918" ){
        header("Location: admin/admin.php");
        exit;
    } else {
        $wrong = true;
    }
};

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
         <!-- Google Fonts - Onest -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Onest:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

</head>
<body class="font-[Onest]">
        
    <div class="min-h-screen flex">
        <!-- Form -->
         <div class="w-full md:w-1/2 flex items-center justify-center p-10">
            <div class="max-w-md w-full space-y-6">
                <h2 class="text-slate-800 text-3xl font-bold text-center">
                    Login Admin
                </h2>
                <p class="text-slate-900 text-center">
                   Silahkan Masuk Sebagai Admin
                </p>
            
            <?php if(isset($wrong)) : ?>
                <p class="text-red-600 italic">Username dan Password Salah!</p>
            <?php endif; ?>

    
        <form action="" method="post" class="space-y-4">
        <div>
          <label class="block text-sm font-medium"></label>
          <input
            placeholder="username"
            type="name"
            name="name"
            required
            class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md"
          />
        </div>
    
        <div>
          <label class="block text-sm font-medium"></label>
          <input
             placeholder="password"
            type="password"
            name="password"
            required
            class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md"
          />
        </div>
    
        <button
          type="submit"
          name="submit"
          class="flex mx-auto bg-slate-800 text-white py-1 px-8 rounded-md hover:bg-slate-50 hover:text-slate-900  transition"
        >
          Login
         </button>
    
        </form>
    
          </div>
         </div>

        <!-- Image -->
            <div
                class="relative hidden md:block md:w-1/2 bg-cover"
                style="background-image: url(img/1.png)">
             
            </div>
     </div>







</body>
</html>