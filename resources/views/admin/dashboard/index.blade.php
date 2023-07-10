@extends('layouts.admin.main')

@section('container')
<!--Today Tab Start-->
<div class="tab-pane animated fadeInUpShort show active" id="v-pills-1">
    <div class="row my-3">
        <div class="col-md-3">
            <div class="counter-box white r-5 p-3">
                <div class="p-4">
                    <div class="float-right">
                        <span class="icon icon-note-list text-light-blue s-48"></span>
                    </div>
                    <div class="counter-title">Jumlah Berita</div>
                    <h5 class="sc-counter mt-3">{{ $berita }}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Today Tab End-->
@endsection