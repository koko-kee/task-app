@extends('layouts.app')

@section('content')

<h1 class="text-3xl text-black-500 mb-3 mt-10">Titre de la taches</h1>
<div>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore dignissimos, esse assumenda modi inventore repellendus omnis vero provident at explicabo, quisquam alias eos laboriosam sequi ipsam praesentium repellat. Ullam, est?
    </p>

    <div class="mt-3">
        <span class="text-gray-500">Publier par
        @if (Auth::user()->id == $task->user_created_by)
            vous
        @else
            {{$task->name}}
        @endif  {{$task->created_at->diffForHumans()}}</span>
    </div>
     
    <a href="{{route('task.index')}}" class="inline-flex items-center mt-10 px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
        Retour
    </a>

</div>
@endsection