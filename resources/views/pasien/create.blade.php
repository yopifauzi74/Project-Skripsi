@extends('layouts.admin')
@section('content')

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambah Pasien</h3>
              </div>
              <form action="{{route('pasien.store')}}" method="post">
                {{ csrf_field() }}
              <div class="card-body">
                  <div class="form-group">
                    <label>KD Pasien</label>
                    <input type="text" name="kd_pasien" class="form-control form-control-sm" >
                  </div>
                  <div class="form-group">
                    <label>Tgl Kunjung</label>
                    <input type="date" name="tgl_checkup" class="form-control form-control-sm" >
                  </div>
                  <div class="form-group">
                    <label>Nama Pertama</label>
                    <input type="text" name="first_name" class="form-control form-control-sm" >
                  </div>
                  <div class="form-group">
                    <label>Nama Terakhir</label>
                    <input type="text" name="last_name" class="form-control form-control-sm" >
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="address" class="form-control form-control-sm">
                  </div>
                  <div class="form-group">
                    <label>Usia</label>
                    <input type="text" name="age" class="form-control form-control-sm">
                  </div>
                  <!-- 
                    <input type="text" name="jenis_kelamin" class="form-control form-control-sm">
                   -->
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                      <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label>No. Telp</label>
                    <input type="number" name="no.telp" class="form-control form-control-sm">
                  </div>
                  
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
              </form>
              <!-- /.card-body -->
            </div>

        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
            $('#id_status_keluarga').change(function(){
                //Selected value
                var inputValue = $('#id_status_keluarga').val();
                if(inputValue == '1')
                {
                  $('#a').show();
                  $('#b').hide();
                }
                else
                {
                  $('#b').show();
                  $('#a').hide();
                }

            });
        });
        </script> -->
            @endsection