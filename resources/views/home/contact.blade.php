@extends('layouts.home')

@section('content')
    <main id="main">

        <!-- ======= Contact Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Contact</h2>
                    <ol>
                        <li><a href="">Contact</a></li>
                    </ol>
                </div>

            </div>
        </section><!-- End Contact Section -->

        <!-- ======= Contact Section ======= -->
        <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
            <div class="container">
                <div class="row">
                    @foreach ($kontak as $item)
                        <div class="col-lg-3">
                            <div class="info-box">
                                <i class="bx bx-user"></i>
                                <h3>{{ $item->nama_kontak }}</h3>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
    </main>
@endsection
