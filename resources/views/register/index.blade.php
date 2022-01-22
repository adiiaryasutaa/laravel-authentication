@extends('layouts.app')

@section('title', 'Register')

@section('main')
  <section class="w-full h-screen flex justify-center items-center bg-gray-200">
    <form class="space-y-6" action="/register" method="POST">
      @csrf

      <div class="text-4xl font-medium text-center">
        Register
      </div>

      <div class="">
        <div class="flex items-center bg-gray-50 border border-gray-300 @error('email') border-red-600 @enderror w-full px-4 py-2 rounded">
          <label for="email" class="block text-gray-900 dark:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
              <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
            </svg>
          </label>
          <input name="email" type="text" id="email" class="border-none focus:ring-0 text-gray-900 text-sm font-medium w-full" placeholder="Email" value="{{ old('email') }}">
        </div>
        @error('email')
          <div class="text-sm font-medium text-red-600">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="">
        <div class="flex items-center bg-gray-50 border border-gray-300 @error('username') border-red-600 @enderror w-full px-4 py-2 rounded">
          <label for="username" class="block text-gray-900 dark:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
            </svg>
          </label>
          <input name="username" type="text" id="username" class="border-none focus:ring-0 text-gray-900 text-sm font-medium w-full" placeholder="Username" value="{{ old('username') }}">
        </div>
        @error('username')
          <div class="text-sm font-medium text-red-600">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="">
        <div class="flex items-center bg-gray-50 border border-gray-300 @error('password') border-red-600 @enderror w-full px-4 py-2 rounded">
          <label for="password" class="block text-gray-900 dark:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M18 8a6 6 0 01-7.743 5.743L10 14l-1 1-1 1H6v2H2v-4l4.257-4.257A6 6 0 1118 8zm-6-4a1 1 0 100 2 2 2 0 012 2 1 1 0 102 0 4 4 0 00-4-4z" clip-rule="evenodd" />
            </svg>
          </label>
          <input name="password" type="password" id="password" class="border-none focus:ring-0 text-gray-900 text-sm font-medium w-full" placeholder="Password">
          <button type="button" class="cursor-pointer hover:text-indigo-700" id="view-password-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
              <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
            </svg>
          </button>
        </div>
        @error('password')
          <div class="text-sm font-medium text-red-600">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="">
        <div class="flex items-center bg-gray-50 border border-gray-300 @error('confirm_password') border-red-600 @enderror w-full px-4 py-2 rounded">
          <label for="confirm-password" class="block text-gray-900 dark:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M18 8a6 6 0 01-7.743 5.743L10 14l-1 1-1 1H6v2H2v-4l4.257-4.257A6 6 0 1118 8zm-6-4a1 1 0 100 2 2 2 0 012 2 1 1 0 102 0 4 4 0 00-4-4z" clip-rule="evenodd" />
            </svg>
          </label>
          <input name="confirm_password" type="password" id="confirm-password" class="border-none focus:ring-0 text-gray-900 text-sm font-medium w-full" placeholder="Confirm Password">
        </div>
        @error('confirm_password')
          <div class="text-sm font-medium text-red-600">
            {{ $message }}
          </div>
        @enderror
      </div>

      <button type="submit" class="text-white bg-indigo-700 hover:bg-indigo-800 font-medium rounded text-sm px-5 py-2.5 text-center w-full">Submit</button>

      <div class="font-medium text-sm text-center">
        Do you have any account? <a href="/login" class="hover:text-indigo-700">Login</a>
      </div>
    </form>
  </section>

  <script src="{{ asset('js/script.js') }}"></script>
@endsection