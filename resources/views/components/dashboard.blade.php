<x-layout>
    <h1>Wellcome to private dasboard {{\Illuminate\Support\Facades\Auth::user()->name}}</h1>
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
</x-layout>


