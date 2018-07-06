@extends('layouts.admin')

@section('content')

    <!-- preview and upcoming -->
    <section class="section">
        <div class="columns">
            <div class="column is-10 is-offset-1">
                <p class="title is-3">Edit {{ $permission->name }}</p>

                <hr>

                {{ Form::model($permission, array('route' => array('permission.update', $permission->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with permission data --}}

                <div class="form-group">
                    {{ Form::label('name', 'Permission Name') }}
                    {{ Form::text('name', null, array('class' => 'input')) }}
                </div>
                <br>
                {{ Form::submit('Edit', array('class' => 'button is-primary')) }}

                {{ Form::close() }}
        </div>
    </section>
@endsection