@extends('layouts.app2')

@section('content')
    <div>



        <div class="row">

            <div class="col-md-6 ">


            <!--         @if($errors->any())
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
    </form> -->



                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Артикул</th>
                        <th>Название</th>
                        <th>Статус</th>
                        <th>ред.</th>
                    </tr>

                    </thead>

                    <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <form action="##" >
                            <td>{{ $item->articul  }}</td>
                            <td>{{ $item->label  }}</td>
                            <td>{{ $item->status  }}</td>


                            <td >


                                <a  href="#" @click="modal1({{$item}})" data-toggle="modal" data-target="#exampleModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg> </a>
                                <a  href="#" @click="modal1({{$item}})" data-toggle="modal" data-target="#exampleModal2"  >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                                </a>
                            </td>
                            </form>
                        </tr>


                    @endforeach


                    </tbody>
                </table>


            </div>
            <div class="col-md-4 col-md-offset-2">


                <div style="background-color: #556480;width:400px;height: 400px;padding-left:30px;padding-top:10px;">
                    @if(isset($data2))
                        <div style="color: white"> {{$data2}}</div>
                    @endif
                    <div style="color: white"><h3>добавить продукт</h3></div>
                    <form action="/profile" method="POST">
                        {{ csrf_field() }}

                        <div><span style="color:aliceblue"> Артикул </span></div>
                        <div style=""><input type="number" name="articul"
                                             style="padding: 3px;border-radius: 5px;  border: 3px solid #ffffff;"/>
                        </div>
                        <br>
                        <div><span style="color:aliceblue"> Название </span></div>
                        <div><input type="text" style="padding: 3px;border-radius: 5px;  border: 3px solid #ffffff;"
                                    name="label"/></div>
                        <br>
                        <div><span style="color:aliceblue"> Статус </span></div>
                        <div> <select name="status" style="padding: 3px;border-radius: 5px;  border: 3px solid #ffffff;">

                                <option value="available">Доступен</option>
                                <option  value="unavailable">Недоступен</option>

                            </select></div>

                        <br>

                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>

@{{ message }}
        </div>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Редактирование записи
                </div>
                <div class="modal-body" style="background-color: #556480;padding-left:30px;padding-top:10px;">
                    <form action="/page4" method="get">
                        {{ csrf_field() }}
                        <input type="hidden" name = "id" v-model="id">
                        <div><span style="color:aliceblue"> Артикул </span></div>
                        <div style=""><input type="number" name="articul" v-model="articul"
                                             style="padding: 3px;border-radius: 5px;  border: 3px solid #ffffff;"/>
                        </div>
                        <br>
                        <div><span style="color:aliceblue"> Название </span></div>
                        <div><input type="text" v-model="label" style="padding: 3px;border-radius: 5px;  border: 3px solid #ffffff;"
                                    name="label"/></div>
                        <br>
                        <div><span style="color:aliceblue"> Статус </span></div>
                        <div> <select name="status" v-model="status" style="padding: 3px;border-radius: 5px;  border: 3px solid #ffffff;">
                                <option value="available">Доступен</option>
                                <option  value="unavailable">Недоступен</option>

                            </select></div>

                        <br>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="изменить">
                   
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Удаление записи
                </div>
                <div class="modal-body" style="background-color: #556480;padding-left:30px;padding-top:10px;">
                    <form action="/page5" method="get">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" v-model="id">
                        <div><span style="color:aliceblue"> Артикул </span></div>
                        <div style=""><input type="number" name="articul" v-model="articul"
                                             style="padding: 3px;border-radius: 5px;  border: 3px solid #ffffff;" disabled/>
                        </div>
                        <br>
                        <div><span style="color:aliceblue"> Название </span></div>
                        <div><input type="text" v-model="label" style="padding: 3px;border-radius: 5px;  border: 3px solid #ffffff;"
                                    name="label" disabled/></div>
                        <br>
                        <div><span style="color:aliceblue"> Статус </span></div>
                        <div> <select name="status" disabled v-model="status" style="padding: 3px;border-radius: 5px;  border: 3px solid #ffffff;">
                                <option value="available">Доступен</option>
                                <option  value="unavailable">Недоступен</option>

                            </select></div>

                        <br>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="удалить запись">

                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->
{{--ТУТ БУДЕТ VUE--}}
<script>
    const app = new Vue({
        el: '#app',
        data: {
            id: "",
            articul: "11",
            label: "3",
            status: ""
        },

        methods: {
            modal1(item) {
                this.id = item['id'];
                this.articul = item['articul'];
                this.label = item['label'];
                this.status = item['status'];
                console.log(item)
            }
        }




    });
</script>

@endsection