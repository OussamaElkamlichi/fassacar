@extends('admin.layout')
@section('Content')



    <!-- leftbar-tab-menu -->
  


    <div class="container  mx-auto px-2">        
        <div class="flex flex-wrap">
            <div class="flex items-center py-4 w-full">
                <div class="w-full">                    
                    <div class="">
                        <div class="flex flex-wrap justify-between">
                            <div class="items-center ">
                                <h1 class="font-semibold text-xl mb-1 block dark:text-slate-100">Validation</h1>
                                <ol class="list-reset flex text-sm">
                                    <li><a href="#" class="text-gray-500">T-Wind</a></li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-gray-500">UI Kit</li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-blue-600 hover:text-blue-700">Validation</li>
                                </ol>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end container-->

    <div class="container mx-auto px-2 min-h-[calc(100vh-138px)]  relative pb-14 ">         
        
            {{-- <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Title</h4>
                    </div><!--end card-header-->
                    <div class="card-body">
                        <form id="form-validation" class="form">
                            <div class="mb-2">
                                <label for="username" class="mb-2 label">Username</label>
                                <input class="form-control" type="text" id="username" placeholder="Enter Username">
                                <small>Error Message</small>
                            </div>
                            <div class="mb-2">
                                <label for="email" class="mb-2 label">Email</label>
                                <input class="form-control" type="text" id="email" placeholder="Enter email">
                                <small>Error Message</small>
                            </div>
                            <div class="mb-2">
                                <label for="password" class="mb-2 label">Password</label>
                                <input class="form-control" type="password" id="password" placeholder="Enter password">
                                <small>Error Message</small>
                            </div>
                            <div class="mb-2">
                                <label for="password2" class="mb-2 label">Confirm Password</label>
                                <input class="form-control" type="password" id="password2" placeholder="Enter password again">
                                <small>Error Message</small>
                            </div>
                            <button type="submit" class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Submit form</button>
                        </form><!--end form-->
                    </div><!--end card-body-->
                </div> <!--end card-->
            </div> --}}
            <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 mb-10">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Title</h4>
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div id="error_message" class="bg-red-400 text-white mb-3 rounded ease-out duration-500">
     
                        </div>

                        <form action="{{route('car.update', $car->id)}}" id="myform" method="post" onsubmit = "return validate();">
                          @csrf
                          @method('put')
                            <div class="mb-2 input_field">
                                <label for="name" class="mb-2 label">Type</label>
                                <input class="form-control" type="text" id="name" name="type" placeholder="type" value="{{ $car->title }}">
                            </div>
                            <div class="mb-2 input_field">
                                <label for="Seats" class="mb-2 label">Seats</label>
                                <input class="form-control" type="number" id="Seats"  name="seats" placeholder="Seats" value="{{ $car->title }}">
                            </div>
                            <div class="mb-2 input_field">
                              <label for="doors" class="mb-2 label">Doors</label>
                              <input class="form-control" type="number" id="doors"  name="doors" placeholder="Seats" value="{{ $car->title }}">
                          </div>
                            <div class="mb-2 input_field">
                                <label for="phone" class="mb-2 label">Transmission</label>
                                <select name="transmission" id="transmission" class="form-control">
                                  @foreach($transmissionOptions as $value => $label)
                                      <option value="{{ $value }}">{{ $label }}</option>
                                  @endforeach
                              </select>
                            </div>
                            <div class="mb-2 input_field">
                                <label for="fuel" class="mb-2 label">Fuel</label>
                                <select name="fuel" id="fuel" class="form-control">
                                  @foreach($fuelOptions as $value => $label)
                                      <option value="{{ $value }}">{{ $label }}</option>
                                  @endforeach
                              </select>
                            </div>
                            <div class="mb-2 input_field">
                              <label for="email" class="mb-2 label">Model</label>
                              <input class="form-control" type="text" id="model"  name="model" placeholder="model" value="{{ $car->title }}">
                          </div>
                          <div class="mb-2 input_field">
                            <label for="email" class="mb-2 label">Year</label>
                            <input class="form-control" type="number" id="year"    name="year" placeholder="year" value="{{ $car->title }}">
                        </div>
                        <div class="mb-2 input_field">
                          <label for="email" class="mb-2 label">Body type</label>
                          <input class="form-control" type="text" id="body_type"  name="body_type" placeholder="body type" value="{{ $car->title }}">
                      </div>
                      <div class="mb-2 input_field">
                        <label for="email" class="mb-2 label">Color</label>
                        <input class="form-control" type="text" id="color"  name="color" placeholder="color" value="{{ $car->title }}">
                    </div>car
                    <div class="mb-2 input_field">
                      <label for="email" class="mb-2 label">Luggage</label>
                      <input class="form-control" type="number" id="luggage"  name="luggage" placeholder="luggage" value="{{ $car->title }}">
                  </div>
                  <div class="mb-2 input_field">
                    <label for="available" class="mb-2 label">Available</label>
                    <select name="available" id="available" class="form-control">
                        <option value="1">Available</option>
                        <option value="0">Not Available</option>
                    </select>
                </div>
                <div class="mb-2 input_field">
                  <label for="price" class="mb-2 label">Price</label>
                  <input class="form-control"type="number" step="any" id="price"  name="price" placeholder="price" value="{{ $car->title }}">
              </div>
                          <div class="input_field mb-2">
                            <label for="massage" class="mb-2 label">Description</label>
                            <textarea id="message" rows="4"  name="description" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-200 focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-700 dark:border-slate-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..." value="{{ $car->title }}"></textarea>
                          </div>
                          <button type="submit" class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Create</button>
                        </form>
                    </div><!--end card-body-->
                </div> <!--end card-->
            </div><!--end col-->            
      <!--end inner-grid-->
       
     

    
    </div>

@endsection 