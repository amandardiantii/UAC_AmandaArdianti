@extends('layout.master')

@section('content')
<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 m-10 mt-8 lg:py-0" >
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Create an account
                </h1>
                <form class="space-y-4 md:space-y-6" action="/register" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Full Name" required="">
                    </div>

                    <div>
                        <label for="ig" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Instagram Username</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="https://www.instagram.com/username/" required="">
                    </div>

                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="081111111111" required="">
                    </div>

                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>

                    <div class="my-4">
                        <input type="radio" name="gender" id="L" value="M" required>
                        <label for="M">Man</label>
                        <input type="radio" name="gender" id="P" value="W" required>
                        <label for="W">Woman</label>
                    </div>

                    <div class="my-4">
                        <label for="">Choose Hobby 1</label>
                        <br>
                        @foreach ($hobbies as $hobby)
                            <input type="radio" name="hobby1" id="" value="{{ $hobby->id }}" required>
                            <label for="">{{ $hobby->name }}</label>
                            <br>
                        @endforeach
                    </div>

                    <div class="my-4">
                        <label for="">Choose Hobby 2</label>
                        <br>
                        @foreach ($hobbies as $hobby)
                            <input type="radio" name="hobby2" id="" value="{{ $hobby->id }}" required>
                            <label for="">{{ $hobby->name }}</label>
                            <br>
                        @endforeach
                    </div>

                    <div class="my-4">
                        <label for="">Choose Hobby 3</label>
                        <br>
                        @foreach ($hobbies as $hobby)
                            <input type="radio" name="hobby3" id="" value="{{ $hobby->id }}" required>
                            <label for="">{{ $hobby->name }}</label>
                            <br>
                        @endforeach
                    </div>

                    <h2>Upload a photo for your profile</h2>
                    <input
                    class="block my-4 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50"
                    id="image" type="file" name="image">


                    <button type="submit"
                        class="w-full text-center bg-blue-600 py-3 rounded-md text-white hover:bg-blue-700">Create
                        Account</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Already have an account? <a href="/login" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

  </section>
@endsection
