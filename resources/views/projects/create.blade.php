@extends('layout')

@section('content')
<h1 class="title is-1">Add new product</h1>
<br>
<form method="POST" action="/product">
{{csrf_field()}}
    <div>
    <input class="input {{$errors->has('title') ? 'is-danger' : ''}}" type="text" name="title" placeholder="Product title" value="{{old('title')}}">
    </div>
    
    <br>
    
    <div>
    <textarea class="textarea {{$errors->has('description') ? 'is-danger' : ''}}" name="description" placeholder="Project description" >{{old('description')}}</textarea>
    </div>
    
    <br>
    
    <div>
    <textarea class="input {{$errors->has('price') ? 'is-danger' : ''}}" name="price" placeholder="Product price" >{{old('price')}}</textarea>
    </div>
    
    <br>
    <div>
    <button class="button is-success" type="submit">Add Product</button>
    </div>
    </form>
    
<br>
@include ('error')
@endsection
