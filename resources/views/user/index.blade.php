@extends('layouts.admin')
@section('content')
<div class="card">
        <div class="card-header">
          <a href="{{route('user.add')}}"><button type="button" class="btn btn-primary btn-sm float-right" style="margin-right: 5px;">Add User</button></a>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 5%" class="text-center">Nama</th>
                      <th style="width: 5%" class="text-center">Level</th>
                      <th style="width: 5%" class="text-center">Role</th>
                      <th style="width: 5%" class="text-center">Action</th>
                    </tr>
              </thead>
              <tbody>
                @if($data!==[])
                    @foreach($data as $value)
                    @php($role = \App\Role::find($value->role_id))
                    
                        <tr>
                            <td class="text-center">{{$value->name}}</td>
                            <td class="text-center">{{$value->level}}</td>
                            <td class="text-center">{{$role->name}}</td>
                            <td class="text-center">
                              <a href="{{route('user.edit',$value->id)}}" class="btn btn-info btn-sm">
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