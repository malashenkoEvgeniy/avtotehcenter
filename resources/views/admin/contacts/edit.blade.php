@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Редактирование контактов</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Редактирование контактов</li>
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

                            <form role="form" method="post" action="{{ route('contacts.update', ['id' => 1]) }}"  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Название</label>
                                        <input type="text" name="title"
                                               class="form-control @error('title') is-invalid @enderror" id="title"
                                               value="{{ $contact->translate()->title }}"
                                               placeholder="Название">
                                    </div>
                                    <div class="form-group" style="display: flex; ">
                                        <div class="mr-4">
                                            <label for="phone_1">Телефон 1</label>
                                            <input type="text" name="phone_1" class="form-control" id="phone_1"  value="{{ $contact->phone_1 }}" placeholder="Телефон 1">
                                        </div>
                                        <div class="mr-4">
                                            <label for="phone_2">Телефон 2</label>
                                            <input type="text" name="phone_2" class="form-control" id="phone_2"  value="{{ $contact->phone_2 }}" placeholder="Телефон 2">
                                        </div>
                                        <div class="mr-4">
                                            <label for="viber">viber</label>
                                            <input type="text" name="viber" class="form-control" id="viber"  value="{{ $contact->viber}}" placeholder="viber">
                                        </div>
                                        <div class="mr-4">
                                            <label for="telegram">telegram</label>
                                            <input type="text" name="telegram" class="form-control" id="telegram"  value="{{ $contact->telegram}}" placeholder="telegram">
                                        </div>
                                    </div>
                                    <div class="form-group" style="display: flex; ">
                                        <div class="mr-4">
                                            <label for="email1">email1</label>
                                            <input type="text" name="email1" class="form-control" id="email1"  value="{{ $contact->email1}}" placeholder="email1">
                                        </div>
                                        <div class="mr-4">
                                            <label for="email2">email2</label>
                                            <input type="text" name="email2" class="form-control" id="email2"  value="{{ $contact->email2}}" placeholder="email2">
                                        </div>
                                        <div class="mr-4">
                                            <label for="fax">fax</label>
                                            <input type="text" name="fax" class="form-control" id="fax"  value="{{ $contact->fax}}" placeholder="fax">
                                        </div>
                                    </div>
                                    <div class="form-group" style="display: flex; ">
                                        <div class="mr-4">
                                            <label for="facebook">facebook</label>
                                            <input type="text" name="facebook" class="form-control" id="facebook"  value="{{ $contact->facebook}}" placeholder="facebook">
                                        </div>
                                        <div class="mr-4">
                                            <label for="instagram">instagram</label>
                                            <input type="text" name="instagram" class="form-control" id="instagram"  value="{{ $contact->instagram}}" placeholder="instagram">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Адрес</label>
                                        <textarea name="address" class="form-control " id="address">{{ $contact->translate()->address }}</textarea>

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

