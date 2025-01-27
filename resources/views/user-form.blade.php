<div>
    <h2>Add New User</h2>

    <form action="adduser" method="post">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="text" name="city" id="city" placeholder="Enter your city">
        </div>
        <div>
            <button type="submit">Add User</button>
        </div>
    </form>

    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
</div>


    <style>
        h2{
            margin-bottom: 20px;
            color: blue;
            font-weight: 500;
        }

        div {
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            padding: 5px;
            width: 75%;
        }

        button {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>