<div>
    <h1>Update Student Data</h1>

    <form action="/edit-student/{{$data->id}}" method="post">
        <input type="hidden" name="_method" value="put">
        @csrf 
     
    <input type="text" name="up_name" value="{{$data->name}}">
    <br><br>

    <input type="text" name="up_email" value="{{$data->email}}">
    <br><br>

    <input type="text" name="up_phone" value="{{$data->phone}}">
    <br><br>

    <div>
    <button type="submit">Update</button>
    <a href="/list-student">Cancel</a>
    </div>
    
    </form>
</div>
