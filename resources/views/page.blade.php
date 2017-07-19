@extends('layouts.master')
@section('title', $name)

@section('home')
    @parent
    <div class = "home-title">
        <h1>{{$name}}</h1>
    </div>
    <a href = "#" class = "home-button" id = "myBtn">RECITE YOURS</a>
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Letter to Heaven</h2>
            </div>
            <div class="modal-body">
                <p>Some text in the Modal..</p>
            </div>
        </div>
    </div>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <h2>{{$name}}</h2>
    <p>This is my body content.</p>
@endsection