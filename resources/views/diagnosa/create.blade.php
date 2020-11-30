@extends('layouts.admin')
@section('content')

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambah Diagnosa</h3>
              </div>
              <form action="{{route('diagnosa.store')}}" method="post">
                {{ csrf_field() }}
              <div class="card-body">
                  <div class="form-group">
                    <label>Kode</label>
                    <input type="text" name="kode" class="form-control form-control-sm" >
                  </div>
                  <div class="form-group">
                    <label>Nama Diagnosa</label>
                    <input type="text" name="nama_diagnosa" class="form-control form-control-sm" >
                  </div>
                  <div class="form-group">
                    <label>Solusi</label>
                    <input type="text" name="penanganan" class="form-control form-control-sm" >
                  </div>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
              </form>
              <!-- /.card-body -->
            </div>
            @endsection