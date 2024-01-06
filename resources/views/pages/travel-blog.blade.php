@extends('layouts.app')

@section('title')
  Travel Blog
@endsection

@section('content')
  <section class="container">
    <div class="row">
      <div class="col-12 my-5">
        <p
          class="fs-3 fw-bold harga-mulai bg-dark text-light mt-5 w-100 rounded-4 text-center py-3"
          data-aos="fade-up"
          data-aos-delay="100"
        >
          Travel Blog
        </p>
      </div>
      <div class="col-12 fs-2 px-5 fw-bolder text-center">
        Pantai Parangtritis: Pesona Keindahan dan Mitos Mistis di Pantai
        Selatan Yogyakarta
      </div>
      <div class="article col-8 offset-2">
        <img src="images/travel-blog.png" alt="" class="my-3" />
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus
          voluptatibus amet vel. Nostrum laboriosam natus distinctio facilis
          dignissimos hic animi?
        </p>
      </div>
    </div>
  </section>
@endsection