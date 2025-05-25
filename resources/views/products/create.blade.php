@extends('layouts.app')

@section('title', 'Add New Beauty Product - Skincare Beauty Manager')

@section('content')
    <!-- Hero Section with Floating Elements -->
    <div class="relative mb-12">
        <div class="text-center">
            <div
                class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-pink-500 to-rose-500 rounded-full shadow-2xl mb-6 animate-float">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                    </path>
                </svg>
            </div>
            <h1
                class="text-4xl font-dancing font-bold bg-gradient-to-r from-pink-600 to-rose-600 bg-clip-text text-transparent mb-3">
                Add New Beauty Product
            </h1>
            <p class="text-pink-500 font-medium">Discover and share your favorite skincare treasures ✨</p>
        </div>
    </div>

    <!-- Main Form Container -->
    <div class="max-w-2xl mx-auto">
        <div class="glass-effect rounded-3xl shadow-2xl p-8 border border-pink-200/30 relative overflow-hidden">
            <!-- Decorative Elements -->
            <div
                class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-pink-300/20 to-rose-300/20 rounded-full -translate-y-16 translate-x-16">
            </div>
            <div
                class="absolute bottom-0 left-0 w-24 h-24 bg-gradient-to-tr from-purple-300/20 to-pink-300/20 rounded-full translate-y-12 -translate-x-12">
            </div>

            <!-- Form Header -->
            <div class="relative z-10 mb-8">
                <div class="flex items-center space-x-3 mb-6">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-pink-500 to-rose-500 rounded-full flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl font-semibold text-pink-700">Product Details</h2>
                        <p class="text-pink-500 text-sm">Fill in the beautiful details of your skincare product</p>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data"
                class="relative z-10 space-y-6">
                @csrf

                <!-- Product Name -->
                <div class="form-group">
                    <label class="flex items-center space-x-2 text-pink-700 font-medium mb-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                            </path>
                        </svg>
                        <span>Product Name</span>
                    </label>
                    <input type="text" name="name" placeholder="e.g., Vitamin C Brightening Serum"
                        class="w-full bg-white/70 border-2 border-pink-200 rounded-2xl px-6 py-4 text-pink-800 placeholder-pink-400 focus:border-pink-400 focus:ring-4 focus:ring-pink-200/50 transition-all duration-300 backdrop-blur-sm"
                        required>
                    @error('name')
                        <p class="text-rose-500 text-sm mt-2 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Description -->
                <div class="form-group">
                    <label class="flex items-center space-x-2 text-pink-700 font-medium mb-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span>Product Description</span>
                    </label>
                    <textarea name="description" placeholder="Describe the amazing benefits and ingredients of your skincare product..."
                        rows="4"
                        class="w-full bg-white/70 border-2 border-pink-200 rounded-2xl px-6 py-4 text-pink-800 placeholder-pink-400 focus:border-pink-400 focus:ring-4 focus:ring-pink-200/50 transition-all duration-300 backdrop-blur-sm resize-none"
                        required></textarea>
                    @error('description')
                        <p class="text-rose-500 text-sm mt-2 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Price and Category Row -->
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Price -->
                    <div class="form-group">
                        <label class="flex items-center space-x-2 text-pink-700 font-medium mb-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1">
                                </path>
                            </svg>
                            <span>Price</span>
                        </label>
                        <div class="relative">
                            <span
                                class="absolute left-6 top-1/2 transform -translate-y-1/2 text-pink-600 font-semibold">Rp</span>
                            <input type="number" name="price" step="0.01" placeholder="199000"
                                class="w-full bg-white/70 border-2 border-pink-200 rounded-2xl pl-12 pr-6 py-4 text-pink-800 placeholder-pink-400 focus:border-pink-400 focus:ring-4 focus:ring-pink-200/50 transition-all duration-300 backdrop-blur-sm"
                                required>
                        </div>
                        @error('price')
                            <p class="text-rose-500 text-sm mt-2 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Category -->
                    <div class="form-group">
                        <label class="flex items-center space-x-2 text-pink-700 font-medium mb-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                            <span>Category</span>
                        </label>
                        <select name="category_id"
                            class="w-full bg-white/70 border-2 border-pink-200 rounded-2xl px-6 py-4 text-pink-800 focus:border-pink-400 focus:ring-4 focus:ring-pink-200/50 transition-all duration-300 backdrop-blur-sm"
                            required>
                            <option value="" class="text-pink-400">✨ Choose a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" class="text-pink-800">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="text-rose-500 text-sm mt-2 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                <!-- Image Upload -->
                <div class="form-group">
                    <label class="flex items-center space-x-2 text-pink-700 font-medium mb-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span>Product Image</span>
                        <span class="text-pink-400 text-sm">(Optional)</span>
                    </label>
                    <div class="relative">
                        <input type="file" name="image" accept="image/*"
                            class="w-full bg-white/70 border-2 border-pink-200 rounded-2xl px-6 py-4 text-pink-700 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-gradient-to-r file:from-pink-500 file:to-rose-500 file:text-white hover:file:shadow-lg transition-all duration-300 backdrop-blur-sm focus:border-pink-400 focus:ring-4 focus:ring-pink-200/50">
                        <div class="absolute right-6 top-1/2 transform -translate-y-1/2 text-pink-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-pink-400 text-sm mt-2 flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Upload a beautiful image of your product (JPG, PNG, max 2MB)
                    </p>
                    @error('image')
                        <p class="text-rose-500 text-sm mt-2 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-6">
                    <button type="submit"
                        class="flex-1 bg-gradient-to-r from-pink-500 to-rose-500 text-white font-semibold py-4 px-8 rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 flex items-center justify-center space-x-3 group">
                        <svg class="w-5 h-5 group-hover:rotate-12 transition-transform duration-300" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                        <span>Save Beautiful Product</span>
                        <span class="animate-sparkle">✨</span>
                    </button>

                    <a href="{{ route('products.index') }}"
                        class="flex-1 sm:flex-none bg-white/70 text-pink-700 font-semibold py-4 px-8 rounded-2xl border-2 border-pink-200 hover:border-pink-300 shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 flex items-center justify-center space-x-3 backdrop-blur-sm group">
                        <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform duration-300" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        <span>Cancel</span>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Beauty Tips Section -->
    <div class="max-w-2xl mx-auto mt-12">
        <div class="glass-effect rounded-2xl p-6 border border-pink-200/30">
            <div class="flex items-center space-x-3 mb-4">
                <div
                    class="w-10 h-10 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-pink-700">💡 Beauty Tips</h3>
            </div>
            <div class="grid sm:grid-cols-2 gap-4 text-sm text-pink-600">
                <div class="flex items-start space-x-2">
                    <span class="text-pink-400 mt-0.5">🌸</span>
                    <p>Use clear, well-lit photos for better presentation</p>
                </div>
                <div class="flex items-start space-x-2">
                    <span class="text-pink-400 mt-0.5">💕</span>
                    <p>Include key ingredients in your description</p>
                </div>
                <div class="flex items-start space-x-2">
                    <span class="text-pink-400 mt-0.5">✨</span>
                    <p>Mention skin type compatibility</p>
                </div>
                <div class="flex items-start space-x-2">
                    <span class="text-pink-400 mt-0.5">🎀</span>
                    <p>Add usage instructions for best results</p>
                </div>
            </div>
        </div>
    </div>
@endsection
