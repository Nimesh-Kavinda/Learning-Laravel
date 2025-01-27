<h1>Home Page</h1>


<h1>{{$name}}</h1>

<h1>{{rand()}}</h1> 

    <!-- Function rand() ==> random value -->

    <!-- <h1>{{print_r($users)}}</h1>        using print_r() ==> print array -->

    <!-- <h1>{{$users[2]}}</h1>           using array index -->

    <!-- how to use if else  -->

    <div>
        @if($name=='Nimesh')
        <h2>This is Nimesh</h2>
        @elseif($name=='Raj')
        <h2>this is sam</h2>
        @else
        <h2>other user</h2>
        @endif
    </div>

    <!-- using for loop  -->
    <div>
        @for($i=0;$i<=10;$i++)
        <h2>{{$i}}</h2>
        @endfor 
    </div>


    <!-- use foreach loop -->
   
    <div>
        @foreach($users as $user)
        <h2>{{$user}}</h2>
        @endforeach
    </div>