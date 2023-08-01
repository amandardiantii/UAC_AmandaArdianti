@extends('user.master')

@section('content')
<div class="flex justify-center w-full mt-20">

    <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
        <div class="px-6">
          <img alt="John Doe" src="https://upload.wikimedia.org/wikipedia/commons/e/e9/221125_Ok_Taec-yeon.jpg" class="rounded-xl shadow-lg max-w-30 h-auto align-middle border-none undefined">
          <div class="pt-6 text-center">
            <h1 class="text-gray-900 text-xl font-serif font-bold leading-normal mt-0 mb-2">John Doe</h1>
            <p class="text-blue-gray-700 text-base font-light leading-relaxed mt-0 mb-4">18</p>
            <div class="flex items-center justify-center">
              <button class="false flex items-center justify-center gap-1 font-bold outline-none uppercase tracking-wider focus:outline-none focus:shadow-none transition-all duration-300 rounded-full w-10 h-10 p-0 grid place-items-center text-xs leading-normal bg-transparent text-light-blue-500 hover:bg-light-blue-50 hover:text-light-blue-700 hover:bg-light-blue-50 active:bg-light-blue-100 undefined">
                <i class="fab fa-twitter undefined text-lg"></i>
              </button>
              <button class="false flex items-center justify-center gap-1 font-bold outline-none uppercase tracking-wider focus:outline-none focus:shadow-none transition-all duration-300 rounded-full w-10 h-10 p-0 grid place-items-center text-xs leading-normal bg-transparent text-blue-500 hover:bg-blue-50 hover:text-blue-700 hover:bg-blue-50 active:bg-blue-100 undefined">
                <i class="fab fa-facebook-f undefined text-lg"></i>
              </button>
              <button class="false flex items-center justify-center gap-1 font-bold outline-none uppercase tracking-wider focus:outline-none focus:shadow-none transition-all duration-300 rounded-full w-10 h-10 p-0 grid place-items-center text-xs leading-normal bg-transparent text-pink-500 hover:bg-pink-50 hover:text-pink-700 hover:bg-pink-50 active:bg-pink-100 undefined">
                <i class="fab fa-dribbble undefined text-lg"></i>

              </button>
            </div>
          </div>
        </div>
      </div>
</div>

@endsection
