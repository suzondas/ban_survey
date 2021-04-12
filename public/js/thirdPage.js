const app = new Vue({
    el: '#thirdPage',
    data() {
        return {
            data:null,
            dataLoaded:false,
            dataLoadingError:false
        }
    },
    mounted() {
        var self=this
        axios.get('http://127.0.0.1:8000/thirdPage/'+inst_id)
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
            
        }

});
