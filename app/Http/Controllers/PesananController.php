<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
    public function index(){
        if(auth()->check()){
            if(auth()->user()->role=="customer"){
                $id=auth()->user()->id;
                $pesanan=Pesanan::where('user_id',$id)->get();
                return view('customer.list-pesanan',compact('pesanan'));
            }else{
                $pesanan=Pesanan::all();
                return view('admin.list-pesanan',compact('pesanan'));
            }
        }
        return redirect('signin');
    }

    public function create(){
        if(auth()->check()){
            if(auth()->user()->role=="customer"){
                return view('customer.create-pesanan');
            }
            return back();
        }
        return back();
    }

    public function preview(Request $request){
        $pesanan=Pesanan::where('id',$request->id)->get();
        return view('undangan.index',compact('pesanan'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama_mempelai_laki'=>'required',
            'nama_mempelai_perempuan'=>'required',
            'Foto_Laki'=>'required',
            'Foto_perempuan'=>'required',
            'ayah_mempelai_perempuan'=>'required',
            'ibu_mempelai_perempuan'=>'required',
            'ayah_mempelai_Laki'=>'required',
            'ibu_mempelai_Laki'=>'required',
            'Judul_weeding'=>'required',
            'Deskripsi_mempelai_pria'=>'required',
            'Deskripsi_mempelai_wanita'=>'required',
            'Alamat_resepsi'=>'required',
            'Tanggal_akad_nikah'=>'required',
            'Tanggal_Resepsi'=>'required',
            'jam_akad_nikah'=>'required',
            'jam_resepsi'=>'required',
            'deskripsi_akad_nikah'=>'required',
            'deskripsi_resepsi'=>'required',
            'Cerita_kami'=>'required',
            'Awal_pertama_bertemu'=>'required',
            'tanggal_pertama_bertemu'=>'required',
            'Foto_pertama_bertemu'=>'required',
            'Mulai_serius'=>'required',
            'Tanggal_mulai_serius'=>'required',
            'Foto_mulai_serius'=>'required',
            'Tunangan'=>'required',
            'Tanggal_tunangan'=>'required',
            'rekening_mempelai_pria'=>'required',
            'rekening_mempelai_Wanita'=>'required',
            'latlong_resepsi'=>'required',
             'bukti_pembayaran'=>'bukti_pembayaran',
             'status'=>'status',
        ],[
            'nama_mempelai_laki.required'=>'Nama Mempelai Laki-laki wajib diisi',
            'nama_mempelai_perempuan.required'=>'Nama Mempelai Perempuan wajib diisi',
            'ayah_mempelai_perempuan.required'=>'Nama Ayah Mempelai Perempuan wajib diisi',
            'ibu_mempelai_perempuan.required'=>'Nama Ibu Mempelai Perempuan wajib diisi',
            'tanggal_terbit.required'=>'Tanggal terbit wajib diisi',
        ]);
        $file = $request->file('Foto_Laki');
        $Foto_Laki = time() . '.'.$file->getClientOriginalExtension();
        $tempat = 'img';
        $file->move($tempat, $Foto_Laki);

        $file = $request->file('Foto_perempuan');
        $Foto_perempuan = time() . '.'.$file->getClientOriginalExtension();
        $tempat = 'img';
        $file->move($tempat, $Foto_perempuan);
        
        $file = $request->file('Foto_pertama_bertemu');
        $Foto_pertama_bertemu = time() . '.'.$file->getClientOriginalExtension();
        $tempat = 'img';
        $file->move($tempat, $Foto_pertama_bertemu);

        $file = $request->file('Foto_mulai_serius');
        $Foto_mulai_serius = time() . '.'.$file->getClientOriginalExtension();
        $tempat = 'img';
        $file->move($tempat, $Foto_mulai_serius);


        Pesanan::create([
            'user_id'=>Auth::user()->id,
            'nama_mempelai_laki'=>$request->nama_mempelai_laki,
            'nama_mempelai_perempuan'=>$request->nama_mempelai_perempuan,
            'Foto_Laki'=>$Foto_Laki,
            'Foto_perempuan'=>$Foto_perempuan,
            'ayah_mempelai_perempuan'=>$request->ayah_mempelai_perempuan,
            'ibu_mempelai_perempuan'=>$request->ibu_mempelai_perempuan,
            'ayah_mempelai_Laki'=>$request->ibu_mempelai_Laki,
            'ibu_mempelai_Laki'=>$request->ibu_mempelai_Laki,
            'Judul_weeding'=>$request->Judul_weeding,
            'Deskripsi_mempelai_pria'=>$request->Deskripsi_mempelai_pria,
            'Deskripsi_mempelai_wanita'=>$request->Deskripsi_mempelai_wanita,
            'Alamat_resepsi'=>$request->Alamat_resepsi,
            'Tanggal_akad_nikah'=>$request->Tanggal_akad_nikah,
            'Tanggal_Resepsi'=>$request->Tanggal_Resepsi,
            'jam_akad_nikah'=>$request->jam_akad_nikah,
            'jam_resepsi'=>$request->jam_resepsi,
            'deskripsi_akad_nikah'=>$request->deskripsi_akad_nikah,
            'deskripsi_resepsi'=>$request->deskripsi_resepsi,
            'Cerita_kami'=>$request->Cerita_kami,
            'Awal_pertama_bertemu'=>$request->Awal_pertama_bertemu,
            'tanggal_pertama_bertemu'=>$request->tanggal_pertama_bertemu,
            'Foto_pertama_bertemu'=>$Foto_pertama_bertemu,
            'Mulai_serius'=>$request->Mulai_serius,
            'Tanggal_mulai_serius'=>$request->Tanggal_mulai_serius,
            'Foto_mulai_serius'=>$Foto_mulai_serius,
            'Tunangan'=>$request->Tunangan,
            'Tanggal_tunangan'=>$request->Tanggal_tunangan,
            'rekening_mempelai_pria'=>$request->rekening_mempelai_pria,
            'rekening_mempelai_Wanita'=>$request->rekening_mempelai_Wanita,
            'latlong_resepsi'=>$request->latlong_resepsi,
            'tanggal_terbit'=>$request->tanggal_terbit,
        ]);

        return redirect(route('pesanan-customer'))->withSuccess('Pesanan berhasil dibuat');
    }

    public function edit(Pesanan $pesanan)
    {
        return view('pesanan.edit', compact('pesanan'));
    }

    public function update(Request $request, Pesanan $pesanan)
    {
        $request->validate([
            'nama_mempelai_laki'=>'required',
            'nama_mempelai_perempuan'=>'required',
            'tanggal_terbit'=>'required',
            'bukti_pembayaran'=>'required',
        ],[
            'nama_mempelai_laki.required'=>'Nama Mempelai Laki-laki wajib diisi',
            'nama_mempelai_perempuan.required'=>'Nama Mempelai Perempuan wajib diisi',
            'tanggal_terbit.required'=>'Tanggal terbit wajib diisi',
            'bukti_pembayaran.required'=>'Bukti pembayaran wajib diisi',
        ]);

        $file = $request->file('bukti_pembayaran');
        $name = time() . '-' . $pesanan->user_id . '.'.$file->getClientOriginalExtension();
        $tempat = 'img';
        $file->move($tempat, $name);

        if($pesanan->status == '0'){
            Pesanan::where('id',$pesanan->id)->update([
                'nama_mempelai_laki'=>$request->nama_mempelai_laki,
                'nama_mempelai_perempuan'=>$request->nama_mempelai_perempuan,
                'tanggal_terbit'=>$request->tanggal_terbit,
                'bukti_pembayaran'=>$name,
            ]);
        }else{
            Pesanan::where('id',$pesanan->id)->update([
                'nama_mempelai_laki'=>$request->nama_mempelai_laki,
                'nama_mempelai_perempuan'=>$request->nama_mempelai_perempuan,
                'bukti_pembayaran'=>$name,
            ]);
        }


        return redirect(route('dashcustomer'))->withSuccess('Pesanan berhasil diubah');
    }
    public function destroy(Pesanan $pesanan)
    {
        $pesanan->delete();
        return redirect(route('dashcustomer'))->withSuccess('Pesanan berhasil dihapus');
    }

    public function ubah_status(Pesanan $pesanan){
        return view('admin.ubah_status', compact('pesanan'));
    }

    public function ubahStatus(Pesanan $pesanan,Request $request){
        $request->validate([
            'status'=>'required',
        ],[
            'status.required'=>'Status wajib diisi',
        ]);

        Pesanan::where('id',$pesanan->id)->update([
            'status'=>$request->status,
        ]);

        return redirect(route('dashadmin'))->withSuccess('Status berhasil diubah');
    }

    public function bukti_pembayaran(Request $request, $id){
        // dd($id);
        $pesanan = Pesanan::findOrFail($id);

        $file = $request->file('bukti_pembayaran');
        $name = time() . '-' . $pesanan->user_id . '.'.$file->getClientOriginalExtension();
        $tempat = 'img';
        $file->move($tempat, $name);

        Pesanan::where('id',$pesanan->id)->update([
            'bukti_pembayaran'=>$name,
        ]);

        return redirect()->back();
    }
}
