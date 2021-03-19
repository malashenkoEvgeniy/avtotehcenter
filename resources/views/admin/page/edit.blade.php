@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Редактирование страницы</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Редактирование страницы</li>
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
                                <h3 class="card-title">Страница "{{ $page->translate()->title }}"</h3>
                            </div>
                            <!-- /.card-header -->

                            <form role="form" method="post" action="{{ route('page.update', ['id' => $page->id]) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
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
                                        <label for="title">Название</label>
                                        <input type="text" name="title"
                                               class="form-control @error('title') is-invalid @enderror" id="title"
                                               value="{{ $page->translate()->title }}"
                                               placeholder="Название">
                                    </div>
                                    <div class="form-group">
                                        <label>Текст</label>
                                        <textarea  class="form-control editor" name="body" >{{ $page->translate()->body }}</textarea>
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
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>

            function uploadImages(blobInfo, success, failure) {
            var xhr, formData;

            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', <?= json_encode(route('store_image')) ?>);

            xhr.onload = function() {
            var json;

            if (xhr.status != 200) {
            failure('HTTP Error: ' + xhr.status);
            return;
        }

            json = JSON.parse(xhr.responseText);

            if (!json || typeof json.location != 'string') {
            failure('Invalid JSON: ' + xhr.responseText);
            return;
        }

            success(json.location);
        };

            formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());
            // append CSRF token in the form data
            formData.append('_token', <?= json_encode(csrf_token()) ?>);

            xhr.send(formData);
        }

            tinymce.init({
            selector: '.editor',
            plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table paste imagetools wordcount"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            content_css: '//www.tiny.cloud/css/codepen.min.css',
            // images_upload_url: "{{route('store_image')}}",
            images_upload_handler: uploadImages,
            automatic_uploads: true,
            relative_urls:false,
        });
    </script>
@endsection
