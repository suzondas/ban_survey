const app = new Vue({
    el: '#schoolSecondPage',
    data() {
        return {
            data:null,
            dataLoaded:false,
            banglaBorno:['ক','খ','গ','ঘ','ঙ','চ','ছ','জ','ঝ','ঞ']
        }
    },
    mounted() {
        var self=this
        axios.get('http://127.0.0.1:8000/schoolSecondPage/'+inst_id)
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
