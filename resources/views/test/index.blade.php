<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $article->title }}</title>
	<link rel="stylesheet" href="{{ asset('css/general.css') }}">
</head>
<body>
	<h2>Plantillas en Blade</h2>

	<br>
	{{ $article->title }}
	<hr>
	{{ $article->content }}
	<hr>
	{{ $article->user->name }} | {{ $article->category->name }} |

	@foreach($article->tags as $tag)
		{{ $tag->name }}
	@endforeach	
</body>
</html>

