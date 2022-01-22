@extends('layouts.app')

@section('title', 'Home')
    
@section('main')
  <section class="w-full h-screen bg-gray-200 p-20 text-gray-900">
    <div class="bg-white p-6 rounded">
      <div class="flex justify-between">
        <div class="flex flex-col space-y-2">
          <div class="text-sm font-medium">
            Logged in as
          </div>
          <div class="text-2xl font-medium">
            {{ Auth::user()->username }}
          </div>
        </div>
        <div class="text-sm font-medium">
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="flex items-center space-x-2 text-sm font-medium hover:text-indigo-600"><span>Log out</span> <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
            </svg></button>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection