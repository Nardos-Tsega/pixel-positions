<x-layout>
<!-- Hero Section -->
<section class="relative  bg-gradient-to-b from-gray-900 via-gray-900 to-black overflow-hidden">
    <!-- Animated Background SVGs -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- Abstract shapes -->
        <div class="absolute top-0 -left-4 w-72 h-72 bg-blue-500 rounded-full mix-blend-multiply filter blur-xl opacity-10 animate-blob"></div>
        <div class="absolute top-0 -right-4 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl opacity-10 animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-8 left-20 w-72 h-72 bg-indigo-500 rounded-full mix-blend-multiply filter blur-xl opacity-10 animate-blob animation-delay-4000"></div>

        <!-- Grid Pattern -->
        <div class="absolute inset-0" style="background-image: linear-gradient(rgba(255, 255, 255, 0.05) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 255, 255, 0.05) 1px, transparent 1px); background-size: 32px 32px;"></div>

        <!-- Abstract Lines -->
        <svg class="absolute right-0 top-0 h-full w-1/2 translate-x-1/2 opacity-20" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0 0 L50 100 L100 0 Z" fill="url(#grad1)" />
            <defs>
                <linearGradient id="grad1" gradientTransform="rotate(45)">
                    <stop offset="0%" stop-color="#3B82F6" />
                    <stop offset="100%" stop-color="#1D4ED8" />
                </linearGradient>
            </defs>
        </svg>
    </div>

       <!-- Hero Content -->
       <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Column -->
            <div class="space-y-8">
                <div class="space-y-4">
                    <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight">
                        <span class="block text-gray-900 dark:text-white">Bridge the Gap Between</span>
                        <span class="block text-blue-600">Education & Industry</span>
                    </h1>
                    <p class="text-xl text-gray-600 dark:text-gray-300">
                        Connect with industry experts, access real-world skills, and launch your career through hands-on learning and mentorship.
                    </p>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="/register" class="inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition-all duration-200">
                        Get Started
                    </a>
                    <a href="#how-it-works" class="inline-flex justify-center items-center px-6 py-3 border-2 border-blue-600 text-base font-medium rounded-lg text-blue-600 hover:bg-blue-50 dark:hover:bg-blue-900/30">
                        How It Works
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-4 pt-8">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-600">200+</div>
                        <div class="text-sm text-gray-600 dark:text-gray-400">Industry Experts</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-600">1000+</div>
                        <div class="text-sm text-gray-600 dark:text-gray-400">Active Students</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-600">200+</div>
                        <div class="text-sm text-gray-600 dark:text-gray-400">Partner Companies</div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Interactive Element -->
            <div class="relative">
                <x-panel class="bg-white/80 backdrop-blur-sm dark:bg-gray-800/80">
                    <div class="space-y-6">
                        <div class="flex items-center space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-blue-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                              </svg>

                            <h3 class="text-lg font-semibold">Explore Your Path</h3>
                        </div>
                        <div class="grid grid-cols-2 gap-3">
                            <button class="p-4 rounded-lg border-2 border-blue-100 hover:border-blue-600 transition-colors dark:border-gray-700 dark:hover:border-blue-500">
                                <div class="text-sm font-medium">I'm a Student</div>
                                <div class="text-xs text-gray-500">Looking to learn</div>
                            </button>
                            <button class="p-4 rounded-lg border-2 border-blue-100 hover:border-blue-600 transition-colors dark:border-gray-700 dark:hover:border-blue-500">
                                <div class="text-sm font-medium">I'm a Professional</div>
                                <div class="text-xs text-gray-500">Looking to mentor</div>
                            </button>
                            <button class="p-4 rounded-lg border-2 border-blue-100 hover:border-blue-600 transition-colors dark:border-gray-700 dark:hover:border-blue-500">
                                <div class="text-sm font-medium">I'm an Employer</div>
                                <div class="text-xs text-gray-500">Looking to hire</div>
                            </button>
                            <button class="p-4 rounded-lg border-2 border-blue-100 hover:border-blue-600 transition-colors dark:border-gray-700 dark:hover:border-blue-500">
                                <div class="text-sm font-medium">I'm an Expert</div>
                                <div class="text-xs text-gray-500">Looking to teach</div>
                            </button>
                        </div>
                    </div>
                </x-panel>
            </div>
        </div>
    </div>
</section>

<!-- Add these styles to your CSS -->
<style>
@keyframes blob {
    0% { transform: translate(0px, 0px) scale(1); }
    33% { transform: translate(30px, -50px) scale(1.1); }
    66% { transform: translate(-20px, 20px) scale(0.9); }
    100% { transform: translate(0px, 0px) scale(1); }
}
.animate-blob {
    animation: blob 7s infinite;
}
.animation-delay-2000 {
    animation-delay: 2s;
}
.animation-delay-4000 {
    animation-delay: 4s;
}
</style>
<!-- How It Works Section -->
<section class="py-24 bg-black relative overflow-hidden">
    <!-- Background decoration -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-b from-blue-500/10 to-transparent"></div>
        <div class="absolute inset-y-0 left-0 w-1/2 bg-gradient-to-r from-blue-500/5 to-transparent"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white">Your Journey to Success</h2>
            <p class="mt-4 text-gray-400 max-w-2xl mx-auto">Follow our proven path to bridge the gap between education and industry success.</p>
        </div>

        <div class="relative">
            <!-- Connection Line -->
            <div class="absolute top-1/2 left-0 w-full h-1 bg-gradient-to-r from-blue-500/50 via-blue-400/50 to-blue-500/50 transform -translate-y-1/2 hidden lg:block"></div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-blue-400 rounded-lg blur opacity-25 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                    <div class="relative bg-gray-900 ring-1 ring-gray-800 rounded-lg p-6">
                        <div class="flex items-center justify-center w-12 h-12 bg-blue-600 rounded-full mb-4">
                            <span class="text-xl font-bold text-white">1</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Profile Creation</h3>
                        <p class="text-gray-400">Create your personalized learning profile and set your career goals.</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-blue-400 rounded-lg blur opacity-25 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                    <div class="relative bg-gray-900 ring-1 ring-gray-800 rounded-lg p-6">
                        <div class="flex items-center justify-center w-12 h-12 bg-blue-600 rounded-full mb-4">
                            <span class="text-xl font-bold text-white">2</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Skill Assessment</h3>
                        <p class="text-gray-400">Take our comprehensive assessment to identify your strengths and gaps.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-blue-400 rounded-lg blur opacity-25 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                    <div class="relative bg-gray-900 ring-1 ring-gray-800 rounded-lg p-6">
                        <div class="flex items-center justify-center w-12 h-12 bg-blue-600 rounded-full mb-4">
                            <span class="text-xl font-bold text-white">3</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Personalized Path</h3>
                        <p class="text-gray-400">Get a customized learning path with industry-relevant courses and projects.</p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-blue-400 rounded-lg blur opacity-25 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                    <div class="relative bg-gray-900 ring-1 ring-gray-800 rounded-lg p-6">
                        <div class="flex items-center justify-center w-12 h-12 bg-blue-600 rounded-full mb-4">
                            <span class="text-xl font-bold text-white">4</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Industry Connect</h3>
                        <p class="text-gray-400">Connect with mentors and companies for real-world opportunities.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Features Grid -->
    <section class="py-24 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12">
                <div class="space-y-12">
                    <div>
                        <h2 class="text-3xl font-bold mb-4">For Students</h2>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-blue-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                  </svg>
                                <span>Industry-aligned skill development programs</span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-blue-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                  </svg>
                                <span>One-on-one mentorship with professionals</span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-blue-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                  </svg>
                                <span>Project-based learning opportunities</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-3xl font-bold mb-4">For Companies</h2>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-blue-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                  </svg>
                                <span>Access to pre-trained talent pool</span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-blue-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                  </svg>
                                <span>Customized training programs</span>
                            </div>
                            <div class="flex items-start space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-blue-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                  </svg>
                                <span>Direct recruitment pipeline</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <x-panel class="h-full">
                        <div class="space-y-6">
                            <h3 class="text-2xl font-bold">Popular Skills & Courses</h3>
                            <div class="grid grid-cols-2 gap-4">
                                @foreach(['Data Science', 'Web Development', 'Digital Marketing', 'UX Design', 'Cloud Computing', 'AI & ML', 'Project Management', 'Business Analytics'] as $skill)
                                <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-700">
                                    <div class="font-medium">{{ $skill }}</div>
                                    <div class="text-sm text-gray-500 dark:text-gray-400">100+ Courses</div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </x-panel>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories Section -->
<section class="py-24 bg-gray-900 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=\'30\' height=\'30\' viewBox=\'0 0 30 30\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M15 0C6.716 0 0 6.716 0 15c0 8.284 6.716 15 15 15 8.284 0 15-6.716 15-15 0-8.284-6.716-15-15-15zm0 27.5c-6.904 0-12.5-5.596-12.5-12.5S8.096 2.5 15 2.5 27.5 8.096 27.5 15 21.904 27.5 15 27.5z\' fill=\'%23ffffff\' fill-opacity=\'0.1\'/%3E%3C/svg%3E')"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Success Stories</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">See how SkillBridge has transformed careers and connected talent with opportunities.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Success Story Cards -->
            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-blue-400 rounded-lg blur opacity-25 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                <div class="relative bg-gray-900 ring-1 ring-gray-800 rounded-lg p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-r from-blue-500 to-blue-600 flex items-center justify-center text-white font-bold text-lg">
                            JS
                        </div>
                        <div class="ml-4">
                            <h3 class="text-white font-semibold">John Smith</h3>
                            <p class="text-gray-400 text-sm">Software Engineer at Google</p>
                        </div>
                    </div>
                    <blockquote class="text-gray-300 mb-4">
                        "SkillBridge helped me transition from a bootcamp graduate to a full-stack role at Google. The mentorship and practical projects made all the difference."
                    </blockquote>
                    <div class="flex items-center text-gray-400 text-sm">
                        <svg class="w-5 h-5 text-blue-500 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <span>Landed dream job in 6 months</span>
                    </div>
                </div>
            </div>

            <!-- Add more success story cards... -->
        </div>
    </div>
</section>

<!-- Platform Features Section -->
<section class="py-24 bg-black relative overflow-hidden">
    <div class="absolute inset-0 opacity-30">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 to-purple-600/20 mix-blend-multiply"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Why Choose SkillBridge?</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Our platform offers unique features designed to accelerate your career growth</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- AI-Powered Learning -->
            <div class="relative group cursor-pointer">
                <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-blue-400 rounded-lg blur opacity-25 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                <div class="relative bg-gray-900 ring-1 ring-gray-800 rounded-lg p-6 hover:transform hover:-translate-y-1 transition-all duration-200">
                    <div class="bg-blue-600/10 rounded-lg p-3 inline-block mb-4">
                        <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">AI-Powered Learning</h3>
                    <p class="text-gray-400">Personalized learning paths adapted to your goals and progress in real-time.</p>
                    <div class="mt-4 flex items-center text-blue-400 group-hover:text-blue-300">
                        <span class="text-sm">Learn more</span>
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Live Projects -->
            <div class="relative group cursor-pointer">
                <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-blue-400 rounded-lg blur opacity-25 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                <div class="relative bg-gray-900 ring-1 ring-gray-800 rounded-lg p-6 hover:transform hover:-translate-y-1 transition-all duration-200">
                    <div class="bg-blue-600/10 rounded-lg p-3 inline-block mb-4">
                        <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Live Projects</h3>
                    <p class="text-gray-400">Work on real industry projects with actual companies and build your portfolio.</p>
                    <div class="mt-4 flex items-center text-blue-400 group-hover:text-blue-300">
                        <span class="text-sm">View projects</span>
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Expert Mentorship -->
            <div class="relative group cursor-pointer">
                <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-blue-400 rounded-lg blur opacity-25 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                <div class="relative bg-gray-900 ring-1 ring-gray-800 rounded-lg p-6 hover:transform hover:-translate-y-1 transition-all duration-200">
                    <div class="bg-blue-600/10 rounded-lg p-3 inline-block mb-4">
                        <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Expert Mentorship</h3>
                    <p class="text-gray-400">1-on-1 guidance from industry professionals who've been where you want to go.</p>
                    <div class="mt-4 flex items-center text-blue-400 group-hover:text-blue-300">
                        <span class="text-sm">Meet mentors</span>
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Industry Certifications -->
            <div class="relative group cursor-pointer">
                <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-blue-400 rounded-lg blur opacity-25 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                <div class="relative bg-gray-900 ring-1 ring-gray-800 rounded-lg p-6 hover:transform hover:-translate-y-1 transition-all duration-200">
                    <div class="bg-blue-600/10 rounded-lg p-3 inline-block mb-4">
                        <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Industry Certifications</h3>
                    <p class="text-gray-400">Earn recognized certifications that actually matter to employers.</p>
                    <div class="mt-4 flex items-center text-blue-400 group-hover:text-blue-300">
                        <span class="text-sm">Browse certificates</span>
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Career Services -->
            <div class="relative group cursor-pointer">
                <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-blue-400 rounded-lg blur opacity-25 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                <div class="relative bg-gray-900 ring-1 ring-gray-800 rounded-lg p-6 hover:transform hover:-translate-y-1 transition-all duration-200">
                    <div class="bg-blue-600/10 rounded-lg p-3 inline-block mb-4">
                        <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Career Services</h3>
                    <p class="text-gray-400">Resume reviews, mock interviews, and job placement assistance.</p>
                    <div class="mt-4 flex items-center text-blue-400 group-hover:text-blue-300">
                        <span class="text-sm">Explore services</span>
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Networking Hub -->
            <div class="relative group cursor-pointer">
                <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-blue-400 rounded-lg blur opacity-25 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                <div class="relative bg-gray-900 ring-1 ring-gray-800 rounded-lg p-6 hover:transform hover:-translate-y-1 transition-all duration-200">
                    <div class="bg-blue-600/10 rounded-lg p-3 inline-block mb-4">
                        <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Networking Hub</h3>
                    <p class="text-gray-400">Connect with peers, mentors, and potential employers in your industry.</p>
                    <div class="mt-4 flex items-center text-blue-400 group-hover:text-blue-300">
                        <span class="text-sm">Join community</span>
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-16 text-center">
            <a href="/features" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition-all duration-200 group">
                Explore All Features
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Testimonials Carousel Section -->
<section class="py-24 bg-gray-900 relative overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600/10 to-purple-600/10"></div>
        <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-blue-500/50 to-transparent"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">What Our Community Says</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Join thousands of satisfied learners who have transformed their careers with SkillBridge</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-blue-400 rounded-lg blur opacity-25 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                <div class="relative bg-gray-900 ring-1 ring-gray-800 rounded-lg p-8">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-r from-blue-500 to-blue-600 flex items-center justify-center text-white font-bold text-lg">
                            SK
                        </div>
                        <div class="ml-4">
                            <h3 class="text-white font-semibold">Sarah Kim</h3>
                            <p class="text-gray-400 text-sm">UX Designer at Meta</p>
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="flex text-yellow-400 mb-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <!-- Repeat star SVG 4 more times -->
                        </div>
                        <blockquote class="text-gray-300">
                            "The mentorship program at SkillBridge was transformative. Within 6 months, I transitioned from a junior designer to landing my dream role at Meta."
                        </blockquote>
                    </div>
                    <div class="flex items-center justify-between text-sm text-gray-400">
                        <span>3 months ago</span>
                        <span>Mentorship Program</span>
                    </div>
                </div>
            </div>

            <!-- Additional testimonials... -->
        </div>
    </div>
</section>

<!-- Companies Section -->
<section class="py-24 bg-black relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-grid-white/[0.02] bg-[size:32px_32px]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Trusted by Industry Leaders</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Our graduates work at world-class companies worldwide</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center justify-items-center">
            <!-- Company logos would go here -->
            <div class="h-16 w-32 bg-gradient-to-r from-gray-800 to-gray-700 rounded-lg flex items-center justify-center">
                <span class="text-gray-400">Company 1</span>
            </div>
            <!-- Repeat for other companies -->
        </div>

        <div class="mt-16 text-center">
            <a href="/companies" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition-all duration-200 group">
                View All Partner Companies
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-24 bg-gradient-to-b from-gray-900 to-black relative overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-grid-white/[0.02] bg-[size:32px_32px]"></div>
        <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-blue-500/50 to-transparent"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Ready to Bridge the Gap?</h2>
            <p class="text-xl text-gray-400 mb-8">Join thousands of students already learning with SkillBridge. Start your journey today.</p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/register" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition-all duration-200 group">
                    Get Started For Free
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
                <a href="/contact" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium rounded-lg text-blue-400 border-2 border-blue-400 hover:bg-blue-400/10 transition-all duration-200">
                    Talk to an Expert
                </a>
            </div>

            <p class="mt-6 text-sm text-gray-500">No credit card required • 14-day free trial • Cancel anytime</p>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-24 bg-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative">
            <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-blue-400 rounded-lg blur opacity-25"></div>
            <div class="relative bg-gray-900 rounded-lg p-8 md:p-12">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div>
                        <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">Stay Updated</h3>
                        <p class="text-gray-400">Get the latest updates on new courses, features, and opportunities.</p>
                    </div>
                    <div>
                        <form class="flex flex-col sm:flex-row gap-4">
                            <input
                                type="email"
                                placeholder="Enter your email"
                                class="flex-1 px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-white"
                            />
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-3 rounded-lg transition-colors">
                                Subscribe
                            </button>
                        </form>
                        <p class="mt-3 text-sm text-gray-400">We respect your privacy. Unsubscribe at any time.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</x-layout>
