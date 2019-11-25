@extends('layout')
@section('content')

<h1 class="title is-1">Products</h1><br><br>
<div class="box">
<ul>
@foreach ($project as $project)
		<a href="/product/{{ $project->id }}">
			<li>{{$project->title}}</li>
		</a>
@endforeach

</ul>
</div>
<br><br><br>
<a class="button is-link" href="/product/create">Add new product</a>

@endsection