var app = angular.module('collegeSecondPage', []);
(function (app) {
    "use strict";
    app.controller('myCtrl', function ($scope, $http) {
        $http({
            method: 'GET',
            url: 'http://127.0.0.1:8000/collegeSecondPage/'+inst_id
        }).then(function (response) {
            // console.log(response.data)
            $scope.data = response.data;
            $scope.studentSummeryPrevYr = $scope.data.studentSummeryPrevYr;
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
            $scope.console = function(){
                console.log($scope.studentSummeryPrevYr);
            }

            /*subjectName finding*/
            $scope.subjectName = function (id) {
                var subjtList = $scope.data.subjectList;
                var subjectName = null;
                subjtList.forEach(function (currentValue, index, arr) {
                    if(currentValue.subjectdtl_id == id){
                        return subjectName = currentValue.subject_name_ban;
                    }
                });
                return subjectName;
            }
            /*subjectName finding*/

            /*find idx of board result*/
            $scope.boardWiseExamResults = $scope.data.boardWiseExamResults;
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

        }, function (error) {

        });
    });
})(app);