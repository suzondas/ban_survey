var app = angular.module('collegeThirdPage', []);
(function (app) {
    "use strict";
    app.controller('myCtrl', function ($scope, $http) {

        /*Initial Variables*/
        $scope.data = null;

        /*===========================Helper Functions==============================*/

        /*FInding class name*/
        $scope.findClassName = function (id) {
            var classList = $scope.data.classes;
            var clsName = null;
            classList.forEach(function (currentValue, index) {
                if (currentValue.class_id == id) {
                    return clsName = currentValue.class_name_bangla;
                }
            });
            return clsName;
        };

        /*Occupation name finding*/
        $scope.occupationName = function (id) {
            var occupationsList = $scope.data.occupationsList;
            var occupationName = null;
            occupationsList.forEach(function (currentValue, index, arr) {
                if (currentValue.occupation_id == id) {
                    return occupationName = currentValue.details_bn;
                }
            });
            return occupationName;
        }

        /*Index finding*/
        $scope.findIndex = function (groupId, classId) {
            var idx = null;
            for (var i = 0; i < $scope.studentSummeryPrevYr.length; i++) {
                if ($scope.studentSummeryPrevYr[i].class_id == classId && $scope.studentSummeryPrevYr[i].group_id == groupId) {
                    idx = i;
                    break;
                }
            }
            return idx;
        };

        /*subjectName finding*/
        $scope.subjectName = function (id) {
            var subjtList = $scope.data.subjectList;
            var subjectName = null;
            subjtList.forEach(function (currentValue, index, arr) {
                if (currentValue.subjectdtl_id == id) {
                    return subjectName = currentValue.subject_name_ban;
                }
            });
            return subjectName;
        }
        /*subjectName finding*/

        /*===========================Helper Functions Ends==============================*/

        /*==========================Data Fetching=======================================*/
        $http({
            method: 'GET',
            url: 'http://127.0.0.1:8000/collegeThirdPage/' + inst_id
        }).then(function (response) {
            $scope.data = response.data;
            $scope.studentSummeryPrevYr = $scope.data.studentSummeryPrevYr;
        }, function (error) {
            console.log(error);
        });
        /*==========================Data Fetching Ends=======================================*/

        /*==========================Data Saving=======================================*/
        $scope.save = function () {
            console.log($scope.data.ageWiseStudent);
            console.log($scope.data.guardianOccupation);
            console.log($scope.studentSummeryPrevYr);
            console.log($scope.data.subjectWiseData);
        }
        $scope.submitData = function () {
            var dataToSend = {};
            dataToSend.instId = inst_id;
            dataToSend.ageWiseStudent = $scope.data.ageWiseStudent;
            dataToSend.guardianOccupation = $scope.data.guardianOccupation;
            dataToSend.studentSummeryPrevYr = $scope.studentSummeryPrevYr;
            dataToSend.subjectWiseData = $scope.data.subjectWiseData;

            console.log(dataToSend);
            $http({
                method: 'POST',
                url: 'http://127.0.0.1:8000/collegeThirdPage/submitData/',
                data: dataToSend,
                dataType: 'json'
            }).then(
                function (response) {
                    console.log(response);
                    alert("Third page data has been saved succesfull");
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