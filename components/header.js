document.addEventListener("DOMContentLoaded",  () => {
    const header = `
        <!-- Navbar -->
         <nav class="bg-[#803c11] shadow-sm">
            <div class="max-w-7xl mx-auto py-4">
                <div class="flex justify-between items-baseline gap-8">
                    <!-- Logo -->
                    <div class="font-semibold text-xl text-[#eda351] sm:ml-10 ">
                        <a href="#">Sum <span class="font-bold">Crunch.</span></a>
                    </div>

                    <!-- Navbar Navigation -->
                    <div class="hidden md:flex space-x-8">
                        <a href="#" class="text-white text-sm font-semibold hover:text-[#eda351] transition duration-200">Home</a>
                        <a href="#" class="text-white text-sm font-semibold hover:text-[#eda351] transition duration-200">About</a>
                        <a href="#" class="text-white text-sm font-semibold hover:text-[#eda351] transition duration-200">Contact</a>
                    </div>

                    <!-- Navbar Button -->
                    <div class="hidden md:flex space-x-4">
                        <a class="py-1 px-4 bg-[#eda351] text-white rounded-sm font-semibold text-sm hover:text-slate-700 hover:bg-slate-50" href="login.php">
                            Login
                        </a>
                    </div>


                    <!-- Hamburger Menu -->
                            <div class="md:hidden">
                                <button
                                id="mobile-menu-button"
                            class="text-white hover:text-blue-200 focus:outline-none">
                            <svg
                        class="w-6 h-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"
                        ></path>
                    </svg>
                    </button>
                    </div>
                </div>
            </div>

            <div id="menu-mobile" class="hidden md:hidden">
                <div class="space-y-1 py-2 px-2">
                    <a
                        href="#"
                        class="text-white hover:bg-[#eda351] block px-3 py-2 rounded-md font-medium transition duration-300"
                        >Home</a>
                    <a
                        href="#"
                        class="text-white hover:bg-[#eda351] block px-3 py-2 rounded-md font-medium transition duration-300"
                        >Profile
                    </a>
                    <a
                        href="#"
                        class="text-white hover:bg-[#eda351] block px-3 py-2 rounded-md font-medium transition duration-300"
                        >About</a>
                    <a
                        href="#"
                        class="text-white hover:bg-[#eda351] block px-3 py-2 rounded-md font-medium transition duration-300"
                        >Contact</a>
                </div>
            </div>
         </nav>
    `
        

        const headerContainer = document.getElementById("header")
        if(headerContainer){
            headerContainer.innerHTML = header
        }    
    
        const hamMenu = document.getElementById('mobile-menu-button');
        const menuMobile = document.getElementById('menu-mobile');
        
        hamMenu.addEventListener("click", () => {
            menuMobile.classList.toggle('hidden'); 
        })
})