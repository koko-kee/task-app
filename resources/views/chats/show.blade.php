@extends('layouts.app')

@section('content')
<div>
    <div class="max-w-1/2 w-1/2 mx-auto">
    <h1 class="text-3xl text-gray-500 mb-5">Mission : Construire un framework</h1>
    <div class="rounded-lg px-3 py-3 mb-2 font-medium bg-blue-500 text-white mr-auto max-w-1/2 w-1/2">
        <p class="font-light">vous avez dit : </p>
        <p>salut</p>
    </div>
    <div class="rounded-lg px-3 py-3 mb-2 font-medium ml-auto bg-gray-300 text-gray-700 max-w-1/2 w-1/2">
        <p class="font-light">vous avez dit : </p>
        <p>salut</p>
    </div>
    <textarea  class="border rounded px-3 py-4 mt-3 mb-5 shadow-md w-full"></textarea>
    <button class="bg-blue-500 text-white px-2 py-2 rounded-md" type="button">
        Envoyer
    </div>
</div>
@endsection