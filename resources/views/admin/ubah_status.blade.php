@include('partial.header')
<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Pesanan</h6>
    </div>
<div class="card-body">
    <form action="{{route('pesanan.ubahStatus', $pesanan->id)}}" method="post">
        @csrf
      @method('PUT')
      <div class="form-group col-md-6">
      <label>Ubah Status</label>
      <select name="status" id="status" class="form-group">
        <option value="1">Disetujui</option>
        <option value="0">Ditolak</option>
       
    </select>
      </div>
    <div class="form-group col-md-6">
        <label>Terbitkan</label>
        <input type="text" name="terbitkan" class="form-control">
    </div>
    <div class="form-group col-md-6">
    <input type="submit" value="Order"  class=" btn btn-primary">
    </div>
</form>
</div>
</div>
</div>
  @if ($errors->any())
      <ul>
          @foreach ($errors->all() as $e)
              <li>{{$e}}</li>
          @endforeach
      </ul>
  @endif 
  @include('partial.footer')