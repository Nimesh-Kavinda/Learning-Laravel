<div>
    <h2>Add New User</h2>

    <form action="adduser" method="post">
        @csrf
        <div class="form-group">
            <input type="text" placeholder="Enter UserName" name="username">
        </div>
        <div class="form-group">
            <input type="text" placeholder="Enter City" name="city">
        </div>
        <div class="form-group">
            <input type="email" placeholder="Enter Email" name="email">
        </div>
        <div class="form-group">
            <button type="submit">Add new user</button>
        </div>
    </form>


</div>


<style>
    .form-group {
        margin-bottom: 10px;
    }

    input {
        width: 75%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
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