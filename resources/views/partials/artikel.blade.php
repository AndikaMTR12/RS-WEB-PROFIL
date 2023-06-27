<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>BERITA TERBARU</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
                in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @foreach($artikel as $a)
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="assets/img/{{ $a->image }}" class="img" width="100%" height="200px" alt="">
                        <h3>
                            {{ $a->judul }}
                        </h3>
                        <p>{{ substr($a->desk_artikel,0,30) }}...</p>
                        <p>
                            <i class="fa-solid fa-newspaper"></i>
                            {{ $a->kategori->nama_kategori }}
                            <i class="fa-regular fa-clock"></i>
                            {{ date('l, d F Y', strtotime($a->created_at)) }}
                        </p>
                        <!-- <a href="" class="btn btn-primary mt-4">Details</a> -->
                        <!-- <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt=""> -->
                    </div>
                </div><!-- End testimonial item -->
                @endforeach

            </div>
            <div class="swiper-pagination"></div>
            <div class="text-center mb-4 mt-4">
                <a href="/list-artikel">Tampilkan Lebih Banyak</a>
            </div>
        </div>

    </div>
</section><!-- End Testimonials Section -->