<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js"></script>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-lg w-full space-y-8 p-8 bg-white rounded-lg shadow-md" x-data="{
            step: 1,
            userType: '',
            formData: {
                name: '',
                email: '',
                password: '',
                password_confirmation: '',
                company: '',
                position: '',
                student_id: '',
                university: '',
                field_of_study: '',
                years_of_experience: '',
                expertise_area: '',
                professional_title: '',
                certifications: '',
                company_name: '',
                company_role: '',
                company_size: '',
                industry: ''
            }
        }">
            <!-- Progress Steps -->
            <div class="flex items-center justify-between mb-8">
                <div class="w-full flex items-center">
                    <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold">1</div>
                    <div class="flex-1 h-1 mx-2" :class="{'bg-blue-600': step > 1, 'bg-gray-200': step <= 1}"></div>
                    <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold"
                        :class="{'bg-blue-600 text-white': step > 1, 'bg-gray-200': step <= 1}">2</div>
                </div>
            </div>

            <!-- Step 1: Select User Type -->
            <div x-show="step === 1">
                <h2 class="text-center text-3xl font-extrabold text-gray-900 mb-8">Choose your role</h2>
                <div class="grid grid-cols-2 gap-4">
                    <button @click="userType = 'student'; step = 2"
                        class="p-4 border rounded-lg hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <div class="text-xl font-medium text-gray-900 mb-2">Student</div>
                        <p class="text-sm text-gray-500">Currently enrolled in an educational institution</p>
                    </button>

                    <button @click="userType = 'professional'; step = 2"
                        class="p-4 border rounded-lg hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <div class="text-xl font-medium text-gray-900 mb-2">Professional</div>
                        <p class="text-sm text-gray-500">Working professional with industry experience</p>
                    </button>

                    <button @click="userType = 'expert'; step = 2"
                        class="p-4 border rounded-lg hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <div class="text-xl font-medium text-gray-900 mb-2">Expert</div>
                        <p class="text-sm text-gray-500">Industry expert or specialist</p>
                    </button>

                    <button @click="userType = 'company'; step = 2"
                        class="p-4 border rounded-lg hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <div class="text-xl font-medium text-gray-900 mb-2">Company</div>
                        <p class="text-sm text-gray-500">Company representative or recruiter</p>
                    </button>
                </div>
            </div>

            <!-- Step 2: Registration Form -->
            <div x-show="step === 2">
                <div class="flex items-center mb-8">
                    <button @click="step = 1" class="text-blue-600 hover:text-blue-500">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <h2 class="text-center text-3xl font-extrabold text-gray-900 flex-1" x-text="userType.charAt(0).toUpperCase() + userType.slice(1) + ' Registration'"></h2>
                </div>

                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    <input type="hidden" name="user_type" x-model="userType">

                    <!-- Common Fields -->
                    <div class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                            <input type="text" id="name" name="name" required
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email" required
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <input type="password" id="password" name="password" required
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" required
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>

                    <!-- Student Fields -->
                    <div x-show="userType === 'student'" class="space-y-4">
                        <div>
                            <label for="student_id" class="block text-sm font-medium text-gray-700">Student ID</label>
                            <input type="text" id="student_id" name="student_id"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="university" class="block text-sm font-medium text-gray-700">University/Institution</label>
                            <input type="text" id="university" name="university"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="field_of_study" class="block text-sm font-medium text-gray-700">Field of Study</label>
                            <input type="text" id="field_of_study" name="field_of_study"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>

                    <!-- Professional Fields -->
                    <div x-show="userType === 'professional'" class="space-y-4">
                        <div>
                            <label for="professional_title" class="block text-sm font-medium text-gray-700">Professional Title</label>
                            <input type="text" id="professional_title" name="professional_title"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="company" class="block text-sm font-medium text-gray-700">Current Company</label>
                            <input type="text" id="company" name="company"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="years_of_experience" class="block text-sm font-medium text-gray-700">Years of Experience</label>
                            <input type="number" id="years_of_experience" name="years_of_experience"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>

                    <!-- Expert Fields -->
                    <div x-show="userType === 'expert'" class="space-y-4">
                        <div>
                            <label for="expertise_area" class="block text-sm font-medium text-gray-700">Area of Expertise</label>
                            <input type="text" id="expertise_area" name="expertise_area"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="years_of_experience" class="block text-sm font-medium text-gray-700">Years of Experience</label>
                            <input type="number" id="years_of_experience" name="years_of_experience"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="certifications" class="block text-sm font-medium text-gray-700">Certifications</label>
                            <textarea id="certifications" name="certifications" rows="3"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"></textarea>
                        </div>
                    </div>

                    <!-- Company Fields -->
                    <div x-show="userType === 'company'" class="space-y-4">
                        <div>
                            <label for="company_name" class="block text-sm font-medium text-gray-700">Company Name</label>
                            <input type="text" id="company_name" name="company_name"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="company_role" class="block text-sm font-medium text-gray-700">Your Role in Company</label>
                            <input type="text" id="company_role" name="company_role"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="industry" class="block text-sm font-medium text-gray-700">Industry</label>
                            <input type="text" id="industry" name="industry"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="company_size" class="block text-sm font-medium text-gray-700">Company Size</label>
                            <select id="company_size" name="company_size"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                                <option value="1-10">1-10 employees</option>
                                <option value="11-50">11-50 employees</option>
                                <option value="51-200">51-200 employees</option>
                                <option value="201-500">201-500 employees</option>
                                <option value="501+">501+ employees</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="terms" name="terms" required
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="terms" class="ml-2 block text-sm text-gray-900">
                            I agree to the <a href="#" class="text-blue-600 hover:text-blue-500">Terms</a> and
                            <a href="#" class="text-blue-600 hover:text-blue-500">Privacy Policy</a>
                        </label>
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Create Account
                        </button>
                    </div>
                </form>

                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white text-gray-500">Or continue with</span>
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="#"
                            class="w-full flex items-center justify-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                            <svg class="h-5 w-5 mr-2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                            </svg>
                            Sign up with Google
                        </a>
                    </div>
                </div>

                <p class="mt-8 text-center text-sm text-gray-600">
                    Already have an account?
                    <a href="#" class="font-medium text-blue-600 hover:text-blue-500">
                        Sign in
                    </a>
                </p>
            </div>
        </div>
    </div>

    <script>
        // Optional: Add client-side validation
        document.addEventListener('alpine:init', () => {
            Alpine.data('registrationForm', () => ({
                validateForm() {
                    // Add custom validation if needed
                }
            }))
        })
    </script>
</body>
</html>
