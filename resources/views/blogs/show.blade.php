@extends('layouts.app')


@section('content')


<div class="row">

<div class="col-md-12">
<br>
<h3>{{ $blog->title }}</h3>
<p class="lead">
 {{$blog->content}}
</p>
</div>
</div>
@endsection