@extends('layouts.app')

@section('content')

<form action="{{ route('store_blog_path') }}" method="POst">

@csrf

<div class="form group">
<label for="title">Title
</label>
<input type="text" name="title" class="form-control">


</div>
<div class="form-group">
<label for="content">Content</label>
<textarea name="content" rows="10" class="form-control"></textarea>
</div>
</form>
@endsection