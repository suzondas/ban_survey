const app = new Vue({
    el: '#schoolFirst',
    data() {
        return {
            data:null,
            dataLoaded:false,
            banglaBorno:['ক','খ','গ','ঘ','ঙ','চ','ছ','জ','ঝ','ঞ']
        }
    },
    mounted() {
        var self=this
        axios.get('http://127.0.0.1:8000/collegeFirstPage/'+inst_id)
            .then(function (response) {
                self.data=response.data
                self.dataLoaded=true
                console.log(self.data)
            })
            .catch(function (error) {
                console.log(error)
            });
    },

    methods:
        {
            addSection() {

                this.data.secWise_student_summary.push(
                    {
                        "id": '',
                        "SIX": null,
                        "SEVEN": null,
                        "EIGHT": null,
                        "NINE_SCIENCE": null,
                        "NINE_ARTS": null,
                        "NINE_COMMERCE": null,
                        "TEN_SCIENCE": null,
                        "TEN_ARTS": null,
                        "TEN_COMMERCE": null
                    }
                )
            },

            removeSection: function(index) {
                console.log("Removing", index);
                this.data.secWise_student_summary.splice(index, 1);
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
        }

});
