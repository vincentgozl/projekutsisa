@extends('layouts.home_master')

@section('content')

<div class="pagetitle">
      <h1>Data Role</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Role</li>
          <li class="breadcrumb-item active">Show</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Role</h5>
              <!--<p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>-->
              
                    <form action="{{route('role.show',[$role->idRole])}}" method="POST" >
                       @csrf
                       @method('PUT')

                        <div class="form-group">
                           <label for="title">Nama Role</label>
                           <input require type="text" name="nama" class="form-control" 
                           value="{{old('nama',$role->nama)}}" disabled>
                        </div>

                        <div class="form-group">
                            <label for="title">keterangan</label>
                           <input require type="text" name="keterangan" class="form-control" 
                           value="{{old('kode',$role->keterangan)}}" disabled>
                        </div>
                        <br>
                    </form>

          
              <!-- End Table with stripped rows -->
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection