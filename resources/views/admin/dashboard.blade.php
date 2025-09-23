@extends('layout.admin.app')
@section('page-heading', 'Dashboard')

@section( 'contents')
            <!-- Dashboard Section -->
            <section id="dashboard" class="admin-section active p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="stat-card bg-white rounded-lg shadow-md p-6 text-center transition-all duration-300">
                        <div class="bg-blue-100 text-blue-600 p-3 rounded-full inline-block">
                            <i class="fas fa-user-graduate text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mt-4">642</h3>
                        <p class="text-gray-600">Total Students</p>
                        <div class="mt-2 text-green-600 text-sm">
                            <i class="fas fa-arrow-up"></i> 5% from last month
                        </div>
                    </div>

                    <div class="stat-card bg-white rounded-lg shadow-md p-6 text-center transition-all duration-300">
                        <div class="bg-green-100 text-green-600 p-3 rounded-full inline-block">
                            <i class="fas fa-chalkboard-teacher text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mt-4">42</h3>
                        <p class="text-gray-600">Teaching Staff</p>
                        <div class="mt-2 text-gray-600 text-sm">
                            <i class="fas fa-minus"></i> No change
                        </div>
                    </div>

                    <div class="stat-card bg-white rounded-lg shadow-md p-6 text-center transition-all duration-300">
                        <div class="bg-purple-100 text-purple-600 p-3 rounded-full inline-block">
                            <i class="fas fa-eye text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mt-4">12,548</h3>
                        <p class="text-gray-600">Total Website Views</p>
                        <div class="mt-2 text-green-600 text-sm">
                            <i class="fas fa-arrow-up"></i> 12% from last week
                        </div>
                    </div>

                    <div class="stat-card bg-white rounded-lg shadow-md p-6 text-center transition-all duration-300">
                        <div class="bg-orange-100 text-orange-600 p-3 rounded-full inline-block">
                            <i class="fas fa-user-plus text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mt-4">28</h3>
                        <p class="text-gray-600">New Registrations</p>
                        <div class="mt-2 text-green-600 text-sm">
                            <i class="fas fa-arrow-up"></i> 8 this week
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                    <!-- Website Traffic Chart -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-lg font-semibold mb-4">Website Traffic Analytics</h3>
                        <div class="chart-container">
                            <canvas id="trafficChart"></canvas>
                        </div>
                    </div>

                    <!-- Student Distribution Chart -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-lg font-semibold mb-4">Student Distribution by Grade</h3>
                        <div class="chart-container">
                            <canvas id="studentsChart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-lg font-semibold mb-4">Recent Activity</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="bg-blue-100 text-blue-600 p-2 rounded-full mr-3">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div>
                                    <p class="font-medium">New news article added</p>
                                    <p class="text-sm text-gray-600">"Annual Science Fair Results" was published</p>
                                    <p class="text-xs text-gray-500">2 hours ago</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-green-100 text-green-600 p-2 rounded-full mr-3">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                                <div>
                                    <p class="font-medium">New student registered</p>
                                    <p class="text-sm text-gray-600">Emily Johnson joined 3rd Grade</p>
                                    <p class="text-xs text-gray-500">Yesterday</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-purple-100 text-purple-600 p-2 rounded-full mr-3">
                                    <i class="fas fa-edit"></i>
                                </div>
                                <div>
                                    <p class="font-medium">Page updated</p>
                                    <p class="text-sm text-gray-600">"About Us" page was modified</p>
                                    <p class="text-xs text-gray-500">2 days ago</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-red-100 text-red-600 p-2 rounded-full mr-3">
                                    <i class="fas fa-exclamation-circle"></i>
                                </div>
                                <div>
                                    <p class="font-medium">Website outage</p>
                                    <p class="text-sm text-gray-600">Site was down for maintenance for 30 minutes</p>
                                    <p class="text-xs text-gray-500">3 days ago</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-lg font-semibold mb-4">Quick Actions</h3>
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <a href="#" class="quick-action-btn bg-blue-100 text-blue-700 hover:bg-blue-200">
                                <i class="fas fa-plus-circle"></i>
                                <span>Add News</span>
                            </a>
                            <a href="#" class="quick-action-btn bg-green-100 text-green-700 hover:bg-green-200">
                                <i class="fas fa-calendar-plus"></i>
                                <span>Create Event</span>
                            </a>
                            <a href="#" class="quick-action-btn bg-purple-100 text-purple-700 hover:bg-purple-200">
                                <i class="fas fa-user-plus"></i>
                                <span>Add Staff</span>
                            </a>
                            <a href="#" class="quick-action-btn bg-orange-100 text-orange-700 hover:bg-orange-200">
                                <i class="fas fa-upload"></i>
                                <span>Upload Media</span>
                            </a>
                        </div>

                        <h3 class="text-lg font-semibold my-4">System Status</h3>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span>Website Uptime</span>
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">100%</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>Storage Usage</span>
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">64%</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>Last Backup</span>
                                <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">Today, 02:00
                                    AM</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>Active Users</span>
                                <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded-full">24</span>
                            </div>
                        </div>

                        <h3 class="text-lg font-semibold my-4">Registration Stats</h3>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span>This Week</span>
                                <span class="font-medium">8</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>This Month</span>
                                <span class="font-medium">28</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>This Year</span>
                                <span class="font-medium">142</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Registrations Table -->
                <div class="bg-white rounded-lg shadow-md p-6 mt-6">
                    <h3 class="text-lg font-semibold mb-4">Recent Student Registrations</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th
                                        class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Student Name</th>
                                    <th
                                        class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Grade</th>
                                    <th
                                        class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Parent Name</th>
                                    <th
                                        class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Registration Date</th>
                                    <th
                                        class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="text-sm font-medium text-gray-900">Emily Johnson</div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">3rd Grade</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Michael Johnson</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">May 20, 2023</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Completed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="text-sm font-medium text-gray-900">Daniel Lee</div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">1st Grade</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Sarah Lee</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">May 19, 2023</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Completed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="text-sm font-medium text-gray-900">Sophia Martinez</div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">2nd Grade</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Jennifer Martinez</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">May 18, 2023</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="text-sm font-medium text-gray-900">James Wilson</div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">4th Grade</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Robert Wilson</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">May 17, 2023</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Completed</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
@endsection