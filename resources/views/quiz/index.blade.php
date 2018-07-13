@extends('layouts.admin')

@section('content')

    <br/>
    <!-- tip.create -->
    <div class="container">    
    <p class="title has-text-centered">Quizzes and Specials</p>
     <section class="section is_display">
        <div class="tile is-ancestor margin-down">
            <div class="tile is-parent">
                <a class="tile is-child bg_cover" href="/quiz/create" style="background-image: url('/images/features/quiz_bg.jpeg')">
                    <div class="overlay">
                        <p class="title is_white" style="align-self: center">New Quiz</p>
                    </div>
                </a>                    
            </div>
            <div class="tile is-parent">
                <a class="tile is-child bg_cover" href="/quiz/create" style="background-image: url('/images/features/specials_bg.jpeg')">
                    <div class="overlay">
                        <p class="title is_white" style="align-self: center">Special article</p>
                    </div>
                </a>                  
            </div>
        </div> 

        <br/>
        
        <div class="columns">
            <div class="column">
                <p class="title is-4">Recent Quizzes</p>
                <!-- category products  -->
                <div class="tips-display">

                    <table class="table is-responsive">
                        <thead>
                        <tr>
                            <td>ID</td>
                            <td>Title</td>
                            <td>Created On</td>
                            <td colspan="2">Actions</td>
                        </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>
                    </table>
                </div>                     
            </div>
            <div class="column">
                <p class="title is-4">Recent Specials</p>

                    <table class="table is-responsive">
                        <thead>
                        <tr>
                            <td>ID</td>
                            <td>Title</td>
                            <td>Created On</td>
                            <td colspan="2">Actions</td>
                        </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>
                    </table>                
            </div>
        </div>
     </section>

@endsection