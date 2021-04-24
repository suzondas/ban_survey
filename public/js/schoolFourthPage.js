var app = angular.module('schoolFourthPage', []);
(function (app) {
    "use strict";
    app.controller('myCtrl', function ($scope, $http) {

        /*Initial Variables*/
        $scope.data = null;

        /*===========================Helper Functions==============================*/
        // Console global
        $scope.console = function () {
            console.log($scope.data.occupationsList);
        };
        //Finding exam Class Index
        $scope.findExIndex = function (classId, levId) {
            var idy = null;
            for (var i = 0; i < $scope.studentSummeryPrevYr.length; i++) {
                if ($scope.studentSummeryPrevYr[i].class_id == classId && $scope.studentSummeryPrevYr[i].education_level_id == levId) {
                    idy = i;
                    break;
                }
            }
            //console.log(idy);
            return idy;
        };

        /*finding index*/
        $scope.findIndex = function(groupId, classId){
            var idx = null;
            for(var i =0;i<$scope.studentSummeryPrevYr.length;i++){
                if($scope.studentSummeryPrevYr[i].class_id == classId && $scope.studentSummeryPrevYr[i].group_id == groupId){
                    idx = i;
                    break;
                }
            }
            return idx;
        };

        /*find idx of board result*/
        $scope.findIndexEx = function(examId, subId){
            var idx = null;
            for(var i =0;i<$scope.boardWiseExamResults.length;i++){
                if($scope.boardWiseExamResults[i].exam_id == examId && $scope.boardWiseExamResults[i].subject == subId){
                    idx = i;
                    break;
                }
            }
            return idx;
        };
        /*find idx of board result*/
        /*===========================Helper Functions Ends==============================*/

        /*==========================Data Fetching=======================================*/
        $http({
            method: 'GET',
            url: 'http://127.0.0.1:8000/schoolFourthPage/' + inst_id
        }).then(function (response) {
            // console.log(response.data)
            $scope.data = response.data;
            $scope.studentSummeryPrevYr = $scope.data.studentSummeryPrevYr;
            $scope.boardWiseExamResults = $scope.data.boardWiseExamResults;
        }, function (error) {
            console.log(error);
        });
        /*==========================Data Fetching Ends=======================================*/

        /*==========================Data Saving=======================================*/
        $scope.save = function () {
            console.log($scope.studentSummeryPrevYr);
            console.log($scope.boardWiseExamResults);
            console.log($scope.data.sscVocStd);
            console.log($scope.data.instOtherInfo);
            console.log($scope.data.openUnStd);
            console.log($scope.data.openUnRes);
        }

        $scope.submitData = function () {
            var dataToSend = {};
            dataToSend.instId = inst_id;
            dataToSend.studentSummeryPrevYr = $scope.studentSummeryPrevYr;
            dataToSend.boardWiseExamResults = $scope.boardWiseExamResults;
            dataToSend.sscVocStd = $scope.data.sscVocStd;
            dataToSend.instOtherInfo = $scope.data.instOtherInfo;
            dataToSend.openUnStd = $scope.data.openUnStd;
            dataToSend.openUnRes = $scope.data.openUnRes;
            console.log(dataToSend);
            $http({
                method: 'POST',
                url: 'http://127.0.0.1:8000/schoolFourthPage/submitData/',
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
        /*==========================Data Saving END=======================================*/

    });
})(app);
app.directive('numberConverter', function() {
    return {
        priority: 1,
        restrict: 'A',
        require: 'ngModel',
        link: function(scope, element, attr, ngModel) {
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