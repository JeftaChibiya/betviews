@extends('layouts.main')

@section('content')

<show-tip :tip="{{ json_encode($tip) }}"  inline-template>
    <div class="container">
        <div class="columns margin-down margin-up">
            <div class="column is-8">
                <div class="tip-banner">
                    <figure>
                        <img src="/images/uploads/tips/cover_images/{{ $tip->cover_image }}" style="width: 100%; height: 20%" alt="" />
                    </figure>
                </div>
                <p class="title is-5 margin-down"><b>{{ $tip->intro }}</b></p>          
                <p class="subtitle is-6" v-html="tip.tip_body"></p>            
            </div>
            <div class="column"></div>
        </div>
    </div>
</show-tip>
@endsection