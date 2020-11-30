@extends('layouts.admin')
@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Diagnosa</h3>
              </div>
              <form action="{{route('rekap.store')}}" method="post">
                {{ csrf_field() }}
              <div class="card-body">
                  <div class="form-group">
                    <label>Nama Pasien</label>
                    <select name="id_pasien" id="id_pasien" class="form-control">
                        @foreach($data as $value)
                        <option value="{{$value->id}}">{{$value->first_name}}&nbsp;{{$value->last_name}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Usia</label>
                    <input type="text" step=".01" min="0" name="tinggi_badan" class="form-control form-control-sm" placeholder="bulan">
                  </div>
                  <div class="form-group">
                    <label>Berat Badan</label>
                    <input type="number" step=".01" min="0" name="berat_badan" class="form-control form-control-sm" >
                  </div>
                  <div class="form-group">
                    <label>Tinggi Badan</label>
                    <input type="number" step=".01" min="0" name="tinggi_badan" class="form-control form-control-sm" >
                  </div>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
              </form>
              
              <!-- /.card-body -->
            </div>
            @endsection