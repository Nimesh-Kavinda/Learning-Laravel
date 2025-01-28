<div>
    <h2>Add New User</h2>


    <form action="adduser" method="post">
        @csrf

        <div class="form-group">
            <input type="text" name="name" placeholder="Enter Name" value="{{old('name')}}" class="{{$errors->first('name')? 'input-error' : ''}}">
            <span style="color: red;">@error('name'){{$message}}@enderror</span>
            <input type="text" name="email" placeholder="Enter email" value="{{old('email')}}"  class="{{$errors->first('email')? 'input-error' : ''}}">
            <span style="color: red;">@error('email'){{$message}}@enderror</span>
            <input type="text" name="city" placeholder="Enter City" value="{{old('city')}}"  class="{{$errors->first('city')? 'input-error' : ''}}">
            <span style="color: red;">@error('city'){{$message}}@enderror</span>
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

    .input-error{
        border: 1px solid red !important; 
        color: red !important;
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