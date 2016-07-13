@extends('layouts.app')

@section('content')
<form action="saverolloutdata" method="Post" >
<select name="user_id">
	<option value="" >Select User </option>
	@foreach($user_name as $id=>$name)
	<option value="{!! $id !!}">{!! $name !!}</option>
	@endforeach
</select>
@if ($errors->has('user_id'))
<span style="color:red">{{ $errors->first('user_id') }}</span>
@endif

<input type="text" name="roll_out" value="" >

@if ($errors->has('roll_out'))
<span style="color:red">{{ $errors->first('roll_out') }}</span>
@endif

<input type="submit" name="submit" value="submit" >
</form> 
@endsection
