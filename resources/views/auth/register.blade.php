<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Register</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js"></script>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl w-full" x-data="{
            step: 1,
            userType: '',
            formData: {
                name: '',
                email: '',
                password: '',
                password_confirmation: '',
                student_id: '',
                university: '',
                field_of_study: '',
                expertise_area: '',
                years_of_experience: '',
                certifications: '',
                company_name: '',
                company_role: '',
                industry: '',
                company_size: '',
                interests: '',
                current_profession: '',
                learning_goals: '',
                preferred_learning_style: ''
            }
        }">
            <div class="bg-white rounded-xl shadow-lg p-8">
                <!-- Progress Steps -->
                <div class="relative pt-1 px-8 mb-8">
                    <div class="flex mb-2 items-center justify-between">
                        <div class="flex items-center w-full">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center"
                                :class="{'bg-blue-600': step >= 1, 'bg-gray-200': step < 1}">
                                <span class="text-sm font-bold" :class="{'text-white': step >= 1, 'text-gray-600': step < 1}">1</span>
                            </div>
                            <div class="flex-1 h-1 mx-4" :class="{'bg-blue-600': step > 1, 'bg-gray-200': step <= 1}"></div>
                            <div class="w-10 h-10 rounded-full flex items-center justify-center"
                                :class="{'bg-blue-600': step >= 2, 'bg-gray-200': step < 2}">
                                <span class="text-sm font-bold" :class="{'text-white': step >= 2, 'text-gray-600': step < 2}">2</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between text-xs text-gray-600">
                        <span>Choose Role</span>
                        <span>Registration</span>
                    </div>
                </div>

                <!-- Step 1: Role Selection -->
                <div x-show="step === 1">
                    <h2 class="text-3xl font-bold text-center text-gray-900">Choose your role</h2>
                    <p class="text-center text-gray-600 mb-8">Select the option that best describes you</p>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Student Card -->
                        <button @click="userType = 'student'; step = 2"
                            class="group relative bg-white p-6 rounded-xl shadow-sm border-2 border-gray-100 hover:border-blue-500 hover:shadow-md transition-all duration-200">
                            <div class="absolute top-4 right-4 w-6 h-6 rounded-full border-2 border-gray-200 group-hover:border-blue-500"></div>
                            <div class="flex flex-col items-center text-center space-y-4">
                                <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v7"/>
                                </svg>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Student</h3>
                                    <p class="mt-2 text-sm text-gray-500">Currently enrolled in an educational institution</p>
                                </div>
                            </div>
                        </button>

                        <!-- Expert Card -->
                        <button @click="userType = 'expert'; step = 2"
                            class="group relative bg-white p-6 rounded-xl shadow-sm border-2 border-gray-100 hover:border-blue-500 hover:shadow-md transition-all duration-200">
                            <div class="absolute top-4 right-4 w-6 h-6 rounded-full border-2 border-gray-200 group-hover:border-blue-500"></div>
                            <div class="flex flex-col items-center text-center space-y-4">
                                <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Expert</h3>
                                    <p class="mt-2 text-sm text-gray-500">Industry expert or specialist</p>
                                </div>
                            </div>
                        </button>

                        <!-- Skill Seeker Card -->
                        <button @click="userType = 'skill_seeker'; step = 2"
                        class="group relative bg-white p-6 rounded-xl shadow-sm border-2 border-gray-100 hover:border-blue-500 hover:shadow-md transition-all duration-200">
                        <div class="absolute top-4 right-4 w-6 h-6 rounded-full border-2 border-gray-200 group-hover:border-blue-500"></div>
                        <div class="flex flex-col items-center text-center space-y-4">
                            <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Skill Seeker</h3>
                                <p class="mt-2 text-sm text-gray-500">Looking to learn new skills and knowledge</p>
                            </div>
                        </div>
                        </button>

                        <!-- Company Card -->
                        <button @click="userType = 'company'; step = 2"
                            class="group relative bg-white p-6 rounded-xl shadow-sm border-2 border-gray-100 hover:border-blue-500 hover:shadow-md transition-all duration-200">
                            <div class="absolute top-4 right-4 w-6 h-6 rounded-full border-2 border-gray-200 group-hover:border-blue-500"></div>
                            <div class="flex flex-col items-center text-center space-y-4">
                                <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Company</h3>
                                    <p class="mt-2 text-sm text-gray-500">Company representative or recruiter</p>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>

                <!-- Step 2: Registration Form -->
                <div x-show="step === 2">
                    <div class="flex items-center space-x-4 mb-6">
                        <button @click="step = 1" class="p-2 hover:bg-gray-100 rounded-full transition-colors duration-200">
                            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>
                        <h2 class="text-2xl font-bold text-gray-900">Complete your profile</h2>
                    </div>

                    <div class="bg-blue-50 border border-blue-100 rounded-lg p-4 mb-6">
                        <p class="text-sm text-blue-800">
                            You're registering as a <span class="font-semibold" x-text="userType"></span>
                        </p>
                    </div>

                    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        <input type="hidden" name="user_type" x-model="userType">

                        <!-- Common Fields -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-1">
                                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                                <input type="text" id="name" name="name" x-model="formData.name"
                                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div class="space-y-1">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                                <input type="email" id="email" name="email" x-model="formData.email"
                                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-1">
                                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                <input type="password" id="password" name="password" x-model="formData.password"
                                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div class="space-y-1">
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" x-model="formData.password_confirmation"
                                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>

                       <!-- Student Fields -->
                        <template x-if="userType === 'student'">
                            <div class="space-y-6">
                                <!-- Name Fields -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="space-y-1">
                                        <label for="first_name" class="block text-sm font-medium text-gray-700">First Name*</label>
                                        <input type="text" id="first_name" name="first_name" x-model="formData.first_name" required
                                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    </div>
                                    <div class="space-y-1">
                                        <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name*</label>
                                        <input type="text" id="last_name" name="last_name" x-model="formData.last_name" required
                                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    </div>
                                </div>

                                <!-- Contact Info -->
                                <div class="space-y-1">
                                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                                    <input type="tel" id="phone" name="phone" x-model="formData.phone"
                                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>

                                <!-- Institution Info -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="space-y-1">
                                        <label for="student_id" class="block text-sm font-medium text-gray-700">Student ID</label>
                                        <input type="text" id="student_id" name="student_id" x-model="formData.student_id"
                                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    </div>
                                    <div class="space-y-1">
                                        <label for="institution" class="block text-sm font-medium text-gray-700">Institution*</label>
                                        <input type="text" id="institution" name="institution" x-model="formData.institution" required
                                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    </div>
                                </div>

                                <!-- Academic Info -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="space-y-1">
                                        <label for="field_of_study" class="block text-sm font-medium text-gray-700">Field of Study*</label>
                                        <input type="text" id="field_of_study" name="field_of_study" x-model="formData.field_of_study" required
                                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    </div>
                                    <div class="space-y-1">
                                        <label for="education_level" class="block text-sm font-medium text-gray-700">Education Level*</label>
                                        <select id="education_level" name="education_level" x-model="formData.education_level" required
                                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                            <option value="">Select Level</option>
                                            <option value="high_school">High School</option>
                                            <option value="bachelors">Bachelor's Degree</option>
                                            <option value="masters">Master's Degree</option>
                                            <option value="phd">PhD</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Location -->
                                <div class="space-y-1">
                                    <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                                    <input type="text" id="location" name="location" x-model="formData.location"
                                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        placeholder="City, Country">
                                </div>

                                <!-- Skills -->
                                <div class="space-y-1">
                                    <label for="skills" class="block text-sm font-medium text-gray-700">Skills</label>
                                    <input type="text" id="skills" name="skills" x-model="formData.skills"
                                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        placeholder="e.g., Python, JavaScript, Data Analysis">
                                </div>

                                <!-- Bio -->
                                <div class="space-y-1">
                                    <label for="bio" class="block text-sm font-medium text-gray-700">Bio</label>
                                    <textarea id="bio" name="bio" x-model="formData.bio" rows="4"
                                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        placeholder="Tell us about yourself..."></textarea>
                                </div>

                                <!-- Profile Picture -->
                                <div class="space-y-1">
                                    <label for="profile_path" class="block text-sm font-medium text-gray-700">Profile Picture</label>
                                    <input type="file" id="profile_path" name="profile_path" x-model="formData.profile_path"
                                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        accept="image/*">
                                </div>
                            </div>
                        </template>

                        <!-- Expert Fields -->
                        <template x-if="userType === 'expert'">
                            <div class="space-y-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="space-y-1">
                                        <label for="expertise_area" class="block text-sm font-medium text-gray-700">Area of Expertise</label>
                                        <input type="text" id="expertise_area" name="expertise_area" x-model="formData.expertise_area"
                                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    </div>
                                    <div class="space-y-1">
                                        <label for="years_of_experience" class="block text-sm font-medium text-gray-700">Years of Experience</label>
                                        <input type="number" id="years_of_experience" name="years_of_experience" x-model="formData.years_of_experience"
                                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <label for="certifications" class="block text-sm font-medium text-gray-700">Certifications</label>
                                    <textarea id="certifications" name="certifications" x-model="formData.certifications"
                                        rows="3" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                                </div>
                            </div>
                        </template>

                        <!-- Company Fields -->
                        <template x-if="userType === 'company'">
                            <div class="space-y-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="space-y-1">
                                        <label for="company_name" class="block text-sm font-medium text-gray-700">Company Name</label>
                                        <input type="text" id="company_name" name="company_name" x-model="formData.company_name"
                                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    </div>
                                    <div class="space-y-1">
                                        <label for="company_role" class="block text-sm font-medium text-gray-700">Your Role in Company</label>
                                        <input type="text" id="company_role" name="company_role" x-model="formData.company_role"
                                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="space-y-1">
                                        <label for="industry" class="block text-sm font-medium text-gray-700">Industry</label>
                                        <input type="text" id="industry" name="industry" x-model="formData.industry"
                                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    </div>
                                    <div class="space-y-1">
                                        <label for="company_size" class="block text-sm font-medium text-gray-700">Company Size</label>
                                        <select id="company_size" name="company_size" x-model="formData.company_size"
                                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                            <option value="">Select size</option>
                                            <option value="1-10">1-10 employees</option>
                                            <option value="11-50">11-50 employees</option>
                                            <option value="51-200">51-200 employees</option>
                                            <option value="201-500">201-500 employees</option>
                                            <option value="501+">501+ employees</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </template>

                        <!-- Skill Seeker Fields -->
                        <template x-if="userType === 'skill_seeker'">
                            <div class="space-y-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="space-y-1">
                                        <label for="interests" class="block text-sm font-medium text-gray-700">Areas of Interest</label>
                                        <input type="text" id="interests" name="interests" x-model="formData.interests"
                                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                            placeholder="E.g., Programming, Design, Marketing">
                                    </div>
                                    <div class="space-y-1">
                                        <label for="current_profession" class="block text-sm font-medium text-gray-700">Current Profession</label>
                                        <input type="text" id="current_profession" name="current_profession" x-model="formData.current_profession"
                                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <label for="learning_goals" class="block text-sm font-medium text-gray-700">Learning Goals</label>
                                    <textarea id="learning_goals" name="learning_goals" x-model="formData.learning_goals"
                                        rows="3" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                        placeholder="What do you hope to achieve through learning?"></textarea>
                                </div>
                                <div class="space-y-1">
                                    <label for="preferred_learning_style" class="block text-sm font-medium text-gray-700">Preferred Learning Style</label>
                                    <select id="preferred_learning_style" name="preferred_learning_style" x-model="formData.preferred_learning_style"
                                        class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                        <option value="">Select learning style</option>
                                        <option value="visual">Visual Learning</option>
                                        <option value="auditory">Auditory Learning</option>
                                        <option value="reading">Reading/Writing</option>
                                        <option value="kinesthetic">Hands-on Learning</option>
                                        <option value="mixed">Mixed Approach</option>
                                    </select>
                                </div>
                            </div>
                        </template>

                        <!-- Terms and Submit -->
                        <div class="space-y-6">
                            <div class="flex items-center">
                                <input type="checkbox" id="terms" name="terms"
                                    class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                <label for="terms" class="ml-2 block text-sm text-gray-900">
                                    I agree to the <a href="#" class="text-blue-600 hover:text-blue-500">Terms</a> and
                                    <a href="#" class="text-blue-600 hover:text-blue-500">Privacy Policy</a>
                                </label>
                            </div>

                            <div>
                                <button type="submit"
                                class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 transition duration-200"
                                :disabled="loading">
                                <span x-show="!loading">Create Account</span>
                                <span x-show="loading">Processing...</span>
                            </button>
                            </div>
                        </div>
                    </form>

                    <p class="mt-8 text-center text-sm text-gray-600">
                        Already have an account?
                        <a href="#" class="font-medium text-blue-600 hover:text-blue-500">
                            Sign in
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
       document.addEventListener('alpine:init', () => {
    Alpine.data('registrationForm', () => ({
        loading: false,
        errorMessage: '',

        async submitForm(event) {
            event.preventDefault();
            this.loading = true;
            this.errorMessage = '';

            const form = event.target;
            const formData = new FormData(form);

            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    }
                });

                const result = await response.json();

                if (!response.ok) {
                    throw new Error(result.message || 'Registration failed');
                }

                // Redirect on success
                window.location.href = '/dashboard';
            } catch (error) {
                this.errorMessage = error.message;
            } finally {
                this.loading = false;
            }
        }
    }));
});
    </script>
</body>
</html>
