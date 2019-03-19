@extends('layouts.app')

@section('content')
<div class="row"> 
@foreach($blogs as $blog)
   <div class="col-md-6">
   <div class="card">
   <div class="card-header">
   <a href="{{ route('blog_path', ['blog' =>$blog->id])}}">{{ $blog->title}}</a>


   </div>
   <div class="card-body">

{{$blog->content}} 

 <p class="lead">
  posted
     {{$blog->created_at->diffForHumans() }}
 </p>
   </div>
   </div>

</div>
</div>



@endforeach

@endsection