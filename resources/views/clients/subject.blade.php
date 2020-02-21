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
                        <h1 class="mb-2" style="font-weight: bold">HTML</h1>
                        <h2 class="bcrumb" style="font-size: 40px; font-weight: bold"><a href="{{ route('home') }}">Trang chủ</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">HTML</span></h2>
                        <h2 class="bcrumb" style="color: white; font-size: 40px; font-weight: bold">Bài 1: Một số kiến thức cơ bản về HTML</h2>
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
                        <div class="col-md-12">
{{--                            <div class="block-19">--}}
{{--                                <figure>--}}
{{--                                    <a href="course-single.html"><img src="{{ asset('client/images/img_1.jpg') }}" alt="Image" class="img-fluid"></a>--}}
{{--                                </figure>--}}
{{--                                <div class="text">--}}
{{--                                    <h2 class="heading"><a href="#">Advanced JavaScript Learning</a></h2>--}}
{{--                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="content">
                                <article>
                                    <h1>Một số kiến thức cơ bản về HTML</h1>
                                    <hr>
                                    <div class="i-square i-note-v1">
                                        <div class="i-text"><i class="fa fa-file-text-o fa-lg"></i></div>
                                        <div></div>
                                        <div>
                                            <p>- Đối với những bạn mới đặt chân vào con đường "lập trình web" thì HTML sẽ là ngôn ngữ đầu tiên mà các bạn cần phải học, và đây cũng chính là bài đầu tiên trong loạt tài liệu học HTML. Cho nên, tôi sẽ cố gắng nói thật đơn giản để giúp các bạn có được cái nhìn tổng quan về ngôn ngữ này.</p>
                                        </div>
                                    </div>
                                    <h2>1) HTML là gì !?</h2>
                                    <p>- HTML là chữ viết tắt của cụm từ <span>HyperText Markup Language</span>, dịch sang tiếng việt có nghĩa là ngôn ngữ đánh dấu siêu văn bản, nó được dùng để tạo ra trang web (tất cả những nội dung mà chúng ta nhìn thấy trên trang web, ví dụ như: văn bản, hình ảnh, liên kết, . . . . chính là được tạo ra dựa trên các thẻ HTML)</p>
                                    <p>- <u>Ví dụ</u>: Trước tiên, các bạn hãy truy cập vào trang <a href="../file/danh-sach-hoc-bong.html" target="_blank">http://webcoban.vn/file/danh-sach-hoc-bong.html</a>. Sau đó bấm tổ hợp phím <kbd>Ctrl</kbd> + <kbd>U</kbd> hoặc nhấp chuột phải vào trang rồi chọn <span>xem nguồn trang</span> thì các bạn sẽ thấy một mớ bùa chú giống như hình bên dưới.</p>
                                    <div class="i-square ss-e1">
                                        <div>
                                            <p>✅ Đây là các thẻ HTML, chúng chính là nguồn gốc tạo ra những nội dung được hiển thị trên trang web</p>
                                        </div>
                                    </div>
                                    <h2>2) Tìm hiểu khái niệm <u>thẻ</u> trong HTML</h2>
                                    <div class="i-square i-note-v2 i-v2">
                                        <p>- Thẻ (tag) là một <u>từ khóa</u> được đặt bên trong cặp dấu ngoặc nhọn.</p>
                                        <p>- Mỗi thẻ sẽ có một chức năng riêng, ví dụ:</p>
                                        <ul>
                                            <li>Thẻ &lt;p&gt; dùng để tạo một đoạn văn bản.</li>
                                            <li>Thẻ &lt;a&gt; dùng để tạo một cái liên kết.</li>
                                            <li>Thẻ &lt;img&gt; dùng để chèn một tấm hình vào trang web.</li>
                                            <li>. . . .</li>
                                        </ul>
                                        <p>- Thông thường thì <u>thẻ</u> được chia ra làm hai loại chính, đó là: thẻ kép &amp; thẻ đơn</p>
                                    </div>
                                    <h3>2.1) Thẻ kép</h3>
                                    <p>- Thẻ kép là loại thẻ mà khi chúng ta muốn sử dụng nó để tạo một nội dung gì đó cho trang web thì chúng ta cần phải dùng đến cả <span class="i-mark-2">thẻ mở</span> lẫn <span class="i-mark-2">thẻ đóng</span> (thẻ đóng có cách viết tương tự như thẻ mở, chỉ khác ở chỗ là phía trước tên của thẻ đóng thì có thêm một dấu gạch chéo)</p>
                                    <table class="i-full ss-1">
                                        <tbody><tr>
                                            <td><img alt="tài liệu học html" src="../image/tai-lieu-hoc-html.png"></td>
                                            <td>
                                                <p>- Dưới đây là cú pháp sử dụng thẻ kép:</p>
                                                <pre class="i-square i-code i-v3"><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">tagname</span>&gt;</span>nội dung hiển thị<span class="hljs-tag">&lt;/<span class="hljs-name">tagname</span>&gt;</span></code></pre>
                                                <p>- <u>Ví dụ</u>: Thẻ &lt;p&gt; thuộc loại thẻ kép, để tạo được một đoạn văn giống như trong trang web nằm ở bên tay trái thì chúng ta viết như sau:</p>
                                                <pre class="i-square i-code i-v3"><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Tài liệu học Lập Trình Web<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span></code></pre>
                                            </td>
                                        </tr>
                                        </tbody></table>
                                    <h3>2.2) Thẻ đơn</h3>
                                    <table class="i-full ss-2">
                                        <tbody><tr>
                                            <td>
                                                <p>- Thẻ đơn là loại thẻ mà khi chúng ta muốn sử dụng nó để tạo một nội dung gì đó cho trang web thì chúng ta chỉ cần dùng mỗi thẻ mở, hay nói cách khác là không có thẻ đóng.</p>
                                                <p>- <u>Ví dụ</u>: Thẻ &lt;img&gt; thuộc loại thẻ đơn, để chèn một tấm hình vào trong trang web giống như minh họa bên phải thì chúng ta viết như sau:</p>
                                                <pre class="i-square i-code i-v3"><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">img</span> <span class="hljs-attr">src</span>=<span class="hljs-string">"http://webcoban.vn/image/face.jpg"</span>&gt;</span></code></pre>
                                            </td>
                                            <td><img alt="tài liệu hướng dẫn học html" src="../image/tai-lieu-huong-dan-hoc-html.png"></td>
                                        </tr>
                                        </tbody></table>
                                    <h3>2.3) Thẻ lồng nhau</h3>
                                    <p>- <u>Thẻ lồng nhau</u> thực chất chỉ là một trong những kỹ thuật cơ bản khi viết mã HTML, các thẻ được lồng vào nhau để xây dựng nên những nội dung đa dạng hơn.</p>
                                    <table class="i-full ss-3">
                                        <tbody><tr>
                                            <td><img alt="hướng dẫn học html" src="../image/huong-dan-hoc-html.png"></td>
                                            <td>
                                                <p>- <u>Ví dụ</u>: Tôi đặt thẻ &lt;u&gt; lồng bên trong thẻ &lt;p&gt; để xác định một cụm từ được gạch dưới chân, nó giúp cho nội dung của đoạn văn bản trở nên đa dạng hơn.</p>
                                                <pre class="i-square i-code i-v3"><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Trung tâm <span class="hljs-tag">&lt;<span class="hljs-name">u</span>&gt;</span>luyện thi<span class="hljs-tag">&lt;/<span class="hljs-name">u</span>&gt;</span> đại học<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span></code></pre>
                                                <p>- Tuy nhiên có một điều mà các bạn cần phải lưu ý đó chính là các thẻ được phép lồng vào nhau, nhưng tuyệt đối không được chéo nhau.</p>
                                                <p>- <u>Ví dụ</u>: Viết như bên dưới là sai quy tắc.</p>
                                                <pre class="i-square i-code i-v3"><code class="hljs xml"><span class="hljs-tag">&lt;<span class="hljs-name">p</span>&gt;</span>Trung tâm <span class="hljs-tag">&lt;<span class="hljs-name">u</span>&gt;</span>luyện thi<span class="hljs-tag">&lt;/<span class="hljs-name">p</span>&gt;</span> đại học<span class="hljs-tag">&lt;/<span class="hljs-name">u</span>&gt;</span></code></pre>
                                            </td>
                                        </tr>
                                        </tbody></table>
                                    <p>- <u>Lưu ý</u>: Trong ngôn ngữ HTML, khi chúng ta viết mã sai quy tắc thì trên màn hình không hiện lên bất kỳ một thông báo lỗi nào, chỉ là các nội dung sẽ không được hiển thị chính xác như mong đợi.</p>
                                    <h2>3) Tìm hiểu khái niệm tập tin HTML</h2>
                                    <p>- Tập tin HTML là một loại tập tin văn bản mà bên trong nó có chứa các thẻ HTML, một tập tin HTML phải có phần đuôi là <u>.html</u> hoặc <u>.htm</u></p>
                                    <p>- <u>Lưu ý</u>: Một tập tin HTML cũng có thể được gọi là:</p>
                                    <ul>
                                        <li>Một tài liệu HTML.</li>
                                        <li>Một trang HTML.</li>
                                        <li>Một trang web.</li>
                                    </ul>
                                    <h2>4) Giới thiệu loạt tài liệu hướng dẫn học HTML trên <u>webcoban.vn</u></h2>
                                    <p>- Hiện nay có nhiều bạn muốn học HTML nhưng vì một vài lý do nào đó (chẳng hạn như điều kiện kinh tế hoặc trùng thời gian làm việc, . . . .) nên không thể đăng ký tham gia các khóa học tại các trung tâm hoặc khóa học trực tuyến, nên đã chọn cho mình con đường tự tìm kiếm tài liệu trên mạng.</p>
                                    <p>- Nắm bắt được nhu cầu đó, chúng tôi đã dành ra một khoảng thời gian khá dài để tổng hợp tất cả những kiến thức quan trọng trong HTML rồi biên soạn lại thành một "bộ tài liệu hướng dẫn học HTML" với mục đích tạo điều kiện cho các bạn có thể học HTML miễn phí, đồng thời làm chủ được thời gian.</p>
                                    <p>- Bộ tài liệu này được biên soạn theo mức độ từ cơ bản đến nâng cao, mỗi bài viết đều đã được trau chuốt kỹ lưỡng, bài học trước sẽ cung cấp "kiến thức tiên quyết" cho bài học sau. Cho nên, ở mỗi bài học đều hết sức rõ ràng - mạch lạc - dễ hiểu (cột bên trái chính là danh sách các bài viết của bộ tài liệu)</p>
                                    <p>- Nếu bạn là một người đang học HTML thông qua hình thức tự tìm kiếm tài liệu trên mạng thì tôi nghĩ đây sẽ là một bộ tài liệu rất hữu ích dành cho bạn.</p>
                                    <p>-  Chúc các bạn có một khởi đầu tốt !</p><div style="padding-bottom:10px">
                                        <div id="M334980ScriptRootC807223"></div>
                                        <script src="https://jsc.mgid.com/w/e/webcoban.vn.807223.js" async=""></script>
                                    </div>
                                </article>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- END content -->
                <div class="col-md-6 col-lg-4 order-md-1">

                    <div class="block-24 mb-5">
                        <h3 class="heading" style="font-weight: bold">Bài học</h3>
                        <ul>
                            <li><a href="#" style="color: green">Bài 1: Một số kiến thức cơ bản về HTML</a></li>
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
                <!-- END Sidebar -->
            </div>
        </div>
    </div>
    @endsection
