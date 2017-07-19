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
            <form>
                <div class="modal-body">
                    <input id="author-field" class="field field-author" name="author-field" type="text" placeholder="Author's name" required="required">
                    <input id="subject-field" class="field field-subject" name="subject-field" type="text" placeholder="Title" required="required">
                    <textarea id="tale-field" class="field field-tale" name="tale-field" type="text" rows="100" placeholder="Scribble your story here..." required="required"></textarea>
                </div>
                <div class="modal-footer">
                    <input class="submit-button" type="submit" value="">
                </div>
            </form>
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