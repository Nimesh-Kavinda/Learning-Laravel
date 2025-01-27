
<x-message-banner msg="User added sucsesfully" class="succsess"/>
<x-message-banner msg="User logout sucsesfully" class="fail"/>
<!-- Include the message banner component -->
<h1>Home Page</h1>



<style>
    .succsess{
        color: green;
        font-weight: 800;
        padding: 10px;
        border-radius: 10px;
        width: 50%;
        margin: 50px;
        gap: 10px;
        background-color: lightgreen;
        display: flex;
        text-align: center;
        align-items: center;
        justify-content: center;
    }

    .fail{
        color: red;
        font-weight: 800;
        padding: 10px;
        border-radius: 10px;
        width: 50%;
        margin: 50px;
        gap: 10px;
        background-color: lightpink;
        display: flex;
        text-align: center;
        align-items: center;
        justify-content: center;
    }
</style>