@extends('layouts.admin')
@section('content')
    <!-- Main content -->
    <div class="card">
        <div class="card-header">
          <a href="{{route('diagnosa.add')}}"><button type="button" class="btn btn-primary btn-sm float-right" style="margin-right: 5px;">Tambah Diagnosa</button></a>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 10%" class="text-center">Kode</th>
                      <th style="width: 10%" class="text-center">Diagnosa</th>
                      <th style="width: 10%" class="text-center">Solusi</th>
                      <th style="width: 10%" class="text-center">Action</th>
                  </tr>
              </thead>
              <tbody>
              @if($data !==[])
              @foreach($data as $value)
                  <tr>
                      <td class="text-center"><a>{{$value->kode}}</a></td>
                      <td  class="text-center"><a>{{$value->nama_diagnosa}}</a></td>
                      <td class="text-center"><a>{{$value->penanganan}}</a></td>
                      <td class="project-actions text-center">
                          
                          <a class="btn btn-info btn-sm" href="{{route('diagnosa.edit', $value->id)}}">
                              <i class="fas fa-pencil-alt"></i>
                          </a>
                          <a class="btn btn-warning btn-sm" href="{{route('diagnosa.view', $value->id)}}">
                              <i class="fas fa-eye"></i>
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{route('diagnosa.delete', $value->id)}}">
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