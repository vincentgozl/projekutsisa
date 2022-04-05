@extends('layouts.home_master')

@section('content')

<div class="pagetitle">
      <h1>Data BarangJenis</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">BarangJenis</li>
          <li class="breadcrumb-item active">Index</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">BarangJenis</h5>
              <!--<p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>-->
              
                    <form action="{{route('barangJenis.update',[$barangJenis->idBarangJenis])}}" method="POST" >
                       @csrf
                       @method('PUT')

                        <div class="form-group">
                           <label for="title">Nama Pembayaran Jenis</label>
                           <input require type="text" name="nama" class="form-control" 
                           value="{{old('nama',$barangJenis->nama)}}" >
                        </div>

                        <div class="form-group">
                           <label for="title">Kode</label>
                           <input require type="text" name="kode" class="form-control" 
                           value="{{old('kode',$barangJenis->kode)}}" >
                        </div>

                        <div class="form-group">
                            <label for="title">keterangan</label>
                           <input require type="text" name="keterangan" class="form-control" 
                           value="{{old('keterangan',$barangJenis->keterangan)}}" >
                        </div>
                        <br>

                       <button class="btn btn-primary">Tambah</button>
                    </form>

          
              <!-- End Table with stripped rows -->
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection