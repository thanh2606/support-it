@extends('clients.layouts.master')

@section('title')
    Subject
@endsection

@section('content')
    <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5"
             style="background-image: url({{ asset('client/images/big_image_2.jpg') }});">
        <div class="container">
            <div class="row align-items-center justify-content-center site-hero-sm-inner">
                <div class="col-md-7 text-center">

                    <div class="mb-5 element-animate">
                        <h1 class="mb-2" style="font-weight: bold">{{ $category->name }}</h1>
                        <h2 class="bcrumb" style="font-size: 40px; font-weight: bold"><a href="{{ route('home') }}">Trang
                                chủ</a> <span class="sep ion-android-arrow-dropright px-2"></span> <span
                                class="current">{{ $category->name }}</span></h2>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- END section -->

    <div class="site-section bg-light">
        <div style="margin: 0px 50px">
            <div class="row">

                <div class="col-md-6 col-lg-8 order-md-2">
                    <div class="row">
                        {!! $category->description !!}
                    </div>
                </div>
                <!-- END content -->
                <div class="col-md-6 col-lg-4 order-md-1">

                    <div class="block-24 mb-5">
                        <h3 class="heading" style="font-weight: bold">Môn học liên quan</h3>
                        <ul>
                            @foreach($category->subjects as $subject)
                                <li><a href="{{ route('subjects.show', $subject->id) }}" style="color: green">{{ $subject->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- END Sidebar -->
            </div>
        </div>
    </div>
@endsection
