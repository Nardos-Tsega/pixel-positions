<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companies</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js"></script>
</head>
<body>
    <x-layout>
        <div x-data="{
            searchQuery: '',
            selectedIndustry: 'all',
            selectedSize: 'all',
            showCompanyDetails: false,
            selectedCompany: null,
            activeTab: 'overview',
            companies: [
                {
                    id: 1,
                    name: 'TechCorp Solutions',
                    logo: '/api/placeholder/100/100',
                    cover: '/api/placeholder/800/200',
                    industry: 'Technology',
                    location: 'San Francisco, CA',
                    size: '1000-5000',
                    founded: 2010,
                    type: 'Public',
                    website: 'www.techcorp.com',
                    description: 'Leading provider of enterprise software solutions and cloud services.',
                    mission: 'Empowering businesses through innovative technology solutions.',
                    culture: {
                        values: [
                            'Innovation First',
                            'Customer Obsession',
                            'Diversity & Inclusion',
                            'Continuous Learning'
                        ],
                        benefits: [
                            'Flexible Work Hours',
                            'Remote Work Options',
                            'Health Insurance',
                            'Professional Development'
                        ],
                        photos: [
                            '/api/placeholder/300/200',
                            '/api/placeholder/300/200',
                            '/api/placeholder/300/200'
                        ]
                    },
                    opportunities: [
                        {
                            id: 1,
                            title: 'Senior Software Engineer',
                            department: 'Engineering',
                            type: 'Full-time',
                            location: 'San Francisco, CA',
                            remote: true,
                            posted: '2024-03-15',
                            description: 'Looking for experienced engineers to join our core platform team.'
                        },
                        {
                            id: 2,
                            title: 'Product Manager',
                            department: 'Product',
                            type: 'Full-time',
                            location: 'New York, NY',
                            remote: true,
                            posted: '2024-03-14',
                            description: 'Lead product strategy and execution for our enterprise solutions.'
                        }
                    ],
                    insights: [
                        {
                            author: 'Jane Smith',
                            role: 'Software Engineer',
                            content: 'Great work-life balance and opportunity to work on cutting-edge technologies.',
                            rating: 4.8,
                            date: '2024-02-15'
                        }
                    ],
                    events: [
                        {
                            title: 'Tech Talk: Future of Cloud Computing',
                            date: '2024-04-01',
                            type: 'Webinar',
                            description: 'Join our engineering team to learn about cloud architecture.'
                        }
                    ],
                    stats: {
                        employees: 3500,
                        offices: 12,
                        rating: 4.5,
                        reviews: 450,
                        growth: '25%'
                    }
                }
                // Add more companies
            ],
            filteredCompanies() {
                return this.companies.filter(company => {
                    const matchesSearch = company.name.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
                        company.industry.toLowerCase().includes(this.searchQuery.toLowerCase());
                    const matchesIndustry = this.selectedIndustry === 'all' || company.industry === this.selectedIndustry;
                    const matchesSize = this.selectedSize === 'all' || company.size === this.selectedSize;
                    return matchesSearch && matchesIndustry && matchesSize;
                });
            }
        }">
            <!-- Hero Section with Search -->
            <div class="relative bg-gradient-to-r from-gray-800 to-gray-900 overflow-hidden">
                <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
                    <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl text-center">
                        Discover Great Places to Work
                    </h1>
                    <p class="mt-6 max-w-2xl mx-auto text-xl text-gray-300 text-center">
                        Explore companies that align with your values and career goals
                    </p>

                    <!-- Search Bar -->
                    <div class="mt-10 max-w-xl mx-auto">
                        <div class="relative">
                            <input type="text"
                                x-model="searchQuery"
                                class="block w-full px-4 py-3 rounded-lg bg-white shadow-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                                placeholder="Search companies, industries, or locations...">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Stats -->
                    <div class="mt-12 grid grid-cols-2 gap-6 sm:grid-cols-4 text-center">
                        <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6">
                            <div class="text-3xl font-bold text-white">500+</div>
                            <div class="text-gray-300">Companies</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6">
                            <div class="text-3xl font-bold text-white">1000+</div>
                            <div class="text-gray-300">Opportunities</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6">
                            <div class="text-3xl font-bold text-white">50+</div>
                            <div class="text-gray-300">Industries</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-sm rounded-lg p-6">
                            <div class="text-3xl font-bold text-white">90%</div>
                            <div class="text-gray-300">Success Rate</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filters Section -->
            <div class="bg-white shadow">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                    <div class="flex flex-wrap items-center justify-between gap-4">
                        <div class="flex space-x-4">
                            <select x-model="selectedIndustry"
                                class="rounded-lg border-gray-300 py-2 pl-3 pr-10 text-sm focus:ring-2 focus:ring-blue-500">
                                <option value="all">All Industries</option>
                                <option value="Technology">Technology</option>
                                <option value="Finance">Finance</option>
                                <option value="Healthcare">Healthcare</option>
                                <option value="Education">Education</option>
                            </select>

                            <select x-model="selectedSize"
                                class="rounded-lg border-gray-300 py-2 pl-3 pr-10 text-sm focus:ring-2 focus:ring-blue-500">
                                <option value="all">All Company Sizes</option>
                                <option value="1-50">1-50 employees</option>
                                <option value="51-200">51-200 employees</option>
                                <option value="201-1000">201-1000 employees</option>
                                <option value="1000+">1000+ employees</option>
                            </select>
                        </div>

                        <div class="flex items-center space-x-4">
                            <span class="text-sm text-gray-500">Sort by:</span>
                            <select class="rounded-lg border-gray-300 py-2 pl-3 pr-10 text-sm focus:ring-2 focus:ring-blue-500">
                                <option>Most Relevant</option>
                                <option>Highest Rated</option>
                                <option>Most Opportunities</option>
                                <option>Recently Added</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Featured Companies -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-8">Featured Companies</h2>
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <template x-for="company in filteredCompanies()" :key="company.id">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
                            @click="selectedCompany = company; showCompanyDetails = true">
                            <!-- Company Card Content -->
                            <div class="relative h-40">
                                <img :src="company.cover" :alt="company.name" class="w-full h-full object-cover">
                                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-4">
                                    <div class="flex items-center">
                                        <img :src="company.logo" :alt="company.name" class="w-16 h-16 rounded-lg bg-white p-2">
                                        <div class="ml-4">
                                            <h3 class="text-xl font-bold text-white" x-text="company.name"></h3>
                                            <p class="text-gray-200" x-text="company.location"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="p-6">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800"
                                        x-text="company.industry"></span>
                                    <span class="text-sm text-gray-500" x-text="company.size + ' employees'"></span>
                                </div>

                                <p class="text-gray-600 mb-4 line-clamp-2" x-text="company.description"></p>

                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <span class="ml-1 text-sm font-medium text-gray-900" x-text="company.stats.rating"></span>
                                        <span class="ml-1 text-sm text-gray-500" x-text="`(${company.stats.reviews})`"></span>
                                    </div>
                                    <span class="text-sm text-gray-500" x-text="`${company.opportunities.length} opportunities`"></span>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Company Details Modal -->
            <div x-show="showCompanyDetails"
                class="fixed inset-0 z-50 overflow-y-auto"
                @click.away="showCompanyDetails = false">
                <div class="flex items-center justify-center min-h-screen px-4">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                    <div class="relative bg-white rounded-lg max-w-6xl w-full mx-auto shadow-xl overflow-hidden">
                        <!-- Company Header -->
                        <div class="relative h-64">
                            <img :src="selectedCompany?.cover" :alt="selectedCompany?.name"
                                class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <div class="flex items-center">
                                    <img :src="selectedCompany?.logo" :alt="selectedCompany?.name"
                                        class="w-24 h-24 rounded-lg bg-white p-2">
                                    <div class="ml-6">
                                        <h2 class="text-3xl font-bold text-white" x-text="selectedCompany?.name"></h2>
                                        <div class="flex items-center mt-2">
                                            <span class="text-gray-200 mr-4" x-text="selectedCompany?.location"></span>
                                            <span class="text-gray-200" x-text="selectedCompany?.industry"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button @click="showCompanyDetails = false"
                                class="absolute top-4 right-4 text-white hover:text-gray-200">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>

                        <!-- Company Navigation Tabs -->
                        <div class="border-b border-gray-200">
                            <nav class="flex -mb-px">
                                <button @click="activeTab = 'overview'"
                                    :class="{'border-blue-500 text-blue-600': activeTab === 'overview',
                                            'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': activeTab !== 'overview'}"
                                    class="w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm">
                                    Overview
                                </button>
                                <button @click="activeTab = 'opportunities'"
                                    :class="{'border-blue-500 text-blue-600': activeTab === 'opportunities',
                                            'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': activeTab !== 'opportunities'}"
                                    class="w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm">
                                    Opportunities
                                </button>
                                <button @click="activeTab = 'culture'"
                                    :class="{'border-blue-500 text-blue-600': activeTab === 'culture',
                                            'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': activeTab !== 'culture'}"
                                    class="w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm">
                                    Culture & Benefits
                                </button>
                                <button @click="activeTab = 'insights'"
                                    :class="{'border-blue-500 text-blue-600': activeTab === 'insights',
                                            'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': activeTab !== 'insights'}"
                                    class="w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm">
                                    Insights
                                </button>
                            </nav>
                        </div>

                        <!-- Tab Content -->
                        <div class="p-8">
                            <!-- Overview Tab -->
                            <div x-show="activeTab === 'overview'" class="space-y-8">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-4">About the Company</h3>
                                    <p class="text-gray-600" x-text="selectedCompany?.description"></p>
                                </div>

                                <div class="grid grid-cols-2 gap-8">
                                    <div>
                                        <h4 class="text-lg font-medium text-gray-900 mb-4">Company Details</h4>
                                        <dl class="space-y-3">
                                            <div class="flex justify-between">
                                                <dt class="text-gray-500">Founded</dt>
                                                <dd class="text-gray-900" x-text="selectedCompany?.founded"></dd>
                                            </div>
                                            <div class="flex justify-between">
                                                <dt class="text-gray-500">Company Size</dt>
                                                <dd class="text-gray-900" x-text="selectedCompany?.size"></dd>
                                            </div>
                                            <div class="flex justify-between">
                                                <dt class="text-gray-500">Industry</dt>
                                                <dd class="text-gray-900" x-text="selectedCompany?.industry"></dd>
                                            </div>
                                            <div class="flex justify-between">
                                                <dt class="text-gray-500">Company Type</dt>
                                                <dd class="text-gray-900" x-text="selectedCompany?.type"></dd>
                                            </div>
                                        </dl>
                                    </div>

                                    <div>
                                        <h4 class="text-lg font-medium text-gray-900 mb-4">Company Stats</h4>
                                        <dl class="space-y-3">
                                            <div class="flex justify-between">
                                                <dt class="text-gray-500">Total Employees</dt>
                                                <dd class="text-gray-900" x-text="selectedCompany?.stats.employees"></dd>
                                            </div>
                                            <div class="flex justify-between">
                                                <dt class="text-gray-500">Global Offices</dt>
                                                <dd class="text-gray-900" x-text="selectedCompany?.stats.offices"></dd>
                                            </div>
                                            <div class="flex justify-between">
                                                <dt class="text-gray-500">YoY Growth</dt>
                                                <dd class="text-gray-900" x-text="selectedCompany?.stats.growth"></dd>
                                            </div>
                                        </dl>
                                    </div>
                                </div>

                                <!-- Upcoming Events -->
                                <div>
                                    <h4 class="text-lg font-medium text-gray-900 mb-4">Upcoming Events</h4>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <template x-for="event in selectedCompany?.events" :key="event.title">
                                            <div class="bg-gray-50 rounded-lg p-4">
                                                <div class="flex justify-between items-start mb-2">
                                                    <h5 class="font-medium text-gray-900" x-text="event.title"></h5>
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800"
                                                        x-text="event.type"></span>
                                                </div>
                                                <p class="text-sm text-gray-600 mb-2" x-text="event.description"></p>
                                                <span class="text-sm text-gray-500" x-text="event.date"></span>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </div>

                            <!-- Opportunities Tab -->
                            <div x-show="activeTab === 'opportunities'" class="space-y-6">
                                <div class="flex justify-between items-center mb-6">
                                    <h3 class="text-xl font-bold text-gray-900">Open Positions</h3>
                                    <div class="flex space-x-4">
                                        <select class="rounded-md border-gray-300 py-2 pl-3 pr-10 text-sm">
                                            <option>All Departments</option>
                                            <option>Engineering</option>
                                            <option>Product</option>
                                            <option>Design</option>
                                        </select>
                                        <select class="rounded-md border-gray-300 py-2 pl-3 pr-10 text-sm">
                                            <option>All Locations</option>
                                            <option>Remote</option>
                                            <option>On-site</option>
                                            <option>Hybrid</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <template x-for="job in selectedCompany?.opportunities" :key="job.id">
                                        <div class="bg-white border rounded-lg p-6 hover:shadow-md transition-shadow">
                                            <div class="flex justify-between items-start">
                                                <div>
                                                    <h4 class="text-lg font-medium text-gray-900" x-text="job.title"></h4>
                                                    <div class="mt-2 space-x-2">
                                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800"
                                                            x-text="job.department"></span>
                                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800"
                                                            x-text="job.type"></span>
                                                        <template x-if="job.remote">
                                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                                Remote
                                                            </span>
                                                        </template>
                                                    </div>
                                                </div>
                                                <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                                                    Apply Now
                                                </button>
                                            </div>
                                            <p class="mt-4 text-gray-600" x-text="job.description"></p>
                                            <div class="mt-4 flex items-center text-sm text-gray-500">
                                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                                </svg>
                                                <span x-text="`Posted on ${job.posted}`"></span>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </div>

                            <!-- Culture & Benefits Tab -->
                            <div x-show="activeTab === 'culture'" class="space-y-8">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-6">Company Culture</h3>
                                    <div class="grid grid-cols-2 gap-8">
                                        <div>
                                            <h4 class="text-lg font-medium text-gray-900 mb-4">Our Values</h4>
                                            <ul class="space-y-4">
                                                <template x-for="value in selectedCompany?.culture.values" :key="value">
                                                    <li class="flex items-start">
                                                        <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                        </svg>
                                                        <span class="text-gray-600" x-text="value"></span>
                                                    </li>
                                                </template>
                                            </ul>
                                        </div>

                                        <div>
                                            <h4 class="text-lg font-medium text-gray-900 mb-4">Benefits & Perks</h4>
                                            <ul class="space-y-4">
                                                <template x-for="benefit in selectedCompany?.culture.benefits" :key="benefit">
                                                    <li class="flex items-start">
                                                        <svg class="w-5 h-5 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                        </svg>
                                                        <span class="text-gray-600" x-text="benefit"></span>
                                                    </li>
                                                </template>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Office Photos -->
                                <div>
                                    <h4 class="text-lg font-medium text-gray-900 mb-4">Life at Company</h4>
                                    <div class="grid grid-cols-3 gap-4">
                                        <template x-for="(photo, index) in selectedCompany?.culture.photos" :key="index">
                                            <img :src="photo" class="rounded-lg w-full h-48 object-cover">
                                        </template>
                                    </div>
                                </div>
                            </div>

                            <!-- Insights Tab -->
                            <div x-show="activeTab === 'insights'" class="space-y-6">
                                <div class="flex justify-between items-center mb-6">
                                    <h3 class="text-xl font-bold text-gray-900">Employee Insights</h3>
                                    <div class="flex items-center">
                                        <span class="text-4xl font-bold text-gray-900" x-text="selectedCompany?.stats.rating"></span>
                                        <span class="ml-2 text-gray-500">out of 5</span>
                                    </div>
                                </div>

                                <div class="space-y-6">
                                    <template x-for="insight in selectedCompany?.insights" :key="insight.author">
                                        <div class="bg-white border rounded-lg p-6">
                                            <div class="flex justify-between items-start mb-4">
                                                <div>
                                                    <h4 class="font-medium text-gray-900" x-text="insight.author"></h4>
                                                    <p class="text-sm text-gray-500" x-text="insight.role"></p>
                                                </div>
                                                <div class="flex items-center">
                                                    <template x-for="i in 5" :key="i">
                                                        <svg class="w-5 h-5" :class="i <= insight.rating ? 'text-yellow-400' : 'text-gray-300'"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                        </svg>
                                                    </template>
                                                </div>
                                            </div>
                                            <p class="text-gray-600" x-text="insight.content"></p>
                                            <p class="mt-4 text-sm text-gray-500" x-text="insight.date"></p>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>

                        <!-- Action Footer -->
                        <div class="bg-gray-50 px-8 py-4 flex justify-between items-center">
                            <div class="flex items-center space-x-4">
                                <a :href="'https://' + selectedCompany?.website" target="_blank"
                                    class="text-blue-600 hover:text-blue-700 font-medium">
                                    Visit Website
                                </a>
                                <button class="text-gray-600 hover:text-gray-700 font-medium flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/>
                                    </svg>
                                    Save Company
                                </button>
                            </div>
                            <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                Follow Company
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Industry Insights Section -->
            <div class="bg-gray-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-8">Industry Insights</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <img src="/api/placeholder/400/200" alt="Tech Industry" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Tech Industry Trends 2024</h3>
                                <p class="text-gray-600 mb-4">Latest insights on technology sector growth and opportunities.</p>
                                <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">Read More →</a>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <img src="/api/placeholder/400/200" alt="Remote Work" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">The Future of Remote Work</h3>
                                <p class="text-gray-600 mb-4">How companies are adapting to remote and hybrid work models.</p>
                                <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">Read More →</a>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <img src="/api/placeholder/400/200" alt="Career Growth" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Career Growth Strategies</h3>
                                <p class="text-gray-600 mb-4">Expert advice on advancing your career in today's job market.</p>
                                <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">Read More →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Newsletter Section -->
            <div class="bg-blue-600">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                    <div class="text-center">
                        <h2 class="text-2xl font-bold text-white mb-4">Stay Updated</h2>
                        <p class="text-blue-100 mb-8">Get the latest company updates and industry insights delivered to your inbox.</p>
                        <div class="max-w-xl mx-auto flex space-x-4">
                            <input type="email"
                                class="flex-1 rounded-lg px-4 py-2 border-0 focus:ring-2 focus:ring-white"
                                placeholder="Enter your email">
                            <button class="px-6 py-2 bg-white text-blue-600 rounded-lg hover:bg-blue-50 transition-colors">
                                Subscribe
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-layout>

    <script>
        // Optional: Add any additional JavaScript functionality
        document.addEventListener('alpine:init', () => {
            Alpine.store('companies', {
                // Add any global store functionality
            });
        });
    </script>
</body>
</html>

