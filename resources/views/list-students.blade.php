<div>
    <h1>Students List</h1>
    
    @if(session('meassage'))
    <div class="alert alert-success">
        {{ session('meassage') }}
    </div>
@endif
    
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Created AT</td>
            <td>Operations</td>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->phone}}</td>
            <td>{{$student->created_at}}</td>
            <td><a href="{{'delete/'.$student->id}}">Delete</a> 
                <a href="{{'edit/'.$student->id}}">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
