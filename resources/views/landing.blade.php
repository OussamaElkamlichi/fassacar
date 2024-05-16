@extends('layout')
@section('landing')
{{-- 
<div class="flex flex-wrap place-items-center ">
  <section class="relative mx-auto">
      <!-- navbar -->
   
    
  </section>
</div> --}}
<!-- Does this resource worth a follow? -->
{{-- <div class="absolute bottom-0 right-0 mb-4 mr-4 z-10">
    <div>
        <a title="Follow me on twitter" href="https://www.twitter.com/asad_codes" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
            <img class="object-cover object-center w-full h-full rounded-full" src="https://www.imore.com/sites/imore.com/files/styles/large/public/field/image/2019/12/twitter-logo.jpg"/>
        </a>
    </div>
</div> --}}
<div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
  <div class="md:h-64">

      <video class="absolute inset-0 -z-10 lg:h-full w-full object-cover object-right md:object-center brightness-50"
          autoplay loop muted>
          <source src="{{ asset('videos/181537-866999852_small.mp4') }}" type="video/mp4">

      </video>
  </div>

 

  <div class=" mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6 lg:mt-32">
    <div class="lg:grid lg:grid-cols-12 lg:gap-8">
      <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
        <h1>
          <span class="block text-sm font-semibold uppercase tracking-wide text-gray-500 sm:text-base lg:text-sm xl:text-base">Coming soon</span>
          <span class="mt-1 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl">
            <span class="block text-gray-900">Welcome to Fassacar</span>
            <span class="block text-red-600">Renting cars easily</span>
          </span>
        </h1>
        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
          Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua ad ad non deserunt sunt.
        </p>
        <div class="mt-8 sm:max-w-lg sm:mx-auto sm:text-center lg:text-left lg:mx-0">
        
          <a href="/register">
            <button type="submit" class="mt-3 w-full px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 shadow-sm hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:flex-shrink-0 sm:inline-flex sm:items-center sm:w-auto">
              Sign up
            </button>
</a>
         
        </div>
      </div>
      <div class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
        <svg class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-8 scale-75 origin-top sm:scale-100 lg:hidden" width="640" height="784" fill="none" viewBox="0 0 640 784" aria-hidden="true">
          <defs>
            <pattern id="4f4f415c-a0e9-44c2-9601-6ded5a34a13e" x="118" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
              <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
            </pattern>
          </defs>
          <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor"></rect>
          <rect x="118" width="404" height="784" fill="url(#4f4f415c-a0e9-44c2-9601-6ded5a34a13e)"></rect>
        </svg>
        <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
          <button type="button" class="relative block w-full bg-black rounded-lg overflow-hidden focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span class="sr-only">Watch our video to learn more</span>
            <img class="w-full" src="./images/carbg3.jpeg" alt="">
            <div class="absolute inset-0 w-full h-full flex items-center justify-center" aria-hidden="true">
              <svg class="h-20 w-20 text-indigo-500" fill="currentColor" viewBox="0 0 84 84">
                <circle opacity="0.9" cx="42" cy="42" r="42" fill="white"></circle>
                <path d="M55.5039 40.3359L37.1094 28.0729C35.7803 27.1869 34 28.1396 34 29.737V54.263C34 55.8604 35.7803 56.8131 37.1094 55.9271L55.5038 43.6641C56.6913 42.8725 56.6913 41.1275 55.5039 40.3359Z"></path>
              </svg>
            </div>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>



 <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl lg:mx-0">
          <h2 class="text-4xl font-bold tracking-tight text-black sm:text-6xl">Unlock the key to flexible living with
              our rental options tailored just for you!</h2>
          <p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure
              qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
      </div>
      <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
          <div
              class="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 text-black sm:grid-cols-2 md:flex lg:gap-x-10">
              <a href="#">Open roles <span aria-hidden="true">&rarr;</span></a>
              <a href="#">Internship program <span aria-hidden="true">&rarr;</span></a>
              <a href="#">Our values <span aria-hidden="true">&rarr;</span></a>
              <a href="#">Meet our leadership <span aria-hidden="true">&rarr;</span></a>
          </div>
          <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
              <div class="flex flex-col-reverse">
                  <dt class="text-base leading-7 text-gray-600">Offices worldwide</dt>
                  <dd class="text-2xl font-bold leading-9 tracking-tight text-white">12</dd>
              </div>
              <div class="flex flex-col-reverse">
                  <dt class="text-base leading-7 text-gray-600">Full-time colleagues</dt>
                  <dd class="text-2xl font-bold leading-9 tracking-tight text-white">300+</dd>
              </div>
              <div class="flex flex-col-reverse">
                  <dt class="text-base leading-7 text-gray-600">Hours per week</dt>
                  <dd class="text-2xl font-bold leading-9 tracking-tight text-white">40</dd>
              </div>
              <div class="flex flex-col-reverse">
                  <dt class="text-base leading-7 text-gray-600">Paid time off</dt>
                  <dd class="text-2xl font-bold leading-9 tracking-tight text-white">Unlimited</dd>
              </div>
          </dl>
      </div>
  </div>
      {{-- <main class=" mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6 lg:mt-32">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">
          <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
            <h1>
              <span class="block text-sm font-semibold uppercase tracking-wide text-gray-500 sm:text-base lg:text-sm xl:text-base">Coming soon</span>
              <span class="mt-1 block text-4xl tracking-tight font-extrabold sm:text-5xl xl:text-6xl">
                <span class="block text-gray-900">Welcome to Fassacar</span>
                <span class="block text-red-600">Renting cars easily</span>
              </span>
            </h1>
            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
              Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua ad ad non deserunt sunt.
            </p>
            <div class="mt-8 sm:max-w-lg sm:mx-auto sm:text-center lg:text-left lg:mx-0">
            
              <a href="/register">
                <button type="submit" class="mt-3 w-full px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 shadow-sm hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:flex-shrink-0 sm:inline-flex sm:items-center sm:w-auto">
                  Sign up
                </button>
</a>
             
            </div>
          </div>
          <div class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
            <svg class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-8 scale-75 origin-top sm:scale-100 lg:hidden" width="640" height="784" fill="none" viewBox="0 0 640 784" aria-hidden="true">
              <defs>
                <pattern id="4f4f415c-a0e9-44c2-9601-6ded5a34a13e" x="118" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                  <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
                </pattern>
              </defs>
              <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor"></rect>
              <rect x="118" width="404" height="784" fill="url(#4f4f415c-a0e9-44c2-9601-6ded5a34a13e)"></rect>
            </svg>
            <div class="relative mx-auto w-full rounded-lg shadow-lg lg:max-w-md">
              <button type="button" class="relative block w-full bg-black rounded-lg overflow-hidden focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <span class="sr-only">Watch our video to learn more</span>
                <img class="w-full" src="./images/carbg3.jpeg" alt="">
                <div class="absolute inset-0 w-full h-full flex items-center justify-center" aria-hidden="true">
                  <svg class="h-20 w-20 text-indigo-500" fill="currentColor" viewBox="0 0 84 84">
                    <circle opacity="0.9" cx="42" cy="42" r="42" fill="white"></circle>
                    <path d="M55.5039 40.3359L37.1094 28.0729C35.7803 27.1869 34 28.1396 34 29.737V54.263C34 55.8604 35.7803 56.8131 37.1094 55.9271L55.5038 43.6641C56.6913 42.8725 56.6913 41.1275 55.5039 40.3359Z"></path>
                  </svg>
                </div>
              </button>
            </div>
          </div>
        </div>
      </main> --}}
    </div>
  </div>
  <section class="py-24"> 
                <div class="container mx-auto px-4 space-y-12">
                    <div class="flex flex-wrap items-center">
                        <div class="py-4 w-full lg:w-6/12">
                            <img src="https://images.unsplash.com/photo-1493238792000-8113da705763?ixid=MnwyMDkyMnwwfDF8c2VhcmNofDJ8fGNhcnxlbnwwfHx8fDE2MzE2NzIwOTU&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=1000&h=650&fit=crop" width="1000" alt="..." height="650">
                        </div>
                        <div class="py-4 w-full lg:w-6/12">
                            <div class="bg-red-600 lg:-ml-12 lg:pl-12 lg:py-12">
                                <h2 class="mb-2 text-black text-xl">Rental Cars &amp; Much More</h2>
                                <h3 class="capitalize font-bold mb-4 text-4xl text-white xl:text-5xl">Experience a Rental service like never before</h3>
                                <div class="bg-red-500 mb-6 pb-1 w-2/12"></div>
                                <p class="mb-6">Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet. Curabitur ac sagittis neque, vel egestas est.</p>
                                <a href="#" class="bg-red-500 hover:bg-red-600 inline-block px-6 py-2 text-white">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center">
                        <div class="py-4 w-full lg:w-4/12 xl:mr-auto xl:w-3/12">
                            <h4 class="capitalize font-bold mb-2 text-3xl text-gray-900">Our Service is Built With Trusr</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="py-4 w-full lg:w-8/12">
                            <div class="-mx-4 flex flex-wrap"> 
                                <div class="p-4 w-full md:w-4/12"> 
                                    <div> 
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65 65" xml:space="preserve" fill-rule="evenodd" clip-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="2" stroke="currentColor" width="5rem" height="5rem" class="h-20 mb-3 text-red-500 w-20">
                                            <path d="M13 50v-1.849a2.73 2.73 0 0 0-.741-1.87l-4.038-4.293A4.499 4.499 0 0 1 7 38.907V21.998A2.998 2.998 0 0 1 9.998 19h.004A2.999 2.999 0 0 1 13 21.998V27m38 23v-1.849c0-.695.265-1.364.741-1.87l4.038-4.293A4.499 4.499 0 0 0 57 38.907V21.998A2.998 2.998 0 0 0 54.002 19h-.004A2.999 2.999 0 0 0 51 21.998V27M29 56.379v-4.933c0-.383-.152-.751-.424-1.022A1.442 1.442 0 0 0 27.554 50H13.446c-.383 0-.751.152-1.022.424A1.442 1.442 0 0 0 12 51.446v4.933m23 0v-4.933c0-.383.152-.751.424-1.022A1.442 1.442 0 0 1 36.446 50h14.108c.383 0 .751.152 1.022.424.272.271.424.639.424 1.022v4.933" fill="none" stroke-width="2"></path>
                                            <path d="M28 50v-5.491c0-2.439-1-4.771-2.767-6.453l-7.49-7.13a2.71 2.71 0 0 0-3.785.047l-.002.002a2.767 2.767 0 0 0 0 3.912l4.527 4.527M36 50v-5.491c0-2.439 1-4.771 2.767-6.453l7.49-7.13a2.71 2.71 0 0 1 3.785.047l.002.002a2.767 2.767 0 0 1 0 3.912l-4.527 4.527M22.25 16.464a1.499 1.499 0 0 1 1.5-1.5h3.75a1.5 1.5 0 0 0 1.5-1.5V9.5A1.5 1.5 0 0 1 30.5 8h3A1.5 1.5 0 0 1 35 9.5v3.964a1.5 1.5 0 0 0 1.5 1.5h3.75a1.5 1.5 0 0 1 1.5 1.5V19.5a1.503 1.503 0 0 1-1.5 1.5H36.5a1.503 1.503 0 0 0-1.5 1.5v4a1.5 1.5 0 0 1-1.5 1.5h-3a1.5 1.5 0 0 1-1.5-1.5v-4a1.503 1.503 0 0 0-1.5-1.5h-3.75a1.503 1.503 0 0 1-1.5-1.5v-3.036z" fill="none" stroke-width="2"></path>
                                        </svg>
                                        <h4 class="font-bold text-gray-900 text-xl">Insured &amp; Safe</h4> 
                                    </div>                                     
                                </div>
                                <div class="p-4 w-full md:w-4/12"> 
                                    <div> 
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65 65" xml:space="preserve" fill-rule="evenodd" clip-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="2" stroke="currentColor" width="5rem" height="5rem" class="h-20 mb-3 text-red-500 w-20">
                                            <path d="M49.972 21.334c.003-2.264.011-4.339.028-5.976a2.574 2.574 0 0 0-1.082-2.109 2.596 2.596 0 0 0-2.344-.351m-.249.334-.002.001m-16.987-.534a17.589 17.589 0 0 1-11.907.2l-.003-.001A2.596 2.596 0 0 0 14 15.358v18.717m17.455 18.167 11.83-6.799" fill="none" stroke-width="2"></path>
                                            <path d="M54 14.908a6.172 6.172 0 0 0-8.146-5.848l-.002.001a14.905 14.905 0 0 1-9.999-.166l-2.623-.984a3.507 3.507 0 0 0-2.46 0l-2.623.984a14.905 14.905 0 0 1-9.999.166l-.002-.001A6.172 6.172 0 0 0 10 14.908V34.14a17.257 17.257 0 0 0 8.263 14.728l11.35 6.93a3.504 3.504 0 0 0 3.573.048l12.156-6.986A17.256 17.256 0 0 0 54 33.898v-18.99z" fill="none" stroke-width="2" stroke-linecap="butt"></path>
                                            <circle cx="32" cy="26" r="5" fill="none" stroke-width="2"></circle>
                                            <path d="M21.169 40.5C23.64 36.554 27.574 34 32 34c4.426 0 8.36 2.554 10.831 6.5" fill="none" stroke-width="2"></path>
                                        </svg>
                                        <h4 class="font-bold text-gray-900 text-xl">Certified Chauffeur</h4> 
                                    </div>                                     
                                </div>
                                <div class="p-4 w-full md:w-4/12"> 
                                    <div> 
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65 65" xml:space="preserve" fill-rule="evenodd" clip-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="2" stroke="currentColor" width="5rem" height="5rem" class="h-20 mb-3 text-red-500 w-20">
                                            <path d="M38.028 13.749c8.148 2.342 14.116 9.856 14.116 18.753m-.479 4.315c-1.966 8.695-9.745 15.195-19.03 15.195m-4.854-.61c-8.423-2.159-14.656-9.807-14.656-18.9m.48-4.314c1.966-8.695 9.744-15.195 19.03-15.195m0 33.193v7.316m-13.1-7.9 1.674-1.674m-2.258-11.426h-7.316m7.9-13.099 1.674 1.674m11.426-9.575v7.317m11.425 2.258 1.674-1.674m7.901 13.099h-7.316M44.06 43.928l1.674 1.674" fill="none" stroke-width="2"></path>
                                            <circle cx="32.635" cy="32.502" r="26" fill="none" stroke-width="2"></circle>
                                            <path d="M37.039 34.711a2.369 2.369 0 0 1 1.652 2.01l.214 2a2.177 2.177 0 0 1-2.167 2.412h-.001c-5.92 0-10.727-4.807-10.727-10.728 0-1.799.444-3.495 1.228-4.985a2.779 2.779 0 0 1 2.365-1.44c.457-.051.973-.064 1.467-.077a1.956 1.956 0 0 1 2.004 2.038l-.17 4.093a1.522 1.522 0 0 1-.934 1.34l-1.584.66a6.562 6.562 0 0 0 2.251 3.485l1.456-1.725 2.946.917z" fill="none" stroke-width="2"></path>
                                        </svg>
                                        <h4 class="font-bold text-gray-900 text-xl">24/7 Support</h4> 
                                    </div>                                     
                                </div>                                 
                            </div>
                        </div>
                    </div>
                </div>                 
            </section>
          
  <!-- <hr class="my-6 border-[#023e8a] md:my-8 dark:border-[#023e8a] border-8" /> -->

  @endsection