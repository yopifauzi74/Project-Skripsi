@extends('layouts.admin')
@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Update User</h3>
              </div>
              <div class="card-body">
              
              <form action="{{route('user.update',$item->id)}}" method="post">
                {{ csrf_field() }}
                
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name" value="{{$item->name}}" class="form-control form-control-sm">
                  </div>
                  <div class="form-group">
                    <label>Level</label>
                    <input type="text" name="level" value="{{$item->level}}" class="form-control form-control-sm">
                  </div>
                  <div class="form-group">
                    <label>Role</label>
                    <input type="text" name="role_id" value="{{$item->role_id}}" class="form-control form-control-sm">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" value="{{$item->password}}" class="form-control form-control-sm">
                  </div>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
                
              </div>
              <!-- /.card-body -->
            </div>
            @endsection