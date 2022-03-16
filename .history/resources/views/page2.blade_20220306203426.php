@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Новый тендер</div>
                <div class="panel-body">


        @if($errors->any())
            <div style=>
            @foreach ($errors->all() as $error)
            <div >
                {{$error}}
            </div>
            @endforeach
            </div>
         @endif
<form  method="POST" action="/profile">
{{ csrf_field() }}

                <div class="row" >
  <div class="col-md-2" ><h4>Название</h4></div>
  <div class="col-md-10">
<div class="input-group" >
<input type="text" name="label" class="form-control"  aria-describedby="sizing-addon2">
                </div></div>
</div>

<div class="row">
  <div class="col-md-2"><h4>Исполнитель</h4></div>
  <div class="col-md-10">
    <select name="ispolnitel">
    <option value="cherkesov">Черкесов В.А.</option>
    <option value="matancev">Матанцев Е.Р.</option>
    </select>
</div>
</div>

<div class="row">
  <div class="col-md-2"><h4>Описание задачи</h4></div>
  <div class="col-md-8">
		<textarea name="text" class="form-control" rows="3"></textarea>
</div>



</div>
<input type="submit">
</form>



             

                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection