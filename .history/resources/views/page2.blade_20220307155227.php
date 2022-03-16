@extends('layouts.app2')

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
<input type="submit" class="btn btn-primary">
</form>


<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Артикул</th>
            <th>Название</th>
            <th>Статус</th>
            <th>Артрибуты</th>
            </tr>
    
    </thead>
    
    <tbody>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>1</td>
            <td>2</td>
        </tr>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>1</td>
            <td>2</td>
        </tr>
    </tbody>
</table>

                  
                </div>
            </div>
        </div>
    </div>
</div>

<div>

<button class="btn btn-primary">добавить</button>
<div style="background-color: #556480;">asdas</div>

</div>
@endsection