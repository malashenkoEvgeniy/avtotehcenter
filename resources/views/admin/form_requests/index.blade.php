
@extends('admin.layouts')

@section('content')
<div class="container col-12">
  <div class="row justify-content-center">
    <div class="col-12">
      <div class="card">

        <div class="card-body">

          <table class="table table-bordered">
              <thead>
                  <tr>
                    <th scope="col">Имя</th>
                    <th scope="col">Телефон</th>
                    <th scope="col">Комментарий</th>
                    <th scope="col">Дата</th>
                    <th scope="col">Страница</th>
                    <th scope="col"></th>
                  </tr>
              </thead>
                  <tbody>

                      @foreach($formRequests as $item)
                      <tr >

                      <th scope="row">{{$item->name}} </th>
                      <th scope="row">{{$item->phone}}</th>
                      <th scope="row">{{$item->body}}</th>
                      <th scope="row">{{$item->created_at}} @if($item->is_new) <span class="right badge badge-info">Новая</span> @endif</th>
                      <th scope="row"><a href="{{$item->page}}">{{$item->page}}</a></th>

                      <td>
                          <div class="col">
                              <div class="row">
                                  <form action="{{ route('form_requests.destroy',$item->id)}}" method="POST" onsubmit="return confirm('Удалить?') ? true : false;">
                                      {!! csrf_field() !!}
                                      {{ method_field('DELETE') }}
                                      <button type="submit" class="btn btn-danger btn-delete">Удалить</button>
                                  </form>
                                  <form action="{{ route('form_requests.update',$item->id)}}" method="POST" onsubmit="return confirm('Просмотрено?') ? true : false;">
                                      {!! csrf_field() !!}
                                      {{ method_field('PUT') }}
                                      <button type="submit" class="btn btn-info btn-delete ml-2">Просмотрено</button>
                                  </form>
                              </div>
                          </div>

                      </td>
                      </tr>
                      @endforeach
              </tbody>
          </table>


        </div>
      </div>
    </div>
  </div>
</div>
@endsection
