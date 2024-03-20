@extends('layouts.app')

@section('content')

<div class="bg-white">
    <div class="pt-6">
      <nav aria-label="Breadcrumb">
        <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
          <li>
            <div class="flex items-center">
              <a href="#" class="mr-2 text-sm font-medium text-gray-900">Main</a>
              <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
              </svg>
            </div>
          </li>
          <li>
            <div class="flex items-center">
              <a href="#" class="mr-2 text-sm font-medium text-gray-900">Details</a>
              <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
              </svg>
            </div>
          </li>
        </ol>
      </nav>
  
      <!-- Image gallery -->
      <div class="mx-auto h-[850px] mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
        <div class="w-auto h-[800px] overflow-hidden rounded-lg ">
          <img src="img/co6jbi.webp" alt="Game Detail" class="h-full w-full object-cover object-center">
        </div>
        
        <div class="mx-10 mt-4 lg:row-span-3 lg:mt-0">
            <h2 class="sr-only">Product information</h2>
            <p class="text-3xl tracking-tight text-gray-900">$60</p>
    
            <!-- Reviews -->
            <div class="mt-6">
              <h3 class="sr-only">Reviews</h3>
              <div class="flex items-center">
                <div class="flex items-center">
                  <!-- Active: "text-gray-900", Default: "text-gray-200" -->
                  <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                  </svg>
                  <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                  </svg>
                  <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                  </svg>
                  <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                  </svg>
                  <svg class="text-gray-200 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                  </svg>
                </div>
                <p class="sr-only">4 out of 5 stars</p>
                <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117 reviews</a>
              </div>
            </div>
            <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Product Name</h1>
            <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
              <!-- Description and details -->
              <div>
                <h3 class="sr-only">Description</h3>
      
                <div class="space-y-6">
                  <p class="text-base text-gray-900">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam asperiores nihil placeat ipsum, natus enim, iure delectus nulla temporibus alias laborum, doloribus fugiat? Doloremque quibusdam &quot;dicta nihil libero eius officiis&quot; fugiat? Quisquam, sit optio doloremque sequi laudantium natus nisi ratione excepturi eaque similique ea unde sapiente veritatis! Eum, inventore repellendus.</p>
                </div>
              </div>
      
              <div class="mt-10">
                <h3 class="text-sm font-medium text-gray-900">Highlights</h3>
      
                <div class="mt-4">
                  <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                    <li class="text-gray-400"><span class="text-gray-600">Lorem ipsum dolor sit amet.</span></li>
                    <li class="text-gray-400"><span class="text-gray-600">Lorem ipsum dolor sit amet.</span></li>
                    <li class="text-gray-400"><span class="text-gray-600">Lorem ipsum dolor sit amet.</span></li>
                    <li class="text-gray-400"><span class="text-gray-600">Lorem ipsum dolor sit amet.</span></li>
                  </ul>
                </div>
              </div>
      
              <div class="mt-10">
                <h2 class="text-sm font-medium text-gray-900">Details</h2>
      
                <div class="mt-4 space-y-6">
                  <p class="text-sm text-gray-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas facilis asperiores vitae, inventore quae possimus in amet saepe, quasi ex, dolorem iste labore iure corporis eveniet! Delectus autem corrupti magni facilis eveniet fugit dignissimos. Mollitia illum repellendus saepe animi consequuntur.</p>
                </div>
              </div>
            </div>
    

    
              <button type="submit" class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add to bag</button>
            </form>
          </div>

      </div>
    </div>
</div>

<section id="Related" class="mx-32">
  <div class="bg-white">
      <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Related</h2>
    
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
    
@endsection