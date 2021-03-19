{{--@extends('admin.layouts.layout')--}}

{{--@section('content')--}}
{{--    <div class="content-wrapper">--}}
{{--        <!-- Content Header (Page header) -->--}}
{{--        <section class="content-header">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row mb-2">--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <h1>Categories</h1>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <ol class="breadcrumb float-sm-right">--}}
{{--                            <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--                            <li class="breadcrumb-item active">Blank Page</li>--}}
{{--                        </ol>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div><!-- /.container-fluid -->--}}
{{--        </section>--}}

{{--        <!-- Main content -->--}}
{{--        <section class="content">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-header">--}}
{{--                                <h3 class="card-title">Список категорий</h3>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-header -->--}}
{{--                            <div class="card-body">--}}
{{--                                @include('admin.includes.alerts')--}}
{{--                                    <div class="table-responsive">--}}
{{--                                        <table class="table table-bordered table-hover text-nowrap">--}}
{{--                                            <thead>--}}
{{--                                            <tr>--}}
{{--                                                <th style="width: 30px">#</th>--}}
{{--                                                <th>Наименование контакта</th>--}}
{{--                                                <th>Данные</th>--}}
{{--                                                <th>Actions</th>--}}
{{--                                            </tr>--}}
{{--                                            </thead>--}}
{{--                                            <tbody>--}}
{{--                                                <tr>--}}
{{--                                                    <td>Название</td>--}}
{{--                                                    <td>{{$contact->translate()->title }}</td>--}}
{{--                                                    <td><img src="{{$category->images !== null ? $category->images : '/assets/admin/img/default_img.jpg'}}" alt="img" width="100" height="50"></td>--}}
{{--                                                    <td>{{ $category->slug }}</td>--}}
{{--                                                    <td>{{ $category->translate()->seo_title }}</td>--}}
{{--                                                    <td>{{ $category->translate()->seo_keywords }}</td>--}}
{{--                                                    <td>{{ $category->translate()->seo_description }}</td>--}}
{{--                                                    <td>--}}
{{--                                                        <a href="{{ route('categories.edit', ['category' => $category->id]) }}" class="btn btn-info btn-sm float-left mr-1">--}}
{{--                                                            <i class="fas fa-pencil-alt"></i>--}}
{{--                                                        </a>--}}

{{--                                                        <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="post" class="float-left">--}}
{{--                                                            @csrf--}}
{{--                                                            @method('DELETE')--}}
{{--                                                            <button type="submit" class="btn btn-danger btn-sm"--}}
{{--                                                                    onclick="return confirm('Подтвердите удаление')">--}}
{{--                                                                <i--}}
{{--                                                                    class="fas fa-trash-alt"></i>--}}
{{--                                                            </button>--}}
{{--                                                        </form>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                            </tbody>--}}
{{--                                        </table>--}}
{{--                                    </div>--}}
{{--                            </div>--}}

{{--                            <!-- /.card-body -->--}}
{{--                            <div class="card-footer clearfix">--}}
{{--                                {{ $categories->links() }}--}}
{{--                                --}}{{--<ul class="pagination pagination-sm m-0 float-right">--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">«</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">»</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- /.card -->--}}

{{--                    </div>--}}
{{--                    <!-- /.col -->--}}
{{--                </div>--}}
{{--                <!-- /.row -->--}}
{{--            </div><!-- /.container-fluid -->--}}
{{--        </section>--}}

{{--        <!-- /.content -->--}}
{{--    </div>--}}
{{--@endsection--}}
