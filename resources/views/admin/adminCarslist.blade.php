@extends('admin.layout')
@section('adminContent')

    <div class="container  mx-auto px-2">        
        <div class="flex flex-wrap">
            <div class="flex items-center py-4 w-full">
                <div class="w-full">                    
                    <div class="">
                        <div class="flex flex-wrap justify-between">
                            <div class="items-center ">
                                <h1 class="font-semibold text-xl mb-0 block dark:text-slate-100">Contacts</h1>
                                <ol class="list-reset flex text-sm">
                                    <li><a href="#" class="text-gray-500">T-Wind</a></li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-gray-500">Apps</li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-blue-600 hover:text-blue-700">Contacts</li>
                                </ol>
                            </div>
                            <div class="flex items-center">
                                <a href="{{route('create.form')}}" class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Create New</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end container-->

   

    <div class="container mx-auto px-2 min-h-[calc(100vh-138px)]  relative pb-14 ">         
        <div class="grid grid-cols-12 gap-4 mb-4">
           @foreach($cars as $car)
            <div class="col-span-12 h-64 sm:col-span-4 md:col-span-6 lg:col-span-4 xl:col-span-3 ">
                <div class="card">
                    <div class="card-body text-center">
                        <img class="w-50 h-50  block mx-auto" src="{{asset('images/' . $car->image) }}" alt="">
                        <h5 class=" font-medium text-base my-3 dark:text-slate-300">{{$car->type}}</h5>
                        <i class="fas fa-location-dot text-slate-300 mr-1"></i>{{$car->body_type}}</span>
                        <i class="fas fa-phone text-slate-300 mr-1"></i>{{$car->model}}</span>
                        <p class="text-sm text-slate-600 font-medium my-4">{{$car->description}}</p>
                        <div class="grid grid-cols-2 gap-2 ">
                          
                    
                            <a href="{{ route('cars.edit', $car->id) }}" class="focus:outline-none focus:bg-opacity-50 focus:text-black hover:text-black focus:ring-2 
                                focus:ring-offset-2 focus:ring-indigo-700 text-indigo-700 hover:bg-opacity-50 bg-gray-100 dark:bg-slate-700 text-sm  dark:text-slate-300
                                font-medium py-2 px-4 rounded">
                                Edit
                            </a>
                     <form  action="{{ route('deleteAd' , $car->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="focus:outline-none focus:bg-opacity-50 focus:text-black hover:text-black focus:ring-2 
                            focus:ring-offset-2 focus:ring-red-700 text-red-700 hover:bg-opacity-50 bg-red-100 dark:bg-slate-700 text-sm  dark:text-slate-300
                            font-medium py-2 px-4 rounded" >
                                delete
                            </button>
                     </form>

                   
                        </div>
                    </div><!--end card-body-->
                </div> <!--end card-->
            </div><!--end col-->
               @endforeach
          </div><!--end inner-grid-->
           
         
          
            {{-- <div class="col-span-12 sm:col-span-4 md:col-span-6 lg:col-span-4 xl:col-span-3">
                <div class="card">
                    <div class="card-body text-center">
                        <img class="w-24 h-24 rounded-full block mx-auto" src="assets/images/users/avatar-8.jpg" alt="">
                        <h5 class=" font-medium text-base my-3 dark:text-slate-300">Donald Gonzalez</h5>
                        <span class="text-sm font-medium text-slate-500 mr-4"><i class="fas fa-location-dot text-slate-300 mr-1"></i>New York, USA</span>
                        <span class="text-sm font-medium text-slate-500"><i class="fas fa-phone text-slate-300 mr-1"></i>+1 234 567 890</span>
                        <p class="text-sm text-slate-600 font-medium my-4">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        <div>
                            <button class="focus:outline-none focus:bg-opacity-50 focus:text-black hover:text-black focus:ring-2 
                                focus:ring-offset-2 focus:ring-indigo-700 text-indigo-700 hover:bg-opacity-50 bg-gray-100 dark:bg-slate-700 text-sm  dark:text-slate-300
                                font-medium py-2 px-4 rounded">
                                Project
                            </button>
                            <button class="focus:outline-none focus:bg-opacity-50 focus:text-black hover:text-black focus:ring-2 
                                focus:ring-offset-2 focus:ring-indigo-700 text-indigo-700 hover:bg-opacity-50 bg-gray-100 dark:bg-slate-700 text-sm  dark:text-slate-300
                                font-medium py-2 px-4 rounded">
                                delete
                            </button>
                        </div>
                    </div><!--end card-body-->
                </div> <!--end card-->
            </div> --}}
        
    </div>

    
    
    
    @endsection 