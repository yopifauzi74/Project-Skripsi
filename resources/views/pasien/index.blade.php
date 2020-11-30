@extends('layouts.admin')
@section('content')
    <!-- Main content -->
    <div class="card">
        <div class="card-header">
          <a href="{{route('pasien.add')}}"><button type="button" class="btn btn-primary btn-sm float-right" style="margin-right: 5px;">Tambah Pasien</button></a>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 10%" class="text-center">
                          Kode Pasien
                      </th>
                      <th style="width: 10%" class="text-center">
                          Tgl Checkup
                      </th>
                      <th style="width: 10%" class="text-center">
                          Nama
                      </th>
                      <th style="width: 10%" class="text-center">
                          Alamat
                      </th>
                      <th style="width: 10%" class="text-center">
                          No. Telp
                      </th>
                      <th style="width: 10%" class="text-center">
                          Usia
                      </th>
                      <th style="width: 10%" class="text-center">
                          Jenis Kelamin
                      </th>
                      <th style="width: 10%" class="text-center">
                        Action
                      </th>
                  </tr>
              </thead>
              <tbody>
              @if($data !==[])
              @foreach($data as $value)
                  <tr>
                      <td class="text-center"><a>{{$value->kd_pasien}}</a></td>
                      <td  class="text-center"><a>{{$value->tgl_checkup}}</a></td>
                      <td class="text-center"><a>{{$value->first_name}}&nbsp;{{$value->last_name}}</a></td>
                      <td class="text-center"><a>{{$value->address}}</a></td>
                      <td class="text-center"><a>{{$value->no_telp}}</a></td>
                      <td class="text-center"><a>{{$value->age}}</a></td>
                      <td class="text-center"><a>{{$value->jenis_kelamin}}</a></td>
                      <td class="project-actions text-right">
                          
                          <a class="btn btn-info btn-sm" href="{{route('pasien.edit', $value->id)}}">
                              <i class="fas fa-pencil-alt"></i>
                          </a>
                          <a class="btn btn-warning btn-sm" href="#">
                              <i class="fas fa-eye"></i>
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash"></i>
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