
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
    <title>Unical Alumni</title>
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
                    UNIVERSITY OF CALABAR ALUMNI REGISTRATION FORM
                    </h6>
                  </div>
           
                  <hr class="mt-6 border-b-1 border-blueGray-300" />
                  <div class="text-center mb-3">
                  <p style="color: red;">Please input an active email address . A verification mail will be sent to you once you submit the form.</p>
                  <p style="color:blue;">Fields with <span style="color:red">*</span> are compulsory</p>
                  </div>
                  <div class="text-center mb-3">
                  @if (session('warning'))
              <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-red-500">
  <span class="text-xl inline-block mr-5 align-middle">
    <i class="fas fa-bell"></i>
  </span>
  <span class="inline-block align-middle mr-8">
    <b class="capitalize">{{ session('warning') }}</b> 
  </span>
  <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none">
    <span>×</span>
  </button>
</div>

@endif
                  </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                
                <form method="POST" action="{{ route('storeAlumni') }}">
            @csrf
                  <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                        Surname <span style="color:red">*</span> 
                      </label>
                      <input
                      name="surname"
                        type="text"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Surname" required
                      />
                    </div>
                    <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                        Name <span style="color:red">*</span> 
                      </label>
                      <input
                      name="name"
                        type="text"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Name" required
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
                        placeholder="Middle Name" 
                      />
                    </div>

                    <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                        Email <span style="color:red">*</span> 
                      </label>
                      <input
                      name="email"
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
                        Phone <span style="color:red">*</span> 
                      </label>
                      <input
                        type="number" name="phone"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Phone Number" required />
                    </div>
                    <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password">Day & Month Of Birth <span style="color:red">*</span> </label>
                      <input
                        type="date" name="date"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Day & Month Of Birth" required />
                    </div>
                    <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password">Sex <span style="color:red">*</span> </label>
                      <select class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name='sex' required>
    <option value=''>Select</option>
    <option value='male'>Male</option>
    <option value='female'>Female</option>
</select>
                 
                    </div>

                

  
                    <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password">
                       Year Graduation <span style="color:red">*</span> 
                      </label>
                      <select class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" 
                      name='yearGraduation' required>
    <option value=''>Select</option>
    
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
                       Department <span style="color:red">*</span> 
                      </label>
                      <select class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" 
                      name='department' required>
    <option value=''>Select</option>
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
                     Select Degree Category you awarded to you
                      </label>
                      <p>Diploma &nbsp;&nbsp;&nbsp; <input name="degree1" type="checkbox" value="Diploma"/></p>
                      <p>Bachelors(1st Degree) <input name="degree2" type="checkbox" value="Bachelors"/></p>
                      <p>Masters&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="degree3" type="checkbox" value="Masters"/></p>
                      <p>PhD &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input name="degree4" type="checkbox" value="PhD"/></p>
                      <p>Honorary Degree <input name="degree5" value="Honorary" type="checkbox"/></p>
                    </div>
  
                    
                    <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                     Contact Address
                      </label>
                      <textarea
                      name="contactAddress"
                      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                     >

                      </textarea>
                       </div>
                       <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                       Contact State
                      </label>
                      <input
                      name="contactState"
                        type="text"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Contact Address"
                      />
                    </div>
                    <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlFor="grid-password"
                      >
                       Contact Country
                      </label>
                      <input
                      name="contactCountry"
                        type="text"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="Contact Country"
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
                        type="text"
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                        placeholder="occupation"
                      />
                    </div>
                  <p> <input type="checkbox" required> I confirm all information above is correct. I have also read and agree with the
                     <a href='privacy_policy' target="_blank">privacy policy</a> and 
                     <a href="{{url('data_protection_policy')}}" target="_blank">Data Protection Policy</a> </p>

                    <div class="text-center mt-6">
                      <button
                        class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                        type="submit"
                      >
                        Create Account
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
