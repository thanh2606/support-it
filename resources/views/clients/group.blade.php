@extends('clients.layouts.master')

@section('title')
    Group
@endsection

@section('content')
    <section class="site-hero overlay" data-stellar-background-ratio="0.5"
             style="background-image: url(images/big_image_2.jpg);">
        <div class="container">
            <div class="row align-items-center justify-content-center site-hero-inner">
                <div class="col-md-10">

                    <div class="mb-5 element-animate">
                        <div class="block-17">
                            <h2 class="heading text-center mb-4">Tìm Kiếm chủ đề
                            </h2>
                            <form action="" method="post" class="d-block d-lg-flex mb-4">
                                <div class="fields d-block d-lg-flex">
                                    <div class="textfield-search one-third"><input type="text" class="form-control"
                                                                                   placeholder="Từ khóa ...">
                                    </div>
                                </div>
                                <input type="submit" class="search-submit btn btn-primary" value="Tìm kiếm">
                            </form>
                            @if(!Auth::user())
                                <p class="text-center"><a href="{{ route('register') }}" class="btn py-3 px-5">Đăng
                                        ký</a></p>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <div class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 element-animate">
                <div class="col-md-7 text-center section-heading">
                    <h2 class="text-primary heading">Chủ đề tiêu biểu</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid block-11 element-animate">
            <div class="nonloop-block-11 owl-carousel">
                <div class="item">
                    <div class="block-19">
                        <div class="text">
                            <h2 class="heading"><a href="#">Advanced JavaScript Learning</a></h2>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque
                                sint eveniet tempore sapiente.</p>
                            <div class="meta d-flex align-items-center">
                                <div class="price text-right">
                                    <span>Tham gia</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="block-19">
                        <div class="text">
                            <h2 class="heading"><a href="#">Advanced JavaScript Learning</a></h2>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque
                                sint eveniet tempore sapiente.</p>
                            <div class="meta d-flex align-items-center">
                                <div class="price text-right">
                                    <span>Tham gia</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="block-19">
                        <div class="text">
                            <h2 class="heading"><a href="#">Introduction to CSS</a></h2>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque
                                sint eveniet tempore sapiente.</p>
                            <div class="meta d-flex align-items-center">
                                <div class="price text-right">
                                    <span>Tham gia</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="block-19">
                        <div class="text">
                            <h2 class="heading"><a href="#">Advanced JavaScript Learning</a></h2>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque
                                sint eveniet tempore sapiente.</p>
                            <div class="meta d-flex align-items-center">
                                <div class="price text-right">
                                    <span>Tham gia</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="block-19">
                        <div class="text">
                            <h2 class="heading"><a href="#">Advanced JavaScript Learning</a></h2>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque
                                sint eveniet tempore sapiente.</p>
                            <div class="meta d-flex align-items-center">
                                <div class="price text-right">
                                    <span>Tham gia</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="block-19">
                        <div class="text">
                            <h2 class="heading"><a href="#">Introduction to CSS</a></h2>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque
                                sint eveniet tempore sapiente.</p>
                            <div class="meta d-flex align-items-center">
                                <div class="price text-right">
                                    <span>Tham gia</span></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
@endsection
