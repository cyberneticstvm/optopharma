@extends('tenant.base')
@section('app')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-12"><h4 class="font-weight-bolder">Update Role</h4></div>
                </div>
            </div>
            <div class="card-body table-responsive">
                {!! Form::model($role, ['method' => 'PUT','route' => ['roles.update', $role->id]]) !!}
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Role Name:</strong>
                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Permissions:</strong>
                            <div class="row mt-1">
                                @foreach($permission as $value)
                                    <div class="col-sm-2 form-check form-check-inline">
                                        {{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name, form-check-input')) }}<label>{{ $value->name }}</label>
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