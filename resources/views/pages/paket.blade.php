@extends('layouts.app')

@section('title')
    Paket Wisata
@endsection

@section('content')
   <div class="banner-paket container" id="paket">
      <div
        class="banner-content container text-center"
        data-aos="zoom-in-up"
        data-aos-delay="150"
      >
        <div>
          <p class="banner-paket-title2" id="banner-title2">Jogjakarta</p>
          <p class="banner-paket-title" id="banner-title">Paket Wisata</p>
          <p class="banner-paket-title3" id="banner-description">description</p>
        </div>
      </div>
    </div>

    <section class="container mt-4">
      <div class="row">
        <div class="col-12">
          <p class="fs-3 fw-bold section-title">Pilih Paket Liburan</p>
        </div>
        <div class="col-sm-4 mb-3 mb-sm-0">
          <div
            class="card flex-column paket-detail-jogja text-light"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <p class="hari-p text-light">1 Hari</p>
            <ul class="tempat-wisata list-unstyled">
              <li>Borobudur</li>
              <li>Pule Payung</li>
              <li>Pantai Parangtritis</li>
              <li>Malioboro</li>
              <li>Dll</li>
              <li>
                <button
                  type="button"
                  class="btn btn-secondary btn-detail"
                  onclick="redirectToDetail()"
                >
                  Detail
                </button>
              </li>
            </ul>
            <p class="paket-harga fs-5">
              Paket Jogja <span class="ms-5 fw-bold">Rp 250.000</span>
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="preview" class="container">
      <div class="row align-items-center fs-3 fw-bold">
        <div class="col-12 pt-5">
          <p class="fs-3 fw-bold pt-2 section-title">Paket Wisata Lainnya</p>
        </div>

        <div class="col-md-3 mb-3 mb-sm-0 align-items-center card-container">
          <div
            class="card align-items-center paket-jogja"
            data-background="/images/paket-jogja-banner.png"
            data-title="Paket Wisata"
            data-subtitle="Jogjakarta"
            data-description="Mau liburan ke Jogja namun budget terbatas? Anda tidak perlu khawatir, salsa wisata menyediakan paket wisata Jogja murah sudah termasuk penginapan dan transportasinya. Dengan demikian perjalanan tour liburan Anda akan menjadi lebih praktis dan hemat. Selain itu, Anda juga dapat memodifikasi (custom tour) paket wisata yang telah kami tawarkan sesuai dengan keinginan."
            data-target="paket.html"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="card-body">
              <p class="card-title fs-3 fw-bold">Paket Jogja</p>
            </div>
          </div>
        </div>

        <div class="col-sm-3 offset-1 card-container">
          <div
            class="card align-items-center paket-bali"
            data-background="/images/paket-bali-banner.png"
            data-title="Paket Wisata"
            data-subtitle="Bali"
            data-description="Mau liburan ke Bali namun budget terbatas? Anda tidak perlu khawatir, salsa wisata menyediakan paket wisata Jogja murah sudah termasuk penginapan dan transportasinya. Dengan demikian perjalanan tour liburan Anda akan menjadi lebih praktis dan hemat. Selain itu, Anda juga dapat memodifikasi (custom tour) paket wisata yang telah kami tawarkan sesuai dengan keinginan."
            data-target="pages/paket.html"
            data-aos="fade-up"
            data-aos-delay="400"
          >
            <div class="card-body">
              <p class="card-title fs-3 fw-bold">Paket Bali</p>
            </div>
          </div>
        </div>

        <div class="col-sm-3 offset-1 card-container">
          <div
            class="card align-items-center paket-bromo"
            data-background="/images/paket-bromo-banner.png"
            data-title="Paket Wisata"
            data-subtitle="Bromo"
            data-description="Mau liburan ke Bromo namun budget terbatas? Anda tidak perlu khawatir, salsa wisata menyediakan paket wisata Jogja murah sudah termasuk penginapan dan transportasinya. Dengan demikian perjalanan tour liburan Anda akan menjadi lebih praktis dan hemat. Selain itu, Anda juga dapat memodifikasi (custom tour) paket wisata yang telah kami tawarkan sesuai dengan keinginan."
            data-target="pages/paket.html"
            data-aos="fade-up"
            data-aos-delay="600"
          >
            <div class="card-body">
              <p class="card-title fs-3 fw-bold">Paket Bromo</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="container">
      <div class="row">
        <div
          data-aos="fade-right"
          data-aos-offset="300"
          data-aos-easing="ease-in-sine"
        >
          <div class="col-12 fs-3 mt-5 pt-5 fw-bolder section-title ps-0">
            Apa yang membuat kami unggul?
          </div>
          <div class="col-12 ps-0">
            <p class="section3-desc mt-3">
              Selamat datang di layanan travel wisata terbaik kami! Temukan
              pengalaman perjalanan yang tak terlupakan dengan menggunakan
              Arshaka Tour yang memiliki berbagai kelebihan yang membuat
              perjalanan Anda lebih nyaman dan menyenangkan.
            </p>
          </div>
        </div>

        <div class="col-7">
          <p class="fs-3 fw-bolder section-title mb-5" data-aos="fade-right">
            Kelebihan Kami
          </p>
          <ul class="kelebihan list-unstyled fs-5 fw-bold">
            <li data-aos="zoom-out-right" data-aos-delay="100">
              Destinasi Menakjubkan
            </li>
            <li data-aos="zoom-out-right" data-aos-delay="200">
              Paket All-Inclusive
            </li>
            <li data-aos="zoom-out-right" data-aos-delay="300">
              Harga Terjangkau
            </li>
            <li data-aos="zoom-out-right" data-aos-delay="400">
              Pemandu Wisata Proffesional
            </li>
            <li data-aos="zoom-out-right" data-aos-delay="450">
              Kepuasan Pelanggan Utama
            </li>
          </ul>
        </div>

        <div class="col-4 pt-5">
          <img
            data-aos="zoom-in-up"
            data-aos-delay="500"
            src="/images/ranting.png"
            alt=""
            class="side-pic w-auto"
          />
        </div>
      </div>
    </section>
@endsection