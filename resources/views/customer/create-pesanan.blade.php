@include('partial.header')
<div class="container-fluid">
    <div class="row">
        
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Pesanan</h6>
        </div>
        <div class="card-body">
            <form action="{{route('pesanan.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Nama Mempelai Laki-laki</label>
                        <input type="text" name="nama_mempelai_laki" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Nama Mempelai Perempuan</label>
                        <input type="text" name="nama_mempelai_perempuan" class="form-control">
                    </div>
                    <div class="form-group col-6">
                        <label>Foto Memepelai Laki</label>
                        <input type="file" name="Foto_Laki" class="form-control">
                    </div>
                    <div class="form-group col-6">
                        <label>Foto Mempelai Perempuan</label>
                        <input type="file" name="Foto_perempuan" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Ayah Mempelai Perempuan</label>
                        <input type="text" name="ayah_mempelai_perempuan" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Ibu Mempelai Perempuan</label>
                        <input type="text" name="ibu_mempelai_perempuan" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Ayah Mempelai Laki</label>
                        <input type="text" name="ayah_mempelai_Laki" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Ibu Mempelai Laki</label>
                        <input type="text" name="ibu_mempelai_Laki" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Judul Wedding</label>
                        <input type="text" name="Judul_weeding" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Deskripsi Mempelai Laki</label>
                        <textarea type="text" name="Deskripsi_mempelai_pria" class="form-control"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Deskripsi Mempelai Perempuan</label>
                        <textarea type="text" name="Deskripsi_mempelai_wanita" class="form-control"></textarea>
                    </div>
                    <div class="form-group col-md-6" >
                        <label>Alamat Resepsi</label>
                        <input type="text" name="Alamat_resepsi" class="form-control">
                    </div>
                    <div class="form-group col-md-6" >
                        <label>Latlong Resepsi</label>
                        <input type="text" id="latlong_resepsi" name="latlong_resepsi" class="form-control">
                    </div>
                    <div class="form-group col-6">
                        <label>tanggal Akad Nikah</label>
                        <input type="date" name="Tanggal_akad_nikah" class="form-control">
                    </div>
                    <div class="form-group col-6">
                        <label>Tanggal Resepsi</label>
                        <input type="date" name="Tanggal_Resepsi" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Jam Akad Nikah</label>
                        <input type="time" name="jam_akad_nikah" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Jam Resepsi</label>
                        <input type="time" name="jam_resepsi" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Deskripsi akad Nikah</label>
                        <textarea type="text" name="deskripsi_akad_nikah" class="form-control"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Deskripsi Resepsi</label>
                        <textarea type="text" name="deskripsi_resepsi" class="form-control"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Cerita kami</label>
                        <textarea type="text" name="Cerita_kami" class="form-control"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Awal bertemu</label>
                        <input type="text" name="Awal_pertama_bertemu" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Tanggal Pertama bertemu</label>
                        <input type="date" name="tanggal_pertama_bertemu" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Foto Pertama Bertemu</label>
                        <input type="file" name="Foto_pertama_bertemu" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Mulai Serius</label>
                        <input type="text" name="Mulai_serius" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Tanggal Mulai Serius</label>
                        <input type="date" name="Tanggal_mulai_serius" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Foto Mulai Serius</label>
                        <input type="file" name="Foto_mulai_serius" class="form-control">
                    </div>
                   
                    <div class="form-group col-md-6">
                        <label>Tunangan</label>
                        <input type="text" name="Tunangan" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Tanggal Tunangan</label>
                        <input type="date" name="Tanggal_tunangan" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Rekening Mempelai pria</label>
                        <input type="text" name="rekening_mempelai_pria" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Rekening Mempelai wanita</label>
                        <input type="text" name="rekening_mempelai_Wanita" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Tanggal Terbit</label>
                        <input type="date" name="tanggal_terbit" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <input type="Submit" value="Order" class="btn-block btn btn-primary">
                </div>
            </form>
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $e)
                        <li>{{$e}}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>
@include('partial.footer')