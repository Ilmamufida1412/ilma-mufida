@extends('layout.main')

@section('content')
<h4>Form Edit</h4>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('students') }}'">
                kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('students/'.$txtid) }}">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label for="txtid" class="col-sm-2 col-form-label">Id Students</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control-plaintext form-control-sm " id="txtid" name="txtid" value="{{ $txtid }}">
                </div>
              </div>
              <div class="row mb-3">
                <label for="txtfullname" class="col-sm-2 col-form-label col-form-label-sm">Full Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm @error('txtfullname') is-invalid @enderror" id="txtfullname" name="txtfullname" value="{{ $txtfullname }}">
                  @error('txtfullname')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="txtgender" class="col-sm-2 col-form-label col-form-label-sm @error('txtgender') is-invalid @enderror">Gender</label>
                <div class="col-sm-4">
                    <select class="form-select form-select-sm" name="txtgender" id="txtgender">
                        <option value="" selected>-pilih-</option>
                        <option value="M" {{ ($txtgender=='M') ? 'selected' : '' }}>Male</option>
                        <option value="F" {{ ($txtgender=='F') ? 'selected' : '' }}>Female</option>
                    </select>
                </div>
              </div>
              <div class="row mb-3">
                <label for="txtage" class="col-sm-2 col-form-label col-form-label-sm ">Age</label>
                <div class="col-sm-3">
                    <input type="text" name="txtage" id="txtage" class="form-control form-control-sm @error('txtage') is-invalid @enderror" value="{{ $txtage }}">
                    @error('txtage')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="txtaddress" class="col-sm-2 col-form-label col-form-label-sm">Address</label>
                <div class="col-sm-10">
                    <textarea class="form-control  @error('txtaddress') is-invalid @enderror" name="txtaddress" id="txtaddress" cols="15" rows="5">{{ $txtaddress }}</textarea>
                    @error('txtaddress')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="txtemail" class="col-sm-2 col-form-label col-form-label-sm ">Email</label>
                <div class="col-sm-6">
                    <input type="text" name="txtemail" id="txtemail" class="form-control form-control-sm @error('txtemail') is-invalid @enderror" value="{{ $txtemail }}">
                    @error('txtemail')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="txtphone" class="col-sm-2 col-form-label col-form-label-sm ">Phone Number</label>
                <div class="col-sm-6">
                    <input type="text" name="txtphone" id="txtphone" class="form-control form-control-sm @error('txtphone') is-invalid @enderror" value="{{ $txtphone }}">
                    @error('txtphone')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label col-form-label-sm"></label>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-sm btn-success">
                        Update
                    </button>
                </div>
              </div>
            </form>
        </div>
    </div>
@endsection