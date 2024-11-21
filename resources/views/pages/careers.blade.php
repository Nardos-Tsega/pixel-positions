{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js"></script>
</head>
<body>
    <x-layout>
        <div x-data="{
            activeTab: 'all',
            showVideoList: false,
            showExpertInfo: false,
            selectedCareer: null,
            selectedVideo: null,
            searchQuery: '',
            careers: [
                {
                    id: 1,
                    title: 'Software Development',
                    description: 'Learn about building software products and leading technical teams',
                    videoCount: 24,
                    icon: 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4',
                    videos: [
                        { id: 1, title: 'Building Scalable Systems', expert: 'John Doe', role: 'Principal Engineer at Google', duration: '15:34' },
                        { id: 2, title: 'Frontend Architecture', expert: 'Jane Smith', role: 'Tech Lead at Meta', duration: '12:20' }
                    ]
                },
                {
                    id: 2,
                    title: 'Product Management',
                    description: 'Discover how to build and manage successful products',
                    videoCount: 18,
                    icon: 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2',
                    videos: [
                        { id: 3, title: 'Product Strategy Fundamentals', expert: 'Sarah Connor', role: 'Senior PM at Amazon', duration: '18:45' },
                        { id: 4, title: 'User Research Methods', expert: 'Mike Ross', role: 'Product Lead at Airbnb', duration: '14:30' }
                    ]
                }
            ]
        }">
            <!-- Hero Section -->
            <div class="relative bg-blue-700 overflow-hidden">
                <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                    <div class="text-center">
                        <h1 class="text-4xl font-extrabold text-white sm:text-5xl sm:tracking-tight lg:text-6xl">
                            Explore Career Paths
                        </h1>
                        <p class="mt-6 max-w-2xl mx-auto text-xl text-blue-100">
                            Learn directly from industry experts about different career paths and opportunities.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Career Cards Grid -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <template x-for="career in careers" :key="career.id">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 cursor-pointer"
                            @click="selectedCareer = career; showVideoList = true; showExpertInfo = false">
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x-bind:d="career.icon"/>
                                        </svg>
                                    </div>
                                    <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">
                                        <span x-text="career.videoCount"></span> videos
                                    </span>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2" x-text="career.title"></h3>
                                <p class="text-gray-600" x-text="career.description"></p>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Sliding Panels -->
            <div class="fixed inset-y-0 right-0 flex"
                x-show="showVideoList"
                @click.away="showVideoList = false; showExpertInfo = false">

                <!-- Expert Info Panel -->
                <div x-show="showExpertInfo"
                    x-transition:enter="transform transition-transform duration-300"
                    x-transition:enter-start="translate-x-full"
                    x-transition:enter-end="translate-x-0"
                    x-transition:leave="transform transition-transform duration-300"
                    x-transition:leave-start="translate-x-0"
                    x-transition:leave-end="translate-x-full"
                    class="w-96 bg-white shadow-xl z-30">
                    <div class="h-full overflow-y-auto">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-xl font-bold text-gray-900">Expert Profile</h3>
                                <button @click="showExpertInfo = false" class="text-gray-400 hover:text-gray-500">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="flex items-center mb-6">
                                <img src="/api/placeholder/64/64" alt="Expert" class="w-16 h-16 rounded-full">
                                <div class="ml-4">
                                    <h4 class="text-lg font-bold text-gray-900" x-text="selectedVideo?.expert"></h4>
                                    <p class="text-gray-600" x-text="selectedVideo?.role"></p>
                                </div>
                            </div>
                            <div class="prose max-w-none">
                                <p class="mb-4">A seasoned professional with extensive experience in the field. Known for innovative approaches and practical insights.</p>
                                <h5 class="font-bold mb-2">Areas of Expertise</h5>
                                <ul class="list-disc pl-5 mb-4">
                                    <li>Technical Leadership</li>
                                    <li>System Design</li>
                                    <li>Team Management</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video List Panel -->
                <div class="w-96 bg-white shadow-xl z-20">
                    <div class="h-full overflow-y-auto">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-6">
                                <h3 class="text-xl font-bold text-gray-900" x-text="selectedCareer?.title"></h3>
                                <button @click="showVideoList = false; showExpertInfo = false" class="text-gray-400 hover:text-gray-500">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="space-y-4">
                                <template x-for="video in selectedCareer?.videos" :key="video.id">
                                    <div class="bg-gray-50 rounded-lg p-4 hover:bg-gray-100 cursor-pointer transition-colors"
                                        @mouseenter="selectedVideo = video; showExpertInfo = true">
                                        <div class="flex items-center justify-between mb-2">
                                            <span class="text-sm font-medium text-blue-600" x-text="video.expert"></span>
                                            <span class="text-sm text-gray-500" x-text="video.duration"></span>
                                        </div>
                                        <h4 class="font-medium text-gray-900" x-text="video.title"></h4>
                                        <p class="text-sm text-gray-600 mt-1" x-text="video.role"></p>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-layout>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js"></script>
</head>
<body>
    <x-layout>
        <div x-data="{
            activeTab: 'all',
            showVideoList: false,
            showExpertInfo: false,
            selectedCareer: null,
            selectedVideo: null,
            searchQuery: '',
            activeFilter: 'all',
            showFilters: false,
            selectedDifficulty: 'all',
            selectedDuration: 'all',
            sortBy: 'popular',
            careers: [
                {
                    id: 1,
                    title: 'Software Development',
                    description: 'Learn about building software products and leading technical teams',
                    videoCount: 24,
                    rating: 4.8,
                    difficulty: 'intermediate',
                    topAdvice: 'Focus on building real projects and contributing to open source',
                    icon: 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4',
                    videos: [
                        {
                            id: 1,
                            title: 'Building Scalable Systems',
                            expert: 'John Doe',
                            role: 'Principal Engineer at Google',
                            duration: '15:34',
                            rating: 4.9,
                            views: 15000,
                            difficulty: 'advanced',
                            tags: ['system-design', 'architecture'],
                            thumbnail: '/api/placeholder/320/180'
                        },
                        {
                            id: 2,
                            title: 'Frontend Architecture',
                            expert: 'Jane Smith',
                            role: 'Tech Lead at Meta',
                            duration: '12:20',
                            rating: 4.7,
                            views: 12000,
                            difficulty: 'intermediate',
                            tags: ['frontend', 'architecture'],
                            thumbnail: '/api/placeholder/320/180'
                        }
                    ],
                    requiredSkills: ['Programming Basics', 'Problem Solving', 'Git'],
                    careerPath: ['Junior Developer', 'Senior Developer', 'Tech Lead', 'Architecture']
                },
                 {
                    id: 1,
                    title: 'Software Development',
                    description: 'Learn about building software products and leading technical teams',
                    videoCount: 24,
                    rating: 4.8,
                    difficulty: 'intermediate',
                    topAdvice: 'Focus on building real projects and contributing to open source',
                    icon: 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4',
                    videos: [
                        {
                            id: 1,
                            title: 'Building Scalable Systems',
                            expert: 'John Doe',
                            role: 'Principal Engineer at Google',
                            duration: '15:34',
                            rating: 4.9,
                            views: 15000,
                            difficulty: 'advanced',
                            tags: ['system-design', 'architecture'],
                            thumbnail: '/api/placeholder/320/180'
                        },
                        {
                            id: 2,
                            title: 'Frontend Architecture',
                            expert: 'Jane Smith',
                            role: 'Tech Lead at Meta',
                            duration: '12:20',
                            rating: 4.7,
                            views: 12000,
                            difficulty: 'intermediate',
                            tags: ['frontend', 'architecture'],
                            thumbnail: '/api/placeholder/320/180'
                        }
                    ],
                    requiredSkills: ['Programming Basics', 'Problem Solving', 'Git'],
                    careerPath: ['Junior Developer', 'Senior Developer', 'Tech Lead', 'Architecture']
                },
                 {
                    id: 1,
                    title: 'Software Development',
                    description: 'Learn about building software products and leading technical teams',
                    videoCount: 24,
                    rating: 4.8,
                    difficulty: 'intermediate',
                    topAdvice: 'Focus on building real projects and contributing to open source',
                    icon: 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4',
                    videos: [
                        {
                            id: 1,
                            title: 'Building Scalable Systems',
                            expert: 'John Doe',
                            role: 'Principal Engineer at Google',
                            duration: '15:34',
                            rating: 4.9,
                            views: 15000,
                            difficulty: 'advanced',
                            tags: ['system-design', 'architecture'],
                            thumbnail: '/api/placeholder/320/180'
                        },
                        {
                            id: 2,
                            title: 'Frontend Architecture',
                            expert: 'Jane Smith',
                            role: 'Tech Lead at Meta',
                            duration: '12:20',
                            rating: 4.7,
                            views: 12000,
                            difficulty: 'intermediate',
                            tags: ['frontend', 'architecture'],
                            thumbnail: '/api/placeholder/320/180'
                        }
                    ],
                    requiredSkills: ['Programming Basics', 'Problem Solving', 'Git'],
                    careerPath: ['Junior Developer', 'Senior Developer', 'Tech Lead', 'Architecture']
                },
                 {
                    id: 1,
                    title: 'Software Development',
                    description: 'Learn about building software products and leading technical teams',
                    videoCount: 24,
                    rating: 4.8,
                    difficulty: 'intermediate',
                    topAdvice: 'Focus on building real projects and contributing to open source',
                    icon: 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4',
                    videos: [
                        {
                            id: 1,
                            title: 'Building Scalable Systems',
                            expert: 'John Doe',
                            role: 'Principal Engineer at Google',
                            duration: '15:34',
                            rating: 4.9,
                            views: 15000,
                            difficulty: 'advanced',
                            tags: ['system-design', 'architecture'],
                            thumbnail: '/api/placeholder/320/180'
                        },
                        {
                            id: 2,
                            title: 'Frontend Architecture',
                            expert: 'Jane Smith',
                            role: 'Tech Lead at Meta',
                            duration: '12:20',
                            rating: 4.7,
                            views: 12000,
                            difficulty: 'intermediate',
                            tags: ['frontend', 'architecture'],
                            thumbnail: '/api/placeholder/320/180'
                        }
                    ],
                    requiredSkills: ['Programming Basics', 'Problem Solving', 'Git'],
                    careerPath: ['Junior Developer', 'Senior Developer', 'Tech Lead', 'Architecture']
                },
                 {
                    id: 1,
                    title: 'Software Development',
                    description: 'Learn about building software products and leading technical teams',
                    videoCount: 24,
                    rating: 4.8,
                    difficulty: 'intermediate',
                    topAdvice: 'Focus on building real projects and contributing to open source',
                    icon: 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4',
                    videos: [
                        {
                            id: 1,
                            title: 'Building Scalable Systems',
                            expert: 'John Doe',
                            role: 'Principal Engineer at Google',
                            duration: '15:34',
                            rating: 4.9,
                            views: 15000,
                            difficulty: 'advanced',
                            tags: ['system-design', 'architecture'],
                            thumbnail: '/api/placeholder/320/180'
                        },
                        {
                            id: 2,
                            title: 'Frontend Architecture',
                            expert: 'Jane Smith',
                            role: 'Tech Lead at Meta',
                            duration: '12:20',
                            rating: 4.7,
                            views: 12000,
                            difficulty: 'intermediate',
                            tags: ['frontend', 'architecture'],
                            thumbnail: '/api/placeholder/320/180'
                        }
                    ],
                    requiredSkills: ['Programming Basics', 'Problem Solving', 'Git'],
                    careerPath: ['Junior Developer', 'Senior Developer', 'Tech Lead', 'Architecture']
                },
            ],
            topAdvice: [
                {
                    title: 'Build Your Portfolio',
                    description: 'Create tangible projects that showcase your skills',
                    icon: 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10'
                },
                {
                    title: 'Network Actively',
                    description: 'Connect with professionals in your desired field',
                    icon: 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'
                }
            ],
            filteredCareers() {
                return this.careers.filter(career => {
                    if (this.searchQuery && !career.title.toLowerCase().includes(this.searchQuery.toLowerCase())) {
                        return false;
                    }
                    if (this.selectedDifficulty !== 'all' && career.difficulty !== this.selectedDifficulty) {
                        return false;
                    }
                    return true;
                }).sort((a, b) => {
                    if (this.sortBy === 'popular') return b.rating - a.rating;
                    if (this.sortBy === 'newest') return b.id - a.id;
                    return 0;
                });
            }
        }">

            <!-- Hero Section with Search -->
            <div class="relative bg-blue-700 overflow-hidden">
                <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                    <div class="text-center">
                        <h1 class="text-4xl font-extrabold text-white sm:text-5xl sm:tracking-tight lg:text-6xl">
                            Explore Career Paths
                        </h1>
                        <p class="mt-6 max-w-2xl mx-auto text-xl text-blue-100">
                            Learn directly from industry experts about different career paths and opportunities.
                        </p>

                        <!-- Enhanced Search Bar -->
                        <div class="mt-8 max-w-3xl mx-auto">
                            <div class="relative rounded-lg shadow-sm">
                                <input type="text"
                                    x-model="searchQuery"
                                    class="block w-full px-4 py-3 rounded-lg bg-white placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    placeholder="Search for careers, skills, or topics...">
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Top Career Advice Section -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 bg-gray-50 mt-10">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Top Career Advice</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <template x-for="advice in topAdvice" :key="advice.title">
                        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x-bind:d="advice.icon"/>
                                    </svg>
                                </div>
                                <h3 class="ml-3 text-lg font-semibold text-gray-900" x-text="advice.title"></h3>
                            </div>
                            <p class="text-gray-600" x-text="advice.description"></p>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Filters and Sorting -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <div class="flex flex-wrap items-center justify-between gap-4 bg-white p-4 rounded-lg shadow-sm">
                    <div class="flex space-x-4">
                        <select x-model="selectedDifficulty"
                            class="rounded-md border-gray-300 py-2 pl-3 pr-10 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="all">All Levels</option>
                            <option value="beginner">Beginner</option>
                            <option value="intermediate">Intermediate</option>
                            <option value="advanced">Advanced</option>
                        </select>

                        <select x-model="selectedDuration"
                            class="rounded-md border-gray-300 py-2 pl-3 pr-10 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="all">All Durations</option>
                            <option value="short">Under 15 mins</option>
                            <option value="medium">15-30 mins</option>
                            <option value="long">Over 30 mins</option>
                        </select>
                    </div>

                    <div class="flex items-center space-x-4">
                        <span class="text-sm text-gray-500">Sort by:</span>
                        <select x-model="sortBy"
                            class="rounded-md border-gray-300 py-2 pl-3 pr-10 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="popular">Most Popular</option>
                            <option value="newest">Newest</option>
                            <option value="rating">Highest Rated</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Career Cards Grid -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <template x-for="career in filteredCareers()" :key="career.id">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1"
                            @click="selectedCareer = career; showVideoList = true; showExpertInfo = false">
                            <div class="relative">
                                <div class="absolute top-4 right-4">
                                    <span class="bg-white px-2 py-1 rounded-full text-sm font-medium flex items-center">
                                        <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <span x-text="career.rating.toFixed(1)"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x-bind:d="career.icon"/>
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="text-xl font-bold text-gray-900" x-text="career.title"></h3>
                                        <span class="text-sm text-gray-500" x-text="`${career.videoCount} videos`"></span>
                                    </div>
                                </div>
                                <p class="text-gray-600 mb-4" x-text="career.description"></p>
                                <div class="flex flex-wrap gap-2">
                                    <template x-for="skill in career.requiredSkills.slice(0, 3)" :key="skill">
                                        <span class="bg-blue-50 text-blue-700 px-2 py-1 rounded-full text-xs">
                                            <span x-text="skill"></span>
                                        </span>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <div class="fixed inset-y-0 right-0 flex"
            x-show="showVideoList"
            @click.away="showVideoList = false; showExpertInfo = false">

            <!-- Expert Info Panel -->
            <div x-show="showExpertInfo"
                x-transition:enter="transform transition-transform duration-300"
                x-transition:enter-start="translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="transform transition-transform duration-300"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="translate-x-full"
                class="w-96 bg-white shadow-xl z-30">
                <div class="h-full overflow-y-auto">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-bold text-gray-900">Expert Profile</h3>
                            <button @click="showExpertInfo = false" class="text-gray-400 hover:text-gray-500">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>
                        <div class="flex items-center mb-6">
                            <img src="https://plus.unsplash.com/premium_photo-1671656349218-5218444643d8?q=80&w=2787&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Expert" class="w-16 h-16 rounded-full">
                            <div class="ml-4">
                                <h4 class="text-lg font-bold text-gray-900" x-text="selectedVideo?.expert"></h4>
                                <p class="text-gray-600" x-text="selectedVideo?.role"></p>
                            </div>
                        </div>
                        <div class="prose max-w-none">
                            <p class="mb-4">A seasoned professional with extensive experience in the field. Known for innovative approaches and practical insights.</p>
                            <h5 class="font-bold mb-2">Areas of Expertise</h5>
                            <ul class="list-disc pl-5 mb-4">
                                <li>Technical Leadership</li>
                                <li>System Design</li>
                                <li>Team Management</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Video List Panel -->
            <div class="w-96 bg-white shadow-xl z-20">
                <div class="h-full overflow-y-auto">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-bold text-gray-900" x-text="selectedCareer?.title"></h3>
                            <button @click="showVideoList = false; showExpertInfo = false" class="text-gray-400 hover:text-gray-500">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>
                        <div class="space-y-4">
                            <template x-for="video in selectedCareer?.videos" :key="video.id">
                                <div class="bg-gray-50 rounded-lg p-4 hover:bg-gray-100 cursor-pointer transition-colors"
                                    @mouseenter="selectedVideo = video; showExpertInfo = true">
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="text-sm font-medium text-blue-600" x-text="video.expert"></span>
                                        <span class="text-sm text-gray-500" x-text="video.duration"></span>
                                    </div>
                                    <h4 class="font-medium text-gray-900" x-text="video.title"></h4>
                                    <p class="text-sm text-gray-600 mt-1" x-text="video.role"></p>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </x-layout>
</body>
</html>
