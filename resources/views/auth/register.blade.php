<x-layout>
<x-form-errors/>
    <form method="POST" action="{{ route('register.post') }}">
        @csrf
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="name" placeholder="Name">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Submit</button>
    </form>
</x-layout>

