@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
					
					<tr>
					<td>Name</td>
					<td>Email</td>
					<td>Created At</td>
					</tr>
					
                    @foreach($user_record as $user)
					
					<tr>
					<td>{!! $user->name !!}</td>
					<td>{!! $user->email !!}</td>
					<td>{!! $user->created_at !!}</td>
					</tr>


					@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
