@extends('layout')
@section('content')

<div class="col">
<h1 class="text-center">Upload A Gallery</h1>
<div class="row">
  <form action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
    {{csrf_field() }}

    {!! Form::label('location','Title:') !!}

    <input type="text" name="title"> <br/>

    <input type="file" name="images[]" multiple="true"> <br/>

    <input type="submit">
    
  </form>
</div>
     	
</div>



@endsection