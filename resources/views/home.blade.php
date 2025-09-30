@extends('layouts.app')

@section('title', 'Home - Modern Company Website')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-primary-600 via-primary-700 to-primary-800 text-white overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="relative container-custom section-padding">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-8">
                <h1 class="text-5xl lg:text-6xl font-bold leading-tight">
                    We Build
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-orange-500">
                        Amazing
                    </span>
                    <br>Digital Experiences
                </h1>
                <p class="text-xl text-gray-200 leading-relaxed">
                    Transform your business with cutting-edge technology solutions. We create digital experiences that drive growth and engage your customers.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('services') }}" class="btn-primary text-lg px-8 py-4 inline-flex items-center justify-center">
                        Get Started
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                    <a href="{{ route('about') }}" class="btn-secondary text-lg px-8 py-4">
                        Learn More
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="relative z-10">
                    <div class="bg-white/10 backdrop-blur-lg rounded-3xl p-8 border border-white/20">
                        <div class="space-y-6">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold">Fast Performance</h3>
                                    <p class="text-gray-300">Lightning-fast solutions</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-gradient-to-r from-green-400 to-blue-500 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold">Reliable</h3>
                                    <p class="text-gray-300">99.9% uptime guarantee</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-gradient-to-r from-purple-400 to-pink-500 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold">Secure</h3>
                                    <p class="text-gray-300">Enterprise-grade security</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Background decoration -->
                <div class="absolute -top-4 -right-4 w-72 h-72 bg-gradient-to-r from-yellow-400/20 to-orange-500/20 rounded-full blur-3xl"></div>
                <div class="absolute -bottom-4 -left-4 w-72 h-72 bg-gradient-to-r from-blue-400/20 to-purple-500/20 rounded-full blur-3xl"></div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Why Choose Us?</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                We combine cutting-edge technology with exceptional design to deliver solutions that exceed expectations.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="group p-8 rounded-2xl bg-gradient-to-br from-blue-50 to-indigo-100 hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Lightning Fast</h3>
                <p class="text-gray-600 leading-relaxed">
                    Our solutions are optimized for speed and performance, ensuring your users have the best experience possible.
                </p>
            </div>
            
            <div class="group p-8 rounded-2xl bg-gradient-to-br from-green-50 to-emerald-100 hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Reliable & Secure</h3>
                <p class="text-gray-600 leading-relaxed">
                    Enterprise-grade security and 99.9% uptime guarantee ensure your business runs smoothly without interruptions.
                </p>
            </div>
            
            <div class="group p-8 rounded-2xl bg-gradient-to-br from-purple-50 to-pink-100 hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">User-Centric Design</h3>
                <p class="text-gray-600 leading-relaxed">
                    Every solution is designed with your users in mind, creating intuitive and engaging experiences.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="section-padding bg-gray-900 text-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-5xl font-bold text-primary-400 mb-2">500+</div>
                <div class="text-gray-300">Projects Completed</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-primary-400 mb-2">99.9%</div>
                <div class="text-gray-300">Uptime</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-primary-400 mb-2">50+</div>
                <div class="text-gray-300">Happy Clients</div>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold text-primary-400 mb-2">24/7</div>
                <div class="text-gray-300">Support</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding bg-gradient-to-r from-primary-600 to-primary-800 text-white">
    <div class="container-custom text-center">
        <h2 class="text-4xl font-bold mb-4">Ready to Get Started?</h2>
        <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
            Join hundreds of satisfied customers who have transformed their business with our solutions.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-white text-primary-600 hover:bg-gray-100 font-semibold py-4 px-8 rounded-lg transition duration-300 ease-in-out text-lg">
                Contact Us Today
            </a>
            <a href="{{ route('services') }}" class="border-2 border-white text-white hover:bg-white hover:text-primary-600 font-semibold py-4 px-8 rounded-lg transition duration-300 ease-in-out text-lg">
                View Our Services
            </a>
        </div>
    </div>
</section>
@endsection
