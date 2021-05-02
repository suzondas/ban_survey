const app = new Vue({
    el: '#teacherStaffInfo',
    data() {
        return {
            data: null,
            dataLoaded: false,
            dataLoadingError: false,
            addedTeacherY: false,
            selectedTeacherIdx: null,
            trainingArray: [],
            selectedTeacherData:null
        }
    },
    mounted() {
        var self = this
        axios.get('http://127.0.0.1:8000/TeacherStaff/getAll/' + inst_id + '/' + inst_type)
            .then(function (response) {
                self.data = response.data;
                self.dataLoaded = true;
                console.log(self.data);
            })
            .catch(function (error) {
                console.log(error)
                self.dataLoadingError = true;
            });
    },
    methods:
        {
            addTeacher: function () {
                var self = this;
                axios.get('http://127.0.0.1:8000/TeacherStaff/addTeacher/' + inst_id)
                    .then(function (response) {
                        let toastInstance = Vue.$toast.open('New Teacher has been added! Now Edit teacher');
                        self.data.teacherStaffInfoGeneral.push(response.data);
                    })
                    .catch(function (error) {
                        console.log(error)
                        let toastInstance = Vue.$toast.open({message: 'Something went wrong!', type: 'error'});
                    });
            },
            removeTeacher: function (teacher_name, teacher_id, index) {
                if (confirm('Are you sure to Delete teacher: ' + teacher_name)) {
                    var self = this;
                    this.selectedTeacherIdx = null;
                    axios.get('http://127.0.0.1:8000/TeacherStaff/removeTeacher/' + teacher_id)
                        .then(function (response) {
                            self.data.teacherStaffInfoGeneral.splice(index, 1);
                            let toastInstance = Vue.$toast.open('Teacher has been removed!');
                        })
                        .catch(function (error) {
                            console.log(error)
                            let toastInstance = Vue.$toast.open({message: 'Something went wrong!', type: 'error'});
                        });
                }
            },
            showDetail: function (index) {
                var self = this;
                self.selectedTeacherIdx = index; //set selected teacher index

                //copying data of before update
                self.selectedTeacherData = JSON.parse(JSON.stringify(self.data.teacherStaffInfoGeneral[self.selectedTeacherIdx]));
                // console.log(self.data.teacherStaffInfoGeneral[index]);return;

                //working with training info array [db data returns string, we have to convert it into array
                let trainingInfo = self.data.teacherStaffInfoGeneral[self.selectedTeacherIdx].training_info;
                if (trainingInfo === null) {//checking if data found in db is null
                    self.trainingArray = []; //then setting it new
                } else {
                    //try valid parsing of existing array string
                    try {
                        let parsedTrainingInfo = JSON.parse(trainingInfo);
                        self.trainingArray = parsedTrainingInfo;
                    } catch (e) {
                        self.trainingArray = [];
                    }
                }
            },
            saveTeacher: function () {
                var self = this;
                // console.log(self.selectedTeacherData);return;
                self.data.teacherStaffInfoGeneral[self.selectedTeacherIdx].training_info = '[' + self.trainingArray.toString() + ']';
                let tData = self.data.teacherStaffInfoGeneral[self.selectedTeacherIdx];
                axios.post('http://127.0.0.1:8000/TeacherStaff/saveTeacher', tData)
                    .then(
                        function (response) {
                            // console.log(response);
                            let toastInstance = Vue.$toast.open('Teacher Data has been Saved!');
                            $('#exampleModalLong').modal('toggle');
                        },
                        function (err) {
                            console.log(err);
                            let toastInstance = Vue.$toast.open({message: 'Could Not update Data!', type: 'error'});
                            Vue.set(self.data.teacherStaffInfoGeneral, self.selectedTeacherIdx, self.selectedTeacherData)
                            $('#exampleModalLong').modal('toggle');
                        });
            },
            cancelUpdate:function () {
                var self = this;
                //set back to original data of selected teacher as user cancelled the update
                Vue.set(self.data.teacherStaffInfoGeneral, self.selectedTeacherIdx, self.selectedTeacherData)
                $('#exampleModalLong').modal('toggle');
            }
        }

});
