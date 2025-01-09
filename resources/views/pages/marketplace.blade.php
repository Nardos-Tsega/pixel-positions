<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js"></script>
</head>
<body>
    <x-layout>
        <div x-data="{
            searchQuery: '',
            selectedCategory: 'all',
            priceRange: 'all',
            sortBy: 'popular',
            showFilters: false,
            showProductDetails: false,
            selectedProduct: null,
            cartItems: [],
            cartOpen: false,
            categories: [
                {
                    id: 'electronics',
                    name: 'Electronics',
                    icon: 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253'
                },
                {
                    id: 'materials',
                    name: 'Materials',
                    icon: 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01'
                },
                {
                    id: 'machines',
                    name: 'Machines',
                    icon: 'M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z'
                },
            ],
            products: [
                {
                    id: 1,
                    name: 'Complete Web Development Bootcamp',
                    category: 'electronics',
                    price: 199.99,
                    rating: 4.8,
                    reviews: 245,
                    image: '/api/placeholder/400/300',
                    instructor: 'Sarah Johnson',
                    description: 'Comprehensive web development course covering frontend and backend technologies.',
                    features: [
                        '50+ hours of video content',
                        'Practical projects',
                        'Certificate upon completion',
                        'Lifetime access'
                    ],
                    tags: ['Web Development', 'Programming', 'Frontend', 'Backend'],
                    bestseller: true,
                    students: 12450
                },
                // Add more products
            ],
            filteredProducts() {
                return this.products.filter(product => {
                    // Search filter
                    const matchesSearch = product.name.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                        product.description.toLowerCase().includes(this.searchQuery.toLowerCase());

                    // Category filter
                    const matchesCategory = this.selectedCategory === 'all' ||
                        product.category === this.selectedCategory;

                    // Price filter
                    const matchesPrice = this.priceRange === 'all' ||
                        (this.priceRange === 'under50' && product.price < 50) ||
                        (this.priceRange === '50to100' && product.price >= 50 && product.price <= 100) ||
                        (this.priceRange === 'over100' && product.price > 100);

                    return matchesSearch && matchesCategory && matchesPrice;
                }).sort((a, b) => {
                    if (this.sortBy === 'popular') return b.students - a.students;
                    if (this.sortBy === 'rating') return b.rating - a.rating;
                    if (this.sortBy === 'priceLow') return a.price - b.price;
                    if (this.sortBy === 'priceHigh') return b.price - a.price;
                    return 0;
                });
            },
            addToCart(product) {
                this.cartItems.push(product);
                this.cartOpen = true;
            },
            removeFromCart(productId) {
                this.cartItems = this.cartItems.filter(item => item.id !== productId);
            },
            cartTotal() {
                return this.cartItems.reduce((total, item) => total + item.price, 0).toFixed(2);
            }
        }">
            <!-- Hero Section with Search -->
            <div class="bg-gradient-to-r from-blue-600 to-indigo-600">
                <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                    <div class="text-center">
                        <h1 class="text-4xl font-extrabold text-white sm:text-5xl sm:tracking-tight lg:text-6xl">
                            Marketplace
                        </h1>
                        <p class="mt-4 text-xl text-indigo-100">
                            Discover resources to accelerate your growth
                        </p>

                        <!-- Search Bar -->
                        <div class="mt-8 max-w-3xl mx-auto">
                            <div class="relative">
                                <input type="text"
                                    x-model="searchQuery"
                                    class="w-full px-4 py-3 rounded-lg bg-white shadow-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                                    placeholder="Search for courses, materials, templates...">
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category Navigation -->
            <div class="bg-white shadow">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between items-center py-4">
                        <nav class="flex space-x-8">
                            <button @click="selectedCategory = 'all'"
                                :class="{'text-blue-600 border-b-2 border-blue-600': selectedCategory === 'all',
                                        'text-gray-500 hover:text-gray-700': selectedCategory !== 'all'}"
                                class="px-3 py-2 text-sm font-medium">
                                All Categories
                            </button>
                            <template x-for="category in categories" :key="category.id">
                                <button @click="selectedCategory = category.id"
                                    :class="{'text-blue-600 border-b-2 border-blue-600': selectedCategory === category.id,
                                            'text-gray-500 hover:text-gray-700': selectedCategory !== category.id}"
                                    class="px-3 py-2 text-sm font-medium">
                                    <span x-text="category.name"></span>
                                </button>
                            </template>
                        </nav>

                        <!-- Filter Toggle -->
                        <button @click="showFilters = !showFilters"
                            class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                            <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
                            </svg>
                            Filters
                        </button>
                    </div>
                </div>
            </div>

            <!-- Filters Panel -->
            <div x-show="showFilters"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="bg-gray-50 border-b">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <!-- Price Range -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Price Range</label>
                            <select x-model="priceRange"
                                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                <option value="all">All Prices</option>
                                <option value="under50">Under $50</option>
                                <option value="50to100">$50 - $100</option>
                                <option value="over100">Over $100</option>
                            </select>
                        </div>

                        <!-- Sort By -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Sort By</label>
                            <select x-model="sortBy"
                                class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                <option value="popular">Most Popular</option>
                                <option value="rating">Highest Rated</option>
                                <option value="priceLow">Price: Low to High</option>
                                <option value="priceHigh">Price: High to Low</option>
                            </select>
                        </div>

                        <!-- Additional Filters -->
                        <div class="flex flex-wrap gap-2 items-center">
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                <span class="text-sm text-gray-700">Bestsellers Only</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="checkbox" class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                <span class="text-sm text-gray-700">New Releases</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <!-- Active Filters -->
                <div class="mb-8 flex flex-wrap items-center gap-2">
                    <template x-if="selectedCategory !== 'all'">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                            <span x-text="categories.find(c => c.id === selectedCategory)?.name"></span>
                            <button @click="selectedCategory = 'all'" class="ml-2 hover:text-blue-900">
                                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </span>
                    </template>
                </div>

                <!-- Product Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <template x-for="product in filteredProducts()" :key="product.id">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <!-- Product Image -->
                            <div class="relative">
                                <img :src="product.image" :alt="product.name" class="w-full h-48 object-cover">
                                <template x-if="product.bestseller">
                                    <div class="absolute top-4 left-4">
                                        <span class="bg-yellow-400 text-gray-900 px-3 py-1 rounded-full text-sm font-medium">
                                            Bestseller
                                        </span>
                                    </div>
                                </template>
                            </div>

                            <!-- Product Info -->
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800"
                                        x-text="categories.find(c => c.id === product.category)?.name">
                                    </span>
                                    <div class="flex items-center">
                                        <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <span class="ml-1 text-sm font-medium text-gray-900" x-text="product.rating"></span>
                                        <span class="ml-1 text-sm text-gray-500" x-text="`(${product.reviews})`"></span>
                                    </div>
                                </div>

                                <h3 class="text-lg font-bold text-gray-900 mb-2" x-text="product.name"></h3>
                                <p class="text-sm text-gray-600 mb-4 line-clamp-2" x-text="product.description"></p>

                                <div class="flex items-center mb-4">
                                    <img :src="'/api/placeholder/32/32'" class="h-8 w-8 rounded-full" :alt="product.instructor">
                                    <span class="ml-2 text-sm text-gray-600" x-text="product.instructor"></span>
                                </div>

                                <!-- Tags -->
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <template x-for="tag in product.tags" :key="tag">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800"
                                            x-text="tag">
                                        </span>
                                    </template>
                                </div>

                                <div class="flex items-center justify-between">
                                    <span class="text-2xl font-bold text-gray-900" x-text="`$${product.price}`"></span>
                                    <button @click="addToCart(product)"
                                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                                        Add to Cart
                                    </button>
                                </div>

                                <!-- Quick Stats -->
                                <div class="mt-4 flex items-center text-sm text-gray-500">
                                    <svg class="h-5 w-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                    </svg>
                                    <span x-text="`${product.students} buyers`"></span>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Shopping Cart Slide-over -->
            <div x-show="cartOpen"
                class="fixed inset-0 overflow-hidden z-50"
                @click.away="cartOpen = false">
                <div class="absolute inset-0 overflow-hidden">
                    <div class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                    <div class="fixed inset-y-0 right-0 pl-10 max-w-full flex">
                        <div class="w-screen max-w-md">
                            <div class="h-full flex flex-col bg-white shadow-xl overflow-y-auto">
                                <!-- Cart Header -->
                                <div class="flex-1 py-6 overflow-y-auto px-4 sm:px-6">
                                    <div class="flex items-start justify-between">
                                        <h2 class="text-lg font-medium text-gray-900">Shopping Cart</h2>
                                        <button @click="cartOpen = false" class="text-gray-400 hover:text-gray-500">
                                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                            </svg>
                                        </button>
                                    </div>

                                    <!-- Cart Items -->
                                    <div class="mt-8">
                                        <div class="flow-root">
                                            <ul class="-my-6 divide-y divide-gray-200">
                                                <template x-for="item in cartItems" :key="item.id">
                                                    <li class="py-6 flex">
                                                        <div class="flex-shrink-0 w-24 h-24 rounded-md overflow-hidden">
                                                            <img :src="item.image" :alt="item.name" class="w-full h-full object-cover">
                                                        </div>
                                                        <div class="ml-4 flex-1 flex flex-col">
                                                            <div>
                                                                <div class="flex justify-between text-base font-medium text-gray-900">
                                                                    <h3 x-text="item.name"></h3>
                                                                    <p class="ml-4" x-text="`$${item.price}`"></p>
                                                                </div>
                                                                <p class="mt-1 text-sm text-gray-500" x-text="item.instructor"></p>
                                                            </div>
                                                            <div class="flex-1 flex items-end justify-between text-sm">
                                                                <button @click="removeFromCart(item.id)"
                                                                    class="font-medium text-blue-600 hover:text-blue-500">
                                                                    Remove
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </template>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Cart Footer -->
                                <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
                                    <div class="flex justify-between text-base font-medium text-gray-900">
                                        <p>Subtotal</p>
                                        <p x-text="`$${cartTotal()}`"></p>
                                    </div>
                                    <p class="mt-0.5 text-sm text-gray-500">Taxes calculated at checkout.</p>
                                    <div class="mt-6">
                                        <a href="#" class="flex justify-center items-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-600 hover:bg-blue-700">
                                            Checkout
                                        </a>
                                    </div>
                                    <div class="mt-6 flex justify-center text-sm text-center text-gray-500">
                                        <p>
                                            or
                                            <button @click="cartOpen = false" class="text-blue-600 font-medium hover:text-blue-500">
                                                Continue Shopping<span aria-hidden="true"> →</span>
                                            </button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-layout>
</body>
</html>

