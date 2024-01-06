@extends('layouts.app')

@section('title')
    Kontak
@endsection

@section('content')
  <section class="container">
    <div class="row">
      <div class="col-12 my-5">
        <p
          class="fs-3 fw-bold harga-mulai bg-dark text-light mt-5 w-100 rounded-4 text-center py-3"
          data-aos="fade-up"
        >
          Kontak dan Bantuan
        </p>
      </div>
      <div
        class="col-sm-5 mb-3 mb-sm-0 ms-5 mt-3 kontak"
        data-aos="fade-zoom-in"
        data-aos-easing="ease-in-back"
        data-aos-delay="200"
        data-aos-offset="0"
      >
        >
        <img src="/images/kontakbantuan.png" alt="" class="px-auto mx-auto" />
        <div class="pt-5 pb-4 w-75 btn-dark rounded-5 fs-5"></div>
      </div>

      <div
        class="col-sm-6 mb-3 mb-sm-0 mt-3 pesan-kontak card-detail-wisata"
        data-aos="fade-zoom-in"
        data-aos-easing="ease-in-back"
        data-aos-delay="300"
        data-aos-offset="0"
      >
        >
        <div class="flex-column text-dark">
          <p class="text-black fs-2 fw-bold text-center mt-3 pb-1">
            Kirim Pesan Anda
          </p>
          <div class="mx-3 w-auto">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Nama</label
              >
              <input
                type="text"
                class="form-control rounded-3"
                id="exampleFormControlInput1"
              />
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >WA/Telp</label
              >
              <input
                type="tel"
                class="form-control rounded-3"
                id="exampleFormControlInput1"
              />
              <p>
                Pastikan No Wa / Telp aktif agar dapat kami hubungi kembali.
              </p>
            </div>
            <div>
              <label for="exampleFormControlTextarea1" class="form-label"
                >Pesan</label
              >
              <textarea
                class="form-control rounded-3"
                id="exampleFormControlTextarea1"
                rows="9"
              ></textarea>
            </div>
            <button
              type="submit"
              class="btn btn-light float-end rounded-4 px-5 mt-4"
            >
              Kirim
            </button>
          </div>
        </div>
      </div>

      <div class="col-12 fs-4 fw-bold mt-5 text-center sosmed">
        <p>
          Simak Update dan Penawaran Terbaik dari Kami <br />
          dibawah ini
        </p>
        <img src="/images/ig-logo.svg" alt="" />
        <img src="/images/fb-logo.svg" alt="" />
        <img src="/images/yt-logo.svg" alt="" />
        <img src="/images/wa-logo.svg" alt="" />
      </div>
    </div>
  </section>
@endsection