const app = new Vue({
    el: '#SnCSecondPage',
    data() {
        return {
            data:null,
        }
    },
    mounted() {
        var self=this
        axios.get('http://127.0.0.1:8000/SnCSecondPage/'+inst_id)
            .then(function (response) {
                self.data=response.data
                self.dataLoaded=true
                console.log(self.data)
            })
            .catch(function (error) {
                console.log(error)
            });
    },
});
