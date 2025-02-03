<x-layout>
    <x-slot name="title">login Page</x-slot>

    <x-slot name="main">
        <h1 class="heading">Login Form</h1>
        <form action="" method="post">
            @csrf 
            <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>
  </div>
            <button type="button" class="btn btn-primary" onclick="makeGreen()">Login</button>
        </form>
    </x-slot>
</x-layout>



