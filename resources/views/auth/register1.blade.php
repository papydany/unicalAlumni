<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <x-label for="surname" :value="__('Surname')" />

                <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required  />
            </div>
            <!-- Name -->
            <div class="mt-4">
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

              <!-- phone -->
              <div class="mt-4">
                <x-label for="phone" :value="__('Phone')" />

                <x-input id="phone" class="block mt-1 w-full" type="number" name="phone" :value="old('phone')" required />
            </div>

                    <!-- matric number-->
                    <div class="mt-4">
                <x-label for="matricNumber" :value="__('Matric Number')" />

                <x-input id="matricNumber" class="block mt-1 w-full" type="text" name="matricNumber" :value="old('matricNumber')" required />
            </div>

                     <!-- Sex-->
                     <div class="mt-4">
                <x-label for="sex" :value="__('Sex')" />
<select class="block mt-1 w-full" name='sex'>
    <option value=''>Select</option>
    <option value='male'>Male</option>
    <option value='female'>Female</option>
</select>
                 </div>
                                    <!--Year of graduation -->
                                    <div class="mt-4">
                <x-label for="yearOfGraduation" :value="__('Year Of Graduation')" />
<select class="block mt-1 w-full" name='yearOfGraduation'>
    <option value=''>Select</option>
    @for ($year = (date('Y')); $year >= 1973; $year--)
                                  {{!$next =$year+1}}
                                  <option value="{{$year}}">{{$year.' / '.$next}}</option>
                                  @endfor
    
</select>
                 </div>

                 <div class="mt-4">
                <x-label for="dob" :value="__('Date Of Birth')" />
                <span style='color:red'>only month and day is important to us<span>

                <x-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" required />
            </div>
                                            <!--department -->
                                            <div class="mt-4">
                <x-label for="yearOfGraduation" :value="__('Select Your Department')" />
<select class="block mt-1 w-full" name='department'>
    <option value=''>Select</option>
    @foreach($d as $v)
    <option value="{{$v->id}}">{{$v->department_name}}</option>
@endforeach
</select>
</div>

                                            <!--state of origin-->
                                            <div class="mt-4">
                <x-label for="stateOfOrigin" :value="__('State Of Origin')" />
<select class="block mt-1 w-full" name='stateOfOrigin' id='stateOfOrigin'>
    <option value=''>Select</option>
    @foreach($s as $v)
    <option value="{{$v->id}}">{{$v->state_name}}</option>
@endforeach
</select>
</div>

                                            <!--LGa origin-->
                                            <div class="mt-4">
                <x-label for="lgaOfOrigin" :value="__('LGA Of Origin')" />
<select class="block mt-1 w-full" name='lgaOfOrigin'>
    <option value=''>Select</option>
    
</select>
</div>

 


            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
