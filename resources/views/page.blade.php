@extends('layouts.master')
@section('title', 'Ethereal Tales')

@section('home')
    @parent
    <a href = "#" class = "home-button" id = "myBtn">RECITE YOURS</a>
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Letter to Heaven</h2>
            </div>
            <form name="formEtherealTales" ng-app="etherealtales" ng-controller="etherealTalesController">
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
@endsection

@section('content')
    <div ng-app="etherealtales" ng-controller="etherealTalesController">
        <span ng-bind="etList"></span>
    </div>
    <table class="table" ng-app="etherealtales" ng-controller="etherealTalesController">
        <thead>
        <tr>
            <th>Author</th>
            <th>Subject</th>
            <th>Tale</th>
        </tr>
        </thead>
        <tbody>
        <tr ng-repeat="et in etList">
            <td ng-bind="et.author"></td>
            <td ng-bind="et.subject"></td>
            <td ng-bind="et.tale"></td>
        </tr>
        </tbody>
    </table>
@endsection