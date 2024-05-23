
@extends('admin.layout')
@section('Content')


    <div class="container  mx-auto px-2">        
        <div class="flex flex-wrap">
            <div class="flex items-center py-4 w-full">
                <div class="w-full">                    
                    <div class="">
                        <div class="flex flex-wrap justify-between">
                            <div class="items-center ">
                                <h1 class="font-semibold text-xl mb-0 block dark:text-slate-100">Dashboard</h1>
                                <ol class="list-reset flex text-sm">
                                    <li><a href="#" class="text-gray-500">T-Wind</a></li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-gray-500">Dashboard</li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-blue-600 hover:text-blue-700">Analytics</li>
                                </ol>
                            </div>
                            <div class="flex items-center">
                                <button class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Create New</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div><!--end container-->

    <div class="container mx-auto px-2  min-h-[calc(100vh-138px)]  relative pb-14"> 
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4  mb-4">
            <div class="md:row-span-1 lg:row-span-1 xl:row-span-2 md:col-span-2 lg:col-span-2 xl:col-span-1  ">
                <div class="h-full bg-white dark:bg-slate-800 shadow rounded-md w-full p-4 relative overflow-hidden grid md:gap-4 lg:gap-2 xl:gap-4 md:grid-cols-1 lg:grid-cols-4">
                    <div class="md:col-span-4 lg:col-span-2 xl:col-span-4 self-center">
                        <h3 class="text-slate-800 dark:text-slate-200 text-center text-2xl md:text-2xl lg:text-lg xl:text-2xl font-bold leading-8 py-2 md:py-2 lg:py-1 xl:py-2"><span class="inline-block xl:block">T-Wind</span>
                        Multi Application</h3>
                        <div class="text-center text-slate-400 text-base md:text-base lg:text-sm xl:text-base font-medium py-3">We Design and Develop Clean and High Quality Web Applications</div>                
                        <div class="text-center py-3 md:mb-3 lg:mb-0 xl:mb-3">
                            <button class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Buy New</button>
                        </div>
                    </div>
                    <div class="md:col-span-4 lg:col-span-2 xl:col-span-4 block dark:hidden">
                        <img src="assets/images/widgets/user.png" alt="" class="px-3 mb-2 w-60 mx-auto">
                    </div>
                    <div class="md:col-span-4 lg:col-span-2 xl:col-span-4 hidden dark:block">
                        <img src="assets/images/widgets/user-light.png" alt="" class="px-3 mb-2 w-60 mx-auto">
                    </div>
                </div> <!--end inner-grid-->
            </div>
            <div class="sm:col-span-3 md:col-span-2 lg:col-span-2 xl:col-span-3">
                <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="md:col-span-2 lg:col-span-2 xl:col-span-1">
                        <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full p-4 relative overflow-hidden bg-[url('../images/widgets/p-1.png')] bg-no-repeat bg-contain">
                            <div class="flex justify-between xl:gap-x-2 items-cente">
                                <div class="absolute -left-6 -top-4 text-blue-500 p-3 text-center inline-flex items-center justify-center w-32 h-32 ">
                                    <i class="ti ti-users text-3xl"></i>                        
                                </div>
                                <div class="self-center ml-auto">                            
                                    <h3 class="my-1 font-semibold text-2xl dark:text-slate-200">24k</h3>
                                    <p class="text-gray-400 mb-0 font-medium">Sessions</p>
                                </div>
                            </div>
                        </div> <!--end inner-grid--> 
                    </div>
                    <div class="md:col-span-2 lg:col-span-2 xl:col-span-1">
                        <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full p-4 relative overflow-hidden bg-[url('../images/widgets/p-1.png')] bg-no-repeat bg-contain">
                            <div class="flex justify-between xl:gap-x-2 items-cente">
                                <div class="absolute -left-6 -top-4 text-blue-500 p-3 text-center inline-flex items-center justify-center w-32 h-32 ">
                                    <i class="ti ti-clock text-3xl"></i>                        
                                </div>
                                <div class="self-center ml-auto">                            
                                    <h3 class="my-1 font-semibold text-2xl dark:text-slate-200">01<span class="text-sm text-slate-500">m</span>03<span class="text-sm text-slate-500">s</span></h3>
                                    <p class="text-gray-400 mb-0 font-medium">Avg.Sessions</p>
                                </div>
                            </div>
                        </div> <!--end inner-grid--> 
                    </div>
                    <div class="md:col-span-2 lg:col-span-2 xl:col-span-1">
                        <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full p-4 relative overflow-hidden bg-[url('../images/widgets/p-1.png')] bg-no-repeat bg-contain">
                            <div class="flex justify-between xl:gap-x-2 items-cente">
                                <div class="absolute -left-6 -top-4 text-blue-500 p-3 text-center inline-flex items-center justify-center w-32 h-32 ">
                                    <i class="ti ti-activity text-3xl"></i>                        
                                </div>
                                <div class="self-center ml-auto">                            
                                    <h3 class="my-1 font-semibold text-2xl dark:text-slate-200">$1800</h3>
                                    <p class="text-gray-400 mb-0 font-medium">Bounce Rate</p>
                                </div>
                            </div>
                        </div> <!--end inner-grid--> 
                    </div>
                    <div class="md:col-span-2 lg:col-span-2 xl:col-span-1">
                        <div class="bg-white dark:bg-slate-800 shadow rounded-md w-full p-4 relative overflow-hidden bg-[url('../images/widgets/p-1.png')] bg-no-repeat bg-contain">
                            <div class="flex justify-between xl:gap-x-2 items-cente">
                                <div class="absolute -left-6 -top-4 text-blue-500 p-3 text-center inline-flex items-center justify-center w-32 h-32 ">
                                    <i class="ti ti-confetti text-3xl"></i>                        
                                </div>
                                <div class="self-center ml-auto">                            
                                    <h3 class="my-1 font-semibold text-2xl dark:text-slate-200">75000</h3>
                                    <p class="text-gray-400 mb-0 font-medium">Goal Completions</p>
                                </div>
                            </div>
                        </div> <!--end inner-grid--> 
                    </div>
                </div>
            </div>
            <div class="md:col-span-4 lg:col-span-4 xl:col-span-3">
                <div class="bg-white dark:bg-slate-800 shadow rounded-md h-full w-full p-4 relative overflow-hidden ">
                    <div class="chart-container" >
                        <canvas id="bar" height="290"></canvas> 
                    </div>                
                </div> <!--end inner-grid--> 
            </div>
        </div> 
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4 mb-4">
            <div class="sm:col-span-1  md:col-span-1 lg:col-span-1 xl:col-span-1 ">
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <h4 class="font-medium dark:text-slate-300">Sessions Device</h4>
                    </div>
                    <div class="card-body">
                        <div id="ana_device" class="apex-charts"></div>
                        <h6 class="bg-slate-50 dark:bg-slate-800 py-3 px-2 mb-0 rounded-md  text-center text-slate-500 font-medium mt-3">
                            <i class="ti ti-calendar self-center text-lg mr-1"></i>
                            01 January 2022 to 31 December 2022
                        </h6>
                        <div class="flex flex-col">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full">
                                            <thead class="bg-gray-50 dark:bg-gray-700">
                                                <tr>
                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Device
                                                    </th>
                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Sassions
                                                    </th>
                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Day
                                                    </th>
                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Week
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Product 1 -->
                                                <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="p-3 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        Dasktops
                                                    </td>
                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        1843
                                                    </td>
                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        -3
                                                    </td>
                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        -12
                                                    </td>
                                                </tr>
                                                <!-- Product 2 -->
                                                <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="p-3 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        Tablets
                                                    </td>
                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        2543
                                                    </td>
                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        -5
                                                    </td>
                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    -2
                                                    </td>
                                                </tr>
                                                <!-- Product 2 -->
                                                <tr class="bg-white dark:bg-gray-800">
                                                    <td class="p-3 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        Mobiles
                                                    </td>
                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        3654
                                                    </td>
                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        -5
                                                    </td>
                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        -6
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--end inner-grid--> 
            </div>
            
            <div class="sm:col-span-1  md:col-span-1 lg:col-span-1 xl:col-span-1 ">
                <div class="card h-full overflow-hidden">
                    <div class="card-header">
                        <h4 class="font-medium dark:text-slate-300">Live Visits Our New Site</h4>
                    </div>
                    <div class="card-body">
                        <div class="text-center ">
                            <p class="text-slate-400 uppercase font-medium text-sm">Right now</p>
                            <h2 class="text-slate-800 dark:text-slate-300  text-4xl font-bold leading-8 py-2">120</h2>
                            <p class="text-sm text-gray-700 whitespace-nowrap dark:text-gray-400 font-medium">
                                Yesterday Visits : 10,563 <i class="ti ti-caret-up text-green-500 text-base"></i>
                            </p>                        
                        </div>
                    </div>
                    <div class="p-4">                        
                        <div id="visitors" class="h-60 my-6"></div>
                        <div class="mt-5 text-center">
                            <button class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">More Details</button>
                        </div>
                    </div>
                </div> <!--end inner-grid-->
            </div>
            <div class="sm:col-span-1  md:col-span-2 lg:col-span-2 xl:col-span-1 ">
                <div class="card " >
                    <div class="card-header">
                        <h4 class="font-medium dark:text-slate-300">Activites</h4>
                    </div>
                    <div class="card-body h-[510px] p-4" data-simplebar>
                        <ol class="relative border-l border-dashed border-gray-200 dark:border-gray-700 ml-3">                  
                            <li class="mb-10 ml-8">            
                                <span data-tooltip-target="tooltip-light" data-tooltip-style="light" class="flex absolute -left-4 justify-center items-center w-9 h-9 bg-green-100 rounded-full dark:bg-green-900">
                                    <i class="ti ti-clock text-green-500"></i>
                                    <span id="tooltip-light" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-[12px] font-medium text-gray-900 bg-white rounded-lg border border-slate-200 shadow-sm opacity-0 tooltip">
                                        Tooltip content
                                        <span class="tooltip-arrow" data-popper-arrow></span>
                                    </span>
                                </span>
                                <div class="justify-between items-center p-4 bg-white rounded-lg border border-gray-200 shadow-sm sm:flex dark:bg-slate-800 dark:border-slate-700">
                                    <span class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0">just now</span>
                                    <div class="text-sm font-normal text-gray-500 dark:text-gray-300 w-full md:w-[80%]">
                                        <a href="#" class="font-semibold text-blue-600 dark:text-blue-500 hover:underline">Jack </a>
                                         updated the status of Refund #1234 to awaiting customer response
                                        <span class="bg-gray-100 text-gray-800 text-xs font-normal mr-2 px-2.5 py-0.5 rounded dark:bg-gray-600 dark:text-gray-300">USA Group</span>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-10 ml-8">
                                <span class="flex absolute -left-4 justify-center items-center w-9 h-9 bg-pink-100 rounded-full dark:bg-pink-900/50">
                                    <i class="ti ti-brand-codesandbox text-pink-500"></i>
                                </span>
                                <div class="justify-between items-center p-4 bg-white rounded-lg border border-gray-200 shadow-sm sm:flex dark:bg-slate-800 dark:border-slate-700">
                                    <span class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0">just now</span>
                                    <div class="text-sm font-normal text-gray-500 dark:text-gray-300 w-full md:w-[80%]">
                                        <a href="#" class="font-semibold text-blue-600 dark:text-blue-500 hover:underline">Donald</a>
                                         updated the status of Refund #1234 to awaiting customer response
                                        <span class="bg-gray-100 text-gray-800 text-xs font-normal mr-2 px-2.5 py-0.5 rounded dark:bg-gray-600 dark:text-gray-300">USA Group</span>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-10 ml-8">
                                <span class="flex absolute -left-4 justify-center items-center w-9 h-9 bg-blue-200 rounded-full dark:bg-slate-900">
                                    <img class="rounded-full shadow-lg" src="assets/images/users/avatar-1.jpg" alt="Thomas Lean image"/>
                                </span>
                                <div class="p-4 bg-white rounded-lg border border-gray-200 shadow-sm dark:bg-slate-800 dark:border-slate-700">
                                    <div class="justify-between items-center mb-3 sm:flex">
                                        <span class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0">2 hours ago</span>
                                        <div class="text-sm font-normal text-gray-500 lex dark:text-gray-300">Aword winner this year <a href="#" class="font-semibold text-gray-900 dark:text-white hover:underline">Bette Elam</a></div>
                                    </div>
                                    <div class="p-3 text-xs italic font-normal text-gray-500 bg-gray-50 rounded-lg border border-gray-200 dark:bg-slate-800 dark:border-slate-700 dark:text-gray-300">
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</div>
                                </div>
                            </li>
                            <li class="mb-10 ml-8">
                                <span class="flex absolute -left-4 justify-center items-center w-9 h-9 bg-purple-100 rounded-full dark:bg-purple-900/50">
                                    <i class="ti ti-atom-2 text-purple-500"></i>
                                </span>
                                <div class="justify-between items-center p-4 bg-white rounded-lg border border-gray-200 shadow-sm sm:flex dark:bg-slate-800 dark:border-slate-700">
                                    <span class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0">just now</span>
                                    <div class="text-sm font-normal text-gray-500 dark:text-gray-300 w-full md:w-[80%]">
                                        <a href="#" class="font-semibold text-blue-600 dark:text-blue-500 hover:underline">William  </a>
                                         updated the status of Refund #1234 to awaiting customer response
                                        <span class="bg-gray-100 text-gray-800 text-xs font-normal mr-2 px-2.5 py-0.5 rounded dark:bg-gray-600 dark:text-gray-300">USA Group</span>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div> <!--end inner-grid-->
            </div>
        </div>  
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4 mb-4">            
            <div class="sm:col-span-1  md:col-span-2 lg:col-span-4 xl:col-span-1 ">
                <div class="h-full card">
                    <div class="card-header">
                        <h4 class="font-medium dark:text-slate-300">Total Visits</h4>
                    </div>
                    <div class="flex flex-col card-body">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full">
                                        <thead class="bg-gray-50 dark:bg-gray-700">
                                            <tr>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Channel
                                                </th>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Sessions
                                                </th>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Prev.Period
                                                </th>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    % Change
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- 1 -->
                                            <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <a href="" class="text-blue-500">Organic search</a>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    10853<small class="text-gray-400">(52%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    566<small class="text-gray-400">(92%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    52.80% <i class="ti ti-caret-up text-green-500 text-base"></i>
                                                </td>
                                            </tr>
                                            <!-- 2 -->
                                            <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <a href="" class="text-blue-500">Direct</a>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    10853<small class="text-gray-400">(52%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    566<small class="text-gray-400">(92%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    52.80% <i class="ti ti-caret-down text-red-500 text-base"></i>
                                                </td>
                                            </tr>
                                            <!-- 3 -->
                                            <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <a href="" class="text-blue-500">Referal</a>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    10853<small class="text-gray-400">(52%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    566<small class="text-gray-400">(92%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    52.80% <i class="ti ti-caret-up text-green-500 text-base"></i>
                                                </td>
                                            </tr>
                                            <!-- 4 -->
                                            <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <a href="" class="text-blue-500">Email</a>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    10853<small class="text-gray-400">(52%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    566<small class="text-gray-400">(92%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    52.80% <i class="ti ti-caret-down text-red-500 text-base"></i>
                                                </td>
                                            </tr>
                                            <!-- 5 -->
                                            <tr class="bg-white dark:bg-gray-800">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <a href="" class="text-blue-500">Social</a>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    10853<small class="text-gray-400">(52%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    566<small class="text-gray-400">(92%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    52.80% <i class="ti ti-caret-up text-green-500 text-base"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--end inner-grid-->
            </div>
            <div class="sm:col-span-1  md:col-span-2 lg:col-span-4 xl:col-span-1 ">
                <div class="h-full card">
                    <div class="card-header">
                        <h4 class="font-medium dark:text-slate-300">Browser Used By Users</h4>
                    </div>
                    <div class="flex flex-col card-body">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full">
                                        <thead class="bg-gray-50 dark:bg-gray-700">
                                            <tr>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Browser
                                                </th>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Sessions
                                                </th>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Bounce Rate
                                                </th>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Transactions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- 1 -->
                                            <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <img src="assets/images/logos/chrome.png" alt="" class="mr-2 h-5 inline-block">Chrome
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    10853<small class="text-gray-400">(52%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    52.80%
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    566 <small class="text-gray-400">(92%)</small>
                                                </td>
                                            </tr>
                                            <!-- 2 -->
                                            <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <img src="assets/images/logos/in-explorer.png" alt="" class="mr-2 h-5 inline-block">Explorer
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    10853<small class="text-gray-400">(52%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    52.80%
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    566 <small class="text-gray-400">(92%)</small>
                                                </td>
                                            </tr>
                                            <!-- 3 -->
                                            <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <img src="assets/images/logos/safari.png" alt="" class="mr-2 h-5 inline-block">Safari
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    10853<small class="text-gray-400">(52%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    52.80%
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    566 <small class="text-gray-400">(92%)</small>
                                                </td>
                                            </tr>
                                            <!-- 4 -->
                                            <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <img src="assets/images/logos/mozilla.png" alt="" class="mr-2 h-5 inline-block">Mozilla
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    10853<small class="text-gray-400">(52%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    52.80%
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    566 <small class="text-gray-400">(92%)</small>
                                                </td>
                                            </tr>
                                            <!-- 5 -->
                                            <tr class="bg-white dark:bg-gray-800">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <img src="assets/images/logos/opera.png" alt="" class="mr-2 h-5 inline-block">Opera
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    10853<small class="text-gray-400">(52%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    52.80%
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    566 <small class="text-gray-400">(92%)</small>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--end inner-grid-->
            </div>
        </div>  
        <!-- footer -->
        <div class="absolute bottom-0 left-2 right-2 block print:hidden">
          <div class="container mx-auto">
            <!-- Footer Start -->
            <footer
              class="footer mt-4 rounded-tr-md rounded-tl-md bg-white dark:bg-slate-800 p-4 text-center font-medium text-slate-600 dark:text-slate-400 shadow md:text-left"
            >
              &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              T-Wind
              <span class="float-right hidden text-slate-600 dark:text-slate-400 md:inline-block"
                >Crafted with <i class="ti ti-heart text-red-500"></i> by
                Mannatthemes</span
              >
            </footer>
            <!-- end Footer -->
          </div>
        </div>

    
    </div><!--end container-->

    
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/chart.js/chart.min.js"></script>
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="assets/libs/echarts/echarts.min.js"></script>
    <script src="assets/js/pages/analytics-index.init.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>