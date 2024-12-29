<?php 
  include __DIR__."./_header.html";
?>

<nav class="bg-gray-800 relative z-10">
        <div class="mx-auto px-2 sm:px-6 lg:px-8 max-w-7xl">
            <div class="relative flex justify-between items-center h-16">
                <div class="left-0 absolute inset-y-0 flex items-center sm:hidden">
                        <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 justify-center sm:justify-start items-center sm:items-stretch">
                    <div class="sm:block hidden sm:ml-6">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="../index.php" class="bg-gray-900 px-3 py-2 rounded-md font-medium text-sm text-white"
                                aria-current="page">Acceuil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pt-2 pb-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="block bg-gray-900 px-3 py-2 rounded-md font-medium text-base text-white"
                    aria-current="page">Acceuil</a>
                <a href="#"
                    class="block hover:bg-gray-700 px-3 py-2 rounded-md font-medium text-base text-gray-300 hover:text-white">Account</a>
                <a href="#"
                    class="block hover:bg-gray-700 px-3 py-2 rounded-md font-medium text-base text-gray-300 hover:text-white">Projects</a>
                <a href="#"
                    class="block hover:bg-gray-700 px-3 py-2 rounded-md font-medium text-base text-gray-300 hover:text-white">Calendar</a>
            </div>
        </div>
    </nav>
  