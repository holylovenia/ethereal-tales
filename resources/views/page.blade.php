@extends('layouts.master')
@section('title', $name)

@section('home')
    @parent
    <a href = "#" class = "home-button" id = "myBtn">RECITE YOURS</a>
    <div class="app" ng-app="etherealtales" ng-controller="etherealTalesController">
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Letter to Heaven</h2>
            </div>
            <form name="formEtherealTales">
                <input id="author-field" ng-model="etherealTale.author" ng-required="true" class="field field-author" name="author-field" type="text" placeholder="Author's name" required="required">
                <input id="subject-field" ng-model="etherealTale.subject" ng-required="true" class="field field-subject" name="subject-field" type="text" placeholder="Title" required="required">
                <textarea id="tale-field" ng-model="etherealTale.tale" ng-required="true" class="field field-tale" name="tale-field" type="text" rows="100" placeholder="Scribble your story here..." required="required"></textarea>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <input class="submit-button" type="submit" value="" ng-click="newEtherealTale()">
                </div>
            </form>
        </div>
    </div>
        <p><span ng-bind="etherealTalesController.etherealtales"></span> </p>
    </div>
@endsection

