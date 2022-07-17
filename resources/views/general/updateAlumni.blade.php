
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="../../assets/img/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="../../assets/img/apple-icon.png"
    />
    <link
      rel="stylesheet"
      href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
    />
    <link rel="stylesheet" href="../../assets/styles/tailwind.css" />
    <title>Register</title>
  </head>
  <body class="text-blueGray-700 antialiased">
    <nav
      class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg"
    >
      <div
        class="container px-4 mx-auto flex flex-wrap items-center justify-between"
      >
        <div
          class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
        >
          <a
            class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
            href="{{url('/')}}"
            >Home</a
          >
        </div>
       
      </div>
    </nav>
    <main>
      <section class="relative w-full h-full py-40 min-h-screen">
        <div
          class="absolute top-0 w-full h-full bg-blueGray-800 bg-full bg-no-repeat"
          style="background-image: url(../../assets/img/register_bg_2.png)"
        ></div>
        <div class="container mx-auto px-4 h-full">
          <div class="flex content-center items-center justify-center h-full">
            <div class="w-full lg:w-6/12 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0"
              >
                <div class="rounded-t mb-0 px-6 py-6">
                  <div class="text-center mb-3">
                    <h6 class="text-blueGray-500 text-sm font-bold">
                    UNIVERSITY OF CALABAR ALUMNI  PROFILE UPDATE FORM
                    </h6>
                  </div>
           
                  <hr class="mt-6 border-b-1 border-blueGray-300" />
                  @if (count($errors) > 0)
    <div class="bg-red-500">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
              
                <form method="POST" action="{{url('updateProfile',$a->id) }}">
            @csrf
            <input type="hidden" value="{{$a->id}}" name="id"/>
                  <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                        Surname
                      </label>
                      <input
                      name="surname" value="{{$a->surname}}"
                        type="text"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                         required
                      />
                    </div>
                    <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                        Name
                      </label>
                      <input
                      name="name" value="{{$a->name}}"
                        type="text"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                         required
                      />
                    </div>
                    <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                       Middle Name
                      </label>
                      <input
                      name="middleName"
                        type="text" 
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        value="{{$a->middleName}}" 
                      />
                    </div>

                    <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                        Email
                      </label>
                      <input
                      name="email" value="{{$a->email}}"
                        type="email"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Email" required
                      />
                    </div>
                    <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                        Phone
                      </label>
                      <input
                        type="number" name="phone" value="{{$a->phone}}"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        />
                    </div>
                    <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password">Day & Month Of Birth </label>
                      <input
                        type="date" name="date" value="{{$a->day_month_of_birth}}"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        />
                    </div>
                    <div class="relative w-full mb-3">
                     
                    <label
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password">Sex</label>
                      <select class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name='sex' required>
                      @if($a->sex != null)
    <option value='{{$a->sex}}' selected>{{$a->sex}}</option>
    @else
    <option value=''>Select</option>
    @endif
    <option value='male'>Male</option>
    <option value='female'>Female</option>
</select>
                 
</div>
                    <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password">
                       Year Graduation
                      </label>
                      <select class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" 
                      name='yearGraduation' required>
                      @if($a->graduation_year!= null)
    <option value='{{$a->graduation_year}}' selected>{{$a->graduation_year}}</option>
    @else
    <option value=''>Select</option>
    @endif
    
    @for ($year = (date('Y')); $year >= 1973; $year--)
                                  {{!$next =$year+1}}
                                  <option value="{{$year}}">{{$year.' / '.$next}}</option>
                                  @endfor
</select>
                 
                    </div>
                    <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password">
                       Department
                      </label>
                      <select class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" 
                      name='department' required>
                      @if($a->department != null)
    <option value='{{$a->department}}' selected>{{$a->department}}</option>
    @else
    <option value=''>Select</option>
    @endif
    @foreach($d as $v)
    <option value="{{$v->department_name}}">{{$v->department_name}}</option>
@endforeach
</select>
                 
                    </div>
                    
                    <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                     Contact Address
                      </label>
                      <textarea
                      name="contact_address" 
                      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                     >
                     {{$a->contact_address}}
                      </textarea>
                       </div>
                       <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                       State OF Residence
                      </label>
                      <input
                      name="state_of_residence"
                        type="text"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        value="{{$a->state_of_residence}}"
                      />
                    </div>
                    <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                       Country Of Residence
                      </label>
                      <input
                      name="country_of_residence"
                        type="text"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        value="{{$a->country_of_residence}}"
                      />
                    </div>
                    <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                      Occupation
                      </label>
                      <input
                      name="occupation"
                        type="text" value="{{$a->occupation}}"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        
                      />
                    </div>

                    <div class="text-center mt-6">
                      <button
                        class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                        type="submit"
                      >
                        Update Account
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
       
      </section>
    </main>
  </body>
  <script src="../../js/jquery.js"></script>
  <script src="../../js/main.js"></script>

 
</html>
