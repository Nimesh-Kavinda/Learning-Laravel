<div>
        <h2>User Form</h2>

        <form action="user" method="post">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <input type="text" name="user" placeholder="Enter name">
            <br><br>
            <input type="password" name="password" placeholder="Enter password">
            <br><br>
            <button type="submit">Submit</button>


        </form>

</div>
