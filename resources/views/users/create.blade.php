@extends('layouts.global')

@section('title')
    Tambah User
@endsection 

@section('content')
    <div class="main">
      <div class="main-content">
        <div class="container-fluid">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">
                <i class="lnr lnr-user"></i> Tambah User
              </h3>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="panel">
                <div class="row">
                  <div class="panel-body">
                    <form action="{{ route('users.create') }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                        <div class="col-md-6">
                          <label for="name">Nama User</label>
                          <input type="text" name="name" id="name" class="form-control" placeholder="Nama User">
                        </div>
                        <div class="col-md-6">
                          <label for="username">Username</label>
                          <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-6">
                          <label for="email">Email</label>
                          <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="col-md-6">
                          <label for="password">Password</label>
                          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-6">
                          <label for="phone">Nomor Hp</label>
                          <input type="text" name="phone" id="phone" class="form-control" placeholder="Nomor Hp">
                        </div>
                        <div class="col-md-6">
                          <label for="konf_password">Konfirmasi Password</label>
                          <input type="password" name="konf_password" id="konf_password" class="form-control" placeholder="Konfirmasi Password">
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-6">
                          <label for="roles">Roles</label>
                          <select name="roles" id="roles" class="form-control">
                            <option value="">-- Pilih Role --</option>
                            <option value="Administrator">Administrator</option>
                            <option value="Customer">Customer</option>
                            <option value="Staff">Staff</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label for="avatar">Avatar</label>
                          <input type="file" name="avatar" id="avatar" class="form-control-file">
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-6">
                          <label for="address">Alamat</label>
                          <textarea name="address" id="address" class="form-control" rows="1">Alamat</textarea>
                        </div>
                        <div class="col-md-6">
                          <label for="status">Status</label>
                          <select name="status" id="status" class="form-control">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                          </select>
                        </div>
                      </div>
                      <br>
                      <button type="submit" class="btn btn-success"><i class="lnr lnr-plus-circle"></i> Simpan</button>
                      &emsp;  
                      <button type="reset" class="btn btn-default"><i class="lnr lnr-cross-circle"></i> Reset</button>
                        
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
@endsection