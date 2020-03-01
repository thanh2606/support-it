@extends('admins.layouts.master')

@section('title')
    @if(Request::route()->getName() == 'admin.subjects.create')
        Tạo môn học mới
    @endif
    @if(Request::route()->getName() != 'admin.subjects.create')
        Cập nhập môn học
    @endif

@endsection

@section('content')
    @if(Request::route()->getName() == 'admin.subjects.create')
        <div class="right_col" role="main">
            <form action="{{ route('admin.subjects.store') }}" method="post">
                @csrf
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <label for="name">Tên môn học * :</label>
                            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror"
                                   name="name" required="" value="{{ old('name') }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
                                    </span>
                            @enderror
                            <br>
                            <label for="name">Lĩnh vực * :</label>
                            <select name="category">
                                <option value=""></option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category')
                            <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
                                    </span>
                            @enderror
                            <br>
                            <br>
                            <label for="name">Mô tả * :</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                      required="" id="description"
                                      style="display:none;">{{ old('description') }}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
                                    </span>
                            @enderror
                            <br>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                    <button type="reset" class="btn btn-primary">Reset</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endif
    @if(Request::route()->getName() != 'admin.subjects.create')
        <div class="right_col" role="main">
            <form action="{{ route('admin.subjects.update', $subject->id) }}" method="post">
                @csrf
                {{ method_field('PUT') }}
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <label for="name">Tên môn học * :</label>
                            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror"
                                   name="name" required="" value="{{ $subject->name }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
                                    </span>
                            @enderror
                            <br>
                            <label for="name">Lĩnh vực * :</label>
                            <select name="category">
                                <option value=""></option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}"
                                            @if($category->id == $subject->category_id) selected="selected" @endif>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category')
                            <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
                                    </span>
                            @enderror
                            <br>
                            <br>
                            <label for="name">Mô tả * :</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                      required="" id="description"
                                      style="display:none;">{{ $subject->description }}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
                                    </span>
                            @enderror
                            <br>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                    <button type="reset" class="btn btn-primary">Reset</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endif
@endsection

@section('script')
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('description')
        })
    </script>
    <script src="{{ asset('admin/build/js/customer.js') }}"></script>
@endsection
