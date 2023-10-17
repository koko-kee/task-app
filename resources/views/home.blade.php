@extends('layouts.app')

@section('content')

<h1 class="text-3xl text-black-500 mb-3 mt-10">Tableau de bord</h1>
    <div class="flex flex-row  items-center ">
        <ul class="flex flex-row justify-between items-center mb-3 md:mb-0">
            <li class="md:mr-5 py-2 md:py-0"><a href="#" class="hover:text-gray-400">Mes tâches (6)</a></li>
            <li class="md:mr-5 py-2 md:py-0"><a href="#" class="hover:text-gray-400">Mes taches creer</a></li>
            <li class="md:mr-5 py-2 md:py-0"><a href="{{route('admin.users.index')}}" class="hover:text-gray-400">Gestion des users</a></li>
            <li class="md:mr-5 py-2 md:py-0"><a href="#" class="hover:text-gray-400">Nouvelle tâche</a></li>
       </ul>
</div>

@endsection