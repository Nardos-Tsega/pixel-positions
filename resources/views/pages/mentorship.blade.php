<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentorship</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js"></script>
</head>
<body>
    <x-layout>
        <div x-data="{
            searchQuery: '',
            selectedExpertise: 'all',
            selectedAvailability: 'all',
            showMentorDetails: false,
            selectedMentor: null,
            showBookingModal: false,
            activeTab: 'overview',
            mentors: [
                {
                    id: 1,
                    name: 'Dr. Sarah Johnson',
                    title: 'Senior Software Architect',
                    company: 'Google',
                    avatar: '/api/placeholder/150/150',
                    expertise: ['System Design', 'Cloud Architecture', 'Leadership'],
                    experience: '15+ years',
                    rating: 4.9,
                    reviews: 128,
                    hourlyRate: 150,
                    availability: 'Weekends',
                    timezone: 'PST',
                    bio: 'Former Google Tech Lead with extensive experience in scaling systems and building high-performance teams.',
                    achievements: [
                        'Led development of Google Cloud Platform features',
                        'Built and scaled multiple successful startup products',
                        'Published author on system design patterns'
                    ],
                    sessionTypes: [
                        {
                            title: '1:1 Career Guidance',
                            duration: '45 minutes',
                            price: 120,
                            description: 'Personalized career advice and roadmap planning'
                        },
                        {
                            title: 'Technical Interview Prep',
                            duration: '60 minutes',
                            price: 150,
                            description: 'Mock interviews and feedback sessions'
                        },
                        {
                            title: 'Code Review & Architecture',
                            duration: '90 minutes',
                            price: 200,
                            description: 'In-depth code review and architecture consultation'
                        }
                    ],
                    availableSlots: [
                        { date: '2024-03-25', time: '10:00 AM', available: true },
                        { date: '2024-03-25', time: '2:00 PM', available: true },
                        { date: '2024-03-26', time: '11:00 AM', available: true }
                    ],
                    reviews: [
                        {
                            id: 1,
                            user: 'Michael Chen',
                            rating: 5,
                            date: '2024-03-15',
                            content: 'Incredibly insightful session. Sarah helped me understand system design concepts clearly.'
                        }
                    ]
                }
                // Add more mentors
            ],
            filteredMentors() {
                return this.mentors.filter(mentor => {
                    const matchesSearch = mentor.name.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                        mentor.expertise.some(e => e.toLowerCase().includes(this.searchQuery.toLowerCase()));
                    const matchesExpertise = this.selectedExpertise === 'all' ||
                        mentor.expertise.includes(this.selectedExpertise);
                    const matchesAvailability = this.selectedAvailability === 'all' ||
                        mentor.availability === this.selectedAvailability;
                    return matchesSearch && matchesExpertise && matchesAvailability;
                });
            }
        }">
            <!-- Hero Section with Search -->
            <div class="relative bg-gradient-to-r from-purple-600 to-indigo-600 overflow-hidden">
                <div class="absolute inset-0">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-indigo-600 mix-blend-multiply"></div>
                </div>
                <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
                    <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">
                        Learn from Industry Leaders
                    </h1>
                    <p class="mt-6 max-w-2xl text-xl text-indigo-100">
                        Connect one-on-one with experienced mentors who can guide your career journey and help you achieve your goals.
                    </p>

                    <!-- Search and Filter Section -->
                    <div class="mt-10">
                        <div class="max-w-xl">
                            <div class="flex flex-col sm:flex-row gap-4">
                                <div class="flex-1">
                                    <input type="text"
                                        x-model="searchQuery"
                                        class="w-full px-4 py-3 rounded-lg bg-white shadow-md focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                                        placeholder="Search by name or expertise...">
                                </div>
                                <button class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-indigo-600 bg-white hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Find Mentors
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Featured Categories -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="group relative bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Software Development</h3>
                                <p class="text-sm text-gray-500">45 Mentors</p>
                            </div>
                        </div>
                    </div>

                    <div class="group relative bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Data Science</h3>
                                <p class="text-sm text-gray-500">32 Mentors</p>
                            </div>
                        </div>
                    </div>

                    <div class="group relative bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Product Management</h3>
                                <p class="text-sm text-gray-500">28 Mentors</p>
                            </div>
                        </div>
                    </div>

                    <div class="group relative bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">UX Design</h3>
                                <p class="text-sm text-gray-500">23 Mentors</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filters -->
            <div class="bg-gray-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                    <div class="flex flex-wrap items-center gap-4">
                        <select x-model="selectedExpertise"
                            class="rounded-lg border-gray-300 py-2 px-4 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <option value="all">All Expertise</option>
                            <option value="System Design">System Design</option>
                            <option value="Cloud Architecture">Cloud Architecture</option>
                            <option value="Leadership">Leadership</option>
                        </select>

                        <select x-model="selectedAvailability"
                            class="rounded-lg border-gray-300 py-2 px-4 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <option value="all">All Availability</option>
                            <option value="Weekdays">Weekdays</option>
                            <option value="Weekends">Weekends</option>
                            <option value="Evenings">Evenings</option>
                        </select>

                        <div class="flex items-center space-x-2">
                            <input type="checkbox" id="instantBook" class="rounded text-indigo-600 focus:ring-indigo-500">
                            <label for="instantBook" class="text-sm text-gray-700">Instant Booking</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mentors Grid -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <template x-for="mentor in filteredMentors()" :key="mentor.id">
                        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300">
                            <!-- Mentor Card Header -->
                            <div class="p-6">
                                <div class="flex items-center">
                                    <img :src="mentor.avatar" :alt="mentor.name"
                                        class="w-16 h-16 rounded-full object-cover">
                                    <div class="ml-4">
                                        <h3 class="text-xl font-bold text-gray-900" x-text="mentor.name"></h3>
                                        <p class="text-gray-600" x-text="mentor.title"></p>
                                        <p class="text-sm text-gray-500" x-text="mentor.company"></p>
                                    </div>
                                </div>

                                <!-- Expertise Tags -->
                                <div class="mt-4 flex flex-wrap gap-2">
                                    <template x-for="expertise in mentor.expertise" :key="expertise">
                                        <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
                                            <span x-text="expertise"></span>
                                        </span>
                                    </template>
                                </div>

                                <!-- Stats -->
                                <div class="mt-6 flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            ```html
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <span class="ml-1 text-sm font-medium text-gray-900" x-text="mentor.rating"></span>
                                        <span class="ml-1 text-sm text-gray-500" x-text="`(${mentor.reviews} reviews)`"></span>
                                    </div>
                                    <span class="text-sm text-gray-500" x-text="`$${mentor.hourlyRate}/hour`"></span>
                                </div>

                                <!-- Quick Stats -->
                                <div class="mt-6 grid grid-cols-3 gap-4 border-t border-gray-200 pt-4">
                                    <div class="text-center">
                                        <span class="text-sm font-medium text-gray-500">Experience</span>
                                        <p class="mt-1 text-lg font-medium text-gray-900" x-text="mentor.experience"></p>
                                    </div>
                                    <div class="text-center">
                                        <span class="text-sm font-medium text-gray-500">Availability</span>
                                        <p class="mt-1 text-lg font-medium text-gray-900" x-text="mentor.timezone"></p>
                                    </div>
                                    <div class="text-center">
                                        <span class="text-sm font-medium text-gray-500">Sessions</span>
                                        <p class="mt-1 text-lg font-medium text-gray-900" x-text="mentor.reviews"></p>
                                    </div>
                                </div>

                                <!-- Action Buttons -->
                                <div class="mt-6 flex space-x-4">
                                    <button @click="selectedMentor = mentor; showMentorDetails = true"
                                        class="flex-1 bg-white text-indigo-600 px-4 py-2 border border-indigo-600 rounded-lg hover:bg-indigo-50 transition-colors">
                                        View Profile
                                    </button>
                                    <button @click="selectedMentor = mentor; showBookingModal = true"
                                        class="flex-1 bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition-colors">
                                        Book Session
                                    </button>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Mentor Details Modal -->
            <div x-show="showMentorDetails"
                class="fixed inset-0 z-50 overflow-y-auto"
                @click.away="showMentorDetails = false">
                <div class="flex items-center justify-center min-h-screen px-4">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                    <div class="relative bg-white rounded-lg max-w-4xl w-full mx-auto shadow-xl overflow-hidden">
                        <div class="absolute top-0 right-0 pt-4 pr-4">
                            <button @click="showMentorDetails = false" class="text-gray-400 hover:text-gray-500">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>

                        <div class="bg-indigo-600 px-6 py-8">
                            <div class="flex items-center">
                                <img :src="selectedMentor?.avatar" :alt="selectedMentor?.name"
                                    class="w-24 h-24 rounded-full border-4 border-white">
                                <div class="ml-6 text-white">
                                    <h2 class="text-2xl font-bold" x-text="selectedMentor?.name"></h2>
                                    <p x-text="selectedMentor?.title"></p>
                                    <p class="text-indigo-200" x-text="selectedMentor?.company"></p>
                                </div>
                            </div>
                        </div>

                        <!-- Tabs -->
                        <div class="border-b border-gray-200">
                            <nav class="flex -mb-px">
                                <button @click="activeTab = 'overview'"
                                    :class="{'border-indigo-500 text-indigo-600': activeTab === 'overview',
                                            'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': activeTab !== 'overview'}"
                                    class="w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm">
                                    Overview
                                </button>
                                <button @click="activeTab = 'experience'"
                                    :class="{'border-indigo-500 text-indigo-600': activeTab === 'experience',
                                            'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': activeTab !== 'experience'}"
                                    class="w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm">
                                    Experience
                                </button>
                                <button @click="activeTab = 'reviews'"
                                    :class="{'border-indigo-500 text-indigo-600': activeTab === 'reviews',
                                            'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': activeTab !== 'reviews'}"
                                    class="w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm">
                                    Reviews
                                </button>
                                <button @click="activeTab = 'availability'"
                                    :class="{'border-indigo-500 text-indigo-600': activeTab === 'availability',
                                            'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': activeTab !== 'availability'}"
                                    class="w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm">
                                    Availability
                                </button>
                            </nav>
                        </div>

                        <!-- Tab Content -->
                        <div class="px-6 py-8">
                            <!-- Overview Tab -->
                            <div x-show="activeTab === 'overview'">
                                <div class="prose max-w-none">
                                    <h3 class="text-lg font-medium text-gray-900 mb-4">About</h3>
                                    <p class="text-gray-600" x-text="selectedMentor?.bio"></p>

                                    <h3 class="text-lg font-medium text-gray-900 mt-8 mb-4">Session Types</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <template x-for="session in selectedMentor?.sessionTypes" :key="session.title">
                                            <div class="border rounded-lg p-4">
                                                <h4 class="font-medium text-gray-900" x-text="session.title"></h4>
                                                <p class="text-sm text-gray-500 mt-1" x-text="session.description"></p>
                                                <div class="mt-4 flex justify-between items-center">
                                                    <span class="text-sm text-gray-500" x-text="session.duration"></span>
                                                    <span class="text-lg font-medium text-gray-900" x-text="`$${session.price}`"></span>
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </div>

                            <!-- Experience Tab -->
                            <div x-show="activeTab === 'experience'">
                                <h3 class="text-lg font-medium text-gray-900 mb-4">Key Achievements</h3>
                                <ul class="space-y-4">
                                    <template x-for="achievement in selectedMentor?.achievements" :key="achievement">
                                        <li class="flex items-start">
                                            <svg class="h-6 w-6 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                            </svg>
                                            <span class="text-gray-600" x-text="achievement"></span>
                                        </li>
                                    </template>
                                </ul>
                            </div>

                            <!-- Reviews Tab -->
                            <div x-show="activeTab === 'reviews'">
                                <div class="space-y-6">
                                    <template x-for="review in selectedMentor?.reviews" :key="review.id">
                                        <div class="border-b border-gray-200 pb-6">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <span class="text-lg font-medium text-gray-900" x-text="review.user"></span>
                                                    <span class="ml-4 text-sm text-gray-500" x-text="review.date"></span>
                                                </div>
                                                <div class="flex items-center">
                                                    <template x-for="i in 5" :key="i">
                                                        <svg class="h-5 w-5" :class="i <= review.rating ? 'text-yellow-400' : 'text-gray-300'"
                                                            fill="currentColor" viewBox="0 0 20 20">
                                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                        </svg>
                                                    </template>
                                                </div>
                                            </div>
                                            <p class="mt-4 text-gray-600" x-text="review.content"></p>
                                        </div>
                                    </template>
                                </div>
                            </div>

                            <!-- Availability Tab -->
                            <div x-show="activeTab === 'availability'">
                                <div class="grid grid-cols-3 gap-4">
                                    <template x-for="slot in selectedMentor?.availableSlots" :key="slot.date + slot.time">
                                        <button
                                            :class="{'bg-indigo-50 text-indigo-700': slot.available,
                                                    'bg-gray-100 text-gray-400 cursor-not-allowed': !slot.available}"
                                            class="p-4 rounded-lg text-center">
                                            <div class="font-medium" x-text="slot.date"></div>
                                            <div class="text-sm" x-text="slot.time"></div>
                                        </button>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <!-- Booking Modal -->
            <div x-show="false"
                class="fixed inset-0 z-50 overflow-y-auto"
                @click.away="showBookingModal = false">
                <div class="flex items-center justify-center min-h-screen px-4">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                    <div class="relative bg-white rounded-lg max-w-md w-full mx-auto shadow-xl overflow-hidden">
                        <div class="px-6 py-8">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Book a Session</h3>

                            <!-- Session Type Selection -->
                            <div class="mb-6">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Session Type</label>
                                <select class="w-full rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                    <template x-for="session in selectedMentor?.sessionTypes" :key="session.title">
                                        <option x-text="`${session.title} - ${session.duration} ($${session.price})`"></option>
                                    </template>
                                </select>
                            </div>

                            <!-- Date Selection -->
                            <div class="mb-6">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Select Date & Time</label>
                                <div class="grid grid-cols-3 gap-2">
                                    <template x-for="slot in selectedMentor?.availableSlots" :key="slot.date + slot.time">
                                        <button
                                            :class="{'bg-indigo-50 text-indigo-700 border-indigo-500': slot.available,
                                                    'bg-gray-100 text-gray-400 cursor-not-allowed': !slot.available}"
                                            class="p-2 rounded border text-center text-sm">
                                            <div x-text="slot.date"></div>
                                            <div x-text="slot.time"></div>
                                            ```html
                                        </button>
                                    </template>
                                </div>
                            </div>

                            <!-- Message to Mentor -->
                            <div class="mb-6">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Message to Mentor</label>
                                <textarea rows="4"
                                    class="w-full rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                                    placeholder="Describe what you'd like to discuss in the session..."></textarea>
                            </div>

                            <!-- Booking Summary -->
                            <div class="bg-gray-50 rounded-lg p-4 mb-6">
                                <h4 class="font-medium text-gray-900 mb-2">Booking Summary</h4>
                                <div class="space-y-2 text-sm">
                                    <div class="flex justify-between">
                                        <span class="text-gray-500">Session Type</span>
                                        <span class="text-gray-900">1:1 Career Guidance</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-500">Duration</span>
                                        <span class="text-gray-900">45 minutes</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-500">Price</span>
                                        <span class="text-gray-900">$120</span>
                                    </div>
                                    <div class="pt-2 border-t border-gray-200">
                                        <div class="flex justify-between font-medium">
                                            <span class="text-gray-900">Total</span>
                                            <span class="text-gray-900">$120</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex space-x-4">
                                <button @click="showBookingModal = false"
                                    class="flex-1 bg-white text-gray-700 px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                                    Cancel
                                </button>
                                <button class="flex-1 bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition-colors">
                                    Confirm Booking
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- Featured Mentors Section -->
            <div class="bg-gray-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-8">Featured Mentors</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <template x-for="mentor in mentors.slice(0, 4)" :key="mentor.id">
                            <div class="bg-white rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow">
                                <div class="flex items-center mb-4">
                                    <img :src="mentor.avatar" :alt="mentor.name"
                                        class="w-12 h-12 rounded-full">
                                    <div class="ml-3">
                                        <h3 class="text-lg font-medium text-gray-900" x-text="mentor.name"></h3>
                                        <p class="text-sm text-gray-500" x-text="mentor.title"></p>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <span class="ml-1 text-sm text-gray-600" x-text="mentor.rating"></span>
                                    </div>
                                    <button @click="selectedMentor = mentor; showBookingModal = true"
                                        class="text-indigo-600 text-sm font-medium hover:text-indigo-700">
                                        Book Now
                                    </button>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>

            <!-- Why Choose Our Mentors -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-8">Why Choose Our Mentors</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Verified Experts</h3>
                        <p class="text-gray-600">All our mentors are thoroughly vetted and have proven track records in their fields.</p>
                    </div>

                    <div class="text-center">
                        <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Flexible Scheduling</h3>
                        <p class="text-gray-600">Book sessions that fit your schedule with our easy-to-use booking system.</p>
                    </div>

                    <div class="text-center">
                        <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Personalized Guidance</h3>
                        <p class="text-gray-600">Get tailored advice and practical insights specific to your career goals.</p>
                    </div>
                </div>
            </div>
        </div>
    </x-layout>
</body>
</html>
