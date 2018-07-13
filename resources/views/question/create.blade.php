@extends('layouts.admin')

@section('content')

    <br/>
    <!-- quiz.create -->
    <div class="container">    
        <div class="columns">
            <div class="column"></div>
            <div class="column is-5">
                <div class="card">
                    <div class="card-content">
                        <p class="title is-4">(Quiz title) </p>
                        <form action="">
                            <div class="field">
                                <label for="" class="label">Question</label>
                                <input type="text" class="input is-large" placeholder="Who scored at this game?">
                            </div>
                            <div class="field">
                                <label for="" class="label">Answers / Options</label>
                                <button class="button is-dark">NEW ANSWER</button> <br/>  
                                * create new checkbox as user types an option
                                <div class="columns">
                                    <div class="column">
                                    <label class="checkbox" disabled>
                                    <input type="checkbox" disabled>
                                    Ronaldo
                                    </label>    <br/>                     
                                    <label class="checkbox" disabled>
                                    <input type="checkbox" disabled>
                                    Ronaldino
                                    </label>
                                    <label class="checkbox" disabled>
                                    <input type="checkbox" disabled>
                                    Donald Trump
                                    </label>           
                                    </div>
                                    <div class="column">
                                    <label class="checkbox" disabled>
                                    <input type="checkbox" disabled>
                                    Leonel Messi
                                    </label>                         
                                    <label class="checkbox" disabled>
                                    <input type="checkbox" disabled>
                                    Xavi Alonso
                                    </label>                                
                                    </div>
                                </div>                                
                            </div>
                            <div class="field">
                                <a href="/quiz/create" class="button is-dark is-medium">SAVE</a>
                            </div>
                        </form>   
                        <br/><br/>
                        <button class="button is-dark">NEW QUESTION</button>                                          
                    </div>
                </div>
            </div>
            <div class="column"></div>
        </div>
    </div>

@endsection