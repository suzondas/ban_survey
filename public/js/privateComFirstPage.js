const app = new Vue({
    el: '#privateComFirstPage',
    data() {
        return {
            data: null,
            dataLoaded: false,
            dataLoadingError: false
        }
    },
    mounted() {
        var self = this;
        axios.get('http://127.0.0.1:8000/privateComFirstPage/' + inst_id)
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
        submitData: function () {
            var dataToSend = {};
            dataToSend.instId = inst_id;
            dataToSend.institutes=this.data.institutes;
            dataToSend.foreign_univ_institutes=this.data.foreign_univ_institutes;
            console.log(dataToSend);
            // return;
            axios.post('http://127.0.0.1:8000/privateComFirstPage/submitData/', dataToSend)
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


