<div>
    <h1>Add user</h1>


    @if(session('message'))
    <span class="suc_msg">{{session('message')}}</span>
    @endif
    
    @if(session('name'))
    <span class="suc_msg">{{session('name')}}</span>
    @endif

    {{session()->keep('name')}}

    <form action="add" method="post">

    @csrf

        <input type="text" name="username" placeholder="Enter Name">
        <br>
        <br>

        <input type="text" name="email" placeholder="Enter Email">
        <br>
        <br>

        <input type="text" name="phone" placeholder="Enter Phone:no">
        <br>
        <br>

        <button type="submit">ADD user</button>
    </form>
</div>


<style>
    .suc_msg{
        background-color: lightgreen;
        color: green;
        padding: 20px 20px;
        margin :30px;
        border-radius: 5px;
        display: flex;
        text-align: center;
        align-items: left;
        justify-content: center;
        width: 50%;
    }
</style>