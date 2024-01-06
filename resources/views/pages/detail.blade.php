@extends('layouts.app')

@section('title')
    Kontak
@endsection

@section('content')
  <div class="banner-detail container" id="paket">
      <div
        class="banner-content container text-center"
        data-aos="fade-up"
        data-aos-delay="200"
      >
        <div>
          <p class="banner-detail-title2">Paket Wisata</p>
          <p class="banner-detail-title">Jogjakarta</p>
          <p class="banner-detail-title3 mx-auto">1 Hari</p>
        </div>
      </div>
    </div>

    <section class="container">
      <div class="row">
        <div class="col-12">
          <p
            class="fs-3 fw-bold harga-mulai bg-dark text-light mt-3 w-100 rounded-4 text-center py-3"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            Harga Mulai : Rp 250.000
          </p>
        </div>

        <div
          class="card col-sm-5 mb-3 mb-sm-0 ms-5 mt-3 card-detail-wisata"
          data-aos="fade-up"
          data-aos-delay="400"
        >
          <div class="flex-column">
            <p class="text-black fs-2 fw-bold text-center mt-3 pb-3">
              Tujuan Wisata
            </p>
            <ul class="tujuan-wisata list-unstyled">
              <li>Borobudur</li>
              <li>Pule Payung</li>
              <li>Pantai Parangtritis</li>
              <li>Malioboro</li>
              <li>Dll</li>
            </ul>
            <p
              class="text-center py-3 mx-auto w-50 btn-dark rounded-4 mt-5 fs-5"
            >
              Pesan Sekarang
            </p>
          </div>
        </div>
        <div
          class="col-sm-5 mb-3 mb-sm-0 mt-3 card card-detail-wisata offset-1"
          data-aos="fade-up"
          data-aos-delay="600"
        >
          <div class="flex-column text-dark">
            <p class="text-black fs-2 fw-bold text-center mt-3 pb-1">
              Detail Harga
            </p>
            <div class="container row mx-auto fw-bold">
              <div class="container col-6 bg-light rounded-4 py-2">
                Jumlah Peserta Tour
              </div>
              <div class="container col-5 bg-light rounded-4 text-center py-2">
                Harga/Pax
              </div>
              <ul class="peserta-harga list-unstyled">
                <li>2-3 <span>Rp 400.000</span></li>
                <li>4-6<span>Rp 340.000</span></li>
                <li>7-12<span>Rp 290.000</span></li>
                <li>12-17<span>Rp 277.000</span></li>
                <li>18-23<span>Rp 266.000</span></li>
                <li>23-30<span>Rp 250.000</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div
        class="container mt-5 rounded-4"
        data-aos="fade-up"
        data-aos-delay="200"
      >
        <div class="accordion-item ketentuan ps-5 py-4">
          <p class="fs-3 fw-bold">Ketentuan Umum</p>
          <h2 class="accordion-header" id="headingOne">
            <button
              class="accordion-button fw-bolder mb-2"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseOne"
              aria-expanded="true"
              aria-controls="collapseOne"
            >
              <span class="accordion-icon mx-1 fs-5 fw-bold"> + </span>
              <span class="ms-3">Syarat dan Ketentuan Tour</span>
            </button>
          </h2>
          <div
            id="collapseOne"
            class="accordion-collapse collapse"
            aria-labelledby="headingOne"
            data-bs-parent="#syaratKetentuan"
          >
            <div class="accordion-body">
              <ul class="syarat-ketentuan">
                <li>
                  Paket Wisata yang kami tawarkan adalah bersifat private.
                </li>
                <li>
                  Harga tour sewaktu waktu bisa berubah, terkait akan perubahan
                  HTM, Kenaikan BBM yang berhubungan dengan pariwisata.
                </li>
                <li>
                  Armada yang kami sediakan mulai dari All New Avanza, Grand New
                  Innova, ELF Short, Hiace Commuter dan ELF Long.
                </li>
                <li>
                  Anda juga bisa custom paket wisata jogja sesuai dengan butget.
                </li>
                <li>Untuk anak kecil dibawah 2 tahun Free.</li>
                <li>
                  Apabila peserta tour memiliki penyakit, harap membawa obat
                  sendiri.
                </li>
                <li>
                  Paket tour dan harga hanya berlaku untuk wisatawan domestik
                  atau mancanegara pemegang KIMS/KITAS.
                </li>
              </ul>
            </div>
          </div>
          <h2 class="accordion-header" id="headingTwo">
            <button
              class="accordion-button fw-bolder mb-2"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseTwo"
              aria-expanded="true"
              aria-controls="collapseTwo"
            >
              <span class="accordion-icon mx-1 fs-5 fw-bold"> + </span>
              <span class="ms-3">Fasilitas Selama Tour</span>
            </button>
          </h2>
          <div
            id="collapseTwo"
            class="accordion-collapse collapse"
            aria-labelledby="headingTwo"
            data-bs-parent="#fasilitasTour"
          >
            <div class="accordion-body">
              <ul class="syarat-ketentuan">
                <li>
                  Paket Wisata yang kami tawarkan adalah bersifat private.
                </li>
                <li>
                  Harga tour sewaktu waktu bisa berubah, terkait akan perubahan
                  HTM, Kenaikan BBM yang berhubungan dengan pariwisata.
                </li>
                <li>
                  Armada yang kami sediakan mulai dari All New Avanza, Grand New
                  Innova, ELF Short, Hiace Commuter dan ELF Long.
                </li>
                <li>
                  Anda juga bisa custom paket wisata jogja sesuai dengan butget.
                </li>
                <li>Untuk anak kecil dibawah 2 tahun Free.</li>
                <li>
                  Apabila peserta tour memiliki penyakit, harap membawa obat
                  sendiri.
                </li>
                <li>
                  Paket tour dan harga hanya berlaku untuk wisatawan domestik
                  atau mancanegara pemegang KIMS/KITAS.
                </li>
              </ul>
            </div>
          </div>
          <h2 class="accordion-header" id="headingThree">
            <button
              class="accordion-button fw-bolder mb-2"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseThree"
              aria-expanded="true"
              aria-controls="collapseThree"
            >
              <span class="accordion-icon mx-1 fs-5 fw-bold"> + </span>
              <span class="ms-3">Peraturan Tour</span>
            </button>
          </h2>
          <div
            id="collapseThree"
            class="accordion-collapse collapse"
            aria-labelledby="headingThree"
            data-bs-parent="#peraturanTour"
          >
            <div class="accordion-body">
              <ul class="syarat-ketentuan">
                <li>
                  Paket Wisata yang kami tawarkan adalah bersifat private.
                </li>
                <li>
                  Harga tour sewaktu waktu bisa berubah, terkait akan perubahan
                  HTM, Kenaikan BBM yang berhubungan dengan pariwisata.
                </li>
                <li>
                  Armada yang kami sediakan mulai dari All New Avanza, Grand New
                  Innova, ELF Short, Hiace Commuter dan ELF Long.
                </li>
                <li>
                  Anda juga bisa custom paket wisata jogja sesuai dengan butget.
                </li>
                <li>Untuk anak kecil dibawah 2 tahun Free.</li>
                <li>
                  Apabila peserta tour memiliki penyakit, harap membawa obat
                  sendiri.
                </li>
                <li>
                  Paket tour dan harga hanya berlaku untuk wisatawan domestik
                  atau mancanegara pemegang KIMS/KITAS.
                </li>
              </ul>
            </div>
          </div>

          <h2 class="accordion-header" id="headingFour">
            <button
              class="accordion-button fw-bolder mb-2"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseFour"
              aria-expanded="true"
              aria-controls="collapseFour"
            >
              <span class="accordion-icon mx-1 fs-5 fw-bold"> + </span>
              <span class="ms-3">Pemesanan Layanan</span>
            </button>
          </h2>
          <div
            id="collapseFour"
            class="accordion-collapse collapse"
            aria-labelledby="headingFour"
            data-bs-parent="#pemesananLayanan"
          >
            <div class="accordion-body">
              <ul class="syarat-ketentuan">
                <li>
                  Paket Wisata yang kami tawarkan adalah bersifat private.
                </li>
                <li>
                  Harga tour sewaktu waktu bisa berubah, terkait akan perubahan
                  HTM, Kenaikan BBM yang berhubungan dengan pariwisata.
                </li>
                <li>
                  Armada yang kami sediakan mulai dari All New Avanza, Grand New
                  Innova, ELF Short, Hiace Commuter dan ELF Long.
                </li>
                <li>
                  Anda juga bisa custom paket wisata jogja sesuai dengan butget.
                </li>
                <li>Untuk anak kecil dibawah 2 tahun Free.</li>
                <li>
                  Apabila peserta tour memiliki penyakit, harap membawa obat
                  sendiri.
                </li>
                <li>
                  Paket tour dan harga hanya berlaku untuk wisatawan domestik
                  atau mancanegara pemegang KIMS/KITAS.
                </li>
              </ul>
            </div>
          </div>

          <h2 class="accordion-header" id="headingFive">
            <button
              class="accordion-button fw-bolder mb-2"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseFive"
              aria-expanded="true"
              aria-controls="collapseFive"
            >
              <span class="accordion-icon mx-1 fs-5 fw-bold"> + </span>
              <span class="ms-3">Metode Pembayaran</span>
            </button>
          </h2>
          <div
            id="collapseFive"
            class="accordion-collapse collapse"
            aria-labelledby="headingFive"
            data-bs-parent="#metodePembayaran"
          >
            <div class="accordion-body">
              <ul class="syarat-ketentuan">
                <li>
                  Paket Wisata yang kami tawarkan adalah bersifat private.
                </li>
                <li>
                  Harga tour sewaktu waktu bisa berubah, terkait akan perubahan
                  HTM, Kenaikan BBM yang berhubungan dengan pariwisata.
                </li>
                <li>
                  Armada yang kami sediakan mulai dari All New Avanza, Grand New
                  Innova, ELF Short, Hiace Commuter dan ELF Long.
                </li>
                <li>
                  Anda juga bisa custom paket wisata jogja sesuai dengan butget.
                </li>
                <li>Untuk anak kecil dibawah 2 tahun Free.</li>
                <li>
                  Apabila peserta tour memiliki penyakit, harap membawa obat
                  sendiri.
                </li>
                <li>
                  Paket tour dan harga hanya berlaku untuk wisatawan domestik
                  atau mancanegara pemegang KIMS/KITAS.
                </li>
              </ul>
            </div>
          </div>
          <h2 class="accordion-header" id="headingSix">
            <button
              class="accordion-button fw-bolder mb-2"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseSix"
              aria-expanded="true"
              aria-controls="collapseSix"
            >
              <span class="accordion-icon mx-1 fs-5 fw-bold"> + </span>
              <span class="ms-3">Lain-lain</span>
            </button>
          </h2>
          <div
            id="collapseSix"
            class="accordion-collapse collapse"
            aria-labelledby="headingSix"
            data-bs-parent="#lainLain"
          >
            <div class="accordion-body">
              <ul class="syarat-ketentuan">
                <li>
                  Paket Wisata yang kami tawarkan adalah bersifat private.
                </li>
                <li>
                  Harga tour sewaktu waktu bisa berubah, terkait akan perubahan
                  HTM, Kenaikan BBM yang berhubungan dengan pariwisata.
                </li>
                <li>
                  Armada yang kami sediakan mulai dari All New Avanza, Grand New
                  Innova, ELF Short, Hiace Commuter dan ELF Long.
                </li>
                <li>
                  Anda juga bisa custom paket wisata jogja sesuai dengan butget.
                </li>
                <li>Untuk anak kecil dibawah 2 tahun Free.</li>
                <li>
                  Apabila peserta tour memiliki penyakit, harap membawa obat
                  sendiri.
                </li>
                <li>
                  Paket tour dan harga hanya berlaku untuk wisatawan domestik
                  atau mancanegara pemegang KIMS/KITAS.
                </li>
              </ul>
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