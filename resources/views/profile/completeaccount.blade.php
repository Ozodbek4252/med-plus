<x-app-layout>
    <x-slot name="header">
        <div style="display: flex; justify-content: space-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <a href="{{ route('profile.show') }}">
                    {{ __('Back Profile') }}
                </a>
            </h2>
            <div>
                <a href="" class="bg-blue-500 hover:bg-blue-500 
                text-blue-700 font-semibold hover:text-white py-2 
                px-4 border border-blue-500 hover:border-transparent rounded">View Clinics</a>
                <a href="{{url('/completeaccount')}}" class="bg-transparent hover:bg-blue-500 
                text-blue-700 font-semibold hover:text-white py-2 
                px-4 border border-blue-500 hover:border-transparent rounded">Complete Account</a>
            </div>
        </div>
    </x-slot>
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            

    	<form class="w-full max-w-lg"  action="{{url('/updatecompleteaccount', Auth::user()->id)}}" method="post" enctype="multipart/form-data">
    		@csrf
          <div style="display: flex; justify-content: space-between; width: 100%" class="flex flex-wrap -mx-3 mb-4">
            <div style="width: 50%;" class="md:w-1/2 w-1 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                First Name
              </label>
              <input name="first_name" value="{{Auth::user()->first_name}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="First Name" required>
              <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
            </div>

            <div style="width: 50%" class="md:w-1/2 w-2 px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                Last Name
              </label>
              <input name="last_name" value="{{Auth::user()->last_name}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name"  required type="text" placeholder="Last Name">
            </div>



            
          </div>



          <div style="display: flex; justify-content: space-between; width: 100%" class="flex flex-wrap -mx-3 mb-4">
          	<div style="width: 50%" class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-phone">
                Phone
              </label>
              <input name="phone" value="{{Auth::user()->phone}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-phone" type="text" placeholder="Phone" required>
              <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
            </div>


            <div style="width: 50%;" class="md:w-1/2 w-1 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
                Email
              </label>
              <input name="email" value="{{Auth::user()->email}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-email" type="email" placeholder="Email" required>
              <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
            </div>
           </div>
            



          <div style="display: flex; justify-content: space-between; width: 100%" class="flex flex-wrap -mx-3 mb-2">

            <div style="width: 50%" class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                Viloyat
              </label>
              <div class="relative">
                <select name="state" class="block appearance-none w-full bg-gray-200 border border-gray-500 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                  <option>Select</option>
                  <option value="Toshkent">Toshkent</option>
                  <option value="Farg'ona">Farg'ona</option>
                  <option value="Andijon">Andijon</option>
                  <option value="Namangan">Namangan</option>
                  <option value="Sirdaryo">Sirdaryo</option>
                  <option value="Samarqand">Samarqand</option>
                  <option value="Jizzax">Jizzax</option>
                  <option value="Buxoro">Buxoro</option>
                  <option value="Navoiy">Navoiy</option>
                  <option value="Qashqadaryo">Qashqadaryo</option>
                  <option value="Surxondaryo">Surxondaryo</option>
                  <option value="Xorazm">Xorazm</option>
                  <option value="Qoraqolpog'iston">Qoraqolpog'iston</option>
                </select>
              </div>
            </div>

            <div style="width: 50%" class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                Shahar / Tuman
              </label>

              <input value="{{$address->city}}" name="city" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Angren">
            </div>
          </div>
          
        <div style="display: flex; width: 100%;" class=" flex-wrap -mx-3 mb-2 px-3">
        	<div style="width: 50%;" class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
        	  <label style="width: 50%;" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
                Jinsi
              </label>
              <div style="display: flex; width: 50%" class="w-full md:w-1/3 mb-6 md:mb-0">
            	<dir style="padding: 0">
              	<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-male">
                Male
              	</label>
        	  	<input id="grid-male" name="gender" value="male" type="radio" class="appearance-none checked:bg-blue-500 ..." />
        	  	</dir>
        	  	<dir style="padding: 0; padding-left: 30px;">
        	  	<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-female">
                Female
              	</label>
        	  	<input id="grid-female" name="gender" value="female" type="radio" class="appearance-none checked:bg-blue-500 ..." />
        	  	</dir>
        	  </div>
        	</div>

          <div style="width: 50%;"  class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
          	<label style="width: 50%;" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-date">
                Date Of Birth
            </label>
            <input value="{{Auth::user()->date_of_birth}}" name="date_of_birth" type="date" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-date">
          </div>


        </div>


        <div class="flex-wrap -mx-3 mb-2 px-3">
          <button type="submit" style="background-color: #0ea5e9; color: #fff; border-radius: 4px;
          padding: 8px 20px;"  class="md:w-1/3 px-3 mb-6 md:mb-0" >
            Update
          </button>
        </div>
        </form>	


      </div>
    </div>
</x-app-layout>
