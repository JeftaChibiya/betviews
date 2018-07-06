@extends('layouts.admin')

@section('content')

    <!-- preview and upcoming -->
    <section class="section">
        <div class="columns">
            <div class="column"></div>
            <div class="column is-4">
                <p class="title is-5">New User</p>

                <hr>

                {{ Form::open(array('url' => 'user.store')) }}
                
                    <p class="subtitle is-5">User details</p>

                    <div class="field">
                        {{ Form::label('name', 'Name') }}                
                        <p class="control">
                            {{ Form::text('name', '', array('class' => 'input')) }}                    
                        </p>
                    </div>

                    <div class="field">
                        {{ Form::label('email', 'Email') }}
                        {{ Form::email('email', '', array('class' => 'input')) }}
                    </div>

                    <div class="field">
                        {{ Form::label('password', 'Password') }}<br>
                        {{ Form::password('password', array('class' => 'input')) }}

                    </div>

                    <div class="field">
                        {{ Form::label('password', 'Confirm Password') }}<br>
                        {{ Form::password('password_confirmation', array('class' => 'input')) }}
                    </div>

                    <p class="subtitle is-5">Assign roles</p>
                    <div class='field'>
                        @foreach ($roles as $role)
                            {{ Form::checkbox('roles[]',  $role->id ) }}
                            {{ Form::label($role->name, ucfirst($role->name)) }}<br>
                        @endforeach
                    </div>                    

                    {{ Form::submit('CREATE', array('class' => 'button is-dark')) }}
                {{ Form::close() }}

            </div>
            <div class="column"></div>            
        </div>
    </section>
@endsection