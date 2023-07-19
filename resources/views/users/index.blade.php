@extends('layouts.master')
@push('title')
    USERS
@endpush

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Users Management</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User </a>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<div class="table-responsive">
  <table class="table table-nowrap mb-0">

    <tr>
      <th>No</th>
      <th>Name</th>
      <th>Email</th>
      <th>Roles</th>
      <th width="280px">Action</th>
    </tr>
    @foreach ($data as $key => $user)
     <tr>
       <td>{{ ++$i }}</td>
       <td>{{ $user->name }}</td>
       <td>{{ $user->email }}</td>
       <td>
         @if(!empty($user->getRoleNames()))
           @foreach($user->getRoleNames() as $v)
              <label class="badge badge-success">{{ $v }}</label>
           @endforeach
         @endif
       </td>
       <td>
          <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
          <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
           {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
               {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
           {!! Form::close() !!}
       </td>
     </tr>
    @endforeach
   
   
   {!! $data->render() !!}
   
  </table>
</div>
@endsection