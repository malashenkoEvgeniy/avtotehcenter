@extends('admin.layouts.layout')
@section('links')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <style>
        .certificate-img-admin {
            width: 120px;
            height: 90px;
        }

        .vide-admin video {
            max-width: 120px;
            max-height: 90px;
        }
    </style>
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Изображения</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Изображения</li>
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
                                <h3 class="card-title">Список изображений</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @include('admin.includes.alerts')
                                <section class="content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <form role="form" method="post" action="{{ route('product_images.store', ['parent_product_id'=>$parent_product_id]) }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="card-body">
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">Изображение</span>
                                                                </div>
                                                                <div class="custom-file">
                                                                    <input type="file" multiple name="url[]" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                                    <label class="custom-file-label" for="inputGroupFile01">Выберите файл</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="title">Вставте ссылку с youtube</label>
                                                                <input type="text" name="youtube" id="title" placeholder="ссылка с youtube">
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
                                @if (count($product_images))
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover text-nowrap">
                                            <thead>
                                            <tr>
                                                <th style="width: 30px">#</th>
                                                <th>Изображения</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($product_images as $product_image)
                                                <tr>
                                                    <td>{{ $product_image->id }}</td>
                                                    <td>
                                                        @if($product_image->is_video == 1)
                                                            <div class="vide-admin">
                                                                <iframe  src="https://www.youtube.com/embed/{{$product_image->url}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>

                                                            </div>
                                                        @else
                                                            <a data-fancybox="gallery" href="{{ $product_image->url }}">
                                                                <img class="certificate-img-admin" src="{{ $product_image->url }}" alt="">
                                                            </a>
                                                        @endif

                                                    </td>
                                                    <td>
                                                        <form action="{{ route('product_images.destroy', ['id' => $product_image->id, 'parent_product_id'=>$parent_product_id]) }}" method="post" class="float-left">
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
                                @else
                                    <p>Изображений пока нет...</p>
                                @endif
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                {{ $product_images->links() }}
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
