@extends('layouts.main')

@section('container')
<section class="contact">
    <div style="height: 100px;"></div>
    <h3>ADUAN</h3>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{session()->get('message') }}
    </div>
    @endif
    @if(session()->has('error'))
    <div class="alert alert-danger">
        {{session()->get('error') }}
    </div>
    @endif
    <form action="/aduan-konsultasi" method="post">
        @csrf
        <div class="row">
            <input type="hidden" name="jenis_pesan" value="Aduan">
            <div class="col-md-6 form-group">
                <input type="text" name="nama" class="form-control" id="name" placeholder="Nama Anda" required="">
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" required="">
            </div>
        </div>
        <div class="form-group mt-3">
            <textarea class="form-control" name="pesan" rows="7" placeholder="Message" required=""></textarea>
        </div>
        <div class="form-group mt-3">
            <img src="{{ captcha_src('default') }}" alt="CAPTCHA">
            <input type="text" id="captcha" name="captcha" required>
        </div>
        <input type="hidden" name="status" value="1">
        <div class="my-3">
        </div>
        <div class="text-center"><button type="submit">Kirim</button></div>
    </form>
</section>
@endsection