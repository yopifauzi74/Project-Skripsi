@extends('layouts.admin')
@section('content')

<div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <form method="post">
                {{ csrf_field() }}
              <div class="card-body">
                  <div class="form-group">
                    <label>Kode</label>
                    <input type="text" name="kode" value="{{$item->kode}}" class="form-control form-control-sm" readonly="readonly">
                  </div>
                  <div class="form-group">
                    <label>Gejala</label>
                    <input type="text" name="gejala" value="{{$item->gejala}}" class="form-control form-control-sm" readonly="readonly">
                  </div>
              </div>
              </form>
              <!-- /.card-body -->
            </div>
            @endsection