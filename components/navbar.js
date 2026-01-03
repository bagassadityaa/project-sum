document.addEventListener("DOMContentLoaded", () => {
  const navbar = `
        <!-- Navbar -->
            <nav class="bg-[#eda351] shadow-sm">
                <div class="mas-w-7xl mx-auto py-4 px-2">
                    <div class="flex">

                    <!-- Hamburger Menu -->
                    <div class="flex ml-5">
                        <button id="ham-menu"class="absolute text-white hover:text-[#803c11] focus:outline-none">
                            <svg class="w-6 h-6" fill="none"stroke="currentColor"viewBox="0 0 24 24">
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"
                        ></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Logo -->
                        <div class="text-[#803c11] font-bold text-lg mx-auto justify-center hover:text-white text-center">
                           <a href="#"> sum crunch</a>
                        </div>
                    </div>
                </div>
            </nav>

        <!-- Menu Sidebar -->
          <div id="sidebar-overlay" class="fixed inset-0 bg-opacity-50 opacity-0 pointer-events-none transition-opacity duration-300 z-40"></div>

             <div id="mobile-sidebar" class="fixed inset-y-0 left-0 w-64 bg-white shadow-xl transform -translate-x-full transition-transform duration-300 ease-in-out z-50 ">
                <!-- header sidebar dan tombol close -->
        <div class="flex items-center justify-between p-4 bg-[#803c11]">
            <h2 class="text-white text-xl font-bold">Menu</h2>
            <button id="close-sidebar-button" class="text-white hover:text-blue-200 focus:outline-none">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <div class="p-4 overflow-y-auto h-full">
            <nav class="space-y-2">
                <a href="#" class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition duration-200">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    <span class="font-medium">Dashboard</span>
                </a>

                <a href="admin.php" class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition duration-200">
                    <svg class="w-6 h-6 text-balck" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                     <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd"/>
                    </svg>
                    <span class="font-medium">Database</span>
                </a>

                <a href="tambah.php" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-gray-100 transition duration-200">
                    <svg class="w-6 h-6 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12h4m-2 2v-4M4 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>
                    <span>Tambah Database</span>
                </a>

                 <a href="edit.php" class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-gray-100 transition duration-200">
                    <svg class="w-6 h-6 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                     <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="2" d="M7 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h1m4-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm7.441 1.559a1.907 1.907 0 0 1 0 2.698l-6.069 6.069L10 19l.674-3.372 6.07-6.07a1.907 1.907 0 0 1 2.697 0Z"/>
                /svg>

                    <span>Edit Database</span>
                </a>
            </nav>

            <!-- Divider/garis pemisah -->
            <div class="my-4 border-t border-gray-200"></div>

            <div class="px-4 py-2">
                <p class="text-xs text-gray-500 uppercase font-semibold mb-2">Akun</p>
                <a href="../login.php" class="flex items-center space-x-3 px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg transition duration-200">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                    </svg>
                    <span  class="font-medium">Logout</span>
                </a>
            </div>
        </div>
    </div>
    `;
  const navbarContainer = document.getElementById("navbar");
  if (navbarContainer) {
    navbarContainer.innerHTML = navbar;
  }

  const mobileMenuButton = document.getElementById("ham-menu");
  const mobileSidebar = document.getElementById("mobile-sidebar");
  const closeSidebarButton = document.getElementById("close-sidebar-button");
  const sidebarOverlay = document.getElementById("sidebar-overlay");

  function openSidebar() {
    mobileSidebar.classList.remove("-translate-x-full");
    mobileSidebar.classList.add("translate-x-0");

    sidebarOverlay.classList.remove("opacity-0", "pointer-events-none");
    sidebarOverlay.classList.add("opacity-100", "pointer-events-auto");
  }

  function closeSidebar() {
    mobileSidebar.classList.remove("translate-x-0");
    mobileSidebar.classList.add("-translate-x-full");

    sidebarOverlay.classList.remove("opacity-100", "pointer-events-auto");
    sidebarOverlay.classList.add("opacity-0", "pointer-events-none");
  }

  mobileMenuButton.addEventListener("click", openSidebar);
  closeSidebarButton.addEventListener("click", closeSidebar);
  sidebarOverlay.addEventListener("click", closeSidebar);
});
