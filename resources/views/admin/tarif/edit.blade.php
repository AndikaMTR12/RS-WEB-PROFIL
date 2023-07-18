@extends('layouts.admin.main')

@section('container')
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <form action="/tarif-pelayanan-admin/update" method="POST">
                @csrf
                @method("PUT")
                <div class="modal-body">
                    @foreach($tarif as $t)
                    <input type="hidden" name="id_tarif" value="{{ $t->id_tarif }}">
                    <div class="form-group">
                        <label>Jenis Tindakan</label>
                        <input type="text" name="jenis_tarif" class="form-control" value="{{ $t->jenis_tarif }}">
                    </div>
                    <div class="form-group">
                        <label>Sub Tindakan</label>
                        <input type="text" name="kd_tarif" class="form-control" value="{{ $t->kd_tarif }}">
                    </div>
                    <div class="form-group">
                        <label>Biaya</label>
                        <input type="text" name="biaya" class="form-control" value="{{ $t->biaya }}">
                    </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection