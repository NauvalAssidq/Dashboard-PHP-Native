<?php
include('auth.php');
include('db_connection.php');

if (!isset($_GET['id'])) {
    header("Location: dashboard.php");
    exit();
}

$id = intval($_GET['id']);

$result = mysqli_query($conn, "SELECT * FROM registrar WHERE id = $id");
$row = mysqli_fetch_assoc($result);

if (!$row) {
    header("Location: dashboard.php?error=Record not found");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    $check = mysqli_query($conn, "SELECT * FROM registrar 
                WHERE (email = '$email' OR phone = '$phone') AND id != $id");
    
    if (mysqli_num_rows($check) > 0) {
        header("Location: edit_registration.php?id=$id&error=Email or phone already exists");
        exit();
    }

    $update = mysqli_query($conn, "UPDATE registrar SET
                name = '$name',
                email = '$email',
                phone = '$phone',
                address = '$address'
                WHERE id = $id");

    if ($update) {
        header("Location: dashboard.php?success=Registration updated successfully");
    } else {
        header("Location: edit_registration.php?id=$id&error=Update failed");
    }
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Registration - AWC'24</title>
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

        <main class="bg-white rounded-2xl p-8 md:p-12 border border-gray-200">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900">Edit Registration</h2>
                <a href="dashboard.php" class="text-gray-600 hover:text-gray-900">← Back to Dashboard</a>
            </div>

            <?php if(isset($_GET['error'])): ?>
                <div class="mb-6 p-4 bg-red-100 text-red-700 rounded-lg">
                    <?= htmlspecialchars($_GET['error']) ?>
                </div>
            <?php endif; ?>

            <form method="POST" class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">Full Name</label>
                    <input 
                        type="text" 
                        name="name" 
                        required
                        class="w-full px-5 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-gray-800 focus:border-transparent placeholder-gray-400"
                        value="<?= htmlspecialchars($row['name']) ?>">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-3">Email</label>
                        <input 
                            type="email" 
                            name="email" 
                            required
                            class="w-full px-5 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-gray-800 focus:border-transparent placeholder-gray-400"
                            value="<?= htmlspecialchars($row['email']) ?>">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-3">Phone</label>
                        <input 
                            type="tel" 
                            name="phone" 
                            required
                            class="w-full px-5 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-gray-800 focus:border-transparent placeholder-gray-400"
                            value="<?= htmlspecialchars($row['phone']) ?>">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">Address</label>
                    <textarea 
                        name="address" 
                        required
                        rows="4"
                        class="w-full px-5 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-gray-800 focus:border-transparent placeholder-gray-400"><?= htmlspecialchars($row['address']) ?></textarea>
                </div>

                <button 
                    type="submit" 
                    class="w-full bg-black hover:bg-gray-800 text-white font-medium py-4 px-8 rounded-xl transition-colors duration-200">
                    Update Registration
                </button>
            </form>
        </main>
    </div>
</body>
</html>