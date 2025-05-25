<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Skincare Beauty Manager')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        rose: {
                            50: '#fdf2f8',
                            100: '#fce7f3',
                            200: '#fbcfe8',
                            300: '#f9a8d4',
                            400: '#f472b6',
                            500: '#ec4899',
                            600: '#db2777',
                            700: '#be185d',
                            800: '#9d174d',
                            900: '#831843',
                        }
                    },
                    fontFamily: {
                        'beauty': ['Georgia', 'serif'],
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap');

        .font-dancing {
            font-family: 'Dancing Script', cursive;
        }

        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes sparkle {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: 0.5;
                transform: scale(0.8);
            }
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        .animate-sparkle {
            animation: sparkle 2s ease-in-out infinite;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .gradient-beauty {
            background: linear-gradient(135deg, #fdf2f8 0%, #fce7f3 25%, #fbcfe8 50%, #f9a8d4 75%, #f472b6 100%);
        }
    </style>
</head>

<body class="min-h-screen font-poppins gradient-beauty">
    <!-- Animated Background Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-10 left-10 w-20 h-20 bg-pink-300 rounded-full opacity-20 animate-float"></div>
        <div class="absolute top-32 right-20 w-16 h-16 bg-rose-400 rounded-full opacity-30 animate-float"
            style="animation-delay: 1s;"></div>
        <div class="absolute bottom-20 left-32 w-24 h-24 bg-purple-300 rounded-full opacity-25 animate-float"
            style="animation-delay: 2s;"></div>
        <div class="absolute bottom-40 right-10 w-12 h-12 bg-pink-400 rounded-full opacity-20 animate-sparkle"></div>

        <!-- Sparkle Effects -->
        <div class="absolute top-1/4 left-1/4 text-pink-300 animate-sparkle">✨</div>
        <div class="absolute top-3/4 right-1/4 text-rose-400 animate-sparkle" style="animation-delay: 1s;">💕</div>
        <div class="absolute top-1/2 left-3/4 text-purple-300 animate-sparkle" style="animation-delay: 2s;">✨</div>
    </div>

    <!-- Navigation -->
    <nav class="relative z-10 glass-effect shadow-lg border-b border-pink-200/30">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <a href="{{ route('products.index') }}" class="flex items-center space-x-3 group">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-pink-500 to-rose-500 rounded-full flex items-center justify-center shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-110">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h1
                            class="text-2xl font-dancing font-bold bg-gradient-to-r from-pink-600 to-rose-600 bg-clip-text text-transparent">
                            Skincare Beauty
                        </h1>
                        <p class="text-xs text-pink-500 font-medium">Manager</p>
                    </div>
                </a>

                <!-- Navigation Menu -->
                <div class="hidden md:flex items-center space-x-6">
                    <a href="{{ route('products.index') }}"
                        class="text-pink-700 hover:text-rose-600 font-medium transition-colors duration-300 flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                        </svg>
                        <span>Products</span>
                    </a>
                    <a href="{{ route('products.create') }}"
                        class="bg-gradient-to-r from-pink-500 to-rose-500 text-white px-6 py-2 rounded-full font-medium shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        <span>Add Product</span>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button
                    class="md:hidden w-10 h-10 bg-pink-500 text-white rounded-full flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="relative z-10 container mx-auto px-6 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="relative z-10 mt-16 glass-effect border-t border-pink-200/30">
        <div class="container mx-auto px-6 py-8">
            <div class="text-center">
                <div class="flex justify-center items-center space-x-2 mb-4">
                    <div
                        class="w-8 h-8 bg-gradient-to-r from-pink-500 to-rose-500 rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-dancing font-bold text-pink-600">Skincare Beauty Manager</h3>
                </div>
                <p class="text-pink-500 text-sm">Your beauty, our passion. Manage your skincare collection with love 💕
                </p>
                <div class="flex justify-center space-x-4 mt-4">
                    <span class="text-2xl animate-sparkle">✨</span>
                    <span class="text-2xl animate-sparkle" style="animation-delay: 0.5s;">💖</span>
                    <span class="text-2xl animate-sparkle" style="animation-delay: 1s;">🌸</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Add some interactive effects
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effect to floating elements
            const floatingElements = document.querySelectorAll('.animate-float');
            floatingElements.forEach(el => {
                el.addEventListener('mouseenter', function() {
                    this.style.animationPlayState = 'paused';
                    this.style.transform = 'translateY(-15px) scale(1.1)';
                });
                el.addEventListener('mouseleave', function() {
                    this.style.animationPlayState = 'running';
                    this.style.transform = '';
                });
            });
        });
    </script>
</body>

</html>
