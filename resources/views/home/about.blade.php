@extends('layouts.home')

@section('content')
    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>About Us</h2>
                    <ol>
                        <li><a href="{{ url('/') }}">about</a></li>
                    </ol>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= About Section ======= -->
        <section class="about" data-aos="fade-up">
            <div class="container">
                @foreach ($profile as $item)
                <div class="col-lg-4 entries">
                            <article class="entry">
                                <div class="entry-img">
                                    <img src="{{ url('assets/img/blog/zidane.jpeg') }}" alt="" class="img-fluid">
                                </div>
                    <article class="mb-4">
                        {{ $item->nama_profile }}
                    </article>
                @endforeach
            </div>
        </section>
    </main><!-- End #main -->
@endsection
