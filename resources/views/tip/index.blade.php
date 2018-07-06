@extends('layouts.admin')

@section('content')

    <br/>
    <!-- tip.create -->
    <div class="container">    
      <div class="tile is-ancestor margin-down">
       <div class="tile is-parent">
            <a class="tile is-child box" href="/tip.general-tip">
                <p class="title">General tip</p>
                <div class="content">                    
                    <p class="subtitle is-5">Tip without stakes included</p>                    
                </div>
            </a>
        </div>
        <div class="tile is-parent is-6">
            <a class="tile is-child box" href="/tip.betting-tip">
                <p class="title"> Betting tip</p>
                <div class="content">
                    <p class="subtitle is-5">Tip with stakes included</p>
                </div>
            </a>
        </div>
        </div>  

        <br/>
        
        
    <!-- preview and upcoming -->
    <div class="columns">
            <div class="column is-10 is-offset-1">             
                
                <p class="title is-4">Recent Tips</p>
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
                            @foreach($tips as $tip)
                                <tr>
                                    <td>{{ $tip->id }} </td>
                                    <td>{{ $tip->intro }} </td>
                                    <td>{{ $tip->created_at }} </td>
                                    <td><a href="/tip.edit" class="is-link">Edit</a> </td>
                                    <td><a href="/tip.destroy" class="delete is-large"></a> </td>
                                </tr>    
                            @endforeach                        
                        </tbody>
                    </table>
                </div>

                @empty($category->products)
                    <p></p>
                @endempty               
            </div>
        </div>        
    </div>

@endsection