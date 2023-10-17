@extends('layouts.app')

@section('content')

<h1 class="text-3xl text-black-500 mb-3 mt-10">Attribuer une tache</h1>

<div class="bg-white shadow-lg px-4 py-6 rounded-md">
    <form>
        <div class="mb-6">
            <h1 class="text-xl font-bold">le titre de la tache</h1>
        </div>
        <div class="mb-6">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900">Select your country</label>
            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option>United States</option>
                <option>Canada</option>
                <option>France</option>
                <option>Germany</option>
            </select>
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Attribuer la tache</button>
    </form>
</div>
<br>
<a href="#" class="font-medium shadow-lg bg-blue-500 px-4 py-2 text-white rounded-md hover:none">Back</a>
  
@endsection