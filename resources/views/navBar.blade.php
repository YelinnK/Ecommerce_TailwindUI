

<nav class="relative mx-auto p-5 bg-darkGrayishBlue">
  <!-- Flex container -->
  <div class="flex items-center justify-between">
      <!-- Logo -->
      <div class="w-36 h-11">
          <img src="img/tailwindcss-mark.3c5441fc7a190fb1800d4a5c7f07ba4b1345a9c8.svg" class="object-contain w-36 h-11" alt="">
      </div>
      <!-- menu -->
      <div class=" hidden md:flex space-x-6 text-white">
          <a href="#" class="hover:text-darkBlue">Discover</a>
          <a href="#" class="hover:text-darkBlue">Browse</a>
          <a href="#" class="hover:text-darkBlue">News</a>
      </div>
      
      <!-- Left Side of Navbar -->
      <div class="hidden md:flex space-x-4 items-center">
          <!-- <img class="h-8 w-8 rounded-full" src="img/profile-user-svgrepo-com.svg" alt=""> -->

          <!-- Shopping Cart Dropdown -->
          <div class="text-center">
            <a href="#" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation"><img src="img/shopping-cart-01-svgrepo-com (1).svg" class="w-10 h-10 items-center hover:bg-gray-400 rounded-lg" alt="">
            </a>
         </div>


              <!-- Profile Dropdown -->
              <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" type="button">
              <span class="sr-only">Open user menu</span>
              <img class="w-8 h-8 rounded-full" src="img/profile-user-svgrepo-com.svg" alt="user photo">
              </button>
              
              <!-- Dropdown menu -->
              <div id="dropdownAvatar" class="z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                  <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                    <div>Bonnie Green</div>
                    <div class="font-medium truncate">name@info.com</div>
                  </div>
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserAvatarButton">
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Game Library</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                  </ul>
                  <div class="py-2">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                  </div>
              </div>


        <a href="#" class=" hidden md:block p-3 pt-2 px-6 text-white bg-brightRed rounded-xl baseline hover:bg-brightRedLight">Download</a>
    </div>
  </div>
</nav>

<section id="drawer conponent">
  <!-- drawer component -->
  <div id="drawer-navigation" class="fixed top-0 inset-y-0 right-0 z-50 w-96 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white " tabindex="-1" aria-labelledby="drawer-navigation-label">
    <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Shopping Cart</h5>
    <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Close menu</span>
    </button>
    <div class="py-4 overflow-y-auto">
      <ul class="space-y-2 font-medium">
        <li class="flex py-6">
          <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
            <img src="img/mobile-legends-bang-bang.jpg" alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch." class="h-full w-full object-cover object-center">
          </div>

          <div class="ml-4 flex flex-1 flex-col">
            <div>
              <div class="flex justify-between text-base font-medium text-gray-900">
                <h3>
                  <a href="#">Game Name</a>
                </h3>
                <p class="ml-4">$32.00</p>
              </div>
              <p class="mt-1 text-sm text-gray-500">Game Descriptions</p>
            </div>
            <div class="flex flex-1 items-end justify-between text-sm">
              <p class="text-gray-500">Qty 1</p>

              <div class="flex">
                <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
              </div>
            </div>
          </div>
        </li>
        <li class="flex py-6">
          <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
            <img src="img/mobile-legends-bang-bang.jpg" alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch." class="h-full w-full object-cover object-center">
          </div>

          <div class="ml-4 flex flex-1 flex-col">
            <div>
              <div class="flex justify-between text-base font-medium text-gray-900">
                <h3>
                  <a href="#">Game Name</a>
                </h3>
                <p class="ml-4">$40.00</p>
              </div>
              <p class="mt-1 text-sm text-gray-500">Game Descriptions</p>
            </div>
            <div class="flex flex-1 items-end justify-between text-sm">
              <p class="text-gray-500">Qty 1</p>

              <div class="flex">
                <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
              </div>
            </div>
          </div>
        </li>
        <li class="flex py-6">
          <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
            <img src="img/mobile-legends-bang-bang.jpg" alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch." class="h-full w-full object-cover object-center">
          </div>

          <div class="ml-4 flex flex-1 flex-col">
            <div>
              <div class="flex justify-between text-base font-medium text-gray-900">
                <h3>
                  <a href="#">Game Name</a>
                </h3>
                <p class="ml-4">$60.00</p>
              </div>
              <p class="mt-1 text-sm text-gray-500">Game Descriptions</p>
            </div>
            <div class="flex flex-1 items-end justify-between text-sm">
              <p class="text-gray-500">Qty 1</p>

              <div class="flex">
                <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>

    <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
     <div class="flex justify-between text-base font-medium text-gray-900">
       <p>Subtotal</p>
       <p>$262.00</p>
     </div>
     <!-- <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p> -->
     <div class="mt-6">
       <a href="#" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Checkout</a>
     </div>
     <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
       <p>
         or
         <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">
           Continue Shopping
           <span aria-hidden="true"> &rarr;</span>
         </button>
       </p>
     </div>
    </div>

  </div>
</section>


