@extends('layout')

@section('content')
<br>
<div class="box">
<h1 class="title">{{$project->title}}</h1>
<div class="content">{{ $project->Description }}</div>
<div class="content">${{ $project->price }}</div>
<a class="button is-info" href="/product/{{$project->id}}/edit">Edit</a>
<br>
</div>

@if($project->specs->count())
<div class="box">
<h1 class="title">Product Specification</h1>
    @foreach($project->specs as $specs)
    <li>
    <form method="POST" action="/specs/{{$specs->id }}">
    {{ method_field('PATCH')}}
    {{csrf_field()}}
        <label class="checkbox {{$specs->completed ? '' : 'is-complete'}}" for="completed">
        <input type="checkbox" name="completed" onChange="this.form.submit()" {{$specs->completed ? 'checked' : ''}}>
        {{$specs->description}}
        </label>
    </form>
    </li>
    @endforeach
</div>
@endif
<br>
<form method="POST" action="/product/{{$project->id}}/specs" class="box">
    
    {{csrf_field()}}
<h1 class="title"> Add Product Specification </h1>
<div class="field">
<label class="label" for="description"></label>

<div class="control">
<input type="text" class="input" name="description" placeholder="New Specification">
</div>
</div>
<div class="control">
  <button class="button is-primary">Add Specification</button>
</div>
<br>
@include ('error')
</form>
<br>

@endsection