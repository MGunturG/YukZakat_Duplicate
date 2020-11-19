@extends('template')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">

    </div>
</div>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-10 info-panel">
      <div class="row">
        <div class="col-lg mt-3 info-rekening">
          <!-- <a href="/pages/sites/kalkulasi-zakat.html">
            <img
              class="mx-auto d-block"
              src="/assets/sites/img/info-1.png"
              alt="kalkulator-zakat"
            />
          </a> -->
          <h2>
            Bank Syariah Mandiri (Kode Bank 451) <br />
            0160043929 <br />
            a.n. DKM AH-KAS
          </h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
      @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
              <p>Silakan lakukan pembayaran lalu kirimkan bukti pembayaran ke email kami di: <b>xxx@mail.com</b> untuk verifikasi zakat Anda. Terima Kasih.</p>
          </div>
          @endif
    </div>
</div>

</form>
@endsection
