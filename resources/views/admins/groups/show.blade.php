@extends('admins.layouts.master')

@section('title')
    Group
@endsection

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <a href="{{ route('admin.groups.index') }}"><h3>Group</h3></a>
                    <div class="x_content">
                        <b><h3 style="color: red">{{ $group->key_word }}</h3></b>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <!-- start project list -->
                            <div id="session-table">
                                <h4 style="color: green">Mô tả</h4>
                                {!! $group->description !!}
                                <hr>
                                <script> var groupID = '{{$group->id}}' </script>
                                <div id="app" >
                                    <chat-layout :groupId={{$group->id}}></chat-layout>
                                </div>
{{--                                <h4 style="color: green">Bình luận</h4>--}}
{{--                                <div class="row"--}}
{{--                                     style="padding: 10px; background-color: #5bc0de; color: white; border-radius: 10px">--}}
{{--                                    <div style="display: flex">--}}
{{--                                        <div style="margin-right: 20px;">--}}
{{--                                            <a href="#">admin</a>--}}
{{--                                            <div>--}}
{{--                                                <small>Created_at: 25-02-2020</small>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div>--}}
{{--                                            <p>asdasdsadasd asdsadas asdasadx asdasd </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                            <hr>
                            <!-- end project list -->
{{--                            <form action="" method="post" style="margin-top: 20px">--}}
{{--                                @csrf--}}
{{--                                <textarea name="description" class="form-control @error('description') is-invalid @enderror"--}}
{{--                                          required="" id="description"--}}
{{--                                          style="display:none;"></textarea>--}}
{{--                                @error('description')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong style="color: red">{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                                <br>--}}
{{--                                <div class="form-group">--}}
{{--                                    <div>--}}
{{--                                        <button type="submit" class="btn btn-success">Bình luận</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

{{--    <script>--}}
{{--        $(function () {--}}
{{--            // Replace the <textarea id="editor1"> with a CKEditor--}}
{{--            // instance, using default configuration.--}}
{{--            CKEDITOR.replace('description')--}}
{{--        })--}}
{{--    </script>--}}
    <script src="{{ asset('admin/build/js/group.js') }}"></script>
@endsection
