

<form action="{{ route('store_blog_path') }}" method="POst">

@csrf

<div class="form group">
<label for="title">Title
</label>
<input type="text" name="title">

</div>
</form>