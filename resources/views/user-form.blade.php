<div>
    <h2>Add New User</h2>

    <form action="adduser" method="post">
        @csrf
        <div>
            <h4>User Skills</h4>
            <input type="checkbox" name="skills[]" id="php" value="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skills[]" id="java" value="java">
            <label for="java">Java</label>
            <input type="checkbox" name="skills[]" id="node" value="node">
            <label for="node">Node</label>
        </div>

        <div>
          <h4>User Gender</h4>
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Female</label>
        </div>

        <div>
            <h4>User Age</h4>
            <input type="range" name="age" max="100" min="18">
        </div>

        <div>
            <h4>User City</h4>
            <select name="city">
                <option value="kandy">Kandy</option>
                <option value="colombo">Colombo</option>
                <option value="kegalle">Kegalle</option>
            </select>
        </div>

        <div style="margin-top: 20px;">
            <button type="submit">Add user Details</button>
        </div>


    </form>


</div>


<style>
    /* .form-group {
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
    } */
</style>