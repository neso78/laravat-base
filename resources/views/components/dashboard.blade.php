<x-layout>
    <h1>Dobrodosao {{\Illuminate\Support\Facades\Auth::user()->username}}</h1>


    <x-slot name="scripts">
        <script>
            console.log('Pozdrav iz welcome strane!');
        </script>
    </x-slot>

</x-layout>


