const app = new Vue({
    el: '#fourthPage',
    data() {
        return {
            data:null,
            dataLoaded:false,
            dataLoadingError:false
        }
    },
    mounted() {
        var self=this
        axios.get('http://127.0.0.1:8000/fourthPage/'+inst_id)
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
                dataToSend.summary_infos = this.data.summary_infos;
                dataToSend.summary_audit_infos = this.data.summary_audit_infos;
                dataToSend.community_services = this.data.community_services;
               // console.log(dataToSend);
                axios.post('http://127.0.0.1:8000/fourthPage/submitData', dataToSend)
                    .then(
                        function (response) {
                            console.log(response);
                            alert("Fourth page data has been saved successfully");
                        },
                        function (response) {
                            console.log(response);
                            alert("Error Try again");
                        });
            }
        }

});
