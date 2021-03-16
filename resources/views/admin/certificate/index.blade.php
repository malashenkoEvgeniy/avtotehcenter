@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Сертификаты</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Сертификаты</li>
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
                                <h3 class="card-title">Список сертификатов</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @include('admin.includes.alerts')
                                <section class="content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <form role="form" method="post" action="{{ route('certificate.store') }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="card-body">
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">

                                                                    <span class="input-group-text">Изображение</span>
                                                                </div>
                                                                <div class="custom-file">
                                                                    <input type="file" multiple name="url" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                                    <label class="custom-file-label" for="inputGroupFile01">Выберите файл</label>
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
                                @if (count($certificates))
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover text-nowrap">
                                            <thead>
                                            <tr>
                                                <th style="width: 30px">#</th>
                                                <th>Сертификат</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($certificates as $certificate)
                                                <tr>
                                                    <td>{{ $certificate->id }}</td>
                                                    <td>{{ $certificate->url }}</td>
                                                    <td>
                                                        <form action="{{ route('certificate.destroy', ['id' => $certificate->id]) }}" method="post" class="float-left">
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
                                    <p>Сертификатов пока нет...</p>
                                @endif
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                {{ $certificates->links() }}
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
