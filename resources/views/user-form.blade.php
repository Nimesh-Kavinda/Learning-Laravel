<div>
    <h2>Add New User</h2>

    <div>
       <!-- @if($errors->any)
       @foreach($errors->all() as $error)
       <div style="color: red;">{{$error}}</div>
       @endforeach
       @endif -->
    </div>

    <form action="adduser" method="post">
        @csrf

        <div class="form-group">
            <input type="text" name="name" placeholder="Enter Name">
            <span style="color: red;">@error('name'){{$message}}@enderror</span>
            <input type="text" name="email" placeholder="Enter email">
            <span style="color: red;">@error('email'){{$message}}@enderror</span>
            <input type="text" name="city" placeholder="Enter City">
            <span style="color: red;">@error('city'){{$message}}@enderror</span>
        </div>


        <div>
            <h4>User Skills</h4>
            <input type="checkbox" name="skills[]" id="php" value="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skills[]" id="java" value="java">
            <label for="java">Java</label>
            <input type="checkbox" name="skills[]" id="node" value="node">
            <label for="node">Node</label>
            <span style="color: red;">@error('skills'){{$message}}@enderror</span>
        </div>


        <div style="margin-top: 20px;">
            <button type="submit">Add user Details</button>
        </div>


    </form>


</div>


<style>
    .form-group {
        margin-bottom: 10px;
    }

    .form-group input {
        width: 75%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin: 5px;
    }

    button {
        padding: 10px 20px;
        background-color: #333;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>