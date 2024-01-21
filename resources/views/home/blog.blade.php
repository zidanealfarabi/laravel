@extends('layouts.home')

@section('content')
    <main id="main">

        <!-- ======= Blog Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Blog</h2>

                    <ol>
                        <li><a href="{{ url('/') }}">blog</a></li>
                    </ol>
                </div>

            </div>
        </section><!-- End Blog Section -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    @foreach ($berita as $item)
                        <div class="col-lg-4 entries">
                            <article class="entry">
                                <div class="entry-img">
                                    <img src="{{ url('assets/img/blog/pdbi.jpg') }}" alt="" class="img-fluid">
                                </div>
                                <h2 class="entry-title">
                                    <a href="#">{{ $item->nama_berita }}</a>
                                </h2>
                            </article>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->
@endsection
