<?php 
session_start();

if(isset($_SESSION["username"]) && $_SESSION['role'] == 'user'){
    header("Location: user_page.php");
}

if(isset($_SESSION["username"]) && $_SESSION['role'] == 'admin'){
    header("Location: dashboard.php");
}

if(isset($_SESSION["username"]) && $_SESSION['role'] == 'manager'){
    header("Location: manager_page.php");
}
?>
<!DOCTYPE html>
<html class="h-full bg-slate-100" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <style>
        * {
    font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont,
            'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans',
            'Helvetica Neue', sans-serif;
        }
    </style>
    <title>Crew Project</title>
</head>

<body class="flex flex-col items-baseline justify-center min-h-screen bg-[#FFF8E7]">
    <section class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-12">
        <h1 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl"> User Authentication and Role Management System </h1>
        <p class="mb-8 text-md font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48">
            Our Crew Project is a web application that requires user authentication and role management using PHP. The project has multiple user roles such as admin, manager, and user. Each role has different access permissions to various parts of the application. </p>
        <div class="flex flex-col gap-2 mb-8 lg:mb-16 md:flex-row md:justify-center">
            <a href="register.php" type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-teal-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                Register
            </a>
            <a href="login.php" type="button" class="text-white bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                Login
            </a>
    </section>
</body>

</html>