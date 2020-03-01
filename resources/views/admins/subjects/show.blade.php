@extends('admins.layouts.master')

@section('title')
    {{ $subject->name }}
@endsection

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <a href="{{ route('admin.subjects.index') }}"><h3>Môn học</h3></a>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <!-- start project list -->
                            <!-- END section -->
                            <div class="x_content">
                                <a href="{{ route('admin.subjects.create') }}" class="btn btn-success btn-xs createResource"><i class="fa fa-plus-square"></i> Thêm bài học
                                </a>
                            </div>
                            <div class="site-section bg-light">
                                <div style="margin: 0px 50px">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-4 order-md-1">

                                            <div class="block-24 mb-5">
                                                <h3 class="heading" style="font-weight: bold">Bài học</h3>
                                                <ul>
                                                    <li><a href="#" style="color: green">Tổng quan</a></li>
                                                    <li><a href="#" style="color: red">Bài 1: Một số kiến thức cơ bản về HTML</a></li>
                                                    <li><a href="#" style="color: red">Bài 2: Cách tạo và chaỵ một tập tin HTML</a></li>
                                                    <li><a href="#" style="color: red">Bài 3: Cấu trúc cơ bản của một tập tin HTML</a></li>
                                                    <li><a href="#" style="color: red">Bài 4: Đoạn văn bản (Paragaraph) trong HTML</a></li>
                                                    <li><a href="#" style="color: red">Bài 5: Thẻ tiêu đề (Heading) trong HTML</a></li>
                                                    <li><a href="#" style="color: red">Bài 6: Các thẻ dùng để định dạng cho văn bản (Text) trong HTML</a></li>
                                                    <li><a href="#" style="color: red">Bài 7: Tìm hiểm khái niệm phần tử (Element) trong HTML</a></li>
                                                    <li><a href="#" style="color: red">Bài 8: Cách ghi chú thích (Comment) trong HTML</a></li>
                                                    <li><a href="#" style="color: red">Bài 9: Cách tạo một liên kết (Link) trong HTML</a></li>
                                                    <li><a href="#" style="color: red">Bài 10: Liên kết đến một vị trí (Bookmark) trong trang wed</a></li>
                                                    <li><a href="#" style="color: red">Bài 1: Một số kiến thức cơ bản về HTML</a></li>
                                                    <li><a href="#" style="color: red">Bài 1: Một số kiến thức cơ bản về HTML</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-8 order-md-2">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="content">
                                                        {!! $subject->description !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end project list -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('admin/build/js/subject.js') }}"></script>
    @if(Session::has('message'))
        <script>Swal.fire('{{ Session::pull('message') }}')</script>
    @endif
@endsection
