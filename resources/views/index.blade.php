@extends('layouts.app')

@section('content')
    
<section id="hero" class="mx-32">
            <h2 class="mt-3 text-2xl items-center font-bold tracking-tight  text-gray-900">Explore</h2>
    
            <div class="container  flex flex-col-reverse items-center px-6 mx-10 mt-10  space-y-0 md:flex-row md:space-y-0 h-96">
                <!-- <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2> -->
    
                <div id="default-carousel" class="w-full h-96 " data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative  overflow-hidden rounded-lg md:h-96">
                         <!-- Item 1 -->
                        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                            <img src="img/EGS_GenshinImpact_miHoYoLimited_S1_2560x1440-91c6cd7312cc2647c3ebccca10f30399.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover h-96" alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                            <img src="img/header.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover h-96" alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                            <img src="img/league-of-legends-pc-game-cover.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover h-96" alt="...">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                            <img src="img/mobile-legends-bang-bang.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover h-96" alt="...">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                            <img src="img/PUBG_NewKeyArt2022.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover h-96" alt="...">
                        </div>
                    </div>
    
                
                </div>
    
                  
    
     
    
                <!-- Left Item -->
                <!-- <div class="flex flex-col mb-32 space-y-12 md:w-1/2 ">
                    <h1 class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left">
                        Bring everyone together to build better products
                    </h1>
                    <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti vel tempore possimus aperiam? Quia officia ab assumenda maiores in, rerum animi pariatur atque, corporis iusto sint natus quibusdam earum modi.
                    </p>
    
                    <div class="flex justify-center md:justify-start">
                        <a href="#" class="p-3 pt-2  text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight">
                            Get Started
                        </a>
                    </div>
                    
                </div> -->
                <!-- Right Image -->
                
                <div class="md:w-1/2">
                    <!-- <img src="img/illustration-intro.svg" alt=""> -->
                    <h1 class="mb-3 max-w-md text-4xl font-bold text-center md:text-4xl md:text-left">
                        Game Descriptions
                    </h1>
                    <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti vel tempore possimus aperiam? Quia officia ab assumenda maiores in, rerum animi pariatur atque, corporis iusto sint natus quibusdam earum modi.
                    </p>
                </div>
            </div>
</section>
    
<section id="Popular_Games" class="mx-32">
            <div class="bg-white">
                <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                  <h2 class="text-2xl font-bold tracking-tight text-gray-900">Popular Games</h2>
              
                  <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                    <div class="group relative">
                      <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src="img/300px-Genshin_Impact_cover.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-contain object-center lg:h-full lg:w-full">
                      </div>
                      <div class="mt-4 flex justify-between">
                        <div>
                          <h3 class="text-sm text-gray-700">
                            <a href="#">
                              <span aria-hidden="true" class="absolute inset-0"></span>
                              Game Name
                            </a>
                          </h3>
                          <p class="mt-1 text-sm text-gray-500">Genre</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">$35</p>
                      </div>
                    </div>
            
                    <div class="group relative">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                          <img src="img/gametiles_com.mobile.legends.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-contain object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                          <div>
                            <h3 class="text-sm text-gray-700">
                              <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Game Name
                              </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Genre</p>
                          </div>
                          <p class="text-sm font-medium text-gray-900">$35</p>
                        </div>
                      </div>
            
                      <div class="group relative">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                          <img src="img/co6jbi.webp" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-contain object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                          <div>
                            <h3 class="text-sm text-gray-700">
                              <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Game Name
                              </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Genre</p>
                          </div>
                          <p class="text-sm font-medium text-gray-900">$35</p>
                        </div>
                      </div>
            
                      <div class="group relative">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                          <img src="img/league-of-legends-personajes-poster-3154.webp" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                          <div>
                            <h3 class="text-sm text-gray-700">
                              <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Game Name
                              </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Genre</p>
                          </div>
                          <p class="text-sm font-medium text-gray-900">$35</p>
                        </div>
                      </div>
            
                      <div class="group relative">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                          <img src="img/300px-Genshin_Impact_cover.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-contain object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                          <div>
                            <h3 class="text-sm text-gray-700">
                              <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Game Name
                              </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Genre</p>
                          </div>
                          <p class="text-sm font-medium text-gray-900">$35</p>
                        </div>
                      </div>
              
                      <div class="group relative">
                          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <img src="img/gametiles_com.mobile.legends.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-contain object-center lg:h-full lg:w-full">
                          </div>
                          <div class="mt-4 flex justify-between">
                            <div>
                              <h3 class="text-sm text-gray-700">
                                <a href="#">
                                  <span aria-hidden="true" class="absolute inset-0"></span>
                                  Game Name
                                </a>
                              </h3>
                              <p class="mt-1 text-sm text-gray-500">Genre</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">$35</p>
                          </div>
                        </div>
              
                        <div class="group relative">
                          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <img src="img/co6jbi.webp" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-contain object-center lg:h-full lg:w-full">
                          </div>
                          <div class="mt-4 flex justify-between">
                            <div>
                              <h3 class="text-sm text-gray-700">
                                <a href="#">
                                  <span aria-hidden="true" class="absolute inset-0"></span>
                                  Game Name
                                </a>
                              </h3>
                              <p class="mt-1 text-sm text-gray-500">Genre</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">$35</p>
                          </div>
                        </div>
              
                        <div class="group relative">
                          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <img src="img/league-of-legends-personajes-poster-3154.webp" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                          </div>
                          <div class="mt-4 flex justify-between">
                            <div>
                              <h3 class="text-sm text-gray-700">
                                <a href="#">
                                  <span aria-hidden="true" class="absolute inset-0"></span>
                                  Game Name
                                </a>
                              </h3>
                              <p class="mt-1 text-sm text-gray-500">Genre</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">$35</p>
                          </div>
                        </div>
              
                    <!-- More products... -->
                  </div>
                </div>
            </div>
        
    
</section>

<section id="collections" class="mx-32">
  <div class="bg-gray-100">
      <div class="mx-auto max-w-7xl  ">
        <div class="mx-10 max-w-7xl py-16  lg:max-w-none">
          <h2 class="text-2xl font-bold text-gray-900">Collections</h2>
    
          <div class="mt-6 space-y-10 grid grid-cols-3 gap-x-6">
            <div class="group relative">
              <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                <img src="img/mobile-legends-bang-bang.jpg" alt="Game Collections" class="h-full w-full object-contain object-center">
              </div>
              <h3 class="mt-6 text-sm text-gray-500">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Collection Genres
                </a>
              </h3>
              <p class="text-base font-semibold text-gray-900">Collection Items</p>
            </div>
            <div class="group relative">
              <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                <img src="img/header.jpg" alt="Game Collections" class="h-full w-full object-contain object-center">
              </div>
              <h3 class="mt-6 text-sm text-gray-500">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Collection Genres
                </a>
              </h3>
              <p class="text-base font-semibold text-gray-900">Collection Items</p>
            </div>
            <div class="group relative">
              <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                <img src="img/league-of-legends-pc-game-cover.jpg" alt="Game Collections" class="h-full w-full object-contain object-center">
              </div>
              <h3 class="mt-6 text-sm text-gray-500">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  Collection Genre
                </a>
              </h3>
              <p class="text-base font-semibold text-gray-900">Collection Items</p>
            </div>
          </div>
        </div>
      </div>
    </div>


</section>

   
@endsection