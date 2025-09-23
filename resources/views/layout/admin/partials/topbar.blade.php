            <!-- Top Navigation -->
            <header class="bg-white shadow-sm">
                <div class="flex justify-between items-center p-4">
                    <div>
                        <h2 class="text-xl font-semibold" id="adminSectionTitle">@yield('page-heading')</h2>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <button class="text-gray-500">
                                <i class="fas fa-bell"></i>
                                <span class="absolute top-0 right-0 bg-red-500 text-white rounded-full w-4 h-4 text-xs flex items-center justify-center">3</span>
                            </button>
                        </div>
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full bg-adminAccent text-white flex items-center justify-center font-bold">AD</div>
                            <div class="ml-2">
                                <p class="text-sm font-medium">Admin User</p>
                                <p class="text-xs text-gray-500">Super Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>