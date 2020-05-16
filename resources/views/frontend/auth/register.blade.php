@extends('frontend.landing_layout.app')

@section('title', $menu.' | ')
@section('content')
    @include('frontend.landing_layout.navigation')
    <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-md-6  col-md-offset-3 animate-box">
            <center><h2>Register</h2></center>
            <form action="{{url('/student/register')}}" method="POST">
                {{ csrf_field() }}
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="nim" class="control-label">Nim :</label>
                        <input type="text" id="nim" name="nim" class="form-control" placeholder="Nim">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="nim" class="control-label">Nama :</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label class="control-label">Semester</label>
                        <select class="form-control select2" name="semester_id" data-placeholder="Semester">
                            <option></option>
                            @foreach ($semesters as $semester)
                                <option value="{!! $semester->id !!}"{!! old('semester_id')==$semester->id ? ' selected' : '' !!}>{!! $semester->name !!}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="kelas" class="control-label">Kelas :</label>
                        <select class="form-control select2" id="kelas" name="kelas_id" data-placeholder="Kelas">
                            <option></option>
                            @foreach ($class as $kelas)
                                <option value="{!! $kelas->id !!}"{!! old('kelas_id')==$kelas->id ? ' selected' : '' !!}>{!! $kelas->name !!}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="noHandphone" class="control-label">Nomor Hp :</label>
                        <input type="number" id="noHandphone" class="form-control" name="no_hp"
                               placeholder="Nomor Handphone">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="username">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control"
                               placeholder="Password">
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" value="Register" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection
