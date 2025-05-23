@props(['Tailwind'=>1,'active'=>'Dashboard','Users','Orders','Properties','Profit'])
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<x-guest-layout :$Tailwind>

    <div class=" overflow-hidden flex flex-col  justify-center">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

        <div x-data="{ sidebarOpen: false }" class="flex  bg-gray-200">
            <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
                class="fixed  transition-opacity bg-black opacity-50 lg:hidden"></div>

            <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
                class="fixed  w-64 overflow-y-auto transition duration-300 transform bg-[#00B98E] lg:translate-x-0 lg:static lg:inset-0">
                
                <x-Layouts.admin-header :$active />
                
            </div>
            <div class="flex flex-col flex-1 overflow-hidden">
                <header class="flex items-center justify-between px-6 py-4 bg-white border-b-4 border-[#00B98E]">
                    <div class="flex items-center">
                        <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>

                        <div class="relative mx-4 lg:mx-0">



                        </div>
                    </div>

                    <div class="flex items-center">
                       

                        <div x-data="{ dropdownOpen: false }" class="relative">
                            <button @click="dropdownOpen = ! dropdownOpen"
                                class="relative block w-12 h-12 overflow-hidden rounded-full shadow focus:outline-none">
                                <img class="object-cover w-full h-full"
                                    src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=296&amp;q=80"
                                    alt="Your avatar">
                            </button>

                            <div x-show="dropdownOpen" @click="dropdownOpen = false"
                                class="fixed inset-0 z-10 w-full h-full" style="display: none;"></div>

                            <div x-show="dropdownOpen"
                                class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl"
                                style="display: none;">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a>

                                <a href="{{route('logout')}}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>
                            </div>
                        </div>
                    </div>
                </header>
            
                     
                        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <div class="container px-6 py-8 mx-auto">
                        <h3 class="text-3xl font-medium text-gray-700">Dashboard</h3>

                        <div class="container mt-4">
                            <div class="row g-4">
                                <div class="col-12 col-sm-6 col-xl-3">
                                    <div class="d-flex align-items-center p-4 bg-white rounded shadow-sm">
                                        <div class="p-3 bg-primary bg-opacity-75 rounded-circle">
                                            <svg class="w-8 h-8 text-white" viewBox="0 0 28 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18.2 9.08889C18.2 11.5373 16.3196 13.5222 14 13.5222C11.6804 13.5222 9.79999 11.5373 9.79999 9.08889C9.79999 6.64043 11.6804 4.65556 14 4.65556C16.3196 4.65556 18.2 6.64043 18.2 9.08889Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M25.2 12.0444C25.2 13.6768 23.9464 15 22.4 15C20.8536 15 19.6 13.6768 19.6 12.0444C19.6 10.4121 20.8536 9.08889 22.4 9.08889C23.9464 9.08889 25.2 10.4121 25.2 12.0444Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M19.6 22.3889C19.6 19.1243 17.0927 16.4778 14 16.4778C10.9072 16.4778 8.39999 19.1243 8.39999 22.3889V26.8222H19.6V22.3889Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M8.39999 12.0444C8.39999 13.6768 7.14639 15 5.59999 15C4.05359 15 2.79999 13.6768 2.79999 12.0444C2.79999 10.4121 4.05359 9.08889 5.59999 9.08889C7.14639 9.08889 8.39999 10.4121 8.39999 12.0444Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M22.4 26.8222V22.3889C22.4 20.8312 22.0195 19.3671 21.351 18.0949C21.6863 18.0039 22.0378 17.9556 22.4 17.9556C24.7197 17.9556 26.6 19.9404 26.6 22.3889V26.8222H22.4Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M6.64896 18.0949C5.98058 19.3671 5.59999 20.8312 5.59999 22.3889V26.8222H1.39999V22.3889C1.39999 19.9404 3.2804 17.9556 5.59999 17.9556C5.96219 17.9556 6.31367 18.0039 6.64896 18.0949Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                        <div class="ms-3 flex justify-between items-center w-full">
                                            <div>
                                            <h4 class="fw-semibold text-dark">{{$Users->count();}}</h4>
                                            <div class="text-muted">Users</div>
                                            </div>
                                            <div>
                                                <svg class="w-16 h-16" viewBox="0 0 36 36" placeholder="8,828">
                                                    <circle class="text-gray-200" stroke-width="3" stroke="currentColor"
                                                        fill="transparent" r="15" cx="18" cy="18" />
                                                    <circle class="text-blue-500" stroke-width="3" stroke="currentColor"
                                                        fill="transparent" stroke-dasharray="75, 100"
                                                        stroke-linecap="round" r="15" cx="18" cy="18" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-xl-3">
                                    <div class="d-flex align-items-center p-4 bg-white rounded shadow-sm">
                                        <div class="p-3 bg-warning bg-opacity-75 rounded-circle">
                                            <svg class="w-8 h-8 text-white" viewBox="0 0 28 28" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.19999 1.4C3.4268 1.4 2.79999 2.02681 2.79999 2.8C2.79999 3.57319 3.4268 4.2 4.19999 4.2H5.9069L6.33468 5.91114C6.33917 5.93092 6.34409 5.95055 6.34941 5.97001L8.24953 13.5705L6.99992 14.8201C5.23602 16.584 6.48528 19.6 8.97981 19.6H21C21.7731 19.6 22.4 18.9732 22.4 18.2C22.4 17.4268 21.7731 16.8 21 16.8H8.97983L10.3798 15.4H19.6C20.1303 15.4 20.615 15.1004 20.8521 14.6261L25.0521 6.22609C25.2691 5.79212 25.246 5.27673 24.991 4.86398C24.7357 4.45123 24.2852 4.2 23.8 4.2H8.79308L8.35818 2.46044C8.20238 1.83722 7.64241 1.4 6.99999 1.4H4.19999Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M22.4 23.1C22.4 24.2598 21.4598 25.2 20.3 25.2C19.1403 25.2 18.2 24.2598 18.2 23.1C18.2 21.9402 19.1403 21 20.3 21C21.4598 21 22.4 21.9402 22.4 23.1Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M9.1 25.2C10.2598 25.2 11.2 24.2598 11.2 23.1C11.2 21.9402 10.2598 21 9.1 21C7.9402 21 7 21.9402 7 23.1C7 24.2598 7.9402 25.2 9.1 25.2Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                        <div class="ms-3 flex justify-between items-center w-full">
                                            <div>
                                            <h4 class="fw-semibold text-dark">{{$Orders->count();}}</h4>
                                            <div class="text-muted">Total Orders</div>
                                            </div>
                                            <div>
                                                <svg class="w-16 h-16" viewBox="0 0 36 36" placeholder="8,828">
                                                    <!-- Background Circle -->
                                                    <circle class="text-gray-200" stroke-width="3" stroke="currentColor"
                                                        fill="transparent" r="15" cx="18" cy="18" />
                                                    <!-- Progress Circle -->
                                                    <circle class="text-yellow-500" stroke-width="3"
                                                        stroke="currentColor" fill="transparent"
                                                        stroke-dasharray="75, 100" stroke-linecap="round" r="15" cx="18"
                                                        cy="18" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-xl-3">
                                    <div class="d-flex align-items-center p-4 bg-white rounded shadow-sm">
                                        <div class="p-3 bg-danger bg-opacity-75 rounded-circle">
                                            <svg class="w-8 h-8 text-white" viewBox="0 0 28 28" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 10L14 2L24 10V24H4V10Z" fill="currentColor"
                                                    stroke="currentColor" stroke-width="2" stroke-linejoin="round">
                                                </path>
                                                <rect x="10" y="14" width="8" height="10" fill="white"
                                                    stroke="currentColor" stroke-width="2"></rect>
                                            </svg>

                                        </div>
                                        <div class="ms-3 flex justify-between items-center w-full">
                                            <div>
                                            <h4 class="fw-semibold text-dark">{{$Properties->count();}}</h4>
                                            <div class="text-muted">Total Properties</div>
                                            </div>

                                            <div>
                                                <svg class="w-16 h-16" viewBox="0 0 36 36">
                                                    <!-- Background Circle -->
                                                    <circle class="text-gray-200" stroke-width="3" stroke="currentColor"
                                                        fill="transparent" r="15" cx="18" cy="18" />
                                                    <!-- Progress Circle -->
                                                    <circle class="text-red-500" stroke-width="3" stroke="currentColor"
                                                        fill="transparent" stroke-dasharray="75, 100"
                                                        stroke-linecap="round" r="15" cx="18" cy="18" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-xl-3">
                                    <div class="d-flex align-items-center p-4 bg-white rounded shadow-sm">
                                        <div class="p-3 bg-success bg-opacity-75 rounded-circle">
                                            <svg class="w-8 h-8 text-white" viewBox="0 0 28 28" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.99998 11.2H21L22.4 23.8H5.59998L6.99998 11.2Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="2"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M9.79999 8.4C9.79999 6.08041 11.6804 4.2 14 4.2C16.3196 4.2 18.2 6.08041 18.2 8.4V12.6C18.2 14.9197 16.3196 16.8 14 16.8C11.6804 16.8 9.79999 14.9197 9.79999 12.6V8.4Z"
                                                    stroke="currentColor" stroke-width="2"></path>
                                            </svg>

                                        </div>
                                        <div class="ms-3 flex justify-between items-center w-full">
                                            <div>
                                            <h4 class="fw-semibold text-dark">${{$Profit}}</h4>
                                            <div class="text-muted">Profit</div>
                                            </div>
                                            <div>
                                                <svg class="w-16 h-16" viewBox="0 0 36 36">
                                                    <!-- Background Circle -->
                                                    <circle class="text-gray-200" stroke-width="3" stroke="currentColor"
                                                        fill="transparent" r="15" cx="18" cy="18" />
                                                    <!-- Progress Circle -->
                                                    <circle class="text-green-600" stroke-width="3"
                                                        stroke="currentColor" fill="transparent"
                                                        stroke-dasharray="75, 100" stroke-linecap="round" r="15" cx="18"
                                                        cy="18" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="mt-8 ">
                            <div class="w-full mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="bg-white p-6 rounded-xl shadow-md">
                                    <h2 class="text-xl font-semibold">Total Revenue</h2>
                                    <p class="text-3xl font-bold mt-2">$236,535</p>
                                    <p class="text-blue-500 text-sm flex items-center mt-1">
                                        <span class="text-lg">⬆</span> 0.8% Than Last Month
                                    </p>
                                    <canvas id="revenueChart" class="mt-4"></canvas>
                                </div>

                                <div class="bg-white p-6 rounded-xl shadow-md">
                                    <h2 class="text-xl font-semibold">Total Revenue</h2>
                                    <div class="mt-4 space-y-3">
                                        <div>
                                            <p class="text-gray-600">Real Estate Listing Marketplaces <span
                                                    class="float-right">64%</span></p>
                                            <div class="w-full bg-gray-200 h-2 rounded-full">
                                                <div class="bg-purple-500 h-2 rounded-full" style="width: 64%;"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-gray-600">Property Center Website wishlist <span
                                                    class="float-right">40%</span></p>
                                            <div class="w-full bg-gray-200 h-2 rounded-full">
                                                <div class="bg-green-500 h-2 rounded-full" style="width: 40%;"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-gray-600">Paid Property <span class="float-right">50%</span>
                                            </p>
                                            <div class="w-full bg-gray-200 h-2 rounded-full">
                                                <div class="bg-yellow-500 h-2 rounded-full" style="width: 50%;"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-gray-600">Agent Fees & Property Referrals <span
                                                    class="float-right">80%</span></p>
                                            <div class="w-full bg-gray-200 h-2 rounded-full">
                                                <div class="bg-pink-500 h-2 rounded-full" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-gray-600">Others <span class="float-right">15%</span></p>
                                            <div class="w-full bg-gray-200 h-2 rounded-full">
                                                <div class="bg-red-500 h-2 rounded-full" style="width: 15%;"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                              </div>
                </main>
            </div>
        </div>
    </div>
    <script>
        const ctx = document.getElementById('revenueChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                datasets: [
                    {
                        label: 'Last Month',
                        data: [180, 120, 100, 50, 150, 160, 90],
                        backgroundColor: 'rgba(74,100,254)',
                    },
                    {
                        label: 'Running Month',
                        data: [100, 90, 70, 40, 110, 120, 60],
                        backgroundColor: 'rgba(74,146,254,0.8)',
                    }
                ]
            },
            options: {
                responsive: true,
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });
    </script>
             
    
</x-guest-layout >