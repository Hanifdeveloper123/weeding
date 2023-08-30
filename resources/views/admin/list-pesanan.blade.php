@include('partial.header')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Pesanan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered responsive nowrap" id="pesanan" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mempelai Laki-laki</th>
                            <th>Mempelai Perempuan</th>
                            <th>Ibu Mempelai Perempuan</th>
                            <th data-priority=2>Tanggal Terbit</th>
                            <th data-priority=3>Status</th>
                            <th data-priority=1>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesanan as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->nama_mempelai_laki }}</td>
                                <td>{{ $data->nama_mempelai_perempuan }}</td>
                                <td>{{ $data->ibu_mempelai_perempuan }}</td>
                                <td>{{ $data->tanggal_terbit }}</td>
                                <td>{{ $data->status }}</td>
                                <td>
                                    <form action="{{ route('pesanan.delete', $data->id) }}" method="POST">
                                        @csrf
                                        @method('Delete')
                                        <a class="btn btn-info btn-sm" href="#" data-toggle="modal"
                                            data-target="#bukti-pembayaran{{ $data->id }}">
                                            <i class="far fa-money-bill-alt"></i>
                                        </a>
                                        <a class="btn btn-warning btn-sm"
                                            href="{{ route('pesanan.ubah_status', $data->id) }}"><i
                                                class="fas fa-file-invoice"></i></a>
                                        <a class="btn btn-success btn-sm"
                                            href="{{ route('pesanan.ubah_status', $data->id) }}"><i
                                                class="fas fa-edit"></i></a>
                                        <button onclick="return confirm('Apakah anda yakin')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('pesanan.preview', $data->id) }}"><i
                                            class="fas fa-eye"></i></a>
                                        </form>
                                        <div class="modal fade" id="bukti-pembayaran{{ $data->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
                                                        <button class="close" type="button" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @if ($data->bukti_pembayaran != 0)
                                                            <img src="{{ asset('img') . '/' . $data->bukti_pembayaran }}"
                                                                width="100%">
                                                        @endif
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button"
                                                            data-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@include('partial.footer')
