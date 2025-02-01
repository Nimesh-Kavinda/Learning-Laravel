<div>
    <h1>User Data</h1>

    <table border="2">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>phone</td>
        </tr>
        @foreach($data as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
        </tr>
        @endforeach
    </table>
</div>
