@extends('tenant.base')
@section('app')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="font-weight-bolder">User Register</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-striped" id="dataTable">
                    <thead class="">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>User Type</th>
                            <th>Edit</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $key => $user)
                        <tr>
                            <td class="text-sm font-weight-normal">{{ $user->name }}</td>
                            <td class="text-sm font-weight-normal">{{ $user->email }}</td>
                            <td class="text-sm font-weight-normal"></td>
                            <td class="text-center"><i class="fa fa-pencil text-warning"></i></td>
                            <td class="text-center"><i class="fa fa-times text-danger"></i></td>
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