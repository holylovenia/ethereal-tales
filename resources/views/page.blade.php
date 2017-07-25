@extends('layouts.master')
@section('title', 'Ethereal Tales')

@section('home')
    @parent
    <div ng-app="etherealtales" ng-controller="etherealTalesController">
        <a href = "#" class = "home-button" id = "myBtn">RECITE YOURS</a>
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Letter to Heaven</h2>
                </div>
                <div class="modal-body">
                    <form name="formEtherealTales">
                        <input id="author-field" ng-model="etherealTale.author" ng-required="true" class="field field-author" name="author-field" type="text" placeholder="Author's name" required="required">
                        <input id="subject-field" ng-model="etherealTale.subject" ng-required="true" class="field field-subject" name="subject-field" type="text" placeholder="Title" required="required">
                        <textarea id="tale-field" ng-model="etherealTale.tale" ng-required="true" class="field field-tale" name="tale-field" type="text" rows="100" placeholder="Scribble your story here..." required="required"></textarea>
                        <div class="modal-footer">
                            <input class="submit-button" type="submit" value="" ng-click="newEtherealTale()">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th class="th-head author-column">Author</th>
                        <th class="th-head subject-column">Subject</th>
                        <th class="th-head">Tale</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="et in etList">
                        <td ng-bind="et.author"></td>
                        <td ng-bind="et.subject"></td>
                        <td><pre ng-bind="et.tale"></pre></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection