@extends('layouts.admin')
@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Update Pasien</h3>
              </div>
              <div class="card-body">
              
              <form action="{{route('pasien.update',$item->id)}}" method="post">
                {{ csrf_field() }}
                
                  <div class="form-group">
                    <label>KD Pasien</label>
                    <input type="text" name="kd_pasien" value="{{$item->kd_pasien}}" class="form-control form-control-sm">
                  </div>
                  <div class="form-group">
                    <label>Tgl Kunjung</label>
                    <input type="date" name="tgl_checkup" value="{{$item->tgl_checkup}}" class="form-control form-control-sm">
                  </div>
                  <div class="form-group">
                    <label>Nama Pertama</label>
                    <input type="text" name="firstname" value="{{$item->first_name}}" class="form-control form-control-sm">
                  </div>
                  <div class="form-group">
                    <label>Nama Terakhir</label>
                    <input type="text" name="last_name" value="{{$item->last_name}}" class="form-control form-control-sm">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="address" value="{{$item->address}}" class="form-control form-control-sm">
                  </div>
                  <div class="form-group">
                    <label>No. Telp</label>
                    <input type="text" name="no_telp" value="{{$item->no_telp}}" class="form-control form-control-sm">
                  </div>
                  <div class="form-group">
                    <label>Usia</label>
                    <input type="text" name="age" value="{{$item->age}}" class="form-control form-control-sm">
                  </div>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
                
              </div>
              <!-- /.card-body -->
            </div>
            @endsection