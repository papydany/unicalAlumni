@extends('layouts.app')
@section('title','Event Detail')
@section('content')
      <div class="relative md:ml-64 bg-blueGray-50">
        <nav
          class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4"
        >
          <div
            class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4"
          >
            <a
              class="text-white text-sm uppercase hidden lg:inline-block font-semibold"
              href="{{url('dashboard')}}"
              >Dashboard</a>
           
           
          </div>
        </nav>
        <!-- Header -->
        <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">
          <div class="px-4 md:px-10 mx-auto w-full">
            <div>
              <!-- Card stats -->
              <div class="flex flex-wrap">
            
             
              </div>
            </div>
          </div>
        </div>
      
        <div class="px-4 md:px-10 mx-auto w-full -m-24">
          <div class="flex flex-wrap">
            <div class="w-full lg:w-8/12 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0"
              >
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                  <div class="text-center flex justify-between">
                    <h6 class="text-blueGray-700 text-xl font-bold">
                    Event Detail
                    </h6>
                  
                  </div>
                </div>
               
         
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <div class="flex flex-wrap">
                      <div class="w-full lg:w-12/12 px-4">
                        <div class="relative w-full mb-3">
                  <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">Content</h6>
                      
                         {!!$d->content!!}
                        </div>
                        <hr class="mt-6 border-b-1 border-blueGray-300" />
                      </div>
                     
                      <div class="w-full lg:w-4/12 px-4">

                        <div class="relative w-full mb-3">
                         <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">Title</h6>
                          {{$d->title}}
                        </div>
                        <hr class="mt-6 border-b-1 border-blueGray-300" />
                      </div>
                  
                      <div class="w-full lg:w-12/12 px-4">
                        <div class="relative w-full mb-3">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">Starting Date</h6>
{{$d->start_date}}
                       
                        </div>
                      </div>
                      <div class="w-full lg:w-12/12 px-4">
                        <div class="relative w-full mb-3">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">Ending Date</h6>
{{$d->end_date}}
                       
                        </div>
                      </div>
                    </div>

                </div>
              </div>
            </div>
            <div class="w-full lg:w-4/12 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16"
              >
            
              </div>
            </div>
          </div>
          @endsection        