@extends('admin.layouts.layout')
@section('links')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <meta id="_csrf_token" content="{{ csrf_token() }}" name="csrf-token">
@endsection
@section('content')
    <div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Создание  техники</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Создание  техники</li>
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
                        <form role="form" method="post" action="{{ route('type-models.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="category">Категория</label>
                                    <select  name="category_id" class="form-control @error('category') is-invalid @enderror" id="category">
                                        <option value="0" dissabled="true" >Выберете категорию</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->translate()->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div   class="card-body model-block">
                                <div class="form-group">
                                    <label for="title">Марка</label>
                                    <select  name="model_id" class="form-control " id="model">
                                    </select>
                                </div>
                            </div>
                            <div class="card-body model-block" >
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
                                           placeholder="Название">
                                </div>

                                <div class="form-group">
                                    <h3>Характеристики</h3>
                                    <div class="container">
                                        <div class="row mb-1">
                                            <div class="col-4"><input type="text" name="Year" placeholder="Год выпуска"></div>
                                            <div class="col-4"><input type="text" name="Hours" placeholder="Моточасы"></div>
                                            <div class="col-4"><input type="text" name="lifting_force" placeholder="Подъёмная сила"></div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-4"><input type="text" name="height_with_mast_folded" placeholder="Высота со сложенной мачтой"></div>
                                            <div class="col-4"><input type="text" name="fuel_type" placeholder="Тип топлива"></div>
                                            <div class="col-4"><input type="text" name="motor" placeholder="Двигатель"></div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-12">
                                                <textarea name="description" cols="120" rows="10" placeholder="Описание"></textarea>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-secondary  model-block" id="divmodeltypeSeo">
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

                            <div class="card-footer  model-block" id="divmodelBtn">
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
@endsection
