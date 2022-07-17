@extends('layouts.app')
@section('title','Enter Result')
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
                   Send News Letter
                    </h6>
                   
                  </div>
                </div>
                @if (session('warning'))
              <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-pink-500">
  <span class="text-xl inline-block mr-5 align-middle">
    <i class="fas fa-bell"></i>
  </span>
  <span class="inline-block align-middle mr-8">
    <b class="capitalize">{{ session('warning') }}</b> 
  </span>

</div>
@elseif(session('success'))
<div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-500">
  <span class="text-xl inline-block mr-5 align-middle">
    <i class="fas fa-bell"></i>
  </span>
  <span class="inline-block align-middle mr-8">
    <b class="capitalize">{{ session('success') }}</b> 
  </span>

</div>
@endif
          
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                <form method="POST" action="{{ route('sendPostNewsLetter') }}">
            @csrf
            <input type="hidden" name="id" value="{{$a->id}}" />
                    <h6
                      class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase"
                    >
                      
                    </h6>
                    
                    <div class="flex flex-wrap">
                      <div class="w-full lg:w-12/12 px-4">
                        <div class="relative w-full mb-3">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">Subject</h6>
                      
                          <input
                            type="text" name="subject"
                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                            value="{{$a->subject}}" readonly
                          />
                       
                        </div>
                      </div>
                      <div class="w-full lg:w-12/12 px-4">
                        <div class="relative w-full mb-3">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">Content</h6>
                          {!!$a->content!!}
                          
                          
                        </div>
                      </div>
                      <div class="w-full lg:w-12/12 px-4">
                        <div class="relative w-full mb-3">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">Recipient</h6>
                      
                          <select
                            type="text" name="recipient" 
                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                            required>
                         <option value=""> Select</option>
                         <option value="1">All Alumni</option>
                         <option value="2">Alumni (Confirmed)</option>
                         <option value="3">Alumni (Pending)</option>
                         <option value="4"> Select Alumni</option>
                        </select>
                       
                        </div>
                      </div>
                   
                      <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                     
                        <button
                        class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                        type="submit"
                      >
                    Send
                      </button>
                        
                        </div>
                      </div>
                     
                    </div>

                </div>
                </form>
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