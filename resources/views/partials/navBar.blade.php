<div class="flex flex-row justify-between items-center">
    <div class="font-bold text-lg">
        <h1>Task-app</h1>
    </div>
    <ul class="flex flex-row items-center mb-3 md:mb-0">
        <li class="md:mr-5 py-2 md:py-0"><a href="#" class="hover:text-gray-400">Mon compte</a></li>
        <form action="{{route('logout')}}" method="post">
            @csrf
            <button class="md:mr-5 py-2 md:py-0" type="submit">Déconnexion</button>
            <li><a href="" class="hover:text-gray-400"></a></li>
        </form>
    </ul>
 </div>