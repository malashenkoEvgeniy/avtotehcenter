@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Список типов спецтехники</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Список типов спецтехники</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Список типов спецтехники</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @include('admin.includes.alerts')
                                <a href="{{ route('models.create') }}" class="btn btn-primary mb-3">Добавить
                                    тип спецтехники</a>
                                @if (count($models))
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover text-nowrap">
                                            <thead>
                                            <tr>
                                                <th style="width: 30px">#</th>
                                                <th>Наименование</th>
                                                <th>Изображение</th>
                                                <th>Slug</th>
                                                <th>Категория</th>
                                                <th>Seo заголовок</th>
                                                <th>Seo ключи</th>
                                                <th>Seo описание</th>
                                                <th>Actions</th>
{{--                                                <th>Количество единиц</th>--}}
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($models as $model)
                                                <tr>
                                                    <td>{{ $model->id }}</td>
                                                    <td>{{ $model->translate()->title }}</td>
                                                    <td><img src="{{$model->images !== null ? $model->images : '/assets/admin/img/default_img.jpg'}}" alt="img" width="100" height="30"></td>
                                                    <td>{{ $model->slug }}</td>
                                                    <td>{{ $model->category->translate()->title }}</td>
                                                    <td>{{ $model->translate()->seo_title }}</td>
                                                    <td>{{ $model->translate()->seo_keywords }}</td>
                                                    <td>{{ $model->translate()->seo_description }}</td>
                                                    <td>
                                                        <div style="display: flex">
                                                        <a href="{{ route('models.edit', ['model' => $model->id]) }}" class="btn btn-info btn-sm float-left mr-1">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                        <form action="{{ route('models.destroy', ['id' => $model->id]) }}" method="post" class="float-left">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                    onclick="return confirm('Подтвердите удаление')">
                                                                <i
                                                                    class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <p>Марок пока нет...</p>
                                @endif
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                {{ $models->links() }}

                            </div>
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>

        <!-- /.content -->
    </div>
@endsection
