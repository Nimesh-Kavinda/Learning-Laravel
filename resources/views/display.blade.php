<div>
  <h1>Images List</h1>

    <a href="/upload">Upload More Files</a>

@foreach($imgdata as $img)
    <img src="{{url('storage/uploads/'.$img->path)}}" alt="">
@endforeach

</div>



<style>


    img{
        width: 200px;
        height: auto;
        margin-top: 20px;
    }
</style>