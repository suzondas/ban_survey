var app = angular.module('collegeFourthPage', []);
(function (app) {
    "use strict";
    app.controller('myCtrl', function ($scope, $http) {

        /*Initial Variables*/
        $scope.data = null;

        /*===========================Helper Functions==============================*/
        /*find idx of board result*/
        $scope.findIndexEx = function (examId, subId) {
            var idx = null;
            for (var i = 0; i < $scope.boardWiseExamResults.length; i++) {
                if ($scope.boardWiseExamResults[i].exam_id == examId && $scope.boardWiseExamResults[i].subject == subId) {
                    idx = i;
                    break;
                }
            }
            return idx;
        };

        /*===========================Helper Functions Ends==============================*/

        /*==========================Data Fetching=======================================*/
        $http({
            method: 'GET',
            url: 'http://127.0.0.1:8000/collegeFourthPage/' + inst_id
        }).then(function (response) {
            $scope.data = response.data;
            $scope.boardWiseExamResults = $scope.data.boardWiseExamResults;
        }, function (error) {
            console.log(error);
        });
        /*==========================Data Fetching Ends=======================================*/

        /*==========================Data Saving=======================================*/
        $scope.save = function () {
            console.log($scope.boardWiseExamResults);
            console.log($scope.hscVocStd);
            console.log($scope.data.hscBMStd);
            console.log($scope.data.instOtherInfo);
            console.log($scope.data.openUnStd);
            console.log($scope.data.openUnRes);
        }
        $scope.submitData = function () {
            var dataToSend = {};
            dataToSend.instId = inst_id;
            dataToSend.boardWiseExamResults = $scope.boardWiseExamResults;
            dataToSend.hscVocStd = $scope.data.hscVocStd;
            dataToSend.hscBMStd = $scope.data.hscBMStd;
            dataToSend.instOtherInfo = $scope.data.instOtherInfo;
            dataToSend.openUnStd = $scope.data.openUnStd;
            dataToSend.openUnRes = $scope.data.openUnRes;

            console.log(dataToSend);
            $http({
                method: 'POST',
                url: 'http://127.0.0.1:8000/collegeFourthPage/submitData/',
                data: dataToSend,
                dataType: 'json'
            }).then(
                function (response) {
                    console.log(response);
                    alert("Fourth page data has been saved succesfull");
                },
                function (response) {
                    console.log(response);
                    alert("Try again");
                }
            );
        }

        /*==========================Data Saving Ends=======================================*/
    });
})(app);
app.directive('numberConverter', function () {
    return {
        priority: 1,
        restrict: 'A',
        require: 'ngModel',
        link: function (scope, element, attr, ngModel) {
            function toModel(value) {
                return "" + value; // convert to string
            }

            function toView(value) {
                return parseInt(value); // convert to number
            }

            ngModel.$formatters.push(toView);
            ngModel.$parsers.push(toModel);
        }
    };
});