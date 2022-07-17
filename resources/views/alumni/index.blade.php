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
                  <div class="flex flex-wrap items-center">
                    <div
                      class="relative w-full px-4 max-w-full flex-grow flex-1"
                    >
                      <h3 class="font-semibold text-lg text-blueGray-700">
                        Alumni
                      </h3>
                    </div>
                  </div>
                </div>
                <div class="block w-full overflow-x-auto">
                  <!-- Projects table -->
                  <table
                    class="items-center w-full bg-transparent border-collapse"
                  >
                    <thead>
                      <tr>
                        <th
                          class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                        >
                          Surname
                        </th>
                        <th
                          class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                        >
                         Name
                        </th>
                        <th
                          class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                        >
                         Other Name
                        </th>
                        <th
                          class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                        >
                          Status
                        </th>
                        <th
                          class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                        >
                          Email
                        </th>
                        <th
                          class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                        >
                         phone
                        </th>
                        <th
                          class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                        ></th>
                      </tr>
                    </thead>
                    <tbody>
                    @if(count($a) > 0)
                    @foreach($a as $v)
                      <tr>
                        <th
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center"
                        >
                        
                          <span class="ml-3 font-bold text-blueGray-600">
                         {{strtoupper($v->surname)}}
                          </span>
                        </th>
                        <td
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                        >
                        {{strtoupper($v->name)}}
                        </td>
                        <td
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                        >
                        {{strtoupper($v->middleName)}}
                        </td>
                        <td
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                        >
                        
                        @if($v->status == 1)
                        
                          <i class="fas fa-circle text-green-500 mr-2"></i>
                          confirm
                        @else
                          <i class="fas fa-circle text-orange-500 mr-2"></i>
                          pending
                        
                        @endif
                        </td>
                        <td
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                        >
                      {{$v->email}}
                        </td>
                        <td
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                        >
                        {{$v->phone}}
                        </td>
                        <td
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right"
                        >
                          <a
                          
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
                              href="{{url('detailAlumni',$v->id)}}"
                              class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                              >Detail</a
                            >
                            <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                            <a
                              href="{{url('editAlumni',$v->id)}}"
                              class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                              >Edit</a
                            >
                            <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                            <a
                              href="deleteAlumni"
                              class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                              >Delete</a
                            >
                           
                          </div>
                        </td>
                      </tr>
                      @endforeach
                      @endif
                     
                    
                    </tbody>
                  </table>
                </div>
               

      {{ $a->links() }}



              </div>
            </div>
            @endsection      
        
        
  
    
