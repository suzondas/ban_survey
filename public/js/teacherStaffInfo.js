const app = new Vue({
    el: '#teacherStaffInfo',
    data() {
        return {
            data: null,
            dataLoaded: false,
            dataLoadingError: false,
            addedTeacherY: false
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
                        let toastInstance = Vue.$toast.open('New Teacher has been added!');
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
                    axios.get('http://127.0.0.1:8000/TeacherStaff/removeTeacher/' + teacher_id)
                        .then(function (response) {
                            self.data.teacherStaffInfoGeneral.splice(index,1);
                            let toastInstance = Vue.$toast.open('Teacher has be removed!');
                        })
                        .catch(function (error) {
                            console.log(error)
                            let toastInstance = Vue.$toast.open({message: 'Something went wrong!', type: 'error'});
                        });
                }
            },
            saveTeacher: function () {
            },
            saveAll: function () {
                var dataToSend = {};
                dataToSend.instId = inst_id;
                dataToSend.institutes_land_usage = this.data.institutes_land_usage;
                dataToSend.building_infos = this.data.building_infos;
                dataToSend.building_numbers = this.data.building_numbers;
                dataToSend.building_use = this.data.building_use;
                dataToSend.building_details = this.data.building_details;
                dataToSend.classwise_room_space = this.data.classwise_room_space;
                dataToSend.classes = this.data.classes;
                console.log(dataToSend);
                axios.post('http://127.0.0.1:8000/secondPage/submitData', dataToSend)
                    .then(
                        function (response) {
                            console.log(response);
                            alert("Second page data has been saved successfully");
                        },
                        function (response) {
                            console.log(response);
                            alert("Error Try again");
                        });
            }
        }

});
