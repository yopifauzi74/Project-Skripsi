@extends('layouts.admin')
@section('content')
    <!-- Main content -->
    <div class="card">
        <div class="card-header">
          <a href="{{route('rekap.add')}}"><button type="button" class="btn btn-primary btn-sm float-right" style="margin-right: 5px;">Cek Gizi</button></a>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 10%" class="text-center">Nama Pasien</th>
                      <th style="width: 10%" class="text-center">Usia (Bln)</th>
                      <th style="width: 10%" class="text-center">Berat Badan</th>
                      <th style="width: 10%" class="text-center">Tinggi Badan</th>
                      <th style="width: 10%" class="text-center">Status Gizi</th>
                      <th style="width: 12%" class="text-center">Action</th>
                  </tr>
              </thead>
              <tbody>
              @if($data !==[])
                @foreach($data as $value)
                    @php($pasien = \App\Pasien::find($value->id_pasien))
                  <tr>
                      <td class="text-center"><a>{{$pasien->first_name}}&nbsp;{{$pasien->last_name}}</a></td>
                      <td class="text-center"><a>{{$pasien->age}}</a></td>
                      <td class="text-center"><a>{{$value->berat_badan}}</a></td>
                      <td class="text-center"><a>{{$value->tinggi_badan}}</a></td>
                      <td class="text-center"><a>{{$value->remark}}</a></td>
                      <td class="text-center">
                          
                          <a class="btn btn-info btn-sm" href="{{route('rekap.detail', $value->id)}}">
                              <i class="fas fa-eye"></i>
                          </a>
                      </td>
                  </tr>
                  @endforeach
                    @else
                        <tr>
                            <td colspan="3">No Data</td >
                        </tr>
                @endif
              </tbody>
          </table>
          
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  
  @endsection