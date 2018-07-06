@extends('layouts.admin')

@section('content')

    <!-- preview and upcoming -->
    <section class="section">
        <div class="columns">
            <div class="column"></div>
                <div class="column is-4">
                    <p class="title is-4">New Permission</p>


                    {{ Form::open(array('url' => 'permission')) }}

                        <div class="field">
                            {{ Form::text('name', '', array('placeholder'=>'Name', 'class' => 'input')) }}
                        </div>                        

                        <br/>
                        @if(!$roles->isEmpty())
                            <p class="subtitle is-6">Assign to Role</p>

                            @foreach ($roles as $role) 
                                {{ Form::checkbox('roles[]',  $role->id ) }}
                                {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                            @endforeach
                        @endif
                        
                        <br>

                        {{ Form::submit('CREATE', array('class' => 'button is-dark')) }}

                    {{ Form::close() }}
                </div>            
            <div class="column"></div>
        </div>
    </section>
@endsection