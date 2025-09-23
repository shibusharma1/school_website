<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Sunshine Elementary School</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4a6fa5',
                        secondary: '#166d67',
                        accent: '#fd7e14',
                        dark: '#343a40',
                        admin: '#1e293b',
                        adminLight: '#334155',
                        adminAccent: '#0ea5e9',
                    }
                }
            }
        }
    </script>
    <style>
        .sidebar {
            width: 250px;
            transition: all 0.3s ease;
        }

        .main-content {
            margin-left: 250px;
            transition: all 0.3s ease;
        }

        .sidebar.collapsed {
            width: 80px;
        }

        .sidebar.collapsed+.main-content {
            margin-left: 80px;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 80px;
            }

            .main-content {
                margin-left: 80px;
            }

            .sidebar-mobile-text {
                display: none;
            }
        }

        .chart-container {
            position: relative;
            height: 250px;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">
    <!-- Admin Panel Layout -->
    <div class="flex">

        @include('layout.admin.partials.sidebar')

        <!-- Main Content -->
        <div class="main-content w-full min-h-screen">
            @include('layout.admin.partials.topbar')

            <!--dashboard yeild-->
            @yield('contents')
            <!-- Other sections would be added here (Pages, News, Staff, Students, Parents, Media, Settings) -->

            <!-- Pages Section -->
            <section id="pages" class="admin-section p-6 hidden">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-semibold">Manage Pages</h3>
                        <button class="bg-adminAccent text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                            <i class="fas fa-plus mr-2"></i> Add New Page
                        </button>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th
                                        class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Page Title</th>
                                    <th
                                        class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Last Modified</th>
                                    <th
                                        class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status</th>
                                    <th
                                        class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="text-sm font-medium text-gray-900">Home Page</div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-9">May 15, 2023</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Published</span>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <button class="text-blue-600 hover:text-blue-900 mr-3">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>
                                        <button class="text-red-600 hover:text-red-900">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </td>
                                </tr>
                                <!-- More rows would be here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- Other sections would be implemented similarly -->

        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Sidebar toggle functionality
            const sidebarToggle = document.getElementById('sidebarToggle');
            const sidebar = document.querySelector('.sidebar');
            const mainContent = document.querySelector('.main-content');
            const sidebarTexts = document.querySelectorAll('.sidebar-text');
            
            sidebarToggle.addEventListener('click', function() {
                sidebar.classList.toggle('collapsed');
                mainContent.classList.toggle('collapsed');
                
                // Toggle text visibility on collapse
                sidebarTexts.forEach(text => {
                    text.classList.toggle('hidden');
                });
            });
            
            // Navigation functionality
            // const navItems = document.querySelectorAll('.admin-nav-item');
            // const sections = document.querySelectorAll('.admin-section');
            // const sectionTitle = document.getElementById('adminSectionTitle');
            
            // navItems.forEach(item => {
            //     item.addEventListener('click', function(e) {
            //         e.preventDefault();
                    
            //         navItems.forEach(navItem => {
            //             navItem.classList.remove('active');
            //         });
                    
            //         this.classList.add('active');
                    
            //         sections.forEach(section => {
            //             section.classList.add('hidden');
            //             section.classList.remove('active');
            //         });
                    
            //         const sectionId = this.getAttribute('data-section');
            //         const targetSection = document.getElementById(sectionId);
            //         targetSection.classList.remove('hidden');
            //         targetSection.classList.add('active');
                    
            //         sectionTitle.textContent = this.querySelector('.sidebar-text').textContent || this.querySelector('i').className.replace(/fas fa-/g, '').replace(/-/g, ' ');
            //     });
            // });
            
            // Logout functionality
            const logoutBtn = document.getElementById('logoutBtn');
            logoutBtn.addEventListener('click', function(e) {
                e.preventDefault();
                alert('Logout functionality would be implemented here.');
                // In a real application, this would redirect to logout URL or clear session
            });
            
            // Quick action buttons
            const quickActionButtons = document.querySelectorAll('.quick-action-btn');
            quickActionButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    alert('Quick action: ' + this.querySelector('span').textContent);
                });
            });
            
            // Initialize charts
            const trafficCtx = document.getElementById('trafficChart').getContext('2d');
            const trafficChart = new Chart(trafficCtx, {
                type: 'line',
                data: {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                    datasets: [{
                        label: 'Website Visits',
                        data: [1240, 1350, 980, 1540, 1680, 920, 740],
                        borderColor: '#4a6fa5',
                        backgroundColor: 'rgba(74, 111, 165, 0.1)',
                        tension: 0.3,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                drawBorder: false
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
            
            const studentsCtx = document.getElementById('studentsChart').getContext('2d');
            const studentsChart = new Chart(studentsCtx, {
                type: 'bar',
                data: {
                    labels: ['Kindergarten', '1st Grade', '2nd Grade', '3rd Grade', '4th Grade', '5th Grade'],
                    datasets: [{
                        label: 'Number of Students',
                        data: [98, 112, 105, 120, 108, 99],
                        backgroundColor: [
                            'rgba(74, 111, 165, 0.7)',
                            'rgba(22, 109, 103, 0.7)',
                            'rgba(253, 126, 20, 0.7)',
                            'rgba(156, 39, 176, 0.7)',
                            'rgba(33, 150, 243, 0.7)',
                            'rgba(76, 175, 80, 0.7)'
                        ],
                        borderColor: [
                            'rgb(74, 111, 165)',
                            'rgb(22, 109, 103)',
                            'rgb(253, 126, 20)',
                            'rgb(156, 39, 176)',
                            'rgb(33, 150, 243)',
                            'rgb(76, 175, 80)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                drawBorder: false
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>

</html>