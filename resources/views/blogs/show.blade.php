@extends('layouts.app')


@section('content')


<div class="row">

<div class="col-md-12">
<br>
<h3>{{ $blog->title }}</h3>
<p class="lead">
 {{$blog->content}}
</p>
<a href={{ route('edit_blog_path')}}>Edit</a>
</div>


<a href="{{route('blogs_path')}}">Back</a>
</div>
@endsection