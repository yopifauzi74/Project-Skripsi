@extends('layouts.admin')
@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Add Role</h3>
              </div>
              <form action="{{route('role.store')}}" method="post">
                {{ csrf_field() }}
              <div class="card-body">
                  <div class="form-group">
                    <label for="">Code</label>
                    <input type="text" name="code" class="form-control form-control-sm" >
                  </div>
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control form-control-sm"  >
                  </div>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
              </form>
              <!-- /.card-body -->
            </div>
            @endsection