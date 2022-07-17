<nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
        <div
          class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto"
        >
      
          <a
            class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
            href="{{url('dashboard')}}"
          >
        OSFMAA
          </a>
         
          <div
            class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
            id="example-collapse-sidebar"
          >
        
            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
              <li class="items-center">
                <a
                  href="{{url('dashboard')}}"
                  class="text-xs uppercase py-3 font-bold block text-pink-500 hover:text-pink-600"
                >
                  <i class="fas fa-tv mr-2 text-sm opacity-75"></i>
                  Dashboard
                </a>
              </li>

              <li class="items-center">
                <a
                  href="{{url('allAlumni')}}"
                  class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500"
                >
                  <i class="fas fa-tools mr-2 text-sm text-blueGray-300"></i>
                  Alumni
                </a>
              </li>

              <li class="items-center">
              <a
                  href="{{url('addAlumni')}}"
                  class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500"
                >
                  <i class="fas fa-table mr-2 text-sm text-blueGray-300"></i>
                  Add Alumni
                </a>
              </li>
              <li class="items-center">
              <a
                  href="{{url('newsLetter')}}"
                  class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500"
                >
                  <i class="fas fa-table mr-2 text-sm text-blueGray-300"></i>
                  News Letters
                </a>
              </li>
              <li class="items-center">
              <a
                  href="{{url('donationSetUp')}}"
                  class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500"
                >
                  <i class="fas fa-table mr-2 text-sm text-blueGray-300"></i>
                  Donation SetUp
                </a>
              </li>
              <li class="items-center">
              <a
                  href="{{url('allEvent')}}"
                  class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500"
                >
                  <i class="fas fa-table mr-2 text-sm text-blueGray-300"></i>
                  Event
                </a>
              </li>
              <li class="items-center">
              <a
                  href="{{url('allReport')}}"
                  class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500"
                >
                  <i class="fas fa-table mr-2 text-sm text-blueGray-300"></i>
                  Report
                </a>
              </li>

              <li class="items-center">
              <a
                  href="{{url('bulkImport')}}"
                  class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500"
                >
                  <i class="fas fa-table mr-2 text-sm text-blueGray-300"></i>
                 Bulk Import
                </a>
              </li>

              <li class="items-center">
              <form method="POST" action="{{ route('logout') }}">
                            @csrf
                <a
                  href="{{route('logout')}}"
                  class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500"
                >
                  <i
                    class="fas fa-map-marked mr-2 text-sm text-blueGray-300"
                  ></i>
                  

                          Log Out
                          
                        </form>
                </a>
              </li>
            </ul>

          
        
          </div>
        </div>
      </nav>