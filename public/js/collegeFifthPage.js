var app = angular.module('collegeFifthPage', []);
(function (app) {
    "use strict";
    app.controller('myCtrl', function ($scope, $http) {

        /*Initial Variables*/
        $scope.data = null;

        /*===========================Helper Functions==============================*/
        /*desigName finding*/
        $scope.desigName = function (id) {
            var desigList = $scope.data.desigList;
            var designationtName = null;
            desigList.forEach(function (currentValue, index, arr) {
                if (currentValue.designation_id == id) {
                    return designationtName = currentValue.designation_name_bn;
                }
            });
            return designationtName;
        }
        /*desigName finding*/

        /*desigVocName finding*/
        $scope.desigVocName = function (id) {
            var desigVocList = $scope.data.desigVocList;
            var designationVocName = null;
            desigVocList.forEach(function (currentValue, index, arr) {
                if (currentValue.designation_id == id) {
                    return designationVocName = currentValue.designation_name;
                }
            });
            return designationVocName;
        }
        /*desigVocName finding*/

        /*qualiName finding*/
        $scope.qualiName = function (id) {
            var qualiList = $scope.data.qualiList;
            var qualificationName = null;
            qualiList.forEach(function (currentValue, index, arr) {
                if (currentValue.id == id) {
                    return qualificationName = currentValue.name_bn;
                }
            });
            return qualificationName;
        }
        /*qualiName finding*/

        /*hdName finding*/
        $scope.hdName = function (id) {
            var hdList = $scope.data.hdList;
            var hdTrName = null;
            hdList.forEach(function (currentValue, index, arr) {
                if (currentValue.higher_degree_id == id) {
                    return hdTrName = currentValue.bn_name;
                }
            });
            return hdTrName;
        }
        /*hdName finding*/

        /*hdTrName finding*/
        $scope.hdTrName = function (id) {
            var hdTrList = $scope.data.hdTrList;
            var hdTrEdName = null;
            hdTrList.forEach(function (currentValue, index, arr) {
                if (currentValue.higher_degree_id == id) {
                    return hdTrEdName = currentValue.bn_name;
                }
            });
            return hdTrEdName;
        }
        /*hdTrName finding*/

        /*===========================Helper Functions Ends==============================*/

        /*==========================Data Fetching=======================================*/
        $http({
            method: 'GET',
            url: 'http://127.0.0.1:8000/collegeFifthPage/' + inst_id
        }).then(function (response) {
            $scope.data = response.data;
        }, function (error) {
            console.log(error);
        });
        /*==========================Data Fetching Ends=======================================*/

        /*==========================Data Saving=======================================*/
        $scope.save = function () {
            console.log($scope.data.teachStafSum);
            console.log($scope.data.teachVocStafSum);
            console.log($scope.data.teachQualiSum);
            console.log($scope.data.hdTeachSum);
            console.log($scope.data.hdTrnSum);
            console.log($scope.data.teacherInservTr);
            console.log($scope.data.teacherTrainInfo);
            console.log($scope.data.teacherRetAwInfo);
        }
        $scope.submitData = function () {
            var dataToSend = {};
            dataToSend.instId = inst_id;
            dataToSend.teachStafSum = $scope.data.teachStafSum;
            dataToSend.teachVocStafSum = $scope.data.teachVocStafSum;
            dataToSend.teachQualiSum = $scope.data.teachQualiSum;
            dataToSend.hdTeachSum = $scope.data.hdTeachSum;
            dataToSend.hdTrnSum = $scope.data.hdTrnSum;
            dataToSend.teacherInservTr = $scope.data.teacherInservTr;
            dataToSend.teacherTrainInfo = $scope.data.teacherTrainInfo;
            dataToSend.teacherRetAwInfo = $scope.data.teacherRetAwInfo;

            console.log(dataToSend);
            $http({
                method: 'POST',
                url: 'http://127.0.0.1:8000/collegeFifthPage/submitData/',
                data: dataToSend,
                dataType: 'json'
            }).then(
                function (response) {
                    console.log(response);
                    alert("Fifth page data has been saved succesfull");
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