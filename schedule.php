<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule - Arm Wrestling Championship</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl font-bold text-gray-900 mb-8">Event Schedule</h2>
                
                <div class="flex flex-col md:flex-row gap-8">
                    <!-- Schedule Timeline -->
                    <div class="md:w-2/3 space-y-6">
                        <!-- Schedule tabs -->
                        <div class="flex border-b border-gray-200 mb-6">
                            <button class="px-4 py-2 border-b-2 border-gray-800 font-medium text-gray-900">All Days</button>
                            <button class="px-4 py-2 text-gray-500 hover:text-gray-700">Day 1</button>
                            <button class="px-4 py-2 text-gray-500 hover:text-gray-700">Day 2</button>
                            <button class="px-4 py-2 text-gray-500 hover:text-gray-700">Day 3</button>
                        </div>
                        
                        <!-- Day 1 -->
                        <div class="bg-white p-5 rounded-lg   border-l-4 border border-gray-200">
                            <h3 class="font-bold text-lg flex items-center">
                                <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-md text-sm mr-3">DAY 1</span>
                                <span class="text-gray-700">December 13 - Registration & Preliminaries</span>
                            </h3>
                            <div class="mt-4 space-y-3">
                                <div class="flex">
                                    <div class="w-24 text-gray-500 text-sm pt-1">08:00-10:00</div>
                                    <div>
                                        <p class="font-medium text-gray-800">Athlete Registration</p>
                                        <p class="text-sm text-gray-600">Main Hall</p>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="w-24 text-gray-500 text-sm pt-1">10:30-18:00</div>
                                    <div>
                                        <p class="font-medium text-gray-800">Men's Lightweight Division</p>
                                        <p class="text-sm text-gray-600">Arena A</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Day 2 -->
                        <div class="bg-white p-5 rounded-lg    border-l-4 border border-gray-200">
                            <h3 class="font-bold text-lg flex items-center">
                                <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-md text-sm mr-3">DAY 2</span>
                                <span class="text-gray-700">December 14 - Main Competition Day</span>
                            </h3>
                            <div class="mt-4 space-y-3">
                                <div class="flex">
                                    <div class="w-24 text-gray-500 text-sm pt-1">09:00-12:00</div>
                                    <div>
                                        <p class="font-medium text-gray-800">Women's Division Finals</p>
                                        <p class="text-sm text-gray-600">Main Stage</p>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="w-24 text-gray-500 text-sm pt-1">14:00-17:00</div>
                                    <div>
                                        <p class="font-medium text-gray-800">Men's Heavyweight Quarterfinals</p>
                                        <p class="text-sm text-gray-600">Arena B</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Day 3 -->
                        <div class="bg-white p-5 rounded-lg   border-l-4 border border-gray-200">
                            <h3 class="font-bold text-lg flex items-center">
                                <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-md text-sm mr-3">DAY 3</span>
                                <span class="text-gray-700">December 15 - Grand Finals & Closing</span>
                            </h3>
                            <div class="mt-4 space-y-3">
                                <div class="flex">
                                    <div class="w-24 text-gray-500 text-sm pt-1">10:00-12:30</div>
                                    <div>
                                        <p class="font-medium text-gray-800">Championship Finals</p>
                                        <p class="text-sm text-gray-600">Main Stage</p>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="w-24 text-gray-500 text-sm pt-1">15:00-17:00</div>
                                    <div>
                                        <p class="font-medium text-gray-800">Award Ceremony</p>
                                        <p class="text-sm text-gray-600">Main Arena</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Info Sidebar -->
                    <div class="md:w-1/3">
                        <div class="bg-gray-50 p-5 rounded-lg  mb-6">
                            <h3 class="text-lg font-semibold mb-3 flex items-center text-gray-700">
                                <i class="fas fa-info-circle mr-2 text-gray-600"></i>Important Notes
                            </h3>
                            <ul class="space-y-2 text-gray-600 text-sm">
                                <li class="flex items-start">
                                    <i class="fas fa-check text-gray-500 mt-1 mr-2"></i>
                                    <span>All times in WIB (Western Indonesia Time)</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-gray-500 mt-1 mr-2"></i>
                                    <span>Schedule subject to change</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-gray-500 mt-1 mr-2"></i>
                                    <span>Doors open 1 hour before first match</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-gray-500 mt-1 mr-2"></i>
                                    <span>VIP ticket holders get early access</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="bg-gray-50 p-5 rounded-lg ">
                            <h3 class="text-lg font-semibold mb-3 flex items-center text-gray-700">
                                <i class="fas fa-map-marker-alt mr-2 text-gray-600"></i>Venue
                            </h3>
                            <div class="aspect-w-16 aspect-h-12 bg-gray-200 rounded-lg overflow-hidden mb-2">
                                <iframe
                                    class="w-full h-48 border-0 grayscale"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.6673902130275!2d95.31805127579735!3d5.548230794449045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304037f481b13a91%3A0x1fdaf5ffbe138d25!2sBlang%20Padang!5e0!3m2!1sen!2sid!4v1713514921674!5m2!1sen!2sid"
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"
                                ></iframe>
                            </div>
                            <p class="text-sm text-gray-600">Blang Padang Stadium, Banda Aceh</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>