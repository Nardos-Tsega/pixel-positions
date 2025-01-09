<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sponsorship</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js"></script>
</head>
<body>
    <x-layout>
        <div x-data="{
            searchQuery: '',
            activeCategory: 'all',
            selectedBudget: 'all',
            selectedProfile: null,
            showProfileDetails: false,
            profiles: [
                {
                    id: 1,
                    name: 'Sarah Chen',
                    type: 'student',
                    story: 'Aspiring software developer seeking support for coding bootcamp and laptop',
                    completedCourses: 12,
                    mentorshipHours: 48,
                    amount: 1200,
                    timeline: '3 months',
                    skills: ['Python', 'Web Development', 'UI Design'],
                    impact: 'Will be first in family to enter tech industry',
                    avatar: '/api/placeholder/150/150',
                    progress: 85,
                    achievements: [
                        'Completed 12 technical courses',
                        'Built 3 full-stack projects',
                        'Active community mentor'
                    ]
                },
                {
                    id: 2,
                    name: 'Marcus Rodriguez',
                    type: 'business',
                    story: 'Local tech repair shop looking to expand services to underserved communities',
                    completedCourses: 8,
                    mentorshipHours: 36,
                    amount: 2500,
                    timeline: '6 months',
                    skills: ['Hardware Repair', 'Business Management', 'Customer Service'],
                    impact: 'Will provide affordable tech support to local community',
                    avatar: '/api/placeholder/150/150',
                    progress: 75,
                    achievements: [
                        'Served 100+ customers',
                        'Partnered with local schools',
                        'Developed business expansion plan'
                    ]
                }
            ],
            filteredProfiles() {
                return this.profiles.filter(profile => {
                    const matchesSearch = profile.name.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                        profile.story.toLowerCase().includes(this.searchQuery.toLowerCase());
                    const matchesCategory = this.activeCategory === 'all' || profile.type === this.activeCategory;
                    const matchesBudget = this.selectedBudget === 'all' ||
                        (this.selectedBudget === 'low' && profile.amount <= 1000) ||
                        (this.selectedBudget === 'medium' && profile.amount > 1000 && profile.amount <= 2000) ||
                        (this.selectedBudget === 'high' && profile.amount > 2000);

                    return matchesSearch && matchesCategory && matchesBudget;
                });
            }
        }">
            <!-- Hero Section with Search -->
            <div class="relative bg-gradient-to-r from-purple-600 to-indigo-600 overflow-hidden">
                <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
                    <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">
                        Support Future Leaders
                    </h1>
                    <p class="mt-6 max-w-2xl text-xl text-indigo-100">
                        Connect with promising individuals and small businesses ready for sponsorship opportunities.
                    </p>

                    <!-- Search Bar -->
                    <div class="mt-10">
                        <div class="max-w-xl">
                            <div class="flex flex-col sm:flex-row gap-4">
                                <div class="flex-1">
                                    <input type="text"
                                        x-model="searchQuery"
                                        class="w-full px-4 py-3 rounded-lg bg-white shadow-md focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                                        placeholder="Search by name, skills, or story...">
                                </div>
                                <button class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-indigo-600 bg-white hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Find Profiles
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filters -->
            <div class="bg-gray-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                    <div class="flex flex-wrap items-center gap-4">
                        <button
                            @click="activeCategory = 'all'"
                            :class="{'bg-indigo-100 text-indigo-700': activeCategory === 'all',
                                    'text-gray-500 hover:text-gray-700': activeCategory !== 'all'}"
                            class="px-4 py-2 rounded-lg font-medium">
                            All Profiles
                        </button>
                        <button
                            @click="activeCategory = 'student'"
                            :class="{'bg-indigo-100 text-indigo-700': activeCategory === 'student',
                                    'text-gray-500 hover:text-gray-700': activeCategory !== 'student'}"
                            class="px-4 py-2 rounded-lg font-medium">
                            Students
                        </button>
                        <button
                            @click="activeCategory = 'business'"
                            :class="{'bg-indigo-100 text-indigo-700': activeCategory === 'business',
                                    'text-gray-500 hover:text-gray-700': activeCategory !== 'business'}"
                            class="px-4 py-2 rounded-lg font-medium">
                            Small Businesses
                        </button>

                        <select
                            x-model="selectedBudget"
                            class="rounded-lg border-gray-300 py-2 px-4 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <option value="all">All Budgets</option>
                            <option value="low">Under $1,000</option>
                            <option value="medium">$1,000 - $2,000</option>
                            <option value="high">Above $2,000</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Profiles Grid -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <template x-for="profile in filteredProfiles()" :key="profile.id">
                        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300">
                            <div class="p-6">
                                <div class="flex items-center">
                                    <img :src="profile.avatar" :alt="profile.name"
                                        class="w-16 h-16 rounded-full object-cover">
                                    <div class="ml-4">
                                        <h3 class="text-xl font-bold text-gray-900" x-text="profile.name"></h3>
                                        <p class="text-gray-600 capitalize" x-text="profile.type"></p>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <p class="text-gray-600" x-text="profile.story"></p>
                                </div>

                                <!-- Progress Bar -->
                                <div class="mt-6">
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="text-sm font-medium text-gray-500">Training Progress</span>
                                        <span class="text-sm font-medium text-indigo-600" x-text="`${profile.progress}%`"></span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-indigo-600 h-2 rounded-full" :style="`width: ${profile.progress}%`"></div>
                                    </div>
                                </div>

                                <!-- Stats Grid -->
                                <div class="mt-6 grid grid-cols-2 gap-4">
                                    <div class="text-center p-3 bg-gray-50 rounded-lg">
                                        <span class="text-sm text-gray-500">Courses</span>
                                        <p class="mt-1 font-semibold text-gray-900" x-text="profile.completedCourses"></p>
                                    </div>
                                    <div class="text-center p-3 bg-gray-50 rounded-lg">
                                        <span class="text-sm text-gray-500">Mentorship</span>
                                        <p class="mt-1 font-semibold text-gray-900" x-text="`${profile.mentorshipHours}h`"></p>
                                    </div>
                                </div>

                                <!-- Skills -->
                                <div class="mt-6 flex flex-wrap gap-2">
                                    <template x-for="skill in profile.skills" :key="skill">
                                        <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
                                            <span x-text="skill"></span>
                                        </span>
                                    </template>
                                </div>

                                <!-- Sponsorship Details -->
                                <div class="mt-6 flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                                    <div>
                                        <span class="text-sm text-gray-500">Sponsorship Amount</span>
                                        <p class="text-lg font-semibold text-gray-900" x-text="`$${profile.amount}`"></p>
                                    </div>
                                    <div>
                                        <span class="text-sm text-gray-500">Timeline</span>
                                        <p class="text-lg font-semibold text-gray-900" x-text="profile.timeline"></p>
                                    </div>
                                </div>

                                <!-- Action Buttons -->
                                <div class="mt-6 flex space-x-4">
                                    <button @click="selectedProfile = profile; showProfileDetails = true"
                                        class="flex-1 bg-white text-indigo-600 px-4 py-2 border border-indigo-600 rounded-lg hover:bg-indigo-50 transition-colors">
                                        View Details
                                    </button>
                                    <button
                                        class="flex-1 bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition-colors">
                                        Sponsor Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Profile Details Modal -->
            <div x-show="showProfileDetails"
                class="fixed inset-0 z-50 overflow-y-auto"
                @click.away="showProfileDetails = false">
                <div class="flex items-center justify-center min-h-screen px-4">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                    <div class="relative bg-white rounded-lg max-w-4xl w-full mx-auto shadow-xl overflow-hidden">
                        <div class="absolute top-0 right-0 pt-4 pr-4">
                            <button @click="showProfileDetails = false" class="text-gray-400 hover:text-gray-500">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>

                        <div class="bg-indigo-600 px-6 py-8">
                            <div class="flex items-center">
                                <img :src="selectedProfile?.avatar" :alt="selectedProfile?.name"
                                    class="w-24 h-24 rounded-full border-4 border-white">
                                <div class="ml-6 text-white">
                                    <h2 class="text-2xl font-bold" x-text="selectedProfile?.name"></h2>
                                    <p class="text-indigo-200 capitalize" x-text="selectedProfile?.type"></p>
                                </div>
                            </div>
                        </div>

                        <div class="px-6 py-8">
                            <div class="prose max-w-none">
                                <h3 class="text-lg font-medium text-gray-900 mb-4">Story</h3>
                                <p class="text-gray-600 mb-6" x-text="selectedProfile?.story"></p>

                                <h3 class="text-lg font-medium text-gray-900 mb-4">Achievements</h3>
                                <ul class="space-y-2">
                                    <template x-for="achievement in selectedProfile?.achievements" :key="achievement">
                                        <li class="flex items-start">
                                            <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                            </svg>
                                            <span class="text-gray-600" x-text="achievement"></span>
                                        </li>
                                    </template>
                                </ul>

                                <div class="mt-8">
                                    <h3 class="text-lg font-medium text-gray-900 mb-4">Sponsorship Details</h3>
                                    <div class="bg-gray-50 rounded-lg p-6">
                                        <div class="grid grid-cols-2 gap-6">
                                            <div>
                                                <span class="text-sm text-gray-500">Amount Needed</span>
                                                <p class="mt-1 text-2xl font-semibold text-gray-900" x-text="`${selectedProfile?.amount}`"></p>
                                            </div>
                                            <div>
                                                <span class="text-sm text-gray-500">Timeline</span>
                                                <p class="mt-1 text-2xl font-semibold text-gray-900" x-text="selectedProfile?.timeline"></p>
                                            </div>
                                            <div>
                                                <span class="text-sm text-gray-500">Completed Courses</span>
                                                <p class="mt-1 text-2xl font-semibold text-gray-900" x-text="selectedProfile?.completedCourses"></p>
                                            </div>
                                            <div>
                                                <span class="text-sm text-gray-500">Mentorship Hours</span>
                                                <p class="mt-1 text-2xl font-semibold text-gray-900" x-text="`${selectedProfile?.mentorshipHours}h`"></p>
                                            </div>
                                        </div>

                                        <div class="mt-6">
                                            <span class="text-sm text-gray-500">Training Progress</span>
                                            <div class="mt-2">
                                                <div class="flex items-center justify-between mb-2">
                                                    <span class="text-sm font-medium text-indigo-600" x-text="`${selectedProfile?.progress}% Complete`"></span>
                                                </div>
                                                <div class="w-full bg-gray-200 rounded-full h-2">
                                                    <div class="bg-indigo-600 h-2 rounded-full" :style="`width: ${selectedProfile?.progress}%`"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-8">
                                    <h3 class="text-lg font-medium text-gray-900 mb-4">Expected Impact</h3>
                                    <p class="text-gray-600" x-text="selectedProfile?.impact"></p>
                                </div>

                                <div class="mt-8">
                                    <h3 class="text-lg font-medium text-gray-900 mb-4">Skills & Expertise</h3>
                                    <div class="flex flex-wrap gap-2">
                                        <template x-for="skill in selectedProfile?.skills" :key="skill">
                                            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
                                                <span x-text="skill"></span>
                                            </span>
                                        </template>
                                    </div>
                                </div>

                                <!-- Sponsorship Action -->
                                <div class="mt-8 border-t border-gray-200 pt-8">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h3 class="text-lg font-medium text-gray-900">Ready to Make an Impact?</h3>
                                            <p class="text-sm text-gray-500 mt-1">Your sponsorship will directly support this journey</p>
                                        </div>
                                        <button class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Sponsor Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Why Sponsor Section -->
            <div class="bg-gray-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-8">Why Sponsor?</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Empower Future Leaders</h3>
                            <p class="text-gray-600">Support talented individuals in achieving their educational and professional goals.</p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Support Local Businesses</h3>
                            <p class="text-gray-600">Help small businesses grow and create positive impact in their communities.</p>
                        </div>

                        <div class="text-center">
                            <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Create Lasting Impact</h3>
                            <p class="text-gray-600">Make a difference that extends beyond individual success to benefit entire communities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-layout>
</body>
</html>
