@extends('layouts.app')

@section('title', 'Contact Us - DevF Solutions')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative container-custom section-padding">
        <div class="text-center max-w-4xl mx-auto">
            <h1 class="text-5xl lg:text-6xl font-bold mb-6">
                Get In
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-400 to-primary-600">
                    Touch
                </span>
            </h1>
            <p class="text-xl text-gray-300 leading-relaxed">
                Ready to start your next project? We'd love to hear from you and discuss how we can help.
            </p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Contact Form -->
            <div class="space-y-8">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Send us a message</h2>
                    <p class="text-lg text-gray-600">
                        Fill out the form below and we'll get back to you within 24 hours.
                    </p>
                </div>
                
                <form 
                    class="space-y-6" 
                    method="POST" 
                    action="{{ route('contact.store') }}"
                    role="form"
                    aria-label="Contact form"
                >
                    @csrf
                    
                    <!-- Success Message -->
                    @if(session('success'))
                        <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-green-800 font-medium">{{ session('success') }}</p>
                            </div>
                        </div>
                    @endif
                    
                    <fieldset class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <legend class="sr-only">Personal Information</legend>
                        
                        <!-- Name Field -->
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                                Full Name <span class="text-red-500" aria-label="required">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name"
                                value="{{ old('name') }}"
                                class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition duration-300 {{ $errors->has('name') ? 'border-red-500' : 'border-gray-300' }}"
                                placeholder="John Doe"
                                required
                                aria-describedby="name-error"
                            >
                            @error('name')
                                <p id="name-error" class="text-red-500 text-sm mt-1" role="alert">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <!-- Email Field -->
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                Email Address <span class="text-red-500" aria-label="required">*</span>
                            </label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email"
                                value="{{ old('email') }}"
                                class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition duration-300 {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }}"
                                placeholder="john@company.com"
                                required
                                aria-describedby="email-error"
                            >
                            @error('email')
                                <p id="email-error" class="text-red-500 text-sm mt-1" role="alert">{{ $message }}</p>
                            @enderror
                        </div>
                    </fieldset>
                    
                    <fieldset class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <legend class="sr-only">Company Information</legend>
                        
                        <!-- Company Field -->
                        <div>
                            <label for="company" class="block text-sm font-semibold text-gray-700 mb-2">
                                Company
                            </label>
                            <input 
                                type="text" 
                                id="company" 
                                name="company"
                                value="{{ old('company') }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition duration-300"
                                placeholder="Your Company"
                            >
                        </div>
                        
                        <!-- Service Field -->
                        <div>
                            <label for="service" class="block text-sm font-semibold text-gray-700 mb-2">
                                Service Interested In
                            </label>
                            <select 
                                id="service" 
                                name="service"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition duration-300"
                            >
                                <option value="">Select a service</option>
                                <option value="web-development" {{ old('service') == 'web-development' ? 'selected' : '' }}>Web Development</option>
                                <option value="ui-ux-design" {{ old('service') == 'ui-ux-design' ? 'selected' : '' }}>UI/UX Design</option>
                                <option value="mobile-development" {{ old('service') == 'mobile-development' ? 'selected' : '' }}>Mobile Development</option>
                                <option value="cloud-solutions" {{ old('service') == 'cloud-solutions' ? 'selected' : '' }}>Cloud Solutions</option>
                                <option value="consulting" {{ old('service') == 'consulting' ? 'selected' : '' }}>Consulting</option>
                                <option value="other" {{ old('service') == 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>
                    </fieldset>
                    
                    <!-- Message Field -->
                    <div>
                        <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">
                            Message <span class="text-red-500" aria-label="required">*</span>
                        </label>
                        <textarea 
                            id="message" 
                            name="message"
                            rows="6"
                            class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-transparent transition duration-300 resize-vertical {{ $errors->has('message') ? 'border-red-500' : 'border-gray-300' }}"
                            placeholder="Tell us about your project..."
                            required
                            aria-describedby="message-error"
                        >{{ old('message') }}</textarea>
                        @error('message')
                            <p id="message-error" class="text-red-500 text-sm mt-1" role="alert">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Submit Button -->
                    <button 
                        type="submit"
                        class="w-full btn-primary text-lg py-4 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition duration-300"
                    >
                        <span class="flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                            Send Message
                        </span>
                    </button>
                </form>
            </div>
            
            <!-- Contact Information -->
            <div class="space-y-8">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Contact Information</h2>
                    <p class="text-lg text-gray-600">
                        We're here to help! Reach out to us through any of the channels below.
                    </p>
                </div>
                
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-primary-500 to-primary-600 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-1">Phone</h3>
                            <p class="text-gray-600">+1 (555) 123-4567</p>
                            <p class="text-sm text-gray-500">Mon-Fri 9AM-6PM EST</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-1">Email</h3>
                            <p class="text-gray-600">hello@devfsolutions.com</p>
                            <p class="text-sm text-gray-500">We'll respond within 24 hours</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-purple-600 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-1">Office</h3>
                            <p class="text-gray-600">123 Technology Drive<br>Suite 100<br>Tech City, TC 12345</p>
                        </div>
                    </div>
                </div>
                
                <!-- Social Links -->
                <div class="pt-8 border-t border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-100 hover:bg-primary-500 rounded-lg flex items-center justify-center transition-colors duration-300 group">
                            <svg class="w-5 h-5 text-gray-600 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-100 hover:bg-primary-500 rounded-lg flex items-center justify-center transition-colors duration-300 group">
                            <svg class="w-5 h-5 text-gray-600 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-100 hover:bg-primary-500 rounded-lg flex items-center justify-center transition-colors duration-300 group">
                            <svg class="w-5 h-5 text-gray-600 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section-padding bg-gray-50">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Here are some common questions we receive. Don't see your question? Contact us!
            </p>
        </div>
        
        <div class="max-w-3xl mx-auto space-y-6">
            <div class="bg-white rounded-2xl shadow-lg" x-data="{ open: false }">
                <button @click="open = !open" class="w-full px-8 py-6 text-left flex items-center justify-between hover:bg-gray-50 transition-colors duration-300">
                    <h3 class="text-lg font-semibold text-gray-900">How long does a typical project take?</h3>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-300" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition class="px-8 pb-6 text-gray-600">
                    <p>Project timelines vary depending on complexity and scope. A simple website typically takes 2-4 weeks, while complex web applications can take 3-6 months. We provide detailed timelines during our initial consultation.</p>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl shadow-lg" x-data="{ open: false }">
                <button @click="open = !open" class="w-full px-8 py-6 text-left flex items-center justify-between hover:bg-gray-50 transition-colors duration-300">
                    <h3 class="text-lg font-semibold text-gray-900">Do you provide ongoing support after launch?</h3>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-300" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition class="px-8 pb-6 text-gray-600">
                    <p>Yes! We offer comprehensive support packages including maintenance, updates, security monitoring, and technical support. Our support plans are flexible and can be customized to your needs.</p>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl shadow-lg" x-data="{ open: false }">
                <button @click="open = !open" class="w-full px-8 py-6 text-left flex items-center justify-between hover:bg-gray-50 transition-colors duration-300">
                    <h3 class="text-lg font-semibold text-gray-900">What technologies do you use?</h3>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-300" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition class="px-8 pb-6 text-gray-600">
                    <p>We use modern, proven technologies including Laravel, PHP, JavaScript, React, Vue.js, Tailwind CSS, MySQL, PostgreSQL, AWS, and more. We choose the best technology stack for each project's specific requirements.</p>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl shadow-lg" x-data="{ open: false }">
                <button @click="open = !open" class="w-full px-8 py-6 text-left flex items-center justify-between hover:bg-gray-50 transition-colors duration-300">
                    <h3 class="text-lg font-semibold text-gray-900">Do you work with small businesses?</h3>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-300" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition class="px-8 pb-6 text-gray-600">
                    <p>Absolutely! We work with businesses of all sizes, from startups to enterprise clients. We offer flexible solutions and pricing to accommodate different budgets and requirements.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
