<x-layout>
    <!-- Hero Section -->
<section class="relative min-h-screen bg-white overflow-hidden">
    <!-- Simple mesh background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-blue-50 via-white to-white"></div>
    </div>

    <!-- Main Content -->
    <div class="relative pt-32 pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Two Column Layout -->
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Left Column -->
                <div class="relative">
                    <div class="space-y-8">
                        <!-- Badge -->
                        <div class="inline-flex items-center rounded-full px-4 py-1 bg-blue-50 border border-blue-100">
                            <span class="text-sm font-medium text-blue-600">✨ Where Education Meets Industry</span>
                        </div>

                        <!-- Main Content -->
                        <div class="space-y-6">
                            <h1 class="text-5xl font-bold text-gray-900">
                                Bridge the Gap Between
                                <span class="text-blue-600 block mt-2">Education & Industry</span>
                            </h1>
                            <p class="text-xl text-gray-600 max-w-lg">
                                Connect with industry experts, access real-world skills, and launch your career through hands-on learning and mentorship.
                            </p>
                        </div>

                        <!-- CTA Buttons -->
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="/register" class="inline-flex justify-center items-center px-6 py-3 rounded-xl bg-blue-600 text-white hover:bg-blue-700 transition-all duration-200">
                                <span class="text-base font-medium">Start Learning Now</span>
                                <svg class="ml-2 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </a>
                            <a href="#how-it-works" class="inline-flex justify-center items-center px-6 py-3 rounded-xl bg-white text-gray-900 border border-gray-200 hover:border-blue-600 hover:text-blue-600 transition-all duration-200">
                                <span class="text-base font-medium">Learn More</span>
                            </a>
                        </div>

                        <!-- Stats -->
                        <div class="grid grid-cols-3 gap-8 pt-8">
                            <div>
                                <div class="text-3xl font-bold text-blue-600">200+</div>
                                <div class="text-sm text-gray-600 mt-1">Industry Experts</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-blue-600">1000+</div>
                                <div class="text-sm text-gray-600 mt-1">Active Students</div>
                            </div>
                            <div>
                                <div class="text-3xl font-bold text-blue-600">200+</div>
                                <div class="text-sm text-gray-600 mt-1">Partner Companies</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="relative">
                    <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
                        <div class="space-y-6">
                            <div class="flex items-center space-x-3">
                                <div class="p-2 bg-blue-50 rounded-lg">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-gray-900">Choose Your Path</h3>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                @foreach([
                                    ['title' => 'Student', 'desc' => 'Start Learning', 'color' => 'blue'],
                                    ['title' => 'Professional', 'desc' => 'Start Mentoring', 'color' => 'indigo'],
                                    ['title' => 'Company', 'desc' => 'Start Hiring', 'color' => 'violet'],
                                    ['title' => 'Expert', 'desc' => 'Start Teaching', 'color' => 'purple']
                                ] as $option)
                                <button class="p-4 rounded-xl bg-{{ $option['color'] }}-50 hover:bg-{{ $option['color'] }}-100 transition-all duration-200 group text-left">
                                    <div class="text-sm font-medium text-gray-900">{{ $option['title'] }}</div>
                                    <div class="text-xs text-gray-600">{{ $option['desc'] }}</div>
                                </button>
                                @endforeach
                            </div>

                            <div class="relative">
                                <div class="absolute inset-0 flex items-center">
                                    <div class="w-full border-t border-gray-200"></div>
                                </div>
                                <div class="relative flex justify-center">
                                    <span class="px-3 bg-white text-sm text-gray-500">or</span>
                                </div>
                            </div>

                            <form class="space-y-4">
                                <input
                                    type="email"
                                    placeholder="Enter your email"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                />
                                <button class="w-full bg-blue-600 text-white rounded-xl px-4 py-3 font-medium hover:bg-blue-700 transition-all duration-200">
                                    Get Started
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Journey Section -->
<section class="pb-24 bg-white relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-white to-blue-50/20"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center rounded-full px-4 py-1 bg-blue-50 border border-blue-100 mb-4">
                <span class="text-sm font-medium text-blue-600">🎯 Your Learning Journey</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Your Journey to Success</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Follow our proven path to bridge the gap between education and industry success.</p>
        </div>

        <div class="relative">
            <!-- Connection Line -->
            <div class="absolute top-1/2 left-0 w-full h-0.5 bg-gradient-to-r from-blue-100 via-purple-100 to-pink-100 transform -translate-y-1/2 hidden lg:block"></div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="group relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-blue-50 to-blue-100/50 rounded-xl opacity-0 group-hover:opacity-100 transition duration-200 blur-xl"></div>
                    <div class="relative bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="flex items-center justify-center w-12 h-12 bg-blue-50 rounded-xl text-blue-600 font-bold text-xl border border-blue-100">
                                1
                            </div>
                            <div class="w-full h-1 bg-blue-50 rounded-full relative">
                                <div class="absolute inset-0 bg-blue-100 rounded-full w-1/4"></div>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Profile Creation</h3>
                        <p class="text-gray-600">Create your personalized learning profile and set your career goals.</p>
                        <div class="mt-4 flex items-center text-blue-600">
                            <span class="text-sm font-medium">Get Started</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="group relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-purple-50 to-purple-100/50 rounded-xl opacity-0 group-hover:opacity-100 transition duration-200 blur-xl"></div>
                    <div class="relative bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="flex items-center justify-center w-12 h-12 bg-purple-50 rounded-xl text-purple-600 font-bold text-xl border border-purple-100">
                                2
                            </div>
                            <div class="w-full h-1 bg-purple-50 rounded-full relative">
                                <div class="absolute inset-0 bg-purple-100 rounded-full w-2/4"></div>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Skill Assessment</h3>
                        <p class="text-gray-600">Take our comprehensive assessment to identify your strengths and gaps.</p>
                        <div class="mt-4 flex items-center text-purple-600">
                            <span class="text-sm font-medium">Start Assessment</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="group relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-pink-50 to-pink-100/50 rounded-xl opacity-0 group-hover:opacity-100 transition duration-200 blur-xl"></div>
                    <div class="relative bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="flex items-center justify-center w-12 h-12 bg-pink-50 rounded-xl text-pink-600 font-bold text-xl border border-pink-100">
                                3
                            </div>
                            <div class="w-full h-1 bg-pink-50 rounded-full relative">
                                <div class="absolute inset-0 bg-pink-100 rounded-full w-3/4"></div>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Personalized Path</h3>
                        <p class="text-gray-600">Get a customized learning path with industry-relevant courses.</p>
                        <div class="mt-4 flex items-center text-pink-600">
                            <span class="text-sm font-medium">View Path</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="group relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-indigo-50 to-indigo-100/50 rounded-xl opacity-0 group-hover:opacity-100 transition duration-200 blur-xl"></div>
                    <div class="relative bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="flex items-center justify-center w-12 h-12 bg-indigo-50 rounded-xl text-indigo-600 font-bold text-xl border border-indigo-100">
                                4
                            </div>
                            <div class="w-full h-1 bg-indigo-50 rounded-full relative">
                                <div class="absolute inset-0 bg-indigo-100 rounded-full w-full"></div>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Industry Connect</h3>
                        <p class="text-gray-600">Connect with mentors and companies for real-world opportunities.</p>
                        <div class="mt-4 flex items-center text-indigo-600">
                            <span class="text-sm font-medium">Connect Now</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features Section -->
<section class="py-24 bg-gradient-to-b from-white to-gray-50 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center rounded-full px-4 py-1 bg-blue-50 border border-blue-100 mb-4">
                <span class="text-sm font-medium text-blue-600">✨ Tailored For Everyone</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Features & Learning Paths</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Customized solutions for both learners and industry partners</p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Left Column -->
            <div class="space-y-8">
                <!-- For Students -->
                <div class="group relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-blue-50 to-blue-100/50 rounded-xl opacity-0 group-hover:opacity-100 transition duration-200 blur-xl"></div>
                    <div class="relative bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100">
                        <div class="flex items-center space-x-4 mb-6">
                            <div class="p-2 bg-blue-50 rounded-lg border border-blue-100">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">For Students</h3>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start space-x-3 p-4 rounded-lg bg-blue-50/50 hover:bg-blue-50 transition-colors">
                                <div class="flex-shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mt-0.5">
                                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-900">Industry-aligned Programs</span>
                                    <p class="text-sm text-gray-600 mt-1">Curriculum designed with industry experts</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 p-4 rounded-lg bg-blue-50/50 hover:bg-blue-50 transition-colors">
                                <div class="flex-shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mt-0.5">
                                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-900">1-on-1 Mentorship</span>
                                    <p class="text-sm text-gray-600 mt-1">Personal guidance from industry professionals</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 p-4 rounded-lg bg-blue-50/50 hover:bg-blue-50 transition-colors">
                                <div class="flex-shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mt-0.5">
                                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-900">Hands-on Projects</span>
                                    <p class="text-sm text-gray-600 mt-1">Real-world project experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- For Companies -->
                <div class="group relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-purple-50 to-purple-100/50 rounded-xl opacity-0 group-hover:opacity-100 transition duration-200 blur-xl"></div>
                    <div class="relative bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100">
                        <div class="flex items-center space-x-4 mb-6">
                            <div class="p-2 bg-purple-50 rounded-lg border border-purple-100">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">For Companies</h3>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start space-x-3 p-4 rounded-lg bg-purple-50/50 hover:bg-purple-50 transition-colors">
                                <div class="flex-shrink-0 w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center mt-0.5">
                                    <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-900">Talent Pipeline</span>
                                    <p class="text-sm text-gray-600 mt-1">Access to pre-trained talent pool</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 p-4 rounded-lg bg-purple-50/50 hover:bg-purple-50 transition-colors">
                                <div class="flex-shrink-0 w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center mt-0.5">
                                    <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-900">Custom Training</span>
                                    <p class="text-sm text-gray-600 mt-1">Customized training programs</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 p-4 rounded-lg bg-purple-50/50 hover:bg-purple-50 transition-colors">
                                <div class="flex-shrink-0 w-6 h-6 bg-purple-100 rounded-full flex items-center justify-center mt-0.5">
                                    <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-900">Direct Recruitment</span>
                                    <p class="text-sm text-gray-600 mt-1">Streamlined hiring process</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Skills & Courses -->
            <div class="group relative">
                <div class="absolute -inset-4 bg-gradient-to-r from-gray-50 to-blue-50/50 rounded-xl opacity-0 group-hover:opacity-100 transition duration-200 blur-xl"></div>
                <div class="relative bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100">
                    <div class="flex items-center justify-between mb-8">
                        <div class="flex items-center space-x-4">
                            <div class="p-2 bg-blue-50 rounded-lg border border-blue-100">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Popular Skills & Courses</h3>
                        </div>
                        <span class="inline-flex items-center rounded-full bg-blue-50 px-2 py-1 text-xs font-medium text-blue-600">
                            Updated Weekly
                        </span>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        @foreach([
                            ['title' => 'Data Science', 'count' => '120+ Courses', 'icon' => 'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V15a2 2 0 01-2 2z'],
                            ['title' => 'Web Development', 'count' => '200+ Courses', 'icon' => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4'],
                            ['title' => 'Digital Marketing', 'count' => '85+ Courses', 'icon' => 'M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z'],
                            ['title' => 'UX Design', 'count' => '95+ Courses', 'icon' => 'M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122'],
                            ['title' => 'Cloud Computing', 'count' => '150+ Courses', 'icon' => 'M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z'],
                            ['title' => 'AI & ML', 'count' => '100+ Courses', 'icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
                            ['title' => 'Project Management', 'count' => '90+ Courses', 'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2'],
                            ['title' => 'Business Analytics', 'count' => '110+ Courses', 'icon' => 'M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z']
                        ] as $skill)
                        <div class="group relative">
                            <div class="absolute -inset-2 bg-gradient-to-r from-blue-50 to-blue-100/50 rounded-xl opacity-0 group-hover:opacity-100 transition duration-200 blur-lg"></div>
                            <div class="relative p-4 rounded-lg bg-white border border-gray-100 hover:border-blue-100 shadow-sm hover:shadow-md transition-all duration-200">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <div class="font-semibold text-gray-900">{{ $skill['title'] }}</div>
                                        <div class="text-sm text-gray-500 mt-1">{{ $skill['count'] }}</div>
                                    </div>
                                    <div class="p-2 bg-blue-50 rounded-lg">
                                        <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $skill['icon'] }}"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="mt-3 flex items-center text-sm text-blue-600">
                                    <span class="font-medium">Explore Courses</span>
                                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="mt-8 text-center">
                        <a href="/courses" class="inline-flex items-center justify-center px-6 py-3 text-sm font-medium rounded-lg text-blue-600 bg-blue-50 hover:bg-blue-100 transition-all duration-200">
                            View All Courses
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories Section -->
<section class="py-24 bg-white relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-white via-blue-50/20 to-white"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center rounded-full px-4 py-1 bg-blue-50 border border-blue-100 mb-4">
                <span class="text-sm font-medium text-blue-600">💫 Success Stories</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">From Learning to Earning</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Real stories from our graduates who transformed their careers</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Success Story Card 1 -->
            <div class="group relative">
                <div class="absolute -inset-4 bg-gradient-to-r from-blue-50 to-purple-50 rounded-xl opacity-0 group-hover:opacity-100 transition duration-200 blur-xl"></div>
                <div class="relative bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100">
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <div class="w-16 h-16 rounded-full bg-gradient-to-r from-blue-500 to-blue-600 flex items-center justify-center text-xl font-bold text-white">
                                JS
                            </div>
                            <div class="absolute -bottom-1 -right-1 bg-green-400 p-1 rounded-full border-2 border-white">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900">John Smith</h3>
                            <p class="text-sm text-gray-600">Software Engineer at Google</p>
                        </div>
                    </div>

                    <div class="mt-6 space-y-4">
                        <blockquote class="text-gray-700">
                            "SkillBridge helped me transition from a bootcamp graduate to a full-stack role at Google. The mentorship and practical projects made all the difference."
                        </blockquote>

                        <div class="border-t border-gray-100 pt-4">
                            <div class="flex items-center justify-between text-sm">
                                <div class="flex items-center text-gray-500">
                                    <svg class="w-5 h-5 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <span>6 months to success</span>
                                </div>
                                <span class="text-blue-600 font-medium">Read Story →</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add two more similar success story cards with different colors and content -->

        </div>

        <div class="mt-12 text-center">
            <a href="/success-stories" class="inline-flex items-center justify-center px-6 py-3 text-sm font-medium rounded-lg text-blue-600 bg-blue-50 hover:bg-blue-100 transition-all duration-200">
                View All Success Stories
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>
<!-- Companies Section -->
<section class="py-24 bg-gradient-to-b from-white to-gray-50 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-blue-50/50 via-transparent to-purple-50/50"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center rounded-full px-4 py-1 bg-blue-50 border border-blue-100 mb-4">
                <span class="text-sm font-medium text-blue-600">🤝 Trusted Partners</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Backed by Industry Leaders</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Join the ranks of top companies hiring our graduates</p>
        </div>

        <!-- Featured Companies -->
        <div class="mb-16">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center">
                <div class="group relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-blue-50 to-blue-100/50 rounded-xl opacity-0 group-hover:opacity-100 transition duration-200 blur-xl"></div>
                    <div class="relative bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100 flex items-center justify-center">
                        <div class="text-center">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg mb-3 mx-auto flex items-center justify-center">
                                <svg class="w-8 h-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <div class="font-bold text-gray-900">Google</div>
                            <div class="text-sm text-gray-500 mt-1">50+ Graduates Hired</div>
                        </div>
                    </div>
                </div>

                <div class="group relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-purple-50 to-purple-100/50 rounded-xl opacity-0 group-hover:opacity-100 transition duration-200 blur-xl"></div>
                    <div class="relative bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100 flex items-center justify-center">
                        <div class="text-center">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg mb-3 mx-auto flex items-center justify-center">
                                <svg class="w-8 h-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div class="font-bold text-gray-900">Microsoft</div>
                            <div class="text-sm text-gray-500 mt-1">40+ Graduates Hired</div>
                        </div>
                    </div>
                </div>

                <div class="group relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-pink-50 to-pink-100/50 rounded-xl opacity-0 group-hover:opacity-100 transition duration-200 blur-xl"></div>
                    <div class="relative bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100 flex items-center justify-center">
                        <div class="text-center">
                            <div class="w-12 h-12 bg-pink-100 rounded-lg mb-3 mx-auto flex items-center justify-center">
                                <svg class="w-8 h-8 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <div class="font-bold text-gray-900">Meta</div>
                            <div class="text-sm text-gray-500 mt-1">35+ Graduates Hired</div>
                        </div>
                    </div>
                </div>

                <div class="group relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-indigo-50 to-indigo-100/50 rounded-xl opacity-0 group-hover:opacity-100 transition duration-200 blur-xl"></div>
                    <div class="relative bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100 flex items-center justify-center">
                        <div class="text-center">
                            <div class="w-12 h-12 bg-indigo-100 rounded-lg mb-3 mx-auto flex items-center justify-center">
                                <svg class="w-8 h-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                                </svg>
                            </div>
                            <div class="font-bold text-gray-900">Amazon</div>
                            <div class="text-sm text-gray-500 mt-1">45+ Graduates Hired</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Partnership Benefits -->
        <div class="grid md:grid-cols-3 gap-8 mb-12">
            <div class="relative group">
                <div class="absolute -inset-4 bg-gradient-to-r from-blue-50 to-blue-100/50 rounded-xl opacity-0 group-hover:opacity-100 transition duration-200 blur-xl"></div>
                <div class="relative bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100">
                    <div class="p-2 bg-blue-50 rounded-lg inline-block mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Access Top Talent</h3>
                    <p class="text-gray-600">Connect with pre-vetted graduates who have proven their skills through real projects.</p>
                </div>
            </div>

            <div class="relative group">
                <div class="absolute -inset-4 bg-gradient-to-r from-purple-50 to-purple-100/50 rounded-xl opacity-0 group-hover:opacity-100 transition duration-200 blur-xl"></div>
                <div class="relative bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100">
                    <div class="p-2 bg-purple-50 rounded-lg inline-block mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Custom Training</h3>
                    <p class="text-gray-600">Develop tailored training programs aligned with your company's specific needs.</p>
                </div>
            </div>

            <div class="relative group">
                <div class="absolute -inset-4 bg-gradient-to-r from-pink-50 to-pink-100/50 rounded-xl opacity-0 group-hover:opacity-100 transition duration-200 blur-xl"></div>
                <div class="relative bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100">
                    <div class="p-2 bg-pink-50 rounded-lg inline-block mb-4">
                        <svg class="w-6 h-6 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Industry Insights</h3>
                    <p class="text-gray-600">Stay ahead with early access to emerging talent trends and skill requirements.</p>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="text-center">
            <a href="/partners" class="inline-flex items-center justify-center px-6 py-3 text-base font-medium rounded-xl bg-blue-600 text-white hover:bg-blue-700 transition-all duration-200 shadow-sm hover:shadow-md">
                Become a Partner
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>
<!-- Platform Features Section -->
<section class="py-24 bg-white relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-blue-50/20 via-white to-white"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center rounded-full px-4 py-1 bg-blue-50 border border-blue-100 mb-4">
                <span class="text-sm font-medium text-blue-600">⚡ Platform Features</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Choose SkillBridge?</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Discover the tools and features that will accelerate your career growth</p>
        </div>

        <!-- Features Grid -->
        <div class="grid md:grid-cols-3 gap-8">
            <!-- AI-Powered Learning -->
            <div class="group relative">
                <div class="absolute -inset-4 bg-gradient-to-r from-blue-50 to-blue-100/50 rounded-xl opacity-0 group-hover:opacity-100 transition duration-200 blur-xl"></div>
                <div class="relative bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100">
                    <div class="p-3 bg-blue-50 rounded-xl inline-block mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">AI-Powered Learning</h3>
                    <p class="text-gray-600 mb-6">Personalized learning paths adapted to your goals and progress in real-time using advanced AI algorithms.</p>

                    <ul class="space-y-3">
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Smart content recommendations
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Progress tracking
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Adaptive assessments
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Live Projects -->
            <div class="group relative">
                <div class="absolute -inset-4 bg-gradient-to-r from-purple-50 to-purple-100/50 rounded-xl opacity-0 group-hover:opacity-100 transition duration-200 blur-xl"></div>
                <div class="relative bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100">
                    <div class="p-3 bg-purple-50 rounded-xl inline-block mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Live Projects</h3>
                    <p class="text-gray-600 mb-6">Work on real industry projects with actual companies and build your portfolio with practical experience.</p>

                    <ul class="space-y-3">
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 mr-2 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Real company projects
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 mr-2 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Professional feedback
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 mr-2 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Portfolio building
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Expert Mentorship -->
            <div class="group relative">
                <div class="absolute -inset-4 bg-gradient-to-r from-pink-50 to-pink-100/50 rounded-xl opacity-0 group-hover:opacity-100 transition duration-200 blur-xl"></div>
                <div class="relative bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100">
                    <div class="p-3 bg-pink-50 rounded-xl inline-block mb-6">
                        <svg class="w-8 h-8 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Expert Mentorship</h3>
                    <p class="text-gray-600 mb-6">Get 1-on-1 guidance from industry professionals who've been where you want to go.</p>

                    <ul class="space-y-3">
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 mr-2 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Personal mentoring
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 mr-2 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Career guidance
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 mr-2 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Industry insights
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Additional features continue with similar structure -->
        </div>

        <!-- Additional Features Preview -->
        <div class="mt-16 grid md:grid-cols-3 gap-8">
            <div class="relative bg-gradient-to-br from-blue-50 to-purple-50 rounded-xl p-6 text-center">
                <div class="absolute inset-0 bg-white/40 rounded-xl backdrop-blur-sm"></div>
                <div class="relative">
                    <div class="text-4xl font-bold text-blue-600 mb-2">24/7</div>
                    <div class="text-gray-900">Support Access</div>
                </div>
            </div>

            <div class="relative bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6 text-center">
                <div class="absolute inset-0 bg-white/40 rounded-xl backdrop-blur-sm"></div>
                <div class="relative">
                    <div class="text-4xl font-bold text-purple-600 mb-2">500+</div>
                    <div class="text-gray-900">Interactive Exercises</div>
                </div>
            </div>

            <div class="relative bg-gradient-to-br from-pink-50 to-blue-50 rounded-xl p-6 text-center">
                <div class="absolute inset-0 bg-white/40 rounded-xl backdrop-blur-sm"></div>
                <div class="relative">
                    <div class="text-4xl font-bold text-pink-600 mb-2">98%</div>
                    <div class="text-gray-900">Success Rate</div>
                </div>
            </div>
        </div>

        <!-- Explore Features CTA -->
        <div class="mt-16 text-center">
            <a href="/features" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium rounded-xl bg-gradient-to-r from-blue-600 to-blue-700 text-white hover:from-blue-700 hover:to-blue-800 transition-all duration-200 shadow-sm hover:shadow-md">
                Explore All Features
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>
<!-- Marketplace Section -->
<section class="py-24 bg-white relative min-h-screen overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-blue-50/20 via-white to-white"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <!-- Marketplace Header -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center rounded-full px-4 py-1 bg-blue-50 border border-blue-100 mb-4">
                <span class="text-sm font-medium text-blue-600">🛍️ Marketplace</span>
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Explore What You May Need</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Find the perfect item recommended by an expert to accelerate your growth</p>
        </div>

        <!-- Search and Filter Bar -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4 mb-8">
            <div class="grid md:grid-cols-4 gap-4">
                <!-- Search -->
                <div class="md:col-span-2 relative">
                    <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <input type="text" placeholder="Search courses..." class="w-full pl-12 pr-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <!-- Category Filter -->
                <div class="relative">
                    <select class="w-full pl-4 pr-10 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none bg-white">
                        <option value="">All Categories</option>
                        <option value="development">Development</option>
                        <option value="design">Design</option>
                        <option value="business">Business</option>
                        <option value="marketing">Marketing</option>
                    </select>
                    <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </div>
                </div>

                <!-- Sort Filter -->
                <div class="relative">
                    <select class="w-full pl-4 pr-10 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent appearance-none bg-white">
                        <option value="">Sort By</option>
                        <option value="popular">Most Popular</option>
                        <option value="newest">Newest</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                    </select>
                    <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Active Filters -->
        <div class="flex flex-wrap gap-2 mb-8">
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-blue-50 text-sm text-blue-600">
                Development
                <button class="ml-2 hover:text-blue-800">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div class="inline-flex items-center px-3 py-1 rounded-full bg-purple-50 text-sm text-purple-600">
                Most Popular
                <button class="ml-2 hover:text-purple-800">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="grid md:grid-cols-3 gap-8 mb-12">
            <!-- Course Card 1 -->
            <div class="group relative">
                <div class="absolute -inset-4 bg-gradient-to-r from-blue-50 to-blue-100/50 rounded-xl opacity-0 group-hover:opacity-100 transition duration-200 blur-xl"></div>
                <div class="relative bg-white rounded-xl shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100 overflow-hidden">
                    <!-- Course Image -->
                    <div class="relative h-48 bg-gray-100">
                        <img src="/api/placeholder/400/320" alt="Course thumbnail" class="w-full h-full object-cover">
                        <div class="absolute top-4 right-4">
                            <div class="inline-flex items-center px-2 py-1 rounded-lg bg-blue-600 text-sm text-white">
                                $99.99
                            </div>
                        </div>
                    </div>

                    <!-- Course Content -->
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="px-2 py-1 rounded-full bg-blue-50 text-xs text-blue-600">Development</span>
                            <span class="px-2 py-1 rounded-full bg-green-50 text-xs text-green-600">Bestseller</span>
                        </div>

                        <h3 class="text-xl font-bold text-gray-900 mb-2">Complete Web Development Bootcamp</h3>
                        <p class="text-gray-600 text-sm mb-4">Learn web development from scratch with this comprehensive bootcamp.</p>

                        <!-- Course Meta -->
                        <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                42 hours
                            </div>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                                1,234 students
                            </div>
                        </div>

                        <!-- Instructor -->
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-gray-200 mr-2"></div>
                                <div class="text-sm">
                                    <p class="font-medium text-gray-900">John Doe</p>
                                    <p class="text-gray-500">Senior Developer</p>
                                </div>
                            </div>
                            <button class="text-blue-600 hover:text-blue-700">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Card Footer -->
                    <div class="px-6 py-4 bg-gray-50 border-t border-gray-100">
                        <button class="w-full inline-flex justify-center items-center px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition-colors">
                            Add to Cart
                            <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Additional course cards would be repeated with similar structure -->
        </div>

        <!-- Pagination -->
        <div class="flex justify-center items-center space-x-2">
            <button class="p-2 rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-50 disabled:opacity-50">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>
            <button class="px-4 py-2 rounded-lg bg-blue-50 text-blue-600 font-medium">1</button>
            <button class="px-4 py-2 rounded-lg hover:bg-gray-50 text-gray-600 font-medium">2</button>
            <button class="px-4 py-2 rounded-lg hover:bg-gray-50 text-gray-600 font-medium">3</button>
            <button class="p-2 rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-50">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </button>
        </div>
    </div>
</section>
<!-- Call to Action Section -->
<section class="py-24 bg-gradient-to-b from-white to-blue-50 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="relative">
            <!-- Decorative Elements -->
            <div class="absolute -top-12 -right-12 w-24 h-24 bg-gradient-to-r from-blue-50 to-purple-50 rounded-full blur-2xl"></div>
            <div class="absolute -bottom-12 -left-12 w-24 h-24 bg-gradient-to-r from-pink-50 to-blue-50 rounded-full blur-2xl"></div>

            <div class="relative bg-white rounded-2xl p-8 md:p-12 shadow-xl border border-gray-100">
                <div class="max-w-3xl mx-auto text-center">
                    <!-- Badge -->
                    <div class="inline-flex items-center rounded-full px-4 py-1 bg-blue-50 border border-blue-100 mb-8">
                        <span class="text-sm font-medium text-blue-600">🚀 Launch Your Career</span>
                    </div>

                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Ready to Bridge the Gap?</h2>
                    <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">Join thousands of students already learning with SkillBridge. Start your journey today.</p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                        <a href="/register" class="group inline-flex justify-center items-center px-8 py-4 text-lg font-medium rounded-xl bg-gradient-to-r from-blue-600 to-blue-700 text-white hover:from-blue-700 hover:to-blue-800 transition-all duration-200 shadow-sm hover:shadow-md">
                            Get Started For Free
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                        <a href="/contact" class="inline-flex justify-center items-center px-8 py-4 text-lg font-medium rounded-xl bg-white text-blue-600 border-2 border-blue-600 hover:bg-blue-50 transition-all duration-200">
                            Talk to an Expert
                        </a>
                    </div>

                    <!-- Trust Indicators -->
                    <div class="flex flex-wrap justify-center gap-6 items-center">
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            No credit card required
                        </div>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            14-day free trial
                        </div>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Cancel anytime
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-24 bg-white relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="relative">
            <div class="absolute -inset-4 bg-gradient-to-r from-blue-50 via-purple-50 to-pink-50 rounded-2xl blur-xl"></div>

            <div class="relative bg-white rounded-2xl p-8 md:p-12 shadow-xl border border-gray-100">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <!-- Left Column -->
                    <div>
                        <div class="inline-flex items-center rounded-full px-4 py-1 bg-blue-50 border border-blue-100 mb-6">
                            <span class="text-sm font-medium text-blue-600">📬 Never Miss an Update</span>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Stay Ahead of the Curve</h3>
                        <p class="text-gray-600 mb-6">Get weekly insights on industry trends, learning resources, and career opportunities delivered to your inbox.</p>

                        <!-- Benefits List -->
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-blue-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-600">Exclusive learning resources</span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-blue-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-600">Industry insights and trends</span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg class="w-5 h-5 text-blue-500 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-600">Early access to new features</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column - Form -->
                    <div>
                        <form class="space-y-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                        </svg>
                                    </div>
                                    <input
                                        type="text"
                                        id="name"
                                        placeholder="John Doe"
                                        class="w-full pl-12 pr-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent placeholder-gray-400"
                                    />
                                </div>
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                                        </svg>
                                    </div>
                                    <input
                                        type="email"
                                        id="email"
                                        placeholder="john@example.com"
                                        class="w-full pl-12 pr-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent placeholder-gray-400"
                                    />
                                </div>
                            </div>

                            <button type="submit" class="w-full inline-flex justify-center items-center px-6 py-3 rounded-xl bg-blue-600 text-white hover:bg-blue-700 transition-all duration-200 shadow-sm hover:shadow-md">
                                <span class="text-base font-medium">Subscribe to Newsletter</span>
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </button>

                            <p class="text-center text-sm text-gray-500">
                                We respect your privacy. Unsubscribe at any time.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</x-layout>
