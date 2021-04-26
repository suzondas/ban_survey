const app = new Vue({
    el: '#thirdPage',
    data() {
        return {
            data: null,
            dataLoaded: false,
            dataLoadingError: false
        }
    },
    mounted() {
        var self = this
        axios.get('http://127.0.0.1:8000/thirdPage/' + inst_id)
            .then(function (response) {
                self.data = response.data
                self.dataLoaded = true;

            })
            .catch(function (error) {
                console.log(error)
                self.dataLoadingError = true;
            });
    },
    methods:
        {

            submitData: function () {
                var dataToSend = {};
                dataToSend.instId = inst_id;
                dataToSend.institutes_computer_lab_infos = this.data.institutes_computer_lab_infos;
                dataToSend.multimedia_infos = this.data.multimedia_infos;
                dataToSend.institutes_ict_infos = this.data.institutes_ict_infos;
                dataToSend.institutes_facilities_others = this.data.institutes_facilities_others;
                dataToSend.institutes_libraries = this.data.institutes_libraries;

                //console.log(dataToSend);
                axios.post('http://127.0.0.1:8000/thirdPage/submitData', dataToSend)
                    .then(
                        function (response) {
                            console.log(response);
                            alert("Third page data has been saved successfully");
                        },
                        function (response) {
                            console.log(response);
                            alert("Error Try again");
                        });


            }
        }

});
