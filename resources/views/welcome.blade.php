<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunshine Elementary School</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4a6fa5',
                        secondary: '#166d67',
                        accent: '#fd7e14',
                        light: '#f8f9fa',
                        dark: '#343a40',
                        lightBlue: '#e3f2fd',
                        lightGreen: '#e8f5e9',
                        lightOrange: '#fff3e0',
                    },
                    fontFamily: {
                        heading: ['Montserrat', 'sans-serif'],
                        body: ['Open Sans', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .hero-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
        }
        .about-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1523580494863-6f3031224c94?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
        }
        .teacher-card:hover .teacher-image {
            transform: scale(1.05);
        }
        .stat-card {
            transition: all 0.3s ease;
        }
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .page-section {
            display: none;
            animation: fadeIn 0.5s ease-in-out;
        }
        .page-section.active {
            display: block;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body class="font-body text-gray-700 bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <!-- Top bar -->
        <div class="bg-primary text-white text-sm">
            <div class="container mx-auto px-4 py-2 flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <div><i class="fas fa-phone mr-1"></i> (555) 123-4567</div>
                    <div><i class="fas fa-envelope mr-1"></i> info@sunshineelementary.org</div>
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-accent transition"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-accent transition"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-accent transition"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-accent transition"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <!-- Main header -->
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgdmlld0JveD0iMCAwIDEwMCAxMDAiPjxjaXJjbGUgY3g9IjUwIiBjeT0iNTAiIHI9IjQ1IiBmaWxsPSIjZmQ3ZTE0Ii8+PGNpcmNsZSBjeD0iNTAiIGN5PSI1MCIgcj0iMzUiIGZpbGw9IiNmZmYiLz48cGF0aCBkPSJNNDAgMzUgTDYwIDM1IEw1NSA1MCBMNjUgNTAgTDUwIDc1IEwzNSA1MCBMNDUgNTAgWiIgZmlsbD0iIzRhNmZhNSIvPjwvc3ZnPg==" alt="Sunshine Elementary Logo" class="h-12 mr-4">
                <div>
                    <h1 class="text-2xl font-heading font-bold text-primary">Sunshine Elementary School</h1>
                    <p class="text-secondary text-sm">Where Every Child Shines</p>
                </div>
            </div>
            
            <button class="md:hidden text-primary text-2xl" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>
            
            <nav class="hidden md:flex items-center space-x-2" id="mainNav">
                <a href="#home" class="nav-link px-3 py-2 font-medium text-gray-700 hover:bg-primary hover:text-white rounded-md transition">Home</a>
                <a href="#about" class="nav-link px-3 py-2 font-medium text-gray-700 hover:bg-primary hover:text-white rounded-md transition">About</a>
                <a href="#academics" class="nav-link px-3 py-2 font-medium text-gray-700 hover:bg-primary hover:text-white rounded-md transition">Academics</a>
                <a href="#student-life" class="nav-link px-3 py-2 font-medium text-gray-700 hover:bg-primary hover:text-white rounded-md transition">Student Life</a>
                <a href="#parents" class="nav-link px-3 py-2 font-medium text-gray-700 hover:bg-primary hover:text-white rounded-md transition">For Parents</a>
                <a href="#contact" class="nav-link px-3 py-2 font-medium text-gray-700 hover:bg-primary hover:text-white rounded-md transition">Contact</a>
                <a href="#" class="ml-4 px-4 py-2 bg-accent text-white font-medium rounded-full hover:bg-orange-600 transition">Parent Portal</a>
            </nav>
        </div>
        
        <!-- Mobile menu (hidden by default) -->
        <div class="md:hidden hidden bg-white shadow-lg" id="mobileMenu">
            <div class="container mx-auto px-4 py-4 flex flex-col space-y-3">
                <a href="#home" class="nav-link px-3 py-2 font-medium text-gray-700 hover:bg-primary hover:text-white rounded-md transition">Home</a>
                <a href="#about" class="nav-link px-3 py-2 font-medium text-gray-700 hover:bg-primary hover:text-white rounded-md transition">About</a>
                <a href="#academics" class="nav-link px-3 py-2 font-medium text-gray-700 hover:bg-primary hover:text-white rounded-md transition">Academics</a>
                <a href="#student-life" class="nav-link px-3 py-2 font-medium text-gray-700 hover:bg-primary hover:text-white rounded-md transition">Student Life</a>
                <a href="#parents" class="nav-link px-3 py-2 font-medium text-gray-700 hover:bg-primary hover:text-white rounded-md transition">For Parents</a>
                <a href="#contact" class="nav-link px-3 py-2 font-medium text-gray-700 hover:bg-primary hover:text-white rounded-md transition">Contact</a>
            </div>
        </div>
    </header>

    <!-- Home Section -->
    <section id="home" class="page-section active">
        <!-- Hero Section -->
        <div class="hero-bg text-white py-20 md:py-28">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-4xl md:text-5xl font-heading font-bold mb-6">Welcome to Sunshine Elementary</h2>
                <p class="text-xl md:text-2xl max-w-2xl mx-auto mb-10">Where we nurture a lifelong love of learning in a safe, inclusive, and vibrant community.</p>
                <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#" class="px-8 py-3 bg-accent text-white font-medium rounded-full hover:bg-orange-600 transition">Schedule a Tour</a>
                    <a href="#" class="px-8 py-3 bg-transparent border-2 border-white text-white font-medium rounded-full hover:bg-white hover:text-primary transition">Parent Portal</a>
                </div>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
                    <div class="stat-card bg-lightBlue p-6 rounded-lg text-center shadow-md">
                        <div class="text-4xl font-heading font-bold text-primary mb-2">650+</div>
                        <div class="text-gray-600 font-medium">Students</div>
                    </div>
                    <div class="stat-card bg-lightGreen p-6 rounded-lg text-center shadow-md">
                        <div class="text-4xl font-heading font-bold text-primary mb-2">42</div>
                        <div class="text-gray-600 font-medium">Teachers</div>
                    </div>
                    <div class="stat-card bg-lightOrange p-6 rounded-lg text-center shadow-md">
                        <div class="text-4xl font-heading font-bold text-primary mb-2">18:1</div>
                        <div class="text-gray-600 font-medium">Student-Teacher Ratio</div>
                    </div>
                    <div class="stat-card bg-lightBlue p-6 rounded-lg text-center shadow-md">
                        <div class="text-4xl font-heading font-bold text-primary mb-2">96%</div>
                        <div class="text-gray-600 font-medium">Parent Satisfaction</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Links Section -->
        <div class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Events Card -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2">
                        <div class="bg-primary text-white py-4 text-center">
                            <i class="fas fa-calendar-alt text-2xl"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-heading font-bold text-primary mb-4">Upcoming Events</h3>
                            <ul class="space-y-3 mb-6">
                                <li class="flex items-start">
                                    <span class="text-accent font-bold mr-2">•</span>
                                    <span>Oct 12: Fall Festival</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-accent font-bold mr-2">•</span>
                                    <span>Oct 19: Parent-Teacher Conferences</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-accent font-bold mr-2">•</span>
                                    <span>Oct 31: Storybook Character Parade</span>
                                </li>
                            </ul>
                            <a href="#" class="text-secondary font-semibold hover:text-primary transition">View Full Calendar →</a>
                        </div>
                    </div>
                    
                    <!-- News Card -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2">
                        <div class="bg-primary text-white py-4 text-center">
                            <i class="fas fa-newspaper text-2xl"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-heading font-bold text-primary mb-4">Latest News</h3>
                            <ul class="space-y-3 mb-6">
                                <li class="flex items-start">
                                    <span class="text-accent font-bold mr-2">•</span>
                                    <span>Sept 28: Robotics Team Qualifies for States!</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-accent font-bold mr-2">•</span>
                                    <span>Sept 20: Annual Food Drive Starts</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-accent font-bold mr-2">•</span>
                                    <span>Sept 15: Meet Our New Teachers</span>
                                </li>
                            </ul>
                            <a href="#" class="text-secondary font-semibold hover:text-primary transition">Read All News →</a>
                        </div>
                    </div>
                    
                    <!-- Lunch Menu Card -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2">
                        <div class="bg-primary text-white py-4 text-center">
                            <i class="fas fa-utensils text-2xl"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-heading font-bold text-primary mb-4">Lunch Menu</h3>
                            <p class="text-gray-600 mb-6">View and download this month's menu to see what's cooking in our cafeteria.</p>
                            <a href="#" class="text-secondary font-semibold hover:text-primary transition">Download October Menu (PDF)</a>
                        </div>
                    </div>
                    
                    <!-- Transportation Card -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2">
                        <div class="bg-primary text-white py-4 text-center">
                            <i class="fas fa-bus text-2xl"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-heading font-bold text-primary mb-4">Transportation</h3>
                            <p class="text-gray-600 mb-6">Find bus routes, delays, and transportation policies for the school year.</p>
                            <a href="#" class="text-secondary font-semibold hover:text-primary transition">Transportation Info →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- News Section -->
        <div class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-heading font-bold text-primary mb-4">Latest News & Announcements</h2>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto">Stay up to date with the latest happenings at Sunshine Elementary</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- News Card 1 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2">
                        <div class="h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1588072432836-e100327d50bf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80" alt="Robotics Team" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <div class="text-accent font-semibold mb-2">September 28, 2023</div>
                            <h3 class="text-xl font-heading font-bold text-primary mb-4">Our 5th Grade Robotics Team Qualifies for States!</h3>
                            <p class="text-gray-600 mb-4">Congratulations to our amazing robotics team for their outstanding performance at the regional competition...</p>
                            <a href="#" class="text-secondary font-semibold hover:text-primary transition">Read More →</a>
                        </div>
                    </div>
                    
                    <!-- News Card 2 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2">
                        <div class="h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1532634922-8fe0b757fb13?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80" alt="Food Drive" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <div class="text-accent font-semibold mb-2">September 20, 2023</div>
                            <h3 class="text-xl font-heading font-bold text-primary mb-4">Annual Food Drive Kicks Off Next Week</h3>
                            <p class="text-gray-600 mb-4">Our annual food drive to support the Anytown Food Bank will run from October 1-15. Let's come together as a community...</p>
                            <a href="#" class="text-secondary font-semibold hover:text-primary transition">Read More →</a>
                        </div>
                    </div>
                    
                    <!-- News Card 3 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-2">
                        <div class="h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80" alt="New Teachers" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <div class="text-accent font-semibold mb-2">September 15, 2023</div>
                            <h3 class="text-xl font-heading font-bold text-primary mb-4">Meet Our New Teachers for the 2023-24 School Year</h3>
                            <p class="text-gray-600 mb-4">We're excited to welcome five new teachers to our Sunshine Elementary family this year. Get to know them...</p>
                            <a href="#" class="text-secondary font-semibold hover:text-primary transition">Read More →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials Section -->
        <div class="py-16 bg-primary text-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-heading font-bold mb-4">What Parents Say</h2>
                    <p class="text-xl max-w-2xl mx-auto">Hear from our school community about their experiences</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white bg-opacity-10 p-8 rounded-xl">
                        <p class="text-lg italic mb-6">"Sunshine Elementary has been a blessing for our family. The teachers are caring and dedicated, and my children are excited to go to school every day. The focus on both academic excellence and character development is exactly what we were looking for."</p>
                        <div class="font-semibold">Jennifer Martinez</div>
                        <div class="text-blue-100">Parent of 3rd and 5th grade students</div>
                    </div>
                    
                    <div class="bg-white bg-opacity-10 p-8 rounded-xl">
                        <p class="text-lg italic mb-6">"The STEM program at Sunshine is outstanding. My daughter has developed a real passion for science and technology thanks to the engaging projects and enthusiastic teachers. She's already talking about becoming an engineer!"</p>
                        <div class="font-semibold">David Chen</div>
                        <div class="text-blue-100">Parent of 4th grade student</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="page-section">
        <div class="about-bg text-white py-20 md:py-28">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-4xl md:text-5xl font-heading font-bold mb-6">About Our School</h2>
                <p class="text-xl md:text-2xl max-w-2xl mx-auto">Learn about our mission, values, and the people who make Sunshine Elementary special</p>
            </div>
        </div>
        
        <div class="container mx-auto px-4 py-16">
            <div class="bg-white rounded-xl shadow-md p-8 mb-12">
                <h3 class="text-2xl font-heading font-bold text-primary mb-4">Principal's Welcome</h3>
                <p class="text-gray-700 mb-4">"Welcome, Sunshine Families! My name is Jane Smith, and I am proud to be the principal of this incredible school. My door is always open, and I encourage you to get involved in our vibrant community. We are committed to partnering with you to ensure your child has a successful and joyful year. Go Suns!"</p>
                <p class="font-semibold">- Principal Smith</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <div class="bg-lightBlue rounded-xl shadow-md overflow-hidden">
                    <div class="bg-primary text-white py-4 text-center">
                        <i class="fas fa-bullseye text-2xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-heading font-bold text-primary mb-4">Our Mission & Vision</h3>
                        <p class="text-gray-700 mb-4"><strong>Mission:</strong> To provide a rigorous and engaging educational experience that empowers each student to become a compassionate, critical thinker and a responsible global citizen.</p>
                        <p class="text-gray-700"><strong>Vision:</strong> To be a leading school where innovation, creativity, and kindness are cultivated every day.</p>
                    </div>
                </div>
                
                <div class="bg-lightGreen rounded-xl shadow-md overflow-hidden">
                    <div class="bg-primary text-white py-4 text-center">
                        <i class="fas fa-history text-2xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-heading font-bold text-primary mb-4">School History</h3>
                        <p class="text-gray-700">Established in 1965, Sunshine Elementary has served the families of Anytown for over five decades. We are proud of our rich tradition of academic excellence and strong community ties.</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mb-12">
                <h2 class="text-3xl font-heading font-bold text-primary mb-4">Our Leadership Team</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Meet the dedicated professionals guiding our school</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <div class="teacher-card bg-white rounded-xl shadow-md overflow-hidden group">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80" alt="Principal Jane Smith" class="teacher-image w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-heading font-bold text-primary mb-1">Jane Smith</h3>
                        <div class="text-accent font-semibold mb-3">Principal</div>
                        <p class="text-gray-600">M.Ed. in Educational Leadership with 15 years of experience in elementary education.</p>
                        <div class="mt-4 text-sm bg-lightBlue py-2 px-4 rounded-md">j.smith@sunshineelementary.org</div>
                    </div>
                </div>
                
                <div class="teacher-card bg-white rounded-xl shadow-md overflow-hidden group">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80" alt="Vice Principal Michael Johnson" class="teacher-image w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-heading font-bold text-primary mb-1">Michael Johnson</h3>
                        <div class="text-accent font-semibold mb-3">Vice Principal</div>
                        <p class="text-gray-600">Specializes in curriculum development and student support services.</p>
                        <div class="mt-4 text-sm bg-lightBlue py-2 px-4 rounded-md">m.johnson@sunshineelementary.org</div>
                    </div>
                </div>
                
                <div class="teacher-card bg-white rounded-xl shadow-md overflow-hidden group">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80" alt="Counselor Sarah Williams" class="teacher-image w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-heading font-bold text-primary mb-1">Sarah Williams</h3>
                        <div class="text-accent font-semibold mb-3">School Counselor</div>
                        <p class="text-gray-600">Provides social-emotional support and academic guidance to students.</p>
                        <div class="mt-4 text-sm bg-lightBlue py-2 px-4 rounded-md">s.williams@sunshineelementary.org</div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mb-12">
                <h2 class="text-3xl font-heading font-bold text-primary mb-4">Our Teachers</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Dedicated educators inspiring young minds</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="teacher-card bg-white rounded-xl shadow-md overflow-hidden group">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80" alt="Mr. John Doe" class="teacher-image w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-heading font-bold text-primary mb-1">John Doe</h3>
                        <div class="text-accent font-semibold mb-3">4th Grade Teacher</div>
                        <p class="text-gray-600">10 years of teaching experience with a focus on project-based learning.</p>
                    </div>
                </div>
                
                <div class="teacher-card bg-white rounded-xl shadow-md overflow-hidden group">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80" alt="Ms. Maria Garcia" class="teacher-image w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-heading font-bold text-primary mb-1">Maria Garcia</h3>
                        <div class="text-accent font-semibold mb-3">Kindergarten Teacher</div>
                        <p class="text-gray-600">Early childhood education specialist with a passion for literacy development.</p>
                    </div>
                </div>
                
                <div class="teacher-card bg-white rounded-xl shadow-md overflow-hidden group">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80" alt="Mr. Robert Kim" class="teacher-image w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-heading font-bold text-primary mb-1">Robert Kim</h3>
                        <div class="text-accent font-semibold mb-3">Science Specialist</div>
                        <p class="text-gray-600">Leads our STEM program and after-school science club.</p>
                    </div>
                </div>
                
                <div class="teacher-card bg-white rounded-xl shadow-md overflow-hidden group">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1552058544-f2b08422138a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80" alt="Ms. Lisa Chen" class="teacher-image w-full h-full object-cover transition-transform duration-500">
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-heading font-bold text-primary mb-1">Lisa Chen</h3>
                        <div class="text-accent font-semibold mb-3">Art Teacher</div>
                        <p class="text-gray-600">Encourages creativity and self-expression through various art mediums.</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="px-6 py-3 bg-primary text-white font-medium rounded-lg hover:bg-blue-700 transition">View All Teachers</a>
            </div>
        </div>
    </section>

    <!-- Academics Section -->
    <section id="academics" class="page-section">
        <div class="bg-gradient-to-r from-primary to-secondary text-white py-20 md:py-28">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-4xl md:text-5xl font-heading font-bold mb-6">Academics</h2>
                <p class="text-xl md:text-2xl max-w-2xl mx-auto">Our comprehensive curriculum designed to challenge and inspire every student</p>
            </div>
        </div>
        
        <div class="container mx-auto px-4 py-16">
            <div class="bg-white rounded-xl shadow-md p-8 mb-12">
                <h3 class="text-2xl font-heading font-bold text-primary mb-4">Our Curriculum</h3>
                <p class="text-gray-700">At Sunshine Elementary, we offer a comprehensive curriculum aligned with state standards, designed to challenge and inspire every student. Our approach focuses on developing critical thinking skills, creativity, and a lifelong love of learning.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                <div class="bg-lightBlue rounded-xl shadow-md overflow-hidden">
                    <div class="bg-primary text-white py-4 text-center">
                        <i class="fas fa-book text-2xl"></i>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-heading font-bold text-primary mb-4">English Language Arts</h3>
                        <p class="text-gray-700">Wit & Wisdom, Fundations</p>
                    </div>
                </div>
                
                <div class="bg-lightGreen rounded-xl shadow-md overflow-hidden">
                    <div class="bg-primary text-white py-4 text-center">
                        <i class="fas fa-calculator text-2xl"></i>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-heading font-bold text-primary mb-4">Mathematics</h3>
                        <p class="text-gray-700">Eureka Math</p>
                    </div>
                </div>
                
                <div class="bg-lightOrange rounded-xl shadow-md overflow-hidden">
                    <div class="bg-primary text-white py-4 text-center">
                        <i class="fas fa-flask text-2xl"></i>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-heading font-bold text-primary mb-4">Science</h3>
                        <p class="text-gray-700">STEMscopes</p>
                    </div>
                </div>
                
                <div class="bg-lightBlue rounded-xl shadow-md overflow-hidden">
                    <div class="bg-primary text-white py-4 text-center">
                        <i class="fas fa-globe-americas text-2xl"></i>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-heading font-bold text-primary mb-4">Social Studies</h3>
                        <p class="text-gray-700">TCI</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mb-12">
                <h2 class="text-3xl font-heading font-bold text-primary mb-4">Special Programs</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Enriching opportunities for all students</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3 class="text-xl font-heading font-bold text-primary mb-4">Gifted & Talented Program</h3>
                    <p class="text-gray-700">Our GATE program provides challenging curriculum and enrichment opportunities for students who demonstrate exceptional abilities.</p>
                </div>
                
                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3 class="text-xl font-heading font-bold text-primary mb-4">Special Education</h3>
                    <p class="text-gray-700">We provide comprehensive support services for students with diverse learning needs, ensuring everyone can succeed.</p>
                </div>
                
                <div class="bg-white rounded-xl shadow-md p-6">
                    <div class="text-primary text-4xl mb-4">
                        <i class="fas fa-language"></i>
                    </div>
                    <h3 class="text-xl font-heading font-bold text-primary mb-4">English Language Learners</h3>
                    <p class="text-gray-700">Our ELL program supports students who are developing their English language skills while maintaining appreciation for their home culture.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Student Life Section -->
    <section id="student-life" class="page-section">
        <div class="bg-gradient-to-r from-secondary to-accent text-white py-20 md:py-28">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-4xl md:text-5xl font-heading font-bold mb-6">Student Life</h2>
                <p class="text-xl md:text-2xl max-w-2xl mx-auto">Beyond the classroom - explore clubs, activities, and events</p>
            </div>
        </div>
        
        <div class="container mx-auto px-4 py-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="bg-primary text-white py-4 text-center">
                        <i class="fas fa-robot text-2xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-heading font-bold text-primary mb-4">Clubs & Activities</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <span class="text-accent font-bold mr-2">•</span>
                                <span>Robotics Club</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-accent font-bold mr-2">•</span>
                                <span>Chess Club</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-accent font-bold mr-2">•</span>
                                <span>Chorus</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-accent font-bold mr-2">•</span>
                                <span>Student Council</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-accent font-bold mr-2">•</span>
                                <span>Garden Club</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="bg-primary text-white py-4 text-center">
                        <i class="fas fa-running text-2xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-heading font-bold text-primary mb-4">Athletics</h3>
                        <p class="text-gray-600 mb-4">Focused on wellness and teamwork</p>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <span class="text-accent font-bold mr-2">•</span>
                                <span>Running Club</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-accent font-bold mr-2">•</span>
                                <span>Yoga</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-accent font-bold mr-2">•</span>
                                <span>Soccer</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-accent font-bold mr-2">•</span>
                                <span>Basketball</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="bg-primary text-white py-4 text-center">
                        <i class="fas fa-paint-brush text-2xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-heading font-bold text-primary mb-4">Arts</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <span class="text-accent font-bold mr-2">•</span>
                                <span>Art Club</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-accent font-bold mr-2">•</span>
                                <span>Drama Productions</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-accent font-bold mr-2">•</span>
                                <span>Choir</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-accent font-bold mr-2">•</span>
                                <span>Band</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="text-center mb-12">
                <h2 class="text-3xl font-heading font-bold text-primary mb-4">Photo Gallery</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">A glimpse into life at Sunshine Elementary</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-16">
                <div class="h-40 rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80" alt="Science Class" class="w-full h-full object-cover">
                </div>
                <div class="h-40 rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1511735111819-9a3f7709049c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80" alt="Classroom" class="w-full h-full object-cover">
                </div>
                <div class="h-40 rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80" alt="Students Learning" class="w-full h-full object-cover">
                </div>
                <div class="h-40 rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1591123120675-6f7f1aae0e5b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80" alt="School Building" class="w-full h-full object-cover">
                </div>
            </div>
            
            <div class="text-center">
                <a href="#" class="px-6 py-3 bg-primary text-white font-medium rounded-lg hover:bg-blue-700 transition">View More Photos</a>
            </div>
        </div>
    </section>

    <!-- For Parents Section -->
    <section id="parents" class="page-section">
        <div class="bg-gradient-to-r from-accent to-primary text-white py-20 md:py-28">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-4xl md:text-5xl font-heading font-bold mb-6">For Parents</h2>
                <p class="text-xl md:text-2xl max-w-2xl mx-auto">Resources and information for families</p>
            </div>
        </div>
        
        <div class="container mx-auto px-4 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="bg-primary text-white py-4 text-center">
                        <i class="fas fa-calendar text-2xl"></i>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-heading font-bold text-primary mb-4">School Year Calendar</h3>
                        <p class="text-gray-600 mb-4">Download the 2023-2024 academic calendar</p>
                        <a href="#" class="text-secondary font-semibold hover:text-primary transition">Download Calendar (PDF)</a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="bg-primary text-white py-4 text-center">
                        <i class="fas fa-newspaper text-2xl"></i>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-heading font-bold text-primary mb-4">Newsletters</h3>
                        <p class="text-gray-600 mb-4">Subscribe to our weekly newsletter</p>
                        <a href="#" class="text-secondary font-semibold hover:text-primary transition">Subscribe Now</a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="bg-primary text-white py-4 text-center">
                        <i class="fas fa-hands-helping text-2xl"></i>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-heading font-bold text-primary mb-4">PTO & Volunteering</h3>
                        <p class="text-gray-600 mb-4">Get involved in our parent-teacher organization</p>
                        <a href="#" class="text-secondary font-semibold hover:text-primary transition">Volunteer Opportunities</a>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="bg-primary text-white py-4 text-center">
                        <i class="fas fa-bus text-2xl"></i>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-heading font-bold text-primary mb-4">Transportation</h3>
                        <p class="text-gray-600 mb-4">Bus routes and transportation information</p>
                        <a href="#" class="text-secondary font-semibold hover:text-primary transition">View Bus Routes</a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mb-12">
                <h2 class="text-3xl font-heading font-bold text-primary mb-4">Parent Resources</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Tools and information to support your child's education</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h3 class="text-xl font-heading font-bold text-primary mb-4">Parent Portal</h3>
                    <p class="text-gray-700 mb-4">Access your child's grades, attendance records, and communication with teachers through our secure online portal.</p>
                    <a href="#" class="px-4 py-2 bg-primary text-white font-medium rounded-lg hover:bg-blue-700 transition">Login to Portal</a>
                </div>
                
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h3 class="text-xl font-heading font-bold text-primary mb-4">School Supplies</h3>
                    <p class="text-gray-700 mb-4">Find the recommended school supplies list for each grade level to ensure your child is prepared for the school year.</p>
                    <a href="#" class="px-4 py-2 bg-primary text-white font-medium rounded-lg hover:bg-blue-700 transition">Download Lists</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="page-section">
        <div class="bg-gradient-to-r from-primary to-secondary text-white py-20 md:py-28">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-4xl md:text-5xl font-heading font-bold mb-6">Contact Us</h2>
                <p class="text-xl md:text-2xl max-w-2xl mx-auto">Get in touch with Sunshine Elementary School</p>
            </div>
        </div>
        
        <div class="container mx-auto px-4 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-3xl font-heading font-bold text-primary mb-6">Get In Touch</h2>
                    <form class="space-y-6">
                        <div>
                            <label for="name" class="block text-gray-700 font-medium mb-2">Your Name</label>
                            <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div>
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                            <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div>
                            <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                            <input type="text" id="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        <div>
                            <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                            <textarea id="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                        </div>
                        <button type="submit" class="px-6 py-3 bg-primary text-white font-medium rounded-lg hover:bg-blue-700 transition">Send Message</button>
                    </form>
                </div>
                
                <div>
                    <h2 class="text-3xl font-heading font-bold text-primary mb-6">Contact Information</h2>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-primary text-white p-3 rounded-lg mr-4">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-heading font-bold text-primary mb-2">Address</h3>
                                <p class="text-gray-700">1234 Learning Lane<br>Anytown, USA 12345</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-primary text-white p-3 rounded-lg mr-4">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-heading font-bold text-primary mb-2">Phone</h3>
                                <p class="text-gray-700">Main Office: (555) 123-4567<br>Fax: (555) 123-4568</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-primary text-white p-3 rounded-lg mr-4">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-heading font-bold text-primary mb-2">Email</h3>
                                <p class="text-gray-700">General Inquiries: info@sunshineelementary.org<br>Principal: principal@sunshineelementary.org</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-primary text-white p-3 rounded-lg mr-4">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-heading font-bold text-primary mb-2">Office Hours</h3>
                                <p class="text-gray-700">Monday-Friday: 7:30 AM - 4:00 PM<br>Weekends: Closed</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8">
                        <h3 class="text-xl font-heading font-bold text-primary mb-4">Follow Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center hover:bg-primary hover:text-white transition"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center hover:bg-primary hover:text-white transition"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center hover:bg-primary hover:text-white transition"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center hover:bg-primary hover:text-white transition"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bg-gray-100 py-8">
            <div class="container mx-auto px-4">
                <h2 class="text-2xl font-heading font-bold text-primary mb-6 text-center">School Location</h2>
                <div class="bg-white p-4 rounded-xl shadow-md">
                    <div class="h-64 bg-gray-300 rounded-lg flex items-center justify-center">
                        <p class="text-gray-600">Interactive Map Would Appear Here</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                <div>
                    <h3 class="text-xl font-heading font-bold text-accent mb-4">Sunshine Elementary School</h3>
                    <p class="mb-4">Where Every Child Shines</p>
                    <p class="mb-2">1234 Learning Lane</p>
                    <p class="mb-2">Anytown, USA 12345</p>
                    <p class="mb-2">Phone: (555) 123-4567</p>
                    <p>Email: info@sunshineelementary.org</p>
                </div>
                
                <div>
                    <h3 class="text-xl font-heading font-bold text-accent mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#home" class="nav-link hover:text-accent transition">Home</a></li>
                        <li><a href="#about" class="nav-link hover:text-accent transition">About</a></li>
                        <li><a href="#academics" class="nav-link hover:text-accent transition">Academics</a></li>
                        <li><a href="#student-life" class="nav-link hover:text-accent transition">Student Life</a></li>
                        <li><a href="#parents" class="nav-link hover:text-accent transition">For Parents</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-heading font-bold text-accent mb-4">Resources</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-accent transition">For Students</a></li>
                        <li><a href="#" class="hover:text-accent transition">For Parents</a></li>
                        <li><a href="#" class="hover:text-accent transition">For Staff</a></li>
                        <li><a href="#" class="hover:text-accent transition">Library Resources</a></li>
                        <li><a href="#" class="hover:text-accent transition">Technology Help</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-heading font-bold text-accent mb-4">Connect With Us</h3>
                    <p class="mb-4">Follow us on social media for updates, news, and events.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="h-10 w-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-accent transition"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="h-10 w-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-accent transition"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="h-10 w-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-accent transition"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="h-10 w-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-accent transition"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-700 pt-8 text-center text-gray-400">
                <p>&copy; 2023 Sunshine Elementary School | Anytown School District</p>
                <div class="mt-2">
                    <a href="#" class="text-gray-400 hover:text-accent transition mx-2">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-accent transition mx-2">Terms of Use</a>
                    <a href="#" class="text-gray-400 hover:text-accent transition mx-2">Site Map</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Navigation functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Get all navigation links
            const navLinks = document.querySelectorAll('.nav-link');
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const mobileMenu = document.getElementById('mobileMenu');
            
            // Mobile menu toggle
            mobileMenuBtn.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
            
            // Handle navigation clicks
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Get the target section ID from the href attribute
                    const targetId = this.getAttribute('href').substring(1);
                    
                    // Hide all page sections
                    document.querySelectorAll('.page-section').forEach(section => {
                        section.classList.remove('active');
                    });
                    
                    // Show the target section
                    document.getElementById(targetId).classList.add('active');
                    
                    // Close mobile menu if open
                    mobileMenu.classList.add('hidden');
                    
                    // Scroll to top
                    window.scrollTo(0, 0);
                });
            });
            
            // Handle direct URL hashes
            if (window.location.hash) {
                const targetId = window.location.hash.substring(1);
                if (document.getElementById(targetId)) {
                    // Hide all page sections
                    document.querySelectorAll('.page-section').forEach(section => {
                        section.classList.remove('active');
                    });
                    
                    // Show the target section
                    document.getElementById(targetId).classList.add('active');
                }
            }
        });
    </script>
</body>
</html>