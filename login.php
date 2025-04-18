<?php
include('db_connection.php'); 
include('authenticate.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Arm Wrestling Championship</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-16 md:py-24 max-w-6xl">
        <header class="mb-16">
            <nav class="flex justify-between items-center mb-12">
                <div class="text-xl font-bold text-gray-800">AWC'24</div>
                <div class="hidden md:flex space-x-8">
                    <a href="index.php" class="text-gray-600 hover:text-gray-900">Home</a>
                    <a href="about.php" class="text-gray-600 hover:text-gray-900">About</a>
                    <a href="schedule.php" class="text-gray-600 hover:text-gray-900">Schedule</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900">Contact</a>
                </div>
                <div class="md:hidden">
                    <button class="text-gray-600">Menu</button>
                </div>
            </nav>
        </header>

        <main class="max-w-md mx-auto">
            <div class="text-center mb-10">
                <h2 class="text-4xl font-bold text-gray-900 mb-3">Admin Portal</h2>
                <p class="text-gray-600">Access the championship management dashboard</p>
            </div>

            <?php if (isset($_SESSION['error'])): ?>
                <div class="mb-8 p-4 rounded-lg bg-red-100 border border-red-200 text-red-700">
                    <?= $_SESSION['error']; unset($_SESSION['error']); ?>
                </div>
            <?php endif; ?>

            <form class="bg-white border border-gray-200 rounded-2xl px-8 pt-10 pb-8" action="authenticate.php" method="POST">
                <div class="mb-8">
                    <label class="block text-sm font-medium text-gray-700 mb-3">Username</label>
                    <input 
                        type="text" 
                        name="username" 
                        required
                        class="w-full px-5 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-gray-800 focus:border-transparent placeholder-gray-400"
                        placeholder="Enter admin username">
                </div>

                <div class="mb-10">
                    <label class="block text-sm font-medium text-gray-700 mb-3">Password</label>
                    <input 
                        type="password" 
                        name="password" 
                        required
                        class="w-full px-5 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-gray-800 focus:border-transparent placeholder-gray-400"
                        placeholder="••••••••">
                </div>

                <button 
                    type="submit" 
                    class="w-full bg-black hover:bg-gray-800 text-white font-medium py-4 px-8 rounded-xl transition-colors duration-200">
                    Sign In
                </button>
            </form>
        </main>
    </div>
</body>
</html>