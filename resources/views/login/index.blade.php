@extends('layouts.app')

@section('title', 'Login')

@section('main')
  <section class="w-full h-screen flex flex-col justify-center items-center bg-gray-200">
    <form class="space-y-6" action="/login" method="POST">
      @csrf

      <div class="text-4xl font-medium text-center">
        Login
      </div>

      @if (session()->has('success'))
        <div id="alert-success" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
          <svg class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
          <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
            {{ session('success') }}
          </div>
          <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300" data-collapse-toggle="alert-success" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
        </div>
      @endif

      @if (session()->has('failed'))
        <div id="alert-failed" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
          <svg class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
          <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
            {{ session('failed') }}
          </div>
          <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300" data-collapse-toggle="alert-failed" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
        </div>
      @endif

      <div class="">
        <div class="flex items-center bg-gray-50 border border-gray-300 @error('username') border-red-600 @enderror w-full px-4 py-2 rounded">
          <label for="username" class="block text-gray-900 dark:text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
            </svg>
          </label>
          <input name="username" type="text" id="username" class="border-none focus:ring-0 text-gray-900 text-sm font-medium w-full" placeholder="Username or Email" value="{{ old('username') }}">
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

      <div class="flex items-center space-x-2">
        <input name="remember" id="remember-me" aria-describedby="remember" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 accent-indigo-700 cursor-pointer focus:ring-0" >
        <label for="remember-me" class="font-medium text-sm text-gray-900 cursor-pointer">Remember me</label>
      </div>

      <button type="submit" class="text-white bg-indigo-700 hover:bg-indigo-800 font-medium rounded text-sm px-5 py-2.5 text-center w-full">Submit</button>

      <div class="font-medium text-sm text-center">
        Don't have any account? <a href="/register" class="hover:text-indigo-700">Register</a>
      </div>
    </form>
  </section>

  <script src="{{ asset('js/script.js') }}"></script>
@endsection