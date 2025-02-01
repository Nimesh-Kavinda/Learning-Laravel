<div>
        <h2>User Page</h2>

        <form action="user" method="post">
            @csrf
            <input type="text" name="username" placeholder="User Name">
            <br><br>
            <input type="password" name="password" placeholder="Enter Passowrd">
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>

</div>
