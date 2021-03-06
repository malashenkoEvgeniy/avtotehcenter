@extends('admin.layouts.layout')
@section('links')

    <meta id="_csrf_token" content="{{ csrf_token() }}" name="csrf-token">
    <style>
        .characteristic input {
            max-width: 100px;
        }

    </style>

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
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>

                            </div>
                        @endif
                            @include('admin.includes.alerts')
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
                                <div class="form-group">
                                    <label for="category">Марка</label>
                                    <select  name="model_id" class="form-control @error('category') is-invalid @enderror" id="category">
                                        <option value="0" dissabled="true" >Выберете марку</option>
                                        @foreach($models as $model)
                                            <option value="{{$model->id}}">{{$model->translate()->title}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="title">Название</label>
                                    <input type="text" name="title"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="Название" required>
                                </div>
                                <div class="form-group">
                                    <label>Текст</label>
                                    <textarea  class="form-control editor" name="body" ></textarea>
                                </div>
                            </div>
                            <div class="card-body" >
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Изображение</span>
                                    </div>
                                    <div class="custom-file">
                                        <span class="input-group-text">Изображение</span>
                                        <input type="file" name="images" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Выберите файл</label>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <h3>Характеристики</h3>
                                    <div class="container">
                                        <div class="mb-1 " style="display: flex">
                                            <div class="characteristic mr-1"><input style="min-width: 125px" type="text" name="lifting_force" placeholder="Подъёмная сила"></div>
                                            <input class="mr-1" type="number" name="Year" placeholder="Год выпуска">
                                            <div class="mr-1"><input type="text" name="Hours" placeholder="Моточасы"></div>
                                            <div class="mr-1"><input type="text" name="v_motor" placeholder="Обьем двигателя"></div>
                                            <div class=""><input type="text" name="fuel_type" placeholder="Тип топлива"></div>
                                        </div>
                                        <div class="characteristic mb-1" style="display: flex">
                                            <div class="mr-1"><input style="min-width: 215px" type="text" name="height_with_mast_folded" placeholder="Высота со сложенной мачтой"></div>


                                            <div class=""><input type="text" name="motor" placeholder="Двигатель"></div>
                                        </div>
                                        <div class=" mb-1">
                                            <div class="">
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

                            <div class="card-footer" id="divmodelBtn">
                                <input type="hidden" name="language" value="{{ LaravelLocalization::getCurrentLocale() }}">
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
    <script type="text/javascript">

        ClassicEditor
            .create( document.querySelector( '.editor' ), {
                ckfinder: {
                    uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
                },
                alignment: {
                    options: [ 'left', 'right', 'center', 'justify' ]
                },
                image: {
                    // You need to configure the image toolbar, too, so it uses the new style buttons.
                    toolbar: [ 'imageTextAlternative', '|', 'imageStyle:alignLeft', 'imageStyle:full', 'imageStyle:alignRight' ],

                    styles: [
                        // This option is equal to a situation where no style is applied.
                        'full',

                        // This represents an image aligned to the left.
                        'alignLeft',

                        // This represents an image aligned to the right.
                        'alignRight'
                    ]
                },
                toolbar: {
                    items: [
                        'heading',
                        '|',
                        'bold',
                        'italic',
                        'link',
                        'bulletedList',
                        'numberedList',
                        '|',
                        'CKFinder',
                        'outdent',
                        'indent',
                        '|',
                        'blockQuote',
                        'insertTable',
                        'mediaEmbed',
                        'undo',
                        'redo',
                        'alignment',
                        'fontBackgroundColor',
                        'fontColor',
                        'fontSize',
                        'fontFamily'
                    ]
                },
                language: 'ru',
                table: {
                    contentToolbar: [
                        'tableColumn',
                        'tableRow',
                        'mergeTableCells'
                    ]
                },
                licenseKey: '',
            } )
            .catch( function( error ) {
                console.error( error );
            } );

    </script>
@endsection
