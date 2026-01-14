<form method="POST" action="{{ route('posts.update',$post->id) }}">
@csrf
@method('PUT')

<input type="text" name="title" value="{{ $post->title }}">
<textarea name="description">{{ $post->description }}</textarea>

<button type="submit">Update</button>
</form>
