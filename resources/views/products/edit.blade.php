@extends('layouts.app')

@section('title', 'Edit Beauty Product - Skincare Beauty Manager')

@section('content')
    <!-- Hero Section with Floating Elements -->
    <div class="relative mb-12">
        <div class="text-center">
            <div
                class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full shadow-2xl mb-6 animate-float">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                    </path>
                </svg>
            </div>
            <h1
                class="text-4xl font-dancing font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent mb-3">
                Edit Beauty Product
            </h1>
            <p class="text-pink-500 font-medium">Perfect your skincare treasure details ✨</p>
            <div class="flex items-center justify-center space-x-2 mt-4">
                <span
                    class="px-4 py-2 bg-gradient-to-r from-pink-100 to-rose-100 text-pink-700 text-sm font-medium rounded-full border border-pink-200">
                    Editing: {{ $product->name }}
                </span>
            </div>
        </div>
    </div>

    <!-- Main Form Container -->
    <div class="max-w-2xl mx-auto">
        <div class="glass-effect rounded-3xl shadow-2xl p-8 border border-pink-200/30 relative overflow-hidden">
            <!-- Decorative Elements -->
            <div
                class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-purple-300/20 to-pink-300/20 rounded-full -translate-y-16 translate-x-16">
            </div>
            <div
                class="absolute bottom-0 left-0 w-24 h-24 bg-gradient-to-tr from-pink-300/20 to-rose-300/20 rounded-full translate-y-12 -translate-x-12">
            </div>

            <!-- Form Header -->
            <div class="relative z-10 mb-8">
                <div class="flex items-center space-x-3 mb-6">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl font-semibold text-pink-700">Update Product Details</h2>
                        <p class="text-pink-500 text-sm">Refine the beautiful details of your skincare product</p>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data"
                class="relative z-10 space-y-6">
                @csrf
                @method('PUT')

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
                    <input type="text" name="name" value="{{ old('name', $product->name) }}"
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
                    <textarea name="description" rows="4"
                        class="w-full bg-white/70 border-2 border-pink-200 rounded-2xl px-6 py-4 text-pink-800 placeholder-pink-400 focus:border-pink-400 focus:ring-4 focus:ring-pink-200/50 transition-all duration-300 backdrop-blur-sm resize-none"
                        required>{{ old('description', $product->description) }}</textarea>
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
                            <input type="number" name="price" value="{{ old('price', $product->price) }}" step="0.01"
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
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}
                                    class="text-pink-800">
                                    {{ $category->name }}
                                </option>
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

                <!-- Current Image Preview & New Image Upload -->
                <div class="form-group">
                    <label class="flex items-center space-x-2 text-pink-700 font-medium mb-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span>Product Image</span>
                    </label>

                    <!-- Current Image Display -->
                    @if ($product->image)
                        <div class="mb-6">
                            <div class="glass-effect rounded-2xl p-4 border border-pink-200/30">
                                <div class="flex items-center space-x-3 mb-3">
                                    <div
                                        class="w-8 h-8 bg-gradient-to-r from-pink-400 to-rose-400 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-semibold text-pink-700">Current Image</h4>
                                        <p class="text-xs text-pink-500">This beautiful image is currently displayed</p>
                                    </div>
                                </div>
                                <div class="relative group">
                                    <img src="{{ asset('storage/images/' . $product->image) }}"
                                        alt="{{ $product->name }}"
                                        class="w-full max-w-sm mx-auto rounded-xl shadow-lg border-2 border-pink-200/50 group-hover:shadow-xl transition-all duration-300">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-pink-500/20 to-transparent rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="mb-6">
                            <div class="glass-effect rounded-2xl p-6 border border-pink-200/30 text-center">
                                <div
                                    class="w-16 h-16 bg-gradient-to-r from-pink-300 to-rose-300 rounded-full flex items-center justify-center mx-auto mb-3 opacity-50">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                <p class="text-pink-500 text-sm">No image currently uploaded</p>
                            </div>
                        </div>
                    @endif

                    <!-- New Image Upload -->
                    <div class="relative">
                        <input type="file" name="image" accept="image/*"
                            class="w-full bg-white/70 border-2 border-pink-200 rounded-2xl px-6 py-4 text-pink-700 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-gradient-to-r file:from-purple-500 file:to-pink-500 file:text-white hover:file:shadow-lg transition-all duration-300 backdrop-blur-sm focus:border-pink-400 focus:ring-4 focus:ring-pink-200/50">
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
                        Upload a new image to replace the current one (Optional - JPG, PNG, max 2MB)
                    </p>
                    <input type="hidden" name="old_image" value="{{ $product->image }}">
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
                        class="flex-1 bg-gradient-to-r from-purple-500 to-pink-500 text-white font-semibold py-4 px-8 rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 flex items-center justify-center space-x-3 group">
                        <svg class="w-5 h-5 group-hover:rotate-12 transition-transform duration-300" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                            </path>
                        </svg>
                        <span>Update Product</span>
                        <span class="animate-sparkle">✨</span>
                    </button>

                    <a href="{{ route('products.index') }}"
                        class="flex-1 sm:flex-none bg-white/70 text-pink-700 font-semibold py-4 px-8 rounded-2xl border-2 border-pink-200 hover:border-pink-300 shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 flex items-center justify-center space-x-3 backdrop-blur-sm group">
                        <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform duration-300" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        <span>Back to Products</span>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Tips Section -->
    <div class="max-w-2xl mx-auto mt-12">
        <div class="glass-effect rounded-2xl p-6 border border-pink-200/30">
            <div class="flex items-center space-x-3 mb-4">
                <div
                    class="w-10 h-10 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-pink-700">💡 Editing Tips</h3>
            </div>
            <div class="grid sm:grid-cols-2 gap-4 text-sm text-pink-600">
                <div class="flex items-start space-x-2">
                    <span class="text-pink-400 mt-0.5">🔄</span>
                    <p>Only upload a new image if you want to replace the current one</p>
                </div>
                <div class="flex items-start space-x-2">
                    <span class="text-pink-400 mt-0.5">💕</span>
                    <p>Update product details to reflect current information</p>
                </div>
                <div class="flex items-start space-x-2">
                    <span class="text-pink-400 mt-0.5">✨</span>
                    <p>Consider seasonal updates to descriptions</p>
                </div>
                <div class="flex items-start space-x-2">
                    <span class="text-pink-400 mt-0.5">🎀</span>
                    <p>Keep pricing competitive and accurate</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Last Updated Info -->
    @if ($product->updated_at)
        <div class="max-w-2xl mx-auto mt-6">
            <div class="text-center">
                <p class="text-pink-500 text-sm flex items-center justify-center space-x-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>Last updated: {{ $product->updated_at->format('M d, Y \a\t h:i A') }}</span>
                </p>
            </div>
        </div>
    @endif
@endsection
