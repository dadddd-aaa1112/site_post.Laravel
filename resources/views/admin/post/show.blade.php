@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">

                        <h1 class="m-0 mr-3">{{$post->title}}</h1>

                        <a class="text-success" href="{{route('admin.post.edit', $post->id )}}"><i
                                class="fa fa-pencil-alt"></i></a>
                        @include('admin.post.includes.delete')
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
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
                    <div class="col-6">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">

                                <tbody>

                                <tr>
                                    <td>Id</td>
                                    <td>{{$post->id}}</td>

                                </tr>
                                <tr>
                                    <td>Title</td>
                                    <td>{{$post->title}}</td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- /.row -->
                    <!-- Main row -->
                </div>
                <a class="btn btn-primary" href="{{route('admin.post.index')}}">Back</a>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
