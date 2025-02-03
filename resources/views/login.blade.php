<x-layout>
    <x-slot name="title">login Page</x-slot>

    <x-slot name="main">
        <h1>Login Form</h1>
        <form action="" method="post">
            @csrf 
            <input type="text" name="username" placeholder="Enter username">
            <input type="password" name="password" placeholder="Enter Password">
            <button type="submit">Login</button>
        </form>
    </x-slot>
</x-layout>



<style>
    main{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    form{
       display: flex;
       flex-direction: column;   
       align-items: right;
       justify-content: center;
       text-align: center; 
    }

    form input{
        padding: 10px;
        margin: 10px 20px;
        width: 50%;
        
    }

    button{
        padding: 10px;
        color: green;
        background-color: lightgreen;
        border-radius: 5px;
        width: 25%;

    }

</style>
