@extends('layouts.admin')

@section('content')

    <!-- preview and upcoming -->
    <section class="section">
        <div class="columns">
            <div class="column is-10 is-offset-1">
                <p class="title is-3">Manage users</p>

        <nav class="level">
            <div class="level-left">
                <div class="level-item">
                    <a href="{{ route('user.create') }}" class="button is-success">NEW USER</a>                
                </div>
            </div>
        </nav>                

        <div class="demo">
        <table class="table is-responsive">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created on</th>
                        <th>Roles</th>
                        <th>Operations</th>
                    </tr>
                 </thead>

                 <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                            <td>{{ $user->roles()->pluck('name')->implode(' ') }}</td>
                            <td>
                                <a href="{{ route('user.edit', $user->id) }}" class="button is-light has-text-left" style="margin-right: 3px;">
                                    Edit
                                </a>
                            </td>
                            <td>
                                {!! Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id] ]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach                    
                  </tbody>
                </table>
             </div>                
            </div>
        </div>
    </section>
@endsection