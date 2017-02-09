var app = angular.module("app",[],function($interpolateProvider){
    $interpolateProvider.startSymbol('%');
    $interpolateProvider.endSymbol('%');
});
app.controller("UserController",function($scope,$http) {


    $scope.nb_users;
    $http.get('/blog/public/dashboard/users')
        .success(function(data) {
            $scope.nb_users = data;

        });


});