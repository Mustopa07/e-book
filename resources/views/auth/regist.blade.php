<x-app-layout>
    <x-slot name="title">
        Registration
    </x-slot>

<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">


<section class="bg-blueGray-50">
  <div class="w-full lg:w-4/12 px-4 mx-auto pt-20">
    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0 pt-8">
      <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
        <div class="text-center mb-3 font-bold text-2xl tracking-widest pb-5">
          <h1>Registration</h1>
        </div>
        <form>
          <div class="relative w-full mb-3">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Email</label>
            <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Email">
          </div>
          <div class="relative w-full mb-3">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Password</label>
            <input type="password" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Password">
          </div>
          <div class="relative w-full mb-3">
            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Verify Password</label>
            <input type="password" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Password">
          </div>
          <div class="text-center mt-10">
            <button class="mb-3 bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 w-full ease-linear transition-all duration-150" type="button"> Regist </button>
            <small class="pt-5">Already Have Account?, <a href="{{ route('login') }}" class="text-blue-400">Login Here</a></small>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


</x-app-layout>
