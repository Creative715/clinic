@extends('layouts.dashboard')
@section('title', 'Редагувати інформацію про лікаря')
@section('content')
    <!-- Content Wrapper. Contains doctor content -->
    <div class="content-wrapper">
        <!-- Content Header (doctor header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('mainAdmin') }}">Головна</a></li>
                            <li class="breadcrumb-item active">@yield('name')</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-12">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                            </div>
                        @endif
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">@yield('title') - {{ $doctor['name'] }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form enctype="multipart/form-data" action="{{ route('doctor.update', $doctor['id']) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Прізвище та Ім'я</label>
                                        <input type="text" name="name" value="{{ $doctor['name'] }}" class="form-control" placeholder="Введіть прізвище та ім'я" required>
                                    </div>
                                    <div class="form-group">
                                        <img class="img-thumbnail" src="{{ $doctor->img }}" alt="{{ $doctor->name }}" title="{{ $doctor->name }}" width="150" height="auto">
                                    </div>
                                    <div class="form-group">
                                        <label>Фото</label>
                                        <input name="img" class="form-control" type="file" value="{{ $doctor->img }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Спеціальність</label>
                                        <input type="text" name="speciality" value="{{ $doctor['speciality'] }}" class="form-control" placeholder="Спеціальність" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Іноформація про лікаря</label>
                                        <textarea id="content" name="content" class="form-control" rows="4">{{ $doctor['content'] }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Опис сторінки (SEO)</label>
                                        <input type="text" name="description" value="{{ $doctor['description'] }}" class="form-control" id="exampleInputName" placeholder="Введіть опис" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="slug" class="form-control"  value="{{ $doctor['slug']}}" placeholder="url" readonly>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Зберегти</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

