<h1>Blog</h1>

@if (count($posts))
	@foreach ($posts as $post)
	<h2>{{ $post->title }}</h2>

	{{ $post->body }}
	@endforeach
@else
<p>No posts to show.</p>
@endif