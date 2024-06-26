@extends('layout.app')
@section('title', 'Success Payment')
@section('content')

<div class="bg-gray-100 h-screen">
    <div class="bg-white p-6  md:mx-auto  flex flex-col justify-center items-center">
  
      <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 122.88" class="w-16 h-16 mx-auto my-6">
        <defs>
            <style>
                .cls-1 {
                    fill: #eb0100;
                }

                .cls-1,
                .cls-2 {
                    fill-rule: evenodd;
                }

                .cls-2 {
                    fill: #fff;
                }
            </style>
        </defs>
        <title>cancel</title>
        <path class="cls-1" d="M61.44,0A61.44,61.44,0,1,1,0,61.44,61.44,61.44,0,0,1,61.44,0Z" />
        <path class="cls-2"
            d="M35.38,49.72c-2.16-2.13-3.9-3.47-1.19-6.1l8.74-8.53c2.77-2.8,4.39-2.66,7,0L61.68,46.86,73.39,35.15c2.14-2.17,3.47-3.91,6.1-1.2L88,42.69c2.8,2.77,2.66,4.4,0,7L76.27,61.44,88,73.21c2.65,2.58,2.79,4.21,0,7l-8.54,8.74c-2.63,2.71-4,1-6.1-1.19L61.68,76,49.9,87.81c-2.58,2.64-4.2,2.78-7,0l-8.74-8.53c-2.71-2.63-1-4,1.19-6.1L47.1,61.44,35.38,49.72Z" />
    </svg>
      <div class="text-center h-screen">
          <h3 class="md:text-2xl text-base text-gray-900 font-semibold text-center">Payment Cancelled!</h3>
          <p> Have a great day!  </p>
          <div class="py-10 text-center">
              <a href="#" class="px-12 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-3">
                  GO BACK
             </a>
          </div>
      </div>
  </div>
</div>

@push('styles')
@vite('resources/css/tailwind.css')
@endpush
@endsection
