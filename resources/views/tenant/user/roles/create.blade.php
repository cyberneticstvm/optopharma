@extends('tenant.base')
@section('app')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-12"><h4 class="font-weight-bolder">New Role</h4></div>
                </div>
            </div>
            <div class="card-body table-responsive">
                {!! Form::open(array('route' => 'roles.save','method'=>'POST')) !!}
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Role Name:</strong>
                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                        </div>
                        @error('name')
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                        @enderror
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Permissions:</strong>
                            <div class="row mt-1">                           
                                @foreach($permission as $value)
                                    <div class="col-sm-2 form-check form-check-inline">
                                        {{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name, form-check-input')) }}
                                        <label class="form-check-label" for="flexCheckDefault">{{ $value->name }}</label>
                                    </div>
                                @endforeach
                                @error('permission')
                                <small class="text-danger">{{ $errors->first('permission') }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">                        
                        <button type="button" onClick="history.back()" class="btn bg-gradient-warning">Cancel</button>
                        <button type="submit" class="btn btn-submit bg-gradient-primary">Update</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection