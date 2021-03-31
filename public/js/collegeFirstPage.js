var app = angular.module('collegeFirstPage', []);
(function (app) {
    "use strict";
    app.controller('myCtrl', function ($scope, $http) {
        $http({
            method: 'GET',
            url: 'http://127.0.0.1:8000/collegeFirstPage/'+inst_id
        }).then(function (response) {
            // console.log(response.data)
            $scope.data = response.data;
            $scope.stuentsSummery = $scope.data.Students_summary;
            $scope.findIndex = function(groupId, classId){
                var idx = null;
                for(var i =0;i<$scope.stuentsSummery.length;i++){
                    if($scope.stuentsSummery[i].class_id == classId && $scope.stuentsSummery[i].group_id == groupId){
                        idx = i;
                        break;
                    }
                }
                return idx;
            };
            $scope.console = function(){
                console.log($scope.stuentsSummery);
            }
            /*Occupation name finding*/
            $scope.occupationName = function (id) {
                var occupationsList = $scope.data.occupationsList;
                var occupationName = null;
                occupationsList.forEach(function (currentValue, index, arr) {
                    if(currentValue.occupation_id == id){
                        return occupationName = currentValue.occupation_bangla_name;
                    }
                });
                return occupationName;
            }
            /*Occupation name finding*/

            /*FInding class name*/
            $scope.findClassName = function (id) {
                var classList = $scope.data.institutes_recognition;
                var clsName = null;
                classList.forEach(function (currentValue, index) {
                    currentValue.classes.forEach(function (className, classIndex) {
                        if(className.class_id == id){
                            return clsName = className.class_name;
                        }
                    });
                });
                return clsName;
                console.log(clsName)
            }
            /*FInding class name*/

            /*upajatiName name finding*/
            $scope.findUpajaitName = function (id) {
                var upajatiList = $scope.data.ethnicityList;
                var upajatiName = null;
                upajatiList.forEach(function (currentValue, index, arr) {
                    if(currentValue.upajati_id == id){
                        return upajatiName = currentValue.name;
                    }
                });
                return upajatiName;
            }
            /*upajatiName name finding*/


        }, function (error) {

        });
    });
})(app);