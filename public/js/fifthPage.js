const app = new Vue({
    el: '#fifthPage',
    data() {
        return {
            data:null,
            dataLoaded:false,
            dataLoadingError:false
        }
    },
    mounted() {
        var self=this
        axios.get('http://127.0.0.1:8000/fifthPage/'+inst_id)
            .then(function (response) {
                self.data=response.data
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
                dataToSend.climate_disaster_manage_infos = this.data.climate_disaster_manage_infos;
                dataToSend.covid_infos=this.data.covid_infos;
                // console.log(dataToSend);
                axios.post('http://127.0.0.1:8000/fifthPage/submitData', dataToSend)
                    .then(
                        function (response) {
                            console.log(response);
                            alert("Fifth page data has been saved successfully");
                        },
                        function (response) {
                            console.log(response);
                            alert("Error Try again");
                        });
            }
        }

});
