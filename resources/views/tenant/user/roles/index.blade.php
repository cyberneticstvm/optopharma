@extends('tenant.base')
@section('app')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6"><h4 class="font-weight-bolder">User Roles</h4></div>
                    <div class="col-6 text-end"><a class="btn bg-gradient-primary" href="/roles/create/">New Role +</a></div>
                </div>
            </div>
            <div class="card-body table-responsive">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table class="table table-bordered table-striped" id="dataTable">
                    <thead class="">
                        <tr>
                            <th>Role Name</th>
                            <th>Edit</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($roles as $key => $role)
                        <tr>
                            <td class="text-sm font-weight-normal">{{ $role->name }}</td>
                            <td class="text-center"><a href="/roles/edit/{{ $role->id }}/"><i class="fa fa-pencil text-warning"></i></a></td>
                            <td>
                                <form method="post" action="{{ route('roles.delete', $role->id) }}">
                                    @csrf 
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-link bg-gradient-danger" onclick="javascript: return confirm('Are you sure want to delete this Record?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection