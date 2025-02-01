<div>
   <h1>Profile Page</h1>

    @if(session('user'))
    <h2>Welcome , {{session('user')}}</h2>
    @else
    <h2>No User data</h2> <a href="login">login</a>
    @endif

</div>


<a href="logout">Logout</a>
