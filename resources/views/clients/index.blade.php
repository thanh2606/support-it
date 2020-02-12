@extends('clients.layouts.master')

@section('title')
    home
@endsection

@section('content')
    <section class="site-hero overlay" data-stellar-background-ratio="0.5"
             style="background-image: url(images/big_image_2.jpg);">
        <div class="container">
            <div class="row align-items-center justify-content-center site-hero-inner">
                <div class="col-md-10">

                    <div class="mb-5 element-animate">
                        <div class="block-17">
                            <h2 class="heading text-center mb-4">Tìm các khóa học phù hợp với bạn
                            </h2>
                            <form action="" method="post" class="d-block d-lg-flex mb-4">
                                <div class="fields d-block d-lg-flex">
                                    <div class="textfield-search one-third"><input type="text" class="form-control"
                                                                                   placeholder="Từ khóa ...">
                                    </div>
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">Lĩnh vực</option>
                                            <option value="">Laravel</option>
                                            <option value="">PHP</option>
                                            <option value="">JavaScript</option>
                                            <option value="">Python</option>
                                        </select>
                                    </div>
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">Cơ bản</option>
                                            <option value="">Beginner</option>
                                            <option value="">Intermediate</option>
                                            <option value="">Advance</option>
                                        </select>
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

    <section class="site-section element-animate">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-2">
                    <div class="block-16">
                        <figure>
                            <img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid">
                            <a href="https://vimeo.com/45830194" class="play-button popup-vimeo"><span
                                    class="ion-ios-play"></span></a>

                            <!-- <a href="https://vimeo.com/45830194" class="button popup-vimeo" data-aos="fade-right" data-aos-delay="700"><span class="ion-ios-play"></span></a> -->

                        </figure>
                    </div>
                </div>
                <div class="col-md-6 order-md-1">

                    <div class="block-15">
                        <div class="heading">
                            <h2>Chào mừng đến với SUPPORTER</h2>
                        </div>
                        <div class="text mb-5">
                            <p>Có thể các bạn không phải là dân chuyên ngành Công nghệ thông tin, hoặc chưa biết gì về
                                Lập trình web nhưng lại rất muốn học để làm website, các bạn tự đặt ra câu hỏi rằng
                                "liệu mình có thể học được hay không, phải bắt đầu học từ đâu, học bao lâu thì mới làm
                                được website !?". Hãy đến với chúng tôi.</p>
                        </div>
                        <p><a href="#" class="btn btn-primary reverse py-2 px-4">Xem thêm</a></p>

                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- END section -->

    <section class="site-section pt-3 element-animate">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="media block-6 d-block">
                        <div class="icon mb-3"><span class="flaticon-book"></span></div>
                        <div class="media-body">
                            <h3 class="heading">Tri thức là sức mạnh</h3>
                            <p>Cung cấp các bài viết thuộc lĩnh vực lập trình web, tài liệu hướng dẫn học HTML, CSS,
                                Javascript, jQuery, MySQL, PHP, ... miễn phí</p>
                            <p><a href="#" class="more">Read More <span class="ion-arrow-right-c"></span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="media block-6 d-block">
                        <div class="icon mb-3"><span class="flaticon-student"></span></div>
                        <div class="media-body">
                            <h3 class="heading">Đông đảo thành viên</h3>
                            <p>Wedsite hiện có hơn 10000 thành viên đến từ nhiều trường đại học trên cả nước tham gia
                                học tập, tranning.</p>
                            <p><a href="#" class="more">Read More <span class="ion-arrow-right-c"></span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="media block-6 d-block">
                        <div class="icon mb-3"><span class="flaticon-professor"></span></div>
                        <div class="media-body">
                            <h3 class="heading">Đội ngũ supporter nhiệt tình</h3>
                            <p>Đội ngũ supporter chuyên nghiệp luôn túc trực 24/24 đảm bảo hỗ trợ học viên một cách tốt
                                nhất</p>
                            <p><a href="#" class="more">Read More <span class="ion-arrow-right-c"></span></a></p>
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
                    <h2 class="text-primary heading">Khóa học tiêu biểu</h2>
                    <p><a href="#" class="btn btn-primary py-2 px-4"><span class="ion-ios-book mr-2"></span>Bắt đầu ngay</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid block-11 element-animate">
            <div class="nonloop-block-11 owl-carousel">
                <div class="item">
                    <div class="block-19">
                        <figure>
                            <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        </figure>
                        <div class="text">
                            <h2 class="heading"><a href="#">Advanced JavaScript Learning</a></h2>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque
                                sint eveniet tempore sapiente.</p>
                            <div class="meta d-flex align-items-center">
                                <div class="price text-right">
                                    <span>Free</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="block-19">
                        <figure>
                            <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                        </figure>
                        <div class="text">
                            <h2 class="heading"><a href="#">Advanced JavaScript Learning</a></h2>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque
                                sint eveniet tempore sapiente.</p>
                            <div class="meta d-flex align-items-center">
                                <div class="price text-right">
                                    <span>Free</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="block-19">
                        <figure>
                            <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                        </figure>
                        <div class="text">
                            <h2 class="heading"><a href="#">Introduction to CSS</a></h2>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque
                                sint eveniet tempore sapiente.</p>
                            <div class="meta d-flex align-items-center">
                                <div class="price text-right">
                                    <span>Free</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="block-19">
                        <figure>
                            <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                        </figure>
                        <div class="text">
                            <h2 class="heading"><a href="#">Advanced JavaScript Learning</a></h2>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque
                                sint eveniet tempore sapiente.</p>
                            <div class="meta d-flex align-items-center">
                                <div class="price text-right">
                                    <span>Free</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="block-19">
                        <figure>
                            <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                        </figure>
                        <div class="text">
                            <h2 class="heading"><a href="#">Advanced JavaScript Learning</a></h2>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque
                                sint eveniet tempore sapiente.</p>
                            <div class="meta d-flex align-items-center">
                                <div class="price text-right">
                                    <span>Free</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="block-19">
                        <figure>
                            <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                        </figure>
                        <div class="text">
                            <h2 class="heading"><a href="#">Introduction to CSS</a></h2>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque
                                sint eveniet tempore sapiente.</p>
                            <div class="meta d-flex align-items-center">
                                <div class="price text-right">
                                    <span>Free</span></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
    <!-- END section -->


    <div class="container site-section element-animate">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center section-heading">
                <h2 class="text-primary heading">Đội ngũ supporter</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="block-2">
                    <div class="flipper">
                        <div class="front" style="background-image: url(../images/person_3.jpg);">
                            <div class="box">
                                <h2>Job Smith</h2>
                                <p>Laravel Expert</p>
                            </div>
                        </div>
                        <div class="back">
                            <!-- back content -->
                            <blockquote>
                                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
                                    almost unorthographic life One day however a small line of blind text by the name of
                                    Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image mr-3 align-self-center">
                                    <img src="images/person_3.jpg" alt="">
                                </div>
                                <div class="name align-self-center">Job Smith <span
                                        class="position">Laravel Expert</span></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- .flip-container -->
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="block-2 ">
                    <div class="flipper">
                        <div class="front" style="background-image: url(../images/person_1.jpg);">
                            <div class="box">
                                <h2>Mellissa Cruz</h2>
                                <p>JavaScript Guru</p>
                            </div>
                        </div>
                        <div class="back">
                            <!-- back content -->
                            <blockquote>
                                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
                                    almost unorthographic life One day however a small line of blind text by the name of
                                    Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image mr-3 align-self-center">
                                    <img src="images/person_1.jpg" alt="">
                                </div>
                                <div class="name align-self-center">Mellissa Cruz <span
                                        class="position">JavaScript Guru</span></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- .flip-container -->
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="block-2">
                    <div class="flipper">
                        <div class="front" style="background-image: url(../images/person_2.jpg);">
                            <div class="box">
                                <h2>Aldin Powell</h2>
                                <p>WordPress Ninja</p>
                            </div>
                        </div>
                        <div class="back">
                            <!-- back content -->
                            <blockquote>
                                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an
                                    almost unorthographic life One day however a small line of blind text by the name of
                                    Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image mr-3 align-self-center">
                                    <img src="images/person_2.jpg" alt="">
                                </div>
                                <div class="name align-self-center">Aldin Powell <span
                                        class="position">WordPress Ninja</span></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- .flip-container -->
            </div>
        </div>
    </div>
    <!-- END .block-2 -->

@endsection
