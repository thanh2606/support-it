@extends('admins.layouts.master')

@section('title')
    @if(Request::route()->getName() == 'categories.create')
        Tạo mới lĩnh vực
    @endif
    @if(Request::route()->getName() != 'categories.create')
        Cập nhập lĩnh vực
    @endif
@endsection

@section('content')
    <div class="right_col" role="main">
        @if(Request::route()->getName() == 'categories.create')
            <form action="{{ route('categories.store') }}" method="post">
                @csrf
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <label for="name">Name * :</label>
                            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror"
                                   name="name" required="">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
                                    </span>
                            @enderror
                            <br>
                            <label for="name">Description * :</label>
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
        @endif
        @if(Request::route()->getName() != 'categories.create')
            <form action="{{ route('categories.update', $category->id) }}" method="post">
                @csrf
                {{ method_field('PUT') }}
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <label for="name">Name * :</label>
                            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror"
                                   name="name" required="" value="{{ $category->name }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
                                    </span>
                            @enderror
                            <br>
                            <label for="name">Description * :</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                      required="" id="description"
                                      style="display:none;">{{ $category->description }}</textarea>
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
        @endif
    </div>
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
