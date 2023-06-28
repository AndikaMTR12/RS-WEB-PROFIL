<div class="col-lg-4">
    <h3>BERITA TERKINI</h3>
    <hr>
    @foreach($berita as $b)
    <a href="/artikel/{{ $b->id_artikel }}">
        <img src="{{ asset('assets/img') }}/{{ $b->image }}" alt="" width="60px" height="60px" style="float: left;">
        <p class="mb-4 mt-4">{{ $b->judul }}</p>
    </a>
    @endforeach
</div>