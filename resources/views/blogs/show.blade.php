@extends('layouts.app')


@section('content')


<div class="row">

<div class="col-md-12">
<br>
<h3>{{ $blog->title }}</h3>
<p class="lead">
 {{$blog->content}}
</p>
<a href="{{ route('edit_blog_path', ['blog' =>$blog->id])}}" class="btn btn-outline-info">Edit</a>
<a href="{{route('blogs_path')}}" class="btn btn-outline-secondary">Back</a>
<a href="{{ route('delete_blog_path')}}" class="btn btn-outline-danger">Delete</a>
</div>


</div>
@endsection