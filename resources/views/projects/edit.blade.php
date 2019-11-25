@extends('layout')

@section('content')
<h1 class="title">EDIT PRODUCT</h1>

<form method="POST" action="/product/{{ $project->id }}">
{{ method_field('PATCH')}}
{{csrf_field()}}

<div class="field">
  <label class="label">Title</label>
  
  <div class="control">
    <input class="input" type="text" name="title" placeholder="Title" value="{{ $project->title }}">
  </div>
  <p class="help"><strong>Description</strong></p>
</div>

<div class="field">
  <div class="control">
    <textarea class="textarea is-small" name="description" placeholder="description">{{ $project->Description }}</textarea>
  </div>
  <br>
      <div>
    <textarea class="input" name="price" placeholder="Product price">{{ $project->price }}</textarea>
    </div>
    <br>
    <div class="control">
        <button class="button is-primary">Update Product</button>
    </div>  
</form>
<br>
<form method="POST" action="/product/{{ $project->id }}">

{{ method_field('DELETE')}}
{{csrf_field()}}
    <div class="control">
        <button type="submit" class="button is-danger">Delete Project</button>
    </div>  
</form>
<br><br>
@if($errors->any())
    <div class="notification is-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection