<?php 
include('auth.php');
include('db_connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Arm Wrestling Championship</title>
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
                
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="index.php" class="text-gray-600 hover:text-gray-900">Home</a>
                    <a href="about.php" class="text-gray-600 hover:text-gray-900">About</a>
                    <a href="schedule.php" class="text-gray-600 hover:text-gray-900">Schedule</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900">Contact</a>
                    
                    <?php if(isset($_SESSION['id'])): ?>
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
                        <a href="logout.php" class="bg-white border border-red-400 text-red-700 px-4 py-2 rounded-lg hover:bg-red-700 hover:text-white transition-colors">
                        Logout</a>
                    <?php else: ?>
                        <a href="login.php" class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition-colors">
                        Login</a>
                    <?php endif; ?>
                    <button class="text-gray-600">Menu</button>
                </div>
            </nav>
        </header>

        <main class="bg-white rounded-2xl p-8 md:p-12 border border-gray-200">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900">Registration Dashboard</h2>
                <div class="flex items-center space-x-4">
                    <span class="text-sm text-gray-600">Welcome, Admin</span>
                </div>
            </div>

            <?php
            $result = mysqli_query($conn, "SELECT * FROM registrar");
            echo '<div class="overflow-x-auto rounded-xl border border-gray-200">';
            echo '<table class="min-w-full divide-y divide-gray-200">';
            echo '<thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Registered At</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                  </thead>';
            echo '<tbody class="bg-white divide-y divide-gray-200">';
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td class='px-6 py-4 whitespace-nowrap'>{$row['name']}</td>
                        <td class='px-6 py-4 whitespace-nowrap'>{$row['email']}</td>
                        <td class='px-6 py-4 whitespace-nowrap'>{$row['phone']}</td>
                        <td class='px-6 py-4 whitespace-nowrap'>{$row['created_at']}</td>
                        <td class='px-6 py-4 whitespace-nowrap space-x-2'>
                            <a href='edit_registration.php?id={$row['id']}' class='inline-flex items-center px-3 py-1.5 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50'>Edit</a>
                            <form method='POST' action='delete_registration.php' class='inline'>
                                <input type='hidden' name='id' value='{$row['id']}'>
                                <button type='submit' class='inline-flex items-center px-3 py-1.5 border border-red-600 rounded-lg text-sm font-medium text-red-600 hover:bg-red-50' onclick='return confirm(\"Are you sure?\")'>Delete</button>
                            </form>
                        </td>
                      </tr>";
            }
            echo '</tbody></table></div>';
            ?>
        </main>
    </div>
</body>
</html>