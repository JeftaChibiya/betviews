@extends('layouts.admin')

@section('content')

    <!-- preview and upcoming -->
    <section class="section">
        <div class="columns">
            <div class="column is-10 is-offset-1">
                <p class="title is-4">Manage Permissions</p>

        <nav class="level">
            <div class="level-left">
                <div class="level-item">
                    <a href="{{ route('permission.create') }}" class="button">NEW PERMISSION</a>                
                </div>
            </div>
        </nav>                

        <div class="demo">
        <table class="table is-responsive">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="3">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                        <tr>
                            <td>{{ $permission->id }}</td> 
                            <td>{{ $permission->name }}</td>                             
                            <td>
                                <a href="{{ URL::to('permission/'.$permission->id.'/edit') }}" class="is-link" style="margin-right: 3px;">Edit</a>
                            </td>
                            <td>|</td>
                            <td>
                                {!! Form::open(['method' => 'DELETE', 'route' => ['permission.destroy', $permission->id] ]) !!}
                                    {!! Form::submit('Delete', ['class' => 'is-link']) !!}
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