{!! Form::open(['route' => $route.'.store', 'method' => 'POST']) !!}
<div class="box-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                <label class="control-label">Nama</label>
                <input type="text" class="form-control" name="nama" value="{!! old('nama') !!}" placeholder="">
                @if ($errors->has('nama'))
                    <span class="help-block">
                        <strong>{!! $errors->first('nama') !!}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('nik') ? ' has-error' : '' }}">
                <label class="control-label">NIK</label>
                <input type="text" class="form-control" name="nik" value="{!! old('nik') !!}" placeholder="">
                @if ($errors->has('nik'))
                    <span class="help-block">
                        <strong>{!! $errors->first('nik') !!}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('no_kk') ? ' has-error' : '' }}">
                <label class="control-label">NO KK</label>
                <input type="text" class="form-control" name="no kk" value="{!! old('no kk') !!}" placeholder="">
                @if ($errors->has('no kk'))
                    <span class="help-block">
                        <strong>{!! $errors->first('no kk') !!}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('tempat lahir') ? ' has-error' : '' }}">
                <label class="control-label">Tempat lahir</label>
                <input type="text" class="form-control" name="tempat lahir" value="{!! old('tempat lahir') !!}" placeholder="">
                @if ($errors->has('tempat lahir'))
                    <span class="help-block">
                        <strong>{!! $errors->first('tempat lahir') !!}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('tanggal lahir') ? ' has-error' : '' }}">
                <label class="control-label">Tanggal lahir</label>
                <input type="text" class="form-control" name="tanggal lahir" value="{!! old('tanggal lahir') !!}" placeholder="">
                @if ($errors->has('tanggal lahir'))
                    <span class="help-block">
                        <strong>{!! $errors->first('tanggal lahir') !!}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                <label class="control-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="{!! old('alamat') !!}" placeholder="">
                @if ($errors->has('alamat'))
                    <span class="help-block">
                        <strong>{!! $errors->first('alamat') !!}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('pekerjaan') ? ' has-error' : '' }}">
                <label class="control-label">Pekerjaan</label>
                <input type="text" class="form-control" name="pekerjaan" value="{!! old('pekerjaan') !!}" placeholder="">
                @if ($errors->has('pekerjaan'))
                    <span class="help-block">
                        <strong>{!! $errors->first('pekerjaan') !!}</strong>
                    </span>
                @endif
            </div>
        </div>
</div>
<div class="box-footer">
    <button type="submit" class="btn btn-primary">{!! trans('button.save') !!}</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">{!! trans('button.close') !!}</button>
</div>
{!! Form::close() !!}
