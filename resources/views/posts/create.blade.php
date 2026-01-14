<form method="POST" action="{{ route('posts.store') }}">
@csrf
<input type="text" name="title" placeholder="Title">
<textarea name="description"></textarea>
<button type="submit">Save</button>
</form>
