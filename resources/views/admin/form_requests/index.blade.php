@extends('admin.layouts.layout')
@section('links')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Главная</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
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
                                        <th scope="col">Продукт</th>
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
                                            <th scope="row">{{$item->product_name}}</th>

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
                                                            <button type="submit" class="btn btn-info btn-delete ml-2" @if($item->is_new==0)disabled @endif>Просмотрено</button>
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
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>

        <!-- /.content -->
    </div>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
@endsection
