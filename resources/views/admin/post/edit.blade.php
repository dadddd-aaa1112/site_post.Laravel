@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit post</h1>
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

                    <div class="col-12">

                        <form action="{{route('admin.post.update', $post->id)}}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="form-group w-25">

                                <input type="text" class="form-control" name="title" value="{{$post->title}}"
                                       placeholder="Введите название">
                                @error('title')
                                <p class="text-danger">Это поле необходимо для заполнения</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea id="summernote" name="content">{{$post->content}}</textarea>
                                @error('content')
                                <p class="text-danger">Это поле необходимо для заполнения</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Загрузка файла</label>
                                <div class="w-25 mb-2">
                                    <img src="{{asset('storage/' . $post->preview_image)}}" alt="preview_image"
                                         class="w-50">
                                </div>
                                <div class="input-group w-50">
                                    <div class="custom-file">
                                        <input name="preview_image" type="file" class="custom-file-input">
                                        <label class="custom-file-label">выбрать файл</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузить</span>
                                    </div>
                                </div>
                                @error('preview_image')
                                <p class="text-danger">Это поле необходимо для заполнения</p>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label>Загрузка главного изображения</label>
                                <div class="w-25 mb-2">
                                    <img src="{{asset('storage/' . $post->main_image)}}" alt="main_image" class="w-50">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input name="main_image" type="file" class="custom-file-input"
                                               value="{{$post->main_image}}">
                                        <label class="custom-file-label">выбрать файл</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузить</span>
                                    </div>
                                </div>
                                @error('main_image')
                                <p class="text-danger">Это поле необходимо для заполнения</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}"
                                            {{$category->id == $post->category_id ? 'selected' : ''}}
                                        >
                                            {{$category->title}}
                                        </option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group">
                                <label>Tags</label>
                                <div class="select2-pink">
                                    <select
                                        name="tag_ids[]"
                                        class="select2-pink form-control" multiple="multiple"
                                        data-placeholder="Select a tag" data-dropdown-css-class="select2-purple"
                                        style="width: 100%;">
                                        @foreach($tags as $tag)
                                            <option
                                                {{ is_array( $post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray())  ? 'selected' : ''}}
                                                value="{{$tag->id}}">{{$tag->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary " value="Update">
                            </div>
                        </form>

                    </div>

                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
