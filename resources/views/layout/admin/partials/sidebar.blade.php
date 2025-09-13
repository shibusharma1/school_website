{{-- @extends('layout.app') --}}
        <!-- Sidebar -->
        <div class="sidebar bg-admin text-white h-screen fixed top-0 left-0 overflow-y-auto">
            <div class="p-4 border-b border-adminLight">
                <div class="flex items-center justify-between">
                    <h1 class="text-xl font-bold">
                        <span class="sidebar-text">Admin Panel</span>
                        <span class="sidebar-mobile-text">Admin</span>
                    </h1>
                    <button id="sidebarToggle" class="text-white">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
            
            <div class="p-4">
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="admin-nav-item active" data-section="dashboard">
                            <i class="fas fa-tachometer-alt w-6"></i>
                            <span class="sidebar-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="admin-nav-item" data-section="pages">
                            <i class="fas fa-file-alt w-6"></i>
                            <span class="sidebar-text">Pages</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="admin-nav-item" data-section="news">
                            <i class="fas fa-newspaper w-6"></i>
                            <span class="sidebar-text">News & Events</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="admin-nav-item" data-section="staff">
                            <i class="fas fa-chalkboard-teacher w-6"></i>
                            <span class="sidebar-text">Staff Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="admin-nav-item" data-section="students">
                            <i class="fas fa-user-graduate w-6"></i>
                            <span class="sidebar-text">Students</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="admin-nav-item" data-section="parents">
                            <i class="fas fa-users w-6"></i>
                            <span class="sidebar-text">Parents</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="admin-nav-item" data-section="media">
                            <i class="fas fa-images w-6"></i>
                            <span class="sidebar-text">Media Library</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="admin-nav-item" data-section="settings">
                            <i class="fas fa-cog w-6"></i>
                            <span class="sidebar-text">Settings</span>
                        </a>
                    </li>
                </ul>
                
                <div class="pt-10 mt-10 border-t border-adminLight">
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="admin-nav-item" id="logoutBtn">
                                <i class="fas fa-sign-out-alt w-6"></i>
                                <span class="sidebar-text">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>