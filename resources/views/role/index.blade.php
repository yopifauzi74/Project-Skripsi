@extends('layouts.admin')
@section('content')
<div class="card">
        <div class="card-header">
          <a href="{{route('role.add')}}"><button type="button" class="btn btn-primary btn-sm float-right" style="margin-right: 5px;">Add Role</button></a>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 5%" class="text-center">Code</th>
                      <th style="width: 5%" class="text-center">Name</th>
                      <th style="width: 5%" class="text-center">Action</th>
                    </tr>
              </thead>
              <tbody>
                @if($data !== [])
                  @foreach($data as $value)
                        <tr>
                            <td class="text-center">{{$value->code}}</td>
                            <td class="text-center">{{$value->name}}</td>
                            <td class="text-center">
                              <a href="{{route('role.edit',$value->id)}}" class="btn btn-info btn-sm">
                                <i class="fas fa-pencil-alt"></i>
                              </a>
                              <a class="btn btn-warning btn-sm" href="#">
                                  <i class="fas fa-eye"></i>
                              </a>
                              <a class="btn btn-danger btn-sm" href="#">
                                  <i class="fas fa-trash"></i>
                              </a>
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