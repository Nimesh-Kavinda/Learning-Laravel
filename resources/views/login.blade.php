<x-layout>
    <x-slot name="title">login Page</x-slot>

    <x-slot name="main">
        <h1>Login Form</h1>
        <form action="" method="post">
            @csrf 
            <input type="text" name="username" placeholder="Enter username">
            <br><br>
            <input type="password" name="password" placeholder="Enter Password">
            <br><br>
            <button type="submit">Login</button>
        </form>
    </x-slot>
</x-layout>



