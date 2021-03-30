@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Редактирование характеристик</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
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
                            </div>
                            <!-- /.card-header -->
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
                            <form role="form" method="post" action="{{ route('characteristic.update', ['id' => $model->id]) }}"  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="container">
                                            <div class="mb-1 " style="">
                                                <div class="characteristic mr-1"><input style="" type="text" id="lifting_force" name="lifting_force" value="{{$model->lifting_force}}" ><label
                                                        for="lifting_force">Подъёмная сила</label></div>
                                                <input class="mr-1" type="number" id="Year" name="Year" value="{{$model->translate()->Year}}"><label                                                     for="Year">Год выпуска</label>
                                                <div class="mr-1"><input type="text" name="Hours" id="Hours" value="{{$model->translate()->Hours}}"><label for="Hours">Моточасы</label>         </div>
                                                <div class="mr-1"><input type="text" name="v_motor" id="v_motor" value="{{$model->translate()->v_motor}}"><label  for="v_motor">Обьем двигателя</label></div>
                                                <div class=""><input type="text" name="fuel_type" id="fuel_type" value="{{$model->translate()->fuel_type}}" placeholder=""><label for="fuel_type">Тип топлива</label></div>

                                                <div class="mr-1"><input type="text" name="height_with_mast_folded" id="height_with_mast_folded" value="{{$model->translate()->height_with_mast_folded}}" ><label  for="height_with_mast_folded">Высота со сложенной мачтой</label></div>
                                                <div class=""><input type="text" name="motor" placeholder="" id="motor" value="{{$model->translate()->motor}}"><label for="motor">Двигатель</label></div>
                                            </div>
                                            <div class=" mb-1">
                                                <div class="" style="display: flex; flex-direction: column">
                                                    <label for="description">Описание</label>
                                                    <textarea name="description" id="description" cols="120" rows="10" placeholder="Описание">{{$model->translate()->description}}</textarea>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
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
