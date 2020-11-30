@extends('layouts.admin')
@section('content')

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambah Gejala</h3>
              </div>
              <form action="{{route('gejala.store')}}" method="post">
                {{ csrf_field() }}
              <div class="card-body">
                  <div class="form-group">
                    <label>Kode</label>
                    <input type="text" name="kode" class="form-control form-control-sm" >
                  </div>
                  <div class="form-group">
                    <label>Gejala</label>
                    <input type="text" name="gejala" class="form-control form-control-sm" >
                  </div>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
              </form>
              <!-- /.card-body -->
            </div>
            @endsection