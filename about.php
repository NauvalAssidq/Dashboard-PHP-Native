<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Arm Wrestling Championship</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 h-screen">
    <?php include('auth.php'); ?>
    
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

    <main>
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Left Column -->
                <div class="space-y-8">
                    <h2 class="text-4xl font-bold text-gray-900">About the Championship</h2>
                    
                    <div class="space-y-6 text-gray-600">
                        <h3 class="text-2xl font-semibold text-gray-800">Our Legacy</h3>
                        <p>Established in 1998, the National Arm Wrestling Championship has evolved into Southeast Asia's premier strength sports event. What began as a local competition in Aceh with 50 participants now attracts over 2,000 athletes annually from across the region.</p>
                        <p>Our championship is not just about competition; it's a celebration of strength, skill, and sportsmanship. We aim to foster a community that values hard work, dedication, and the spirit of fair play.</p>

                        <h3 class="text-2xl font-semibold text-gray-800 mt-8">Our Mission</h3>
                        <p>We aim to promote arm wrestling as a mainstream sport while preserving its rich cultural heritage in Indonesia. Through youth development programs and community outreach, we're building the next generation of champions.</p>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-8">
                    <div class="bg-white border border-gray-200 p-8 rounded-xl">
                        <h3 class="text-xl font-semibold mb-4">Championship Details</h3>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-red-500 mr-3"></i>
                                <div>
                                    <p class="font-medium">Venue</p>
                                    <p class="text-sm">Blang Padang Stadium<br>Banda Aceh, Indonesia</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center">
                                <i class="fas fa-calendar-alt text-blue-500 mr-3"></i>
                                <div>
                                    <p class="font-medium">Dates</p>
                                    <p class="text-sm">December 13-15, 2024<br>3-day tournament</p>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <i class="fas fa-trophy text-yellow-500 mr-3"></i>
                                <div>
                                    <p class="font-medium">Prizes</p>
                                    <p class="text-sm">Total prize pool: $50,000 USD<br>National ranking points</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-200 p-6 rounded-xl text-center">
                        <h4 class="font-semibold mb-3">Registration Open!</h4>
                        <p class="text-sm mb-4">Early bird registration until October 31</p>
                        <a href="#" class="bg-black text-white px-6 py-2 rounded-lg font-medium hover:bg-gray-700 transition-colors">
                            Register Now
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>