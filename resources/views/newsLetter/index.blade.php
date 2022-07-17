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
        
        </div>
        <div class="px-4 md:px-10 mx-auto w-full -m-24">
        <div class="flex flex-wrap mt-4">
        <div class="w-full mb-12 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white"
              >
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                
                </div>
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                  <div class="text-center flex justify-between">
                    <h6 class="text-blueGray-700 text-xl font-bold">
                   News Letter
                    </h6>
                    <a href="{{url('addNewsLetter')}}"
                      class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                      type="button"
                    >
                    Create News Letter
</a>
                  </div>
                </div>
                <div class="block w-full overflow-x-auto">
                  <!-- Projects table -->
                  <table class="items-center w-full bg-transparent border-collapse">
                    <thead>
                      <tr>
                        <th
                          class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                        >
                         Sn
                        </th>
                        <th
                          class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                        >
                         Subject
                        </th>
                        <th
                          class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                        >
                          Status
                        </th>
                       
                       
                        <th
                          class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                        ></th>
                      </tr>
                    </thead>
                    <tbody>
                    @if(count($a) > 0)
                    {{!! $c = 0}}
                    @foreach($a as $v)
                      <tr>
                        <th
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center"
                        >
                        
                          <span class="ml-3 font-bold text-blueGray-600">
                           {{++$c}}
                          </span>
                        </th>
                        <td
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                        >
                         {{$v->subject}}
                        </td>
                        <td
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                        >
                        @if($v->status == 0)
                          <i class="fas fa-circle text-orange-500 mr-2"></i>
                          pending
                          @else
                          <i class="fas fa-circle text-green-500 mr-2"></i>
                          Sent
                          @endif
                        </td>
                       
                        
                        <td
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right"
                        >
                          <a
                            href="#"
                            class="text-blueGray-500 block py-1 px-3"
                            onclick="openDropdown(event,'table-light-{{$v->id}}-dropdown')"
                          >
                            <i class="fas fa-ellipsis-v"></i>
                          </a>
                          <div
                            class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                            id="table-light-{{$v->id}}-dropdown"
                          >
                          <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                            <a
                              href="{{url('detailNewsLetter',$v->id)}}"
                              class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                              >Detail</a
                            >
                            <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                            <a
                              href="{{url('editNewsLetter',$v->id)}}"
                              class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                              >Edit</a
                            >
                            <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                            <a
                              href="{{url('deleteNewsLetter',$v->id)}}"
                              class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                              >Delete</a
                            >

                            <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                            <a
                              href="{{url('sendNewsLetter',$v->id)}}"
                              class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                              >Send</a
                            >
                           
                          </div>
                        </td>
                      </tr>
                      @endforeach
                      @else
                      <tr>
                          <td colspan="4">
                      <div class="text-white px-6 py-4 border-0 rounded relative mb-4  bg-indigo-500">
  <span class="text-xl inline-block mr-5 align-middle">
    <i class="fas fa-bell"></i>
  </span>
  <span class="inline-block align-middle mr-8">
    <b class="capitalize">No records available</b> 
  </span>
 
</div>
                          </td>
</tr>


  
                      @endif
                     
                    
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            @endsection      
        
        
  
    
