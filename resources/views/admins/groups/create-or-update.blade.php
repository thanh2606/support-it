@extends('admins.layouts.master')

@section('title')
    @if(Request::route()->getName() == 'admin.groups.create')
        Tạo mới group
    @endif
    @if(Request::route()->getName() != 'admin.groups.create')
        Cập nhập group
    @endif
@endsection

@section('content')
    <div class="right_col" role="main">
        @if(Request::route()->getName() == 'admin.groups.create')
            <form action="{{ route('admin.groups.store') }}" method="post">
                @csrf
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <label for="name">Key word * :</label>
                            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror"
                                   name="key_word" required="" value="{{ old('key_word') }}">
                            @error('key_word')
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
        @if(Request::route()->getName() != 'admin.groups.create')
            <form action="{{ route('admin.groups.update', $group->id) }}" method="post">
                @csrf
                {{ method_field('PUT') }}
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <label for="name">Key word * :</label>
                            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror"
                                   name="key_word" required="" value="{{ $group->key_word }}">
                            @error('key_word')
                            <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">{{ $message }}</strong>
                                    </span>
                            @enderror
                            <br>
                            <label for="name">Description * :</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                      required="" id="description"
                                      style="display:none;">{{ $group->description }}</textarea>
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
