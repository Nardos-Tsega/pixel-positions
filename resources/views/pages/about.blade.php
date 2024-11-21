<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js"></script>
</head>
<body>
    <x-layout>
        <div x-data="{
            showVideo: false,
            activeTab: 'mission',
            team: [
                {
                    name: 'Sarah Johnson',
                    role: 'Founder & CEO',
                    image: '/api/placeholder/400/400',
                    bio: 'Former tech lead with 15 years of experience in education and technology.',
                    linkedin: '#'
                },
                {
                    name: 'Michael Chen',
                    role: 'Head of Education',
                    image: '/api/placeholder/400/400',
                    bio: 'Education specialist with focus on practical industry training.',
                    linkedin: '#'
                },
                {
                    name: 'Emma Williams',
                    role: 'Industry Relations',
                    image: '/api/placeholder/400/400',
                    bio: 'Building bridges between education and industry for 10 years.',
                    linkedin: '#'
                }
            ],
            stats: [
                {
                    number: '50K+',
                    label: 'Active Users',
                    description: 'Students and professionals learning on our platform'
                },
                {
                    number: '500+',
                    label: 'Industry Experts',
                    description: 'Professional mentors sharing their knowledge'
                },
                {
                    number: '200+',
                    label: 'Partner Companies',
                    description: 'Leading companies offering opportunities'
                },
                {
                    number: '90%',
                    label: 'Success Rate',
                    description: 'Of our users achieve their career goals'
                }
            ]
        }">
            <!-- Hero Section -->
            <div class="relative bg-white overflow-hidden">
                <div class="max-w-7xl mx-auto">
                    <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:pb-28 xl:pb-32">
                        <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 lg:mt-16 lg:px-8 xl:mt-28">
                            <div class="text-center">
                                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                                    <span class="block">Bridging the Gap Between</span>
                                    <span class="block text-blue-600">Education and Industry</span>
                                </h1>
                                <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                                    We're on a mission to transform how people learn and prepare for their careers by providing direct access to industry experience and expert guidance.
                                </p>
                                <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                                    <div class="rounded-md shadow">
                                        <button @click="showVideo = true"
                                            class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 md:py-4 md:text-lg md:px-10">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                            Watch Our Story
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="bg-blue-600">
                <div class="max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8 lg:py-20">
                    <div class="max-w-4xl mx-auto text-center">
                        <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                            Trusted by Learners and Industry Leaders
                        </h2>
                        <p class="mt-3 text-xl text-blue-200">
                            Our platform brings together students, professionals, and industry experts.
                        </p>
                    </div>
                    <dl class="mt-10 text-center sm:max-w-3xl sm:mx-auto sm:grid sm:grid-cols-2 sm:gap-8 lg:grid-cols-4">
                        <template x-for="stat in stats" :key="stat.label">
                            <div class="flex flex-col">
                                <dt class="order-2 mt-2">
                                    <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-blue-100 text-blue-800"
                                        x-text="stat.label"></span>
                                </dt>
                                <dd class="order-1 text-5xl font-extrabold text-white" x-text="stat.number"></dd>
                                <dd class="order-3 mt-3 text-sm text-blue-200" x-text="stat.description"></dd>
                            </div>
                        </template>
                    </dl>
                </div>
            </div>

            <!-- Mission & Values Tabs -->
            <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                <div class="border-b border-gray-200">
                    <nav class="-mb-px flex space-x-8">
                        <button @click="activeTab = 'mission'"
                            :class="{'border-blue-500 text-blue-600': activeTab === 'mission',
                                    'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': activeTab !== 'mission'}"
                            class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                            Our Mission
                        </button>
                        <button @click="activeTab = 'values'"
                            :class="{'border-blue-500 text-blue-600': activeTab === 'values',
                                    'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': activeTab !== 'values'}"
                            class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                            Values
                        </button>
                        <button @click="activeTab = 'story'"
                            :class="{'border-blue-500 text-blue-600': activeTab === 'story',
                                    'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': activeTab !== 'story'}"
                            class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                            Our Story
                        </button>
                    </nav>
                </div>

                <!-- Tab Content -->
                <div class="mt-8">
                    <!-- Mission Tab -->
                    <div x-show="activeTab === 'mission'" class="prose max-w-none">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-4">Bridging Education and Industry</h3>
                                <p class="text-gray-600 mb-4">
                                    Our mission is to revolutionize career preparation by providing direct access to industry experience
                                    and expert guidance. We believe that practical knowledge and real-world exposure are crucial for
                                    career success.
                                </p>
                                <p class="text-gray-600">
                                    Through our platform, we connect aspiring professionals with industry leaders, creating a
                                    collaborative learning environment that benefits both students and companies.
                                </p>
                            </div>
                            <div class="relative">
                                <img src="/api/placeholder/600/400" alt="Mission" class="rounded-lg shadow-lg">
                                <div class="absolute inset-0 bg-blue-600 opacity-10 rounded-lg"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Values Tab -->
                    <div x-show="activeTab === 'values'" class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Excellence</h3>
                            <p class="text-gray-600">
                                We strive for excellence in everything we do, from content quality to user experience.
                            </p>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Community</h3>
                            <p class="text-gray-600">
                                Building a supportive community of learners, mentors, and industry partners.
                            </p>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Innovation</h3>
                            <p class="text-gray-600">
                                Continuously innovating in education and career development methods.
                            </p>
                        </div>
                    </div>

                    <!-- Story Tab -->
                    <div x-show="activeTab === 'story'" class="space-y-8">
                        <div class="prose max-w-none">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Journey</h3>
                            <p class="text-gray-600">
                                Founded in 2022, our platform emerged from a simple observation: there was a significant gap
                                between traditional education and the practical skills needed in industry. Our founder,
                                having experienced this disconnect firsthand, set out to create a solution.
                            </p>
                        </div>

                        <!-- Timeline -->
                        <div class="relative">
                            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                                <div class="w-full border-t border-gray-300"></div>
                            </div>
                            <div class="relative flex justify-between">
                                <div class="bg-white px-4">
                                    <div class="text-center">
                                        <span class="text-blue-600 font-bold">2022</span>
                                        <p class="mt-2 text-sm text-gray-500">Founded</p>
                                    </div>
                                </div>
                                <div class="bg-white px-4">
                                    <div class="text-center">
                                        <span class="text-blue-600 font-bold">2023</span>
                                        <p class="mt-2 text-sm text-gray-500">10K Users</p>
                                    </div>
                                </div>
                                <div class="bg-white px-4">
                                    <div class="text-center">
                                        <span class="text-blue-600 font-bold">2024</span>
                                        <p class="mt-2 text-sm text-gray-500">Global Expansion</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Section -->
            <div class="bg-gray-50">
                <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 lg:py-24">
                    <div class="space-y-12">
                        <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
                            <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">Meet Our Team</h2>
                            <p class="text-xl text-gray-500">A diverse team of educators, industry experts, and technologists working to transform career development.</p>
                        </div>
                        <ul class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">
                            <template x-for="member in team" :key="member.name">
                                <li>
                                    <div class="space-y-4">
                                        <div class="aspect-w-3 aspect-h-3">
                                            <img class="object-cover rounded-lg shadow-lg" :src="member.image" :alt="member.name">
                                        </div>
                                        <div class="space-y-2">
                                            <div class="text-lg leading-6 font-medium space-y-1">
                                                <h3 class="text-gray-900" x-text="member.name"></h3>
                                                <p class="text-blue-600" x-text="member.role"></p>
                                            </div>
                                            <div class="text-gray-500" x-text="member.bio"></div>
                                            <ul class="flex space-x-5">
                                                <li>
                                                    <a :href="member.linkedin" class="text-gray-400 hover:text-gray-500">
                                                        <span class="sr-only">LinkedIn</span>
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"/>
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </template>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Partners Section -->
            <div class="bg-white">
                <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                    <div class="text-center">
                        <h2 class="text-3xl font-extrabold text-gray-900">Trusted by Leading Companies</h2>
                        <p class="mt-3 text-xl text-gray-500">We work with companies that share our vision for the future of education.</p>
                    </div>
                    <div class="mt-12 grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
                        <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                            <img class="h-12" src="/api/placeholder/120/48" alt="Partner 1">
                        </div>
                        <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                            <img class="h-12" src="/api/placeholder/120/48" alt="Partner 2">
                        </div>
                        <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                            <img class="h-12" src="/api/placeholder/120/48" alt="Partner 3">
                        </div>
                        <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                            <img class="h-12" src="/api/placeholder/120/48" alt="Partner 4">
                        </div>
                        <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
                            <img class="h-12" src="/api/placeholder/120/48" alt="Partner 5">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="bg-gray-50">
                <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
                    <div class="divide-y divide-gray-200">
                        <div class="lg:grid lg:grid-cols-3 lg:gap-8">
                            <h2 class="text-2xl font-extrabold text-gray-900 sm:text-3xl">
                                Get in touch
                            </h2>
                            <div class="mt-8 grid grid-cols-1 gap-12 sm:grid-cols-2 sm:gap-x-8 sm:gap-y-12 lg:mt-0 lg:col-span-2">
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900">Press</h3>
                                    <div class="mt-2 text-base text-gray-500">
                                        <p>For press inquiries, please email:</p>
                                        <p class="mt-1">
                                            <a href="mailto:press@example.com" class="text-blue-600 hover:text-blue-500">
                                                press@example.com
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900">Partnerships</h3>
                                    <div class="mt-2 text-base text-gray-500">
                                        <p>For partnership opportunities:</p>
                                        <p class="mt-1">
                                            <a href="mailto:partners@example.com" class="text-blue-600 hover:text-blue-500">
                                                partners@example.com
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900">Careers</h3>
                                    <div class="mt-2 text-base text-gray-500">
                                        <p>Looking to join our team?</p>
                                        <p class="mt-1">
                                            <a href="/careers" class="text-blue-600 hover:text-blue-500">
                                                View open positions →
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900">Support</h3>
                                    <div class="mt-2 text-base text-gray-500">
                                        <p>Need help? Contact support:</p>
                                        <p class="mt-1">
                                            <a href="mailto:support@example.com" class="text-blue-600 hover:text-blue-500">
                                                support@example.com
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-16 pt-16">
                            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2">
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900">Subscribe to our newsletter</h3>
                                    <p class="mt-1 text-sm text-gray-500">
                                        Get the latest news and updates delivered to your inbox.
                                    </p>
                                    <form class="mt-4 sm:flex sm:max-w-md">
                                        <label for="email-address" class="sr-only">Email address</label>
                                        <input type="email" name="email-address" id="email-address" autocomplete="email" required
                                            class="appearance-none min-w-0 w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-4 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                                            placeholder="Enter your email">
                                        <div class="mt-3 rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                                            <button type="submit"
                                                class="w-full bg-blue-600 flex items-center justify-center border border-transparent rounded-md py-2 px-4 text-base font-medium text-white hover:bg-blue-700 focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                                Subscribe
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900">Follow us</h3>
                                    <p class="mt-1 text-sm text-gray-500">
                                        Stay connected on social media.
                                    </p>
                                    <ul class="mt-4 flex space-x-6">
                                        <li>
                                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">Twitter</span>
                                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                                <span class="sr-only">LinkedIn</span>
                                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"/>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Video Modal -->
            <div x-show="showVideo"
                class="fixed inset-0 z-50 overflow-y-auto"
                @click.away="showVideo = false">
                <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                    </div>
                    <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full sm:p-6">
                        <div>
                            <div class="mt-3 sm:mt-5">
                                <div class="mt-2">
                                    <div class="aspect-w-16 aspect-h-9">
                                        <img src="/api/placeholder/1280/720" alt="Video thumbnail" class="w-full h-full object-cover rounded-lg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 sm:mt-6">
                            <button @click="showVideo = false"
                            class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:text-sm">
                            Close Video
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Office Locations -->
        <div class="bg-white">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-3xl font-extrabold text-gray-900">Our Global Presence</h2>
                    <p class="mt-4 text-lg text-gray-500">Find us around the world</p>
                </div>
                <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- San Francisco Office -->
                    <div class="bg-gray-50 rounded-lg p-6">
                        <div class="flex items-center">
                            <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <h3 class="ml-3 text-lg font-medium text-gray-900">San Francisco</h3>
                        </div>
                        <div class="mt-4 text-base text-gray-500">
                            <p>100 Main Street</p>
                            <p>Suite 1500</p>
                            <p>San Francisco, CA 94105</p>
                        </div>
                    </div>

                    <!-- London Office -->
                    <div class="bg-gray-50 rounded-lg p-6">
                        <div class="flex items-center">
                            <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <h3 class="ml-3 text-lg font-medium text-gray-900">London</h3>
                        </div>
                        <div class="mt-4 text-base text-gray-500">
                            <p>123 Tech Street</p>
                            <p>Floor 4</p>
                            <p>London, UK EC2A 4NE</p>
                        </div>
                    </div>

                    <!-- Singapore Office -->
                    <div class="bg-gray-50 rounded-lg p-6">
                        <div class="flex items-center">
                            <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <h3 class="ml-3 text-lg font-medium text-gray-900">Singapore</h3>
                        </div>
                        <div class="mt-4 text-base text-gray-500">
                            <p>456 Innovation Drive</p>
                            <p>#15-01</p>
                            <p>Singapore 128383</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQs Section -->
        <div class="bg-gray-50">
            <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
                <div class="lg:grid lg:grid-cols-3 lg:gap-8">
                    <div>
                        <h2 class="text-3xl font-extrabold text-gray-900">
                            Frequently asked questions
                        </h2>
                        <p class="mt-4 text-lg text-gray-500">
                            Can't find the answer you're looking for? Contact our
                            <a href="#" class="font-medium text-blue-600 hover:text-blue-500">
                                support team
                            </a>.
                        </p>
                    </div>
                    <div class="mt-12 lg:mt-0 lg:col-span-2">
                        <dl class="space-y-12">
                            <div>
                                <dt class="text-lg font-medium text-gray-900">
                                    How do you verify industry experts?
                                </dt>
                                <dd class="mt-2 text-base text-gray-500">
                                    We have a thorough verification process that includes background checks,
                                    experience validation, and professional reference checks. All our experts
                                    must also complete a comprehensive onboarding program.
                                </dd>
                            </div>

                            <div>
                                <dt class="text-lg font-medium text-gray-900">
                                    What makes your platform different?
                                </dt>
                                <dd class="mt-2 text-base text-gray-500">
                                    Our platform uniquely combines practical industry experience with
                                    structured learning paths. We focus on real-world applications and
                                    provide direct access to industry professionals.
                                </dd>
                            </div>

                            <div>
                                <dt class="text-lg font-medium text-gray-900">
                                    How can companies get involved?
                                </dt>
                                <dd class="mt-2 text-base text-gray-500">
                                    Companies can partner with us to provide mentorship opportunities,
                                    share industry insights, and connect with talented individuals.
                                    Contact our partnerships team to learn more.
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
</body>
</html>
