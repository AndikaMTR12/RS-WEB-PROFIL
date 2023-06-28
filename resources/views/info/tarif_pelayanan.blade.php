@extends('layouts.main')

@section('container')
<div style="height: 100px;"></div>
<section>
    <div data-aos="fade-down">
        <h3>TARIF PELAYANAN</h3>
    </div>
    <h5 class="text-center mt-4 mb-4">TINDAKAN UMUM</h5>
    <table class="table table-borderless">
        <thead>
            <th>No</th>
            <th>Jenis Tindakan</th>
            <th>Biaya</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Injeksi Intra Muskular/Pasien</td>
                <td>Rp. 20.000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Rectal Toucher</td>
                <td>Rp. 30.000</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Pemasangan Kateter</td>
                <td>Rp. 50.000</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Spulling Kateter</td>
                <td>Rp. 25.000</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Aff Kateter</td>
                <td>Rp. 25.000</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Aff Drain</td>
                <td>Rp. 20.000</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Rawat Luka</td>
                <td>Rp. 20.000</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Buka Jahitan</td>
                <td></td>
            <tr>
                <td></td>
                <td>
                    <ul>
                        <li>
                            < 3 jahitan </li>
                    </ul>
                </td>
                <td>Rp. 25.000</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <ul>
                        <li>
                            < 3-6 jahitan </li>
                    </ul>
                </td>
                <td>Rp. 50.000</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <ul>
                        <li>
                            > 6 jahitan </li>
                    </ul>
                </td>
                <td>Rp. 75.000</td>
            </tr>
            </tr>
            <tr>
                <td>9</td>
                <td>Ganti Verban</td>
                <td></td>
            <tr>
                <td></td>
                <td>
                    <ul>
                        <li>
                            Luka Kecil ( < 5 cm) </li>
                    </ul>
                </td>
                <td>Rp. 15.000</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <ul>
                        <li>
                            Luka Sedang (5-10 cm) </li>
                    </ul>
                </td>
                <td>Rp. 35.000</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <ul>
                        <li>
                            Luka Besar ( > 10 cm) </li>
                    </ul>
                </td>
                <td>Rp. 50.000</td>
            </tr>
            </tr>
            <tr>
                <td>10</td>
                <td>Pemberian Obat Per Rectal</td>
                <td>Rp. 30.000</td>
            </tr>
            <tr>
                <td>11</td>
                <td>Imunisasi/Vaksinasi</td>
                <td>Rp. 50.000</td>
            </tr>
            <tr>
                <td>12</td>
                <td>Pemasangan Nebulizer/Tindakan</td>
                <td>Rp. 40.000</td>
            </tr>
            <tr>
                <td>13</td>
                <td>Induksi Sputum/Tindakan</td>
                <td>Rp. 50.000</td>
            </tr>
            <tr>
                <td>14</td>
                <td>Bilas Lambung Pro BTA/Tindakan</td>
                <td>Rp. 50.000</td>
            </tr>
            <tr>
                <td>15</td>
                <td>Fungsi Lumbal</td>
                <td>Rp. 200.000</td>
            </tr>
            <tr>
                <td>16</td>
                <td>Pengambilan Sampel Apus Pemeriksaan Swab Test</td>
                <td>Rp. 250.000</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection