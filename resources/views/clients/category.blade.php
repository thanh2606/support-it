@extends('clients.layouts.master')

@section('title')
    Subject
@endsection

@section('content')
    <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('client/images/big_image_2.jpg') }});">
        <div class="container">
            <div class="row align-items-center justify-content-center site-hero-sm-inner">
                <div class="col-md-7 text-center">

                    <div class="mb-5 element-animate">
                        <h1 class="mb-2" style="font-weight: bold">Lập trình web</h1>
                        <h2 class="bcrumb" style="font-size: 40px; font-weight: bold"><a href="{{ route('home') }}">Trang chủ</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Lập trình web</span></h2>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- END section -->
    <section class="site-section element-animate fadeInUp element-animated">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="block-16">
                        <figure>
                            <img src="{{ asset('client/images/coder.jpg') }}" alt="Image placeholder" class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="col-md-8">

                    <div>
                        <div class="heading">
                            <h2 style="font-weight: bold">HỌC LÀM WEBSITE PHẢI BẮT ĐẦU TỪ ĐÂU !?</h2>
                        </div>
                        <div class="text mb-7">
                            <p>- Có thể các bạn không phải là dân chuyên ngành Công nghệ thông tin, hoặc chưa biết gì về Lập trình web nhưng lại rất muốn học để làm website, các bạn tự đặt ra câu hỏi rằng "liệu mình có thể học được hay không, phải bắt đầu học từ đâu, học bao lâu thì mới làm được website !?"</p>
                            <p>- Chúng tôi xin trả lời rằng:</p>
                            <p>"Các bạn hoàn toàn có thể học và làm được website nếu mỗi ngày dành ra một ít thời gian tìm hiểu về lập trình web, tùy thuộc vào mức độ chăm chỉ, nhưng nếu trung bình mỗi ngày bỏ ra hai giờ thì không quá nửa năm, các bạn sẽ có đủ kiến thức để bắt tay vào việc xây dựng một cái website"</p>
                            <p>- Hiện nay có rất nhiều loại ngôn ngữ lập trình được dùng trong việc xây dựng website. Tuy nhiên, các bạn chỉ cần tìm hiểu HTML, CSS, JavaScript, MySQL, PHP thì khả dĩ đã có đủ kiến thức nền tảng để xây dựng website.</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-8">
                    <div>
                        <div class="heading">
                            <h2 style="font-weight: bold">HTML</h2>
                        </div>
                        <div class="text mb-7">
                            <p>- HTML là chữ viết tắt của cụm từ HyperText Markup Language, dịch sang tiếng Việt có nghĩa là ngôn ngữ đánh dấu siêu văn bản, nó được thiết kế ra để tạo nên các trang web với các mẫu thông tin được trình bày trên Word Wide Web.</p>
                            <p>- HTML là một ngôn ngữ rất đơn giản và dễ học, đối với những bạn mới đặt chân trên con đường lập trình web (nói chung) hoặc thiết kế web (nói riêng) thì HTML chính là ngôn ngữ đầu tiên mà các bạn cần phải học.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block-16">
                        <figure>
                            <img src="{{ asset('client/images/html.jpg') }}" alt="Image placeholder" class="img-fluid">
                        </figure>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
