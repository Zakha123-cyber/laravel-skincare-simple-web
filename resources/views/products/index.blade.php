@extends('layouts.app')

@section('title', 'Skincare Beauty Collection')

@section('content')
    <div class="max-w-7xl mx-auto">
        <!-- Hero Section -->
        <div class="text-center mb-12 relative">
            <div class="absolute inset-0 flex items-center justify-center opacity-10">
                <div class="text-9xl">🌸</div>
            </div>
            <div class="relative z-10">
                <h1
                    class="text-6xl font-dancing font-bold bg-gradient-to-r from-pink-600 via-rose-500 to-purple-600 bg-clip-text text-transparent mb-4 animate-pulse">
                    Your Beauty Collection
                </h1>
                <p class="text-xl text-pink-600 font-medium mb-8 max-w-2xl mx-auto">
                    Discover and manage your skincare treasures ✨ Every product tells a story of beauty and self-care 💕
                </p>
                <div class="flex justify-center space-x-2 mb-8">
                    <span class="text-3xl animate-bounce">💄</span>
                    <span class="text-3xl animate-bounce" style="animation-delay: 0.2s;">🧴</span>
                    <span class="text-3xl animate-bounce" style="animation-delay: 0.4s;">✨</span>
                    <span class="text-3xl animate-bounce" style="animation-delay: 0.6s;">🌟</span>
                    <span class="text-3xl animate-bounce" style="animation-delay: 0.8s;">💖</span>
                </div>
            </div>
        </div>

        <!-- Add Product Button -->
        <div class="text-center mb-12">
            <a href="{{ route('products.create') }}"
                class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-pink-500 via-rose-500 to-purple-500 text-white font-semibold rounded-full shadow-2xl hover:shadow-pink-500/25 transform hover:scale-110 transition-all duration-500 relative overflow-hidden">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-pink-600 via-rose-600 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>
                <svg class="relative w-6 h-6 mr-3 group-hover:rotate-180 transition-transform duration-500" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                    </path>
                </svg>
                <span class="relative text-lg">Add New Beauty Product</span>
                <div
                    class="absolute -inset-1 bg-gradient-to-r from-pink-600 to-purple-600 rounded-full blur opacity-30 group-hover:opacity-60 transition duration-300">
                </div>
            </a>
        </div>

        <!-- Flash Messages -->
        @if (session('success'))
            <div class="mb-8 max-w-md mx-auto">
                <div class="glass-effect border border-green-300/50 rounded-2xl p-4 shadow-lg">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div
                                class="w-8 h-8 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-3">
                            <p class="text-green-700 font-medium">{{ session('success') }} 💕</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <!-- Products Grid -->
        @if ($products->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mb-12">
                @foreach ($products as $index => $p)
                    <div class="group product-card glass-effect rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl hover:shadow-pink-500/20 transform hover:-translate-y-3 transition-all duration-500 border border-pink-200/30"
                        style="animation-delay: {{ $index * 0.1 }}s;">

                        <!-- Product Image -->
                        <div class="relative overflow-hidden h-64">
                            @if ($p->image)
                                <img src="{{ asset('storage/public/images/' . $p->image) }}"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                    alt="{{ $p->name }}">
                            @else
                                <div
                                    class="w-full h-full bg-gradient-to-br from-pink-300 via-rose-300 to-purple-300 flex items-center justify-center">
                                    <div class="text-6xl opacity-60">💄</div>
                                </div>
                            @endif

                            <!-- Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>

                            <!-- Category Badge -->
                            <div class="absolute top-4 left-4">
                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-white/90 text-pink-700 shadow-lg">
                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                                        </path>
                                    </svg>
                                    {{ $p->category->name }}
                                </span>
                            </div>

                            <!-- Price Badge -->
                            <div class="absolute top-4 right-4">
                                <div
                                    class="bg-gradient-to-r from-pink-500 to-rose-500 text-white px-3 py-1 rounded-full shadow-lg">
                                    <span class="text-sm font-bold">Rp{{ number_format($p->price, 0, ',', '.') }}</span>
                                </div>
                            </div>

                            <!-- Love Icon -->
                            <div
                                class="absolute bottom-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="w-10 h-10 bg-white/90 rounded-full flex items-center justify-center shadow-lg">
                                    <svg class="w-5 h-5 text-pink-500 animate-pulse" fill="currentColor"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Product Info -->
                        <div class="p-6">
                            <h3
                                class="text-xl font-bold text-gray-800 mb-2 group-hover:text-pink-600 transition-colors duration-300 line-clamp-2">
                                {{ $p->name }}
                            </h3>

                            <p class="text-gray-600 text-sm mb-4 leading-relaxed line-clamp-3">
                                {{ Str::limit($p->description, 100) }}
                            </p>

                            <!-- Product Stats -->
                            <div class="flex items-center justify-between mb-6 text-sm">
                                <div class="flex items-center text-pink-500">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                        </path>
                                    </svg>
                                    <span class="font-medium">Favorite</span>
                                </div>
                                <div class="flex items-center text-purple-500">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                        </path>
                                    </svg>
                                    <span class="font-medium">Premium</span>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex space-x-3">
                                <a href="{{ route('products.edit', $p->id) }}"
                                    class="flex-1 bg-gradient-to-r from-amber-400 to-orange-400 hover:from-amber-500 hover:to-orange-500 text-white px-4 py-3 rounded-2xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl text-center text-sm flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                        </path>
                                    </svg>
                                    Edit
                                </a>
                                <form action="{{ route('products.destroy', $p->id) }}" method="POST" class="flex-1">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="w-full bg-gradient-to-r from-red-400 to-pink-400 hover:from-red-500 hover:to-pink-500 text-white px-4 py-3 rounded-2xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl text-sm flex items-center justify-center"
                                        onclick="return confirm('Are you sure you want to remove this beauty product? 💔')">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                            </path>
                                        </svg>
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- Empty State -->
            <div class="text-center py-16">
                <div class="glass-effect rounded-3xl shadow-2xl p-12 max-w-lg mx-auto border border-pink-200/30">
                    <div class="mb-8">
                        <div
                            class="w-32 h-32 bg-gradient-to-r from-pink-200 to-rose-200 rounded-full flex items-center justify-center mx-auto mb-6">
                            <div class="text-6xl">💄</div>
                        </div>
                        <h3 class="text-3xl font-dancing font-bold text-pink-600 mb-4">Your Beauty Collection is Empty</h3>
                        <p class="text-pink-500 mb-8 leading-relaxed">
                            Start building your skincare empire! Add your first beauty product and let your collection shine
                            ✨
                        </p>
                        <div class="flex justify-center space-x-2 mb-8">
                            <span class="text-2xl animate-bounce">🌸</span>
                            <span class="text-2xl animate-bounce" style="animation-delay: 0.2s;">💕</span>
                            <span class="text-2xl animate-bounce" style="animation-delay: 0.4s;">✨</span>
                        </div>
                    </div>
                    <a href="{{ route('products.create') }}"
                        class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-pink-500 to-rose-500 text-white font-semibold rounded-full shadow-xl hover:shadow-2xl transform hover:scale-110 transition-all duration-500">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Add Your First Beauty Product
                    </a>
                </div>
            </div>
        @endif
    </div>

    <!-- Floating Action Button -->
    <div class="fixed bottom-8 right-8 z-50">
        <a href="{{ route('products.create') }}"
            class="group w-16 h-16 bg-gradient-to-r from-pink-500 to-rose-500 text-white rounded-full shadow-2xl hover:shadow-pink-500/50 transform hover:scale-110 transition-all duration-300 flex items-center justify-center">
            <svg class="w-8 h-8 group-hover:rotate-180 transition-transform duration-500" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
            <div
                class="absolute -inset-1 bg-gradient-to-r from-pink-600 to-rose-600 rounded-full blur opacity-40 group-hover:opacity-70 transition duration-300">
            </div>
        </a>
    </div>

    <!-- Custom Styles -->
    <style>
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .product-card {
            animation: fadeInUp 0.6s ease-out forwards;
            opacity: 0;
            transform: translateY(30px);
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animate product cards on scroll
            const cards = document.querySelectorAll('.product-card');
            cards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });
    </script>
@endsection
