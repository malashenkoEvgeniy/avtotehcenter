@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Создание страницы</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Создание страницы</li>
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
                        <form role="form" method="post" action="{{ route('page.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">

                                        <span class="input-group-text">Банер</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="banner" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Выберите файл</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="title">Название страницы</label>
                                    <input type="text" name="title"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="Название страницы">
                                </div>

                                <div class="form-group">
                                    <label>Текст на странице</label>
                                    <textarea  class="form-control editor-s" id="myckeditor" name="body"></textarea>
                                </div>
                            </div>
                            <div class="card card-secondary">
                                <div class="card-header"> <h3 class="card-title">Seo</h3></div>

                                <div class="card-body">

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Seo Заголовок</span>
                                        </div>
                                        <input type="text" class="form-control" name="seo_title">
                                    </div>

                                    <div class="form-group">
                                        <label>Seo Описание</label>
                                        <textarea  class="form-control editor-s" name="seo_description"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Seo ключевые слова</label>
                                        <textarea class="form-control editor-s" name="seo_keywords"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>

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
    <script >
        let editor = CKEDITOR.replace( 'myckeditor' );
    </script>

@endsection
