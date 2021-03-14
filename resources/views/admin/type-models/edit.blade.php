@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Редактирование марки техники</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Редактирование марки техники</li>
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
                                <h3 class="card-title">Марка техники "{{ $type_model->translate()->title }}"</h3>
                            </div>
                            <!-- /.card-header -->

                            <form role="form" method="post" action="{{ route('models.update', ['model' => $type_model->id]) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Категория</label>
                                        <select  name="category_id" class="form-control @error('category') is-invalid @enderror" id="category">
                                            <option value="{{$type_model->category_id}}"  selected="true">{{$type_model->category->translate()->title}}</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->translate()->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Тип спецтехники</label>
                                        <select  name="category_id" class="form-control @error('category') is-invalid @enderror" id="category">
                                            <option value="{{$type_model->model_id}}"  selected="true">{{$type_model->model->translate()->title}}</option>
                                            @foreach($models as $model)
                                                <option value="{{$model->id}}">{{$model->translate()->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">

                                            <span class="input-group-text">Изображение</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" name="images" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="inputGroupFile01">Выберите файл</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="title">Название</label>
                                        <input type="text" name="title"
                                               class="form-control @error('title') is-invalid @enderror" id="title"
                                               value="{{ $type_model->translate()->title }}"
                                               placeholder="Название">
                                    </div>
                                </div>
                                <div class="card card-secondary">
                                    <div class="card-header"> <h3 class="card-title">Seo</h3></div>

                                    <div class="card-body">

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Seo Заголовок</span>
                                            </div>
                                            <input type="text" class="form-control" name="seo_title"  value="{{ $type_model->translate()->seo_title }}">
                                        </div>

                                        <div class="form-group">
                                            <label>Seo ключевые слова</label>
                                            <textarea class="form-control editor-s" name="seo_keywords" {{ $type_model->translate()->seo_keywords}}></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Seo Описание</label>
                                            <textarea  class="form-control editor-s" name="seo_description" >{{ $type_model->translate()->seo_description }}</textarea>
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
