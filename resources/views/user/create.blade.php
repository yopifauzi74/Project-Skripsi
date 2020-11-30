@extends('layouts.admin')
@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Add User</h3>
              </div>
              <form action="{{route('user.store')}}" method="post">
                {{ csrf_field() }}
              <div class="card-body">
                  <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="name" class="form-control form-control-sm" >
                  </div>
                  <div class="form-group">
                    <label for="">Level</label>
                    <input type="text" name="level" class="form-control form-control-sm"  >
                  </div>
                  <div class="form-group">
                    <label for="">Role</label>
                    <input type="text" name="role_id" class="form-control form-control-sm">
                  </div>
                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control form-control-sm" >
                  </div>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
              </form>
              <!-- /.card-body -->
            </div>
            @endsection