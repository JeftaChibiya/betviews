@extends('layouts.main')

@section('content')

<div class="container">
    <div class="columns">
        <div class="column is-8">
            <div class="tip-banner">
                <figure>
                    <img src="/images/uploads/tips/cover_images/{{ $tip->cover_image }}" style="width: 100%; height: 20%" alt="" />
                </figure>
            </div>
            <p class="title is-5 margin-down"><b>{{ $tip->intro }}</b></p>          
            <p class="subtitle is-7"><b>{!! html_entity_decode($tip->tip_body) !!}</b></p>            
        </div>
        <div class="column"></div>
    </div>
</div>
@endsection