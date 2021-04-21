var app = angular.module('collegeSecondPage', []);
(function (app) {
    "use strict";
    app.controller('myCtrl', function ($scope, $http) {
        $http({
            method: 'GET',
            url: 'http://127.0.0.1:8000/collegeSecondPage/' + inst_id
        }).then(function (response) {
            // console.log(response.data)
            $scope.data = response.data;
            $scope.studentSummeryPrevYr = $scope.data.studentSummeryPrevYr;
            $scope.subjectWiseData = $scope.data.subjectWiseData;
            $scope.hscVocStd = $scope.data.hscVocStd;
            $scope.hscBMStd = $scope.data.hscBMStd;
            $scope.instOtherInfo = $scope.data.instOtherInfo;
            $scope.openUnStd = $scope.data.openUnStd;
            $scope.teachStafSum = $scope.data.teachStafSum;
            $scope.openUnRes = $scope.data.openUnRes;
            $scope.teachVocStafSum = $scope.data.teachVocStafSum;
            $scope.teachQualiSum = $scope.data.teachQualiSum;
            $scope.hdTeachSum = $scope.data.hdTeachSum;
            $scope.hdTrnSum = $scope.data.hdTrnSum;
            $scope.teacherInservTr = $scope.data.teacherInservTr;
            $scope.teacherTrainInfo = $scope.data.teacherTrainInfo;
            $scope.teacherRetAwInfo = $scope.data.teacherRetAwInfo;

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
            $scope.console = function () {
                console.log($scope.studentSummeryPrevYr);
            }

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

            /*find idx of board result*/
            $scope.boardWiseExamResults = $scope.data.boardWiseExamResults;
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
            /*find idx of board result*/

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

        }, function (error) {

        });


        /*Data Saving*/
        $scope.save = function () {

            console.log($scope.studentSummeryPrevYr);
            console.log($scope.subjectWiseData);
            console.log($scope.boardWiseExamResults);
            console.log($scope.hscVocStd);
            console.log($scope.hscBMStd);
            console.log($scope.instOtherInfo);
            console.log($scope.openUnStd);
            console.log($scope.openUnRes);
            console.log($scope.teachStafSum);
            console.log($scope.teachVocStafSum);
            console.log($scope.teachQualiSum);
            console.log($scope.hdTeachSum);
            console.log($scope.hdTrnSum);
            console.log($scope.teacherInservTr);
            console.log($scope.teacherTrainInfo);
            console.log($scope.teacherRetAwInfo);
        }

        $scope.submitData = function () {
            var dataToSend = {};
            dataToSend.instId = inst_id;
            dataToSend.studentSummeryPrevYr = $scope.studentSummeryPrevYr;
            dataToSend.subjectWiseData = $scope.subjectWiseData;
            dataToSend.boardWiseExamResults = $scope.boardWiseExamResults;
            dataToSend.hscVocStd = $scope.hscVocStd;
            dataToSend.hscBMStd = $scope.hscBMStd;
            dataToSend.instOtherInfo = $scope.instOtherInfo;
            dataToSend.openUnStd = $scope.openUnStd;
            dataToSend.openUnRes = $scope.openUnRes;
            dataToSend.teachStafSum = $scope.teachStafSum;
            dataToSend.teachVocStafSum = $scope.teachVocStafSum;
            dataToSend.teachQualiSum = $scope.teachQualiSum;
            dataToSend.hdTeachSum = $scope.hdTeachSum;
            dataToSend.hdTrnSum = $scope.hdTrnSum;
            dataToSend.teacherInservTr = $scope.teacherInservTr;
            dataToSend.teacherTrainInfo = $scope.teacherTrainInfo;
            dataToSend.teacherRetAwInfo = $scope.teacherRetAwInfo;
            console.log(dataToSend);
            $http({
                method: 'POST',
                url: 'http://127.0.0.1:8000/collegeSecondPage/submitData/',
                data:dataToSend,
                dataType:'json'
            }).then(
                function (response) {
                    console.log(response);
                    alert("College second page data has been saved succesfull");
                },
                function (response) {
                    console.log(response);
                    alert("Error Try again");
                }
            );

            /*$http.post('http://127.0.0.1:8000/collegeSecondPage/submitData',dataToSend
                ).then(
                function (response) {
                    console.log(response);
                    alert("succesfull");
                },
                function (response) {
                    console.log(response);
                    alert("fucked");
                }
            );*/


        }
    });
})
(app);
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