<?php
include('auth.php');
include('db_connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arm Wrestling Championship</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 h-screen">    
    <div class="container mx-auto px-4 py-16 md:py-24 max-w-6xl">
        <header class="mb-16">
            <nav class="flex justify-between items-center mb-12">
                <div class="text-xl font-bold text-gray-800">AWC'24</div>
                
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="index.php" class="text-gray-600 hover:text-gray-900">Home</a>
                    <a href="about.php" class="text-gray-600 hover:text-gray-900">About</a>
                    <a href="schedule.php" class="text-gray-600 hover:text-gray-900">Schedule</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900">Contact</a>
                    
                    <?php if(isset($_SESSION['id'])): ?>
                        <a href="dashboard.php" class="text-gray-600 hover:text-gray-900">
                            Dashboard
                        </a>
                        <a href="logout.php" class="bg-white border border-red-400 text-red-700 px-4 py-2 rounded-lg hover:bg-red-700 hover:text-white transition-colors">
                            Logout
                        </a>
                    <?php else: ?>
                        <a href="login.php" class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition-colors">
                            Login
                        </a>
                    <?php endif; ?>
                </div>

                <div class="md:hidden flex items-center space-x-4">
                    <?php if(isset($_SESSION['id'])): ?>
                        <a href="dashboard.php" class="text-gray-600 hover:text-gray-900">Dashboard</a>
                        <a href="logout.php" class="text-red-600 hover:text-red-700">Logout</a>
                    <?php else: ?>
                        <a href="login.php" class="text-gray-600 hover:text-gray-900">Login</a>
                    <?php endif; ?>
                    <button class="text-gray-600">Menu</button>
                </div>
            </nav>
        </header>
        
        <main class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">National Arm Wrestling Championship</h1>
                <p class="text-xl text-gray-600 mb-8">December 15, 2024 • Blang Padang, Banda Aceh</p>
                <a href="register.php" class="inline-block bg-black text-white px-8 py-4 rounded-lg font-medium hover:bg-gray-800 transition-colors">Register Now</a>
            </div>
            <div class="relative">
                <div class="aspect-w-4 aspect-h-3 bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden">
                    <img src="armwestler.png" alt="Arm wrestling competition" class="mix-blend-overlay opacity-50 object-cover w-full h-full">
                </div>
                <div class="absolute -bottom-6 -right-6 bg-white rounded-xl p-4 border border-gray-200">
                    <div class="text-center">
                        <div class="text-xs text-gray-500">COUNTDOWN</div>
                        <div class="text-xl font-bold">241 Days</div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>