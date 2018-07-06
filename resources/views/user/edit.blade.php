@extends('layouts.admin')

@section('content')

    <!-- preview and upcoming -->
    <section class="section">
        <div class="columns">
            <div class="column"></div>
            <div class="column is-5">
                <p class="subtitle is-6">Edit User</p>
                <hr>                
                <p class="title is-5">{{ $user->name }}</p>

                {{ Form::model($user, array('route' => array('user.update', $user->id), 'method' => 'PUT')) }}

                    <div class="field">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', null, array('class' => 'input')) }}
                    </div>

                    <div class="field">
                        {{ Form::label('email', 'Email') }}
                        {{ Form::email('email', null, array('class' => 'input')) }}
                    </div>

                    <div class="field">
                        {{ Form::label('password', 'Password') }}<br>
                        {{ Form::password('password', array('class' => 'input')) }}
                    </div>

                    <div class="field">
                        {{ Form::label('password', 'Confirm Password') }}<br>
                        {{ Form::password('password_confirmation', array('class' => 'input')) }}
                    </div>

                    <p class="subtitle is-5">Assign Roles</p>

                    <div class='field'>
                        <div class="columns">
                            @foreach($roles->chunk(3) as $set)                                                        
                                <div class="column">
                                    @foreach ($roles as $role)
                                        {{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}
                                        {{ Form::label($role->name, ucfirst($role->name)) }}<br>
                                    @endforeach                                    
                                </div>
                            @endforeach
                        </div>
                    </div>                    

                    {{ Form::submit('UPDATE', array('class' => 'button is-dark')) }}

                {{ Form::close() }}
            </div>
            <div class="column"></div>            
        </div>
    </section>
@endsection