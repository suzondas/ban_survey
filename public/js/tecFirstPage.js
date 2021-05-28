const app = new Vue({
    el: '#tecFirstPage',
    data() {
        return {
            data: null,
            dataLoaded: false,
            dataLoadingError: false
        }
    },
    mounted() {
        var self = this;
        axios.get('http://127.0.0.1:8000/tecFirstPage/' + inst_id)
            .then(function (response) {
                self.data = response.data;
                self.dataLoaded = true;
            })
            .catch(function (error) {
                console.log(error)
                self.dataLoadingError = true;
            });
    },
    methods: {
        test: function (v) {
            console.log(v);
        },
        levelName: function (levelId) {
            var self = this;
            // console.log(self.data);return;

            for (var i = 0; i < self.data.eduLevel.length; i++) {
                if (self.data.eduLevel[i].education_level_id == levelId) {
                    return self.data.eduLevel[i].education_level_bangla_name;
                }
            }
        },
        levelMpo: function (mpoId) {
            var self = this;

            for (var j = 0; j < self.data.eduLevel.length; j++) {
                if (self.data.eduLevel[j].education_level_id == mpoId) {
                    return self.data.eduLevel[j].education_level_bangla_name;
                }
            }
        },
        submitData: function () {
            var dataToSend = {};
            dataToSend.instId = inst_id;
            dataToSend.institutes=this.data.institutes;
            dataToSend.institutes_recognition=this.data.institutes_recognition;
            dataToSend.instCurriculums=this.data.instCurriculums;
            dataToSend.committees=this.data.committees;
            dataToSend.institutes_mpo_status=this.data.institutes_mpo_status;
           console.log(dataToSend);
           // return;
            axios.post('http://127.0.0.1:8000/tecFirstPage/submitData/', dataToSend)
                .then(
                    function (response) {
                        console.log(response);
                        alert("First page data has been saved successfully");
                    },
                    function (response) {
                        console.log(response);
                        alert("Error Try again");
                    });


        }
    }
});


