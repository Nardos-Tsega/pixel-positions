<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js"></script>
</head>
<body>
    <x-layout>
        <div x-data="{
            activeView: 'grid',
            selectedCourse: null,
            showCourseDetails: false,
            searchQuery: '',
            selectedLevel: 'all',
            selectedCategory: 'all',
            showFilters: false,
            courses: [
                {
                    id: 1,
                    title: 'Full Stack Web Development',
                    category: 'Development',
                    level: 'Intermediate',
                    duration: '12 weeks',
                    enrolled: 1250,
                    rating: 4.8,
                    progress: 0,
                    instructor: {
                        name: 'Sarah Johnson',
                        title: 'Senior Software Engineer',
                        company: 'Tech Corp',
                        image: '/api/placeholder/64/64'
                    },
                    thumbnail: '/api/placeholder/400/300',
                    modules: [
                        {
                            title: 'Frontend Fundamentals',
                            duration: '3 weeks',
                            topics: ['HTML/CSS', 'JavaScript', 'React'],
                            completed: false
                        },
                        {
                            title: 'Backend Development',
                            duration: '4 weeks',
                            topics: ['Node.js', 'Express', 'Databases'],
                            completed: false
                        },
                        {
                            title: 'DevOps & Deployment',
                            duration: '3 weeks',
                            topics: ['Docker', 'CI/CD', 'Cloud Services'],
                            completed: false
                        }
                    ],
                    skills: ['JavaScript', 'React', 'Node.js', 'SQL'],
                    description: 'Comprehensive course covering modern web development stack from frontend to backend deployment.',
                    prerequisites: ['Basic programming knowledge', 'Understanding of HTML/CSS'],
                    projects: [
                        'E-commerce Platform',
                        'Real-time Chat Application',
                        'Social Media Dashboard'
                    ]
                },
                // Add more courses here
            ],
            learningPaths: [
                {
                    id: 1,
                    title: 'Frontend Developer',
                    description: 'Master modern frontend development',
                    duration: '6 months',
                    courses: 5,
                    image: '/api/placeholder/400/300',
                    skills: ['HTML/CSS', 'JavaScript', 'React', 'UI/UX'],
                    careers: ['Frontend Developer', 'UI Engineer']
                }
                // Add more learning paths
            ],
            filteredCourses() {
                return this.courses.filter(course => {
                    const matchesSearch = course.title.toLowerCase().includes(this.searchQuery.toLowerCase());
                    const matchesLevel = this.selectedLevel === 'all' || course.level === this.selectedLevel;
                    const matchesCategory = this.selectedCategory === 'all' || course.category === this.selectedCategory;
                    return matchesSearch && matchesLevel && matchesCategory;
                });
            }
        }">
            <!-- Hero Section with Course Stats -->
            <div class="bg-gradient-to-r from-blue-600 to-blue-800">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
                    <div class="text-center">
                        <h1 class="text-4xl font-bold text-white mb-6">
                            Industry-Focused Courses
                        </h1>
                        <p class="text-xl text-blue-100 mb-12">
                            Learn from industry experts and build real-world skills
                        </p>

                        <!-- Course Statistics -->
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto">
                            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6">
                                <div class="text-3xl font-bold text-white">20+</div>
                                <div class="text-blue-100">Courses</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6">
                                <div class="text-3xl font-bold text-white">50+</div>
                                <div class="text-blue-100">Industry Experts</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6">
                                <div class="text-3xl font-bold text-white">10k+</div>
                                <div class="text-blue-100">Students</div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6">
                                <div class="text-3xl font-bold text-white">95%</div>
                                <div class="text-blue-100">Success Rate</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Learning Paths Section -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-8">Learning Paths</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <template x-for="path in learningPaths" :key="path.id">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <img :src="path.image" :alt="path.title" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-2" x-text="path.title"></h3>
                                <p class="text-gray-600 mb-4" x-text="path.description"></p>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-sm text-gray-500" x-text="`${path.duration} • ${path.courses} courses`"></span>
                                    <button class="text-blue-600 hover:text-blue-700 font-medium">View Path</button>
                                </div>
                                <div class="flex flex-wrap gap-2">
                                    <template x-for="skill in path.skills" :key="skill">
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

            <!-- Filters and Search -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 bg-gray-50">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div class="flex flex-wrap items-center gap-4">
                        <div class="relative">
                            <input type="text"
                                x-model="searchQuery"
                                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                placeholder="Search courses...">
                            <div class="absolute right-3 top-2.5">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                            </div>
                        </div>
                        <select x-model="selectedLevel"
                            class="rounded-lg border border-gray-300 py-2 pl-3 pr-10 text-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="all">All Levels</option>
                            <option value="Beginner">Beginner</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Advanced">Advanced</option>
                        </select>
                        <select x-model="selectedCategory"
                            class="rounded-lg border border-gray-300 py-2 pl-3 pr-10 text-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="all">All Categories</option>
                            <option value="Development">Development</option>
                            <option value="Design">Design</option>
                            <option value="Business">Business</option>
                        </select>
                    </div>
                    <div class="flex items-center gap-2">
                        <button @click="activeView = 'grid'"
                            :class="{'text-blue-600': activeView === 'grid'}"
                            class="p-2 hover:bg-gray-100 rounded-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                            </svg>
                        </button>
                        <button @click="activeView = 'list'"
                            :class="{'text-blue-600': activeView === 'list'}"
                            class="p-2 hover:bg-gray-100 rounded-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Courses Grid/List -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div x-show="activeView === 'grid'" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <template x-for="course in filteredCourses()" :key="course.id">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="relative">
                                <img :src="course.thumbnail" :alt="course.title" class="w-full h-48 object-cover">
                                <div class="absolute top-4 right-4">
                                    <div class="bg-white px-2 py-1 rounded-full text-sm font-medium flex items-center">
                                        <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <span x-text="course.rating"></span>
                                    </div>
                                </div>
                                <div class="absolute bottom-4 left-4">
                                    <span class="bg-blue-600 text-white px-2 py-1 rounded-full text-sm">
                                        <span x-text="course.level"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <img :src="course.instructor.image" :alt="course.instructor.name"
                                        class="w-10 h-10 rounded-full">
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900" x-text="course.instructor.name"></p>
                                        <p class="text-sm text-gray-500" x-text="course.instructor.title"></p>
                                    </div>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2" x-text="course.title"></h3>
                                <p class="text-gray-600 mb-4" x-text="course.description"></p>
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            ```html
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                        <span class="text-sm text-gray-500" x-text="course.duration"></span>
                                    </div>
                                    <span class="text-sm text-gray-500" x-text="`${course.enrolled} enrolled`"></span>
                                </div>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <template x-for="skill in course.skills" :key="skill">
                                        <span class="bg-blue-50 text-blue-700 px-2 py-1 rounded-full text-xs">
                                            <span x-text="skill"></span>
                                        </span>
                                    </template>
                                </div>
                                <!-- Progress Bar for Enrolled Courses -->
                                <div class="relative pt-1">
                                    <div class="flex mb-2 items-center justify-between">
                                        <div>
                                            <span class="text-xs font-semibold inline-block text-blue-600">
                                                Progress
                                            </span>
                                        </div>
                                        <div class="text-right">
                                            <span class="text-xs font-semibold inline-block text-blue-600" x-text="`${course.progress}%`">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-blue-100">
                                        <div :style="`width: ${course.progress}%`"
                                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-600 transition-all duration-500">
                                        </div>
                                    </div>
                                </div>
                                <button @click="selectedCourse = course; showCourseDetails = true"
                                    class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors duration-200">
                                    View Course
                                </button>
                            </div>
                        </div>
                    </template>
                </div>

                <!-- List View -->
                <div x-show="activeView === 'list'" class="space-y-6">
                    <template x-for="course in filteredCourses()" :key="course.id">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-all duration-300">
                            <div class="flex flex-col md:flex-row">
                                <div class="md:w-64 relative">
                                    <img :src="course.thumbnail" :alt="course.title" class="w-full h-full object-cover">
                                    <div class="absolute top-4 right-4">
                                        <span class="bg-white px-2 py-1 rounded-full text-sm font-medium flex items-center">
                                            <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                            <span x-text="course.rating"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="p-6 flex-1">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex items-center">
                                            <img :src="course.instructor.image" :alt="course.instructor.name" class="w-10 h-10 rounded-full">
                                            <div class="ml-3">
                                                <p class="text-sm font-medium text-gray-900" x-text="course.instructor.name"></p>
                                                <p class="text-sm text-gray-500" x-text="course.instructor.title"></p>
                                            </div>
                                        </div>
                                        <span class="bg-blue-600 text-white px-2 py-1 rounded-full text-sm" x-text="course.level"></span>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-2" x-text="course.title"></h3>
                                    <p class="text-gray-600 mb-4" x-text="course.description"></p>
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <template x-for="skill in course.skills" :key="skill">
                                            <span class="bg-blue-50 text-blue-700 px-2 py-1 rounded-full text-xs">
                                                <span x-text="skill"></span>
                                            </span>
                                        </template>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex items-center">
                                                <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                </svg>
                                                <span class="text-sm text-gray-500" x-text="course.duration"></span>
                                            </div>
                                            <span class="text-sm text-gray-500" x-text="`${course.enrolled} enrolled`"></span>
                                        </div>
                                        <button @click="selectedCourse = course; showCourseDetails = true"
                                            class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors duration-200">
                                            View Course
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Course Details Modal -->
            <div x-show="showCourseDetails"
                class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center"
                @click.away="showCourseDetails = false">
                <div class="bg-white rounded-lg max-w-4xl w-full mx-4 max-h-[90vh] overflow-y-auto">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <h2 class="text-2xl font-bold text-gray-900" x-text="selectedCourse?.title"></h2>
                                <p class="text-gray-600" x-text="selectedCourse?.description"></p>
                            </div>
                            <button @click="showCourseDetails = false" class="text-gray-400 hover:text-gray-500">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>

                        <!-- Course Modules -->
                        <div class="mb-8">
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Course Modules</h3>
                            <div class="space-y-4">
                                <template x-for="(module, index) in selectedCourse?.modules" :key="index">
                                    <div class="border rounded-lg p-4">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="font-medium text-gray-900" x-text="module.title"></h4>
                                                <p class="text-sm text-gray-500" x-text="module.duration"></p>
                                            </div>
                                            <div x-show="module.completed" class="text-green-500">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                            <template x-for="topic in module.topics" :key="topic">
                                                <span class="inline-block bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded mr-2 mb-2" x-text="topic"></span>
                                            </template>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>

                        <!-- Course Requirements -->
                        <div class="mb-8">
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Prerequisites</h3>
                            <ul class="list-disc pl-5 space-y-2">
                                <template x-for="prerequisite in selectedCourse?.prerequisites" :key="prerequisite">
                                    <li class="text-gray-600" x-text="prerequisite"></li>
                                </template>
                            </ul>
                        </div>

                        <!-- Projects -->
                        <div class="mb-8">
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Projects You'll Build</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <template x-for="project in selectedCourse?.projects" :key="project">
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <div class="font-medium text-gray-900" x-text="project"></div>
                                    </div>
                                </template>
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button class="bg-blue-600 text-white py-2 px-6 rounded-lg hover:bg-blue-700 transition-colors duration-200">
                                Enroll Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-layout>
</body>
</html>

