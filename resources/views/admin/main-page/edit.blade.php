@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Редактирование главной страницы</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Редактирование главной страницы</li>
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

                            <!-- /.card-header -->

                            <form role="form" method="post" action="{{ route('main-page.update', ['id' => $page->id]) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="title">Заголовок</label>
                                        <input type="text" name="title"
                                               class="form-control @error('title') is-invalid @enderror" id="title"
                                               value="{{ $page->translate()->title }}"
                                               placeholder="Название">
                                    </div>
                                    <div class="form-group">
                                        <label>Текст</label>
                                        <textarea  class="form-control editor-s" id="myckeditor" name="body" >{{ $page->translate()->body }}</textarea>
                                    </div>
                                </div>
                                <div class="card card-secondary">
                                    <div class="card-header"> <h3 class="card-title">Seo</h3></div>

                                    <div class="card-body">

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Seo Заголовок</span>
                                            </div>
                                            <input type="text" class="form-control" name="seo_title"  value="{{ $page->translate()->seo_title }}">
                                        </div>

                                        <div class="form-group">
                                            <label>Seo ключевые слова</label>
                                            <textarea class="form-control editor-s" name="seo_keywords" {{ $page->translate()->seo_keywords}}></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Seo Описание</label>
                                            <textarea  class="form-control editor-s" name="seo_description" >{{ $page->translate()->seo_description }}</textarea>
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
