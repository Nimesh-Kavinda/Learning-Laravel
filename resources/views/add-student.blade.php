<div>
    <h1>Add New Student</h1>
    <form action="add-student" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Your Name">
        <br><br>

        <input type="email" name="email" placeholder="Enter Your Email">
        <br><br>

        <input type="text" name="phone" placeholder="Enter Your Phone">
        <br><br>

        <button type="submit">Add Student</button>
    </form>
</div>
