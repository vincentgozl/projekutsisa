<?php

namespace App\Http\Controllers;

use App\Models\PengirimanJenis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PengirimanJenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('PengirimanJenis')->where('hapus',0)->get();

        $user = Auth::user();
        $check = $this->checkAccess('pengirimanJenis.index', $user->id, $user->idRole);
        
        if($check){
            return view('pengirimanJenis.index',[
                'data' => $data,
            ]);
        }
        else{
            return redirect()->route('home')->with('message','Anda tidak memiliki akses kedalam Pengiriman Jenis');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $user = Auth::user();
        $check = $this->checkAccess('pengirimanJenis.create', $user->id, $user->idRole);
        
        if($check){
            return view('pengirimanJenis.tambah');
        }
        else{
            return redirect()->route('home')->with('message','Anda tidak memiliki akses kedalam Pengiriman Jenis');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->collect();
        
        DB::table('PengirimanJenis')
            ->insert(array(
                'nama' => $data['nama'],
                'kode'=>$data['kode'],
                'keterangan' => $data['keterangan'],
            )
        );
        return redirect()->route('pengirimanJenis.index')->with('status','Success!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PengirimanJenis  $pengirimanJenis
     * @return \Illuminate\Http\Response
     */
    public function show(PengirimanJenis $pengirimanJeni)
    {
        //

        $user = Auth::user();
        $check = $this->checkAccess('pengirimanJenis.show', $user->id, $user->idRole);
        
        if($check){
            return view('pengirimanJenis.show',[
                'pengirimanJenis' => $pengirimanJeni,
            ]);
        }
        else{
            return redirect()->route('home')->with('message','Anda tidak memiliki akses kedalam Pengiriman Jenis');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PengirimanJenis  $pengirimanJenis
     * @return \Illuminate\Http\Response
     */
    public function edit(PengirimanJenis $pengirimanJeni)
    {
        //

        $user = Auth::user();
        $check = $this->checkAccess('pengirimanJenis.edit', $user->id, $user->idRole);
        
        if($check){
            return view('pengirimanJenis.edit',[
                'pengirimanJenis' => $pengirimanJeni,
            ]);
        }
        else{
            return redirect()->route('home')->with('message','Anda tidak memiliki akses kedalam Pengiriman Jenis');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PengirimanJenis  $pengirimanJenis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PengirimanJenis $pengirimanJeni)
    {
        //
        $data = $request->collect();
        $user = Auth::user();
        
        DB::table('PengirimanJenis')
            ->where('idPengirimanJenis', $pengirimanJeni['idPengirimanJenis'])
            ->update(array(
                'nama' => $data['nama'],
                'kode'=>$data['kode'],
                'keterangan' => $data['keterangan'],
            )
        );
        return redirect()->route('pengirimanJenis.index')->with('status','Success!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PengirimanJenis  $pengirimanJenis
     * @return \Illuminate\Http\Response
     */
    public function destroy(PengirimanJenis $pengirimanJeni)
    {
        //
        DB::table('PengirimanJenis')
        ->where('idPengirimanJenis', $pengirimanJeni['idPengirimanJenis'])
        ->update(array(
            'hapus' => 1,
        )
    );
    return redirect()->route('pengirimanJenis.index')->with('status','Success!!');
    
    }
}
