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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Главная</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @include('admin.includes.alerts')
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover text-nowrap">
                                            <thead>
                                            <tr>
                                                <th style="width: 30px">#</th>
                                                <th>Наименование</th>
                                                <th>Банер</th>
{{--                                                <th>Текст на главной</th>--}}

                                                <th>Seo заголовок</th>
                                                <th>Seo ключи</th>
                                                <th>Seo описание</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ $page->id }}</td>
                                                    <td>{{ $page->translate()->title }}</td>
                                                    <td>
                                                        <a data-fancybox="gallery" href="{{$page->banner}}">
                                                        <img src="{{$page->banner !== null ? $page->banner : '/assets/admin/img/default_img.jpg'}}" alt="img" width="100" height="50">
                                                        </a>
                                                    </td>

                                                    <td>{{ $page->translate()->seo_title }}</td>
                                                    <td>{{ $page->translate()->seo_keywords }}</td>
                                                    <td>{{ $page->translate()->seo_description }}</td>
                                                    <td>
                                                        <a href="{{ route('main-page.edit', ['id' => $page->id]) }}" class="btn btn-info btn-sm float-left mr-1">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <a href="{{ route('slider.create') }}" class="btn btn-primary mb-3">Добавить
                                    изображение/видио</a>
                                <table class="table table-bordered table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th style="width: 30px">#</th>
                                        <th>Изображение/Видео</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sliders as $slider)
                                    <tr>
                                        <td>{{ $slider->id }}</td>
                                        @if($slider->is_video == 0)
                                            <td><img src="{{$slider->url}}" alt="img" width="200" height="150"></td>
                                        @else
                                            <td>
                                                <video loop="loop" autoplay="autoplay" muted="muted" playsinline preload="auto" width="200" height="150">
                                                    <source src="{{$slider->url}}" type="video/mp4">
                                                </video>
                                            </td>
                                        @endif
                                        <td>
                                            <form action="{{ route('slider.destroy', ['id' => $slider->id]) }}" method="post" class="float-left">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Подтвердите удаление')">
                                                    <i
                                                        class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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
@section('scripts')
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
@endsection
