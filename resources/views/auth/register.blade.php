@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">

<h1 class="text-3xl text-center font-bold">Register</h1>

<form class="mt-4" method="POST" action="">
    @csrf
    @method('POST')

    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" name="name" placeholder="Username" id="name">
    @error('name')    
    <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{$message}}</p>
    @enderror

    <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" name="email" placeholder="Email" id="email">
    @error('email')    
    <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{$message}}</p>
    @enderror
    
    <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" name="password" placeholder="Password" id="password">
    @error('password')    
    <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{$message}}</p>
    @enderror

    <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" name="password_confirmation" placeholder="Password Confirmation" id="password_confirmation">

    {{-- <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* Error.</p> --}}
    <button type="submit" class="rpunded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600 focus:bg-indigo-600">Register</button>

</form>
</div>

@endsection