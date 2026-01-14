<a href="{{ route('posts.create') }}">Add Post</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

@foreach($posts as $post)

    <h3>{{ $post->title }}</h3>
    <p>{{ $post->description }}</p>
     @if($post->deleted_at == "")   
        <a href="{{ route('posts.edit',$post->id) }}">Edit</a>
        <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
     @endif
     <hr size=1>
@endforeach

{{ $posts->links() }}
