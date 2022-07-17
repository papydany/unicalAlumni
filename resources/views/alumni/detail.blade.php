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
                     Alumni Detail
                    </h6>
                    <button
                      class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                      type="button"
                    >
                  {{$d->matric_number}}
                    </button>
                  </div>
                </div>
                @inject('R','App\Models\R')
                <?php $lga =$R->getLga($d->lga_of_origin);
                $st =$R->getState($d->state_of_origin);
               // $dept =$R->getDepartment($d->department); ?>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
              
                    <h6
                      class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase"
                    >
                      User Information
                    </h6>
                    <div class="flex flex-wrap">
                      <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                            htmlFor="grid-password"
                          >
                          Surname
                          </label>
                          {{strtoUpper($d->surname)}}
                        </div>
                      </div>
                      <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                            htmlFor="grid-password"
                          >
                            Email address
                          </label>
                         {{$d->email}}
                        </div>
                      </div>
                      <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                            htmlFor="grid-password"
                          >
                            First Name
                          </label>
                         {{strtoUpper($d->name)}}
                        </div>
                      </div>
                      <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                            htmlFor="grid-password"
                          >
                            Phone
                          </label>
                         {{$d->phone}}
                        </div>
                      </div>
                      <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                            htmlFor="grid-password"
                          >
                           Middle Name
                          </label>
                         {{strtoUpper($d->middleName)}}
                        </div>
                      </div>
                      <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                            htmlFor="grid-password"
                          >
                          Sex
                          </label>
                         {{$d->sex}}
                        </div>
                      </div>
                      <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                            htmlFor="grid-password"
                          >
                          Date of Birth
                          </label>
                          {{ date('F d', strtotime($d->day_month_of_birth));}}
                        </div>
                      </div>
                      <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                            htmlFor="grid-password"
                          >
                          LGA Of Origin
                          </label>
                        <p> {{$lga ? $lga->lga_name : ''}}</p>
                        </div>
                      </div>
                      <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                            htmlFor="grid-password"
                          >
                          State Of Origin
                          </label>
                          <p> {{$st ? $st->state_name : ''}}</p> 
                        </div>
                      </div>
                        <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                            htmlFor="grid-password"
                          >
                          Department 
                          </label>
                        <p> {{$d->department}}</p>
                        </div>
                      </div>
                      <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                            htmlFor="grid-password"
                          >
                         Year Of Graduation
                          </label>
                         {{$d->graduation_year}}
                        </div>
                      </div>
                      <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                            htmlFor="grid-password"
                          >
                         Degree
                          </label>
                         {{$d->degree}}
                        </div>
                      </div>
                      </div>
                    </div>

                    <hr class="mt-6 border-b-1 border-blueGray-300" />

                    <h6
                      class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase"
                    >
                      Contact Information
                    </h6>
                    <div class="flex flex-wrap">
                      <div class="w-full lg:w-12/12 px-4">
                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                            htmlFor="grid-password"
                          >
                            Address
                          </label>
                         {{$d->contact_address}}
                        </div>
                      </div>
                      <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                            htmlFor="grid-password"
                          >
                            State
                          </label>
                          {{$d->state_of_residence}}
                        </div>
                      </div>
                      <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                          <label
                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                            htmlFor="grid-password"
                          >
                            Country
                          </label>
                        {{$d->country_of_residence}}
                        </div>
                      </div>
                     
                    </div>
                    <hr class="mt-6 border-b-1 border-blueGray-300" />

<h6
  class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase"
>
  Occupation
</h6>
<div class="w-full lg:w-12/12 px-4">
                        <div class="relative w-full mb-3">
                         
                         {{$d->occupation}}
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