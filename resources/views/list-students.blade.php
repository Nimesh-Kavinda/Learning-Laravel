<div>
    <h1>Students List</h1>
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Created AT</td>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->phone}}</td>
            <td>{{$student->created_at}}</td>
        </tr>
        @endforeach
    </table>
</div>
