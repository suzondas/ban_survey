var app = angular.module('sncSecondPage', []);
(function (app) {
    "use strict";
    app.controller('myCtrl', function ($scope, $http) {
        $http({
            method: 'GET',
            url: 'http://127.0.0.1:8000/SnCSecondPage/'+inst_id
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

            /*desigName finding*/
            $scope.desigName = function (id) {
                var desigList = $scope.data.desigList;
                var designationtName = null;
                desigList.forEach(function (currentValue, index, arr) {
                    if(currentValue.designation_id == id){
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
                    if(currentValue.designation_id == id){
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
                    if(currentValue.id == id){
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
                    if(currentValue.higher_degree_id == id){
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
                    if(currentValue.higher_degree_id == id){
                        return hdTrEdName = currentValue.bn_name;
                    }
                });
                return hdTrEdName;
            }
            /*hdTrName finding*/

        }, function (error) {

        });
    });
})(app);
