/**
 * Created by Holy on 21-Jul-17.
 */

var app = angular.module("etherealtales", []);

var refresh = function() {
    $http.get('api/v1/etherealtales')
        .then(function (response) {
            $scope.etList = response.data;
        });
};

app.controller('etherealTalesController', function($scope, $http) {

    $scope.etList = [];

    $http.get('api/v1/etherealtales')
        .then(function (response) {
            $scope.etList = response.data;
        });

    $scope.newEtherealTale = function () {
        $http.post('api/v1/etherealtales',
            {
                author: $scope.etherealTale.author,
                subject: $scope.etherealTale.subject,
                tale: $scope.etherealTale.tale

            })
            .success(function (response) {
                $scope.etherealTale = response;
                refresh();
            })
            .error(function (response) {
                console.log(response);
                refresh();
            });
    };
});