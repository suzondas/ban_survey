const app = new Vue({
    el: '#secondPage',
    data() {
        return {
            data:null
        }
    },
    mounted() {
        var self=this
        axios.get('http://127.0.0.1:8000/secondPage/'+eiin)
            .then(function (response) {
                self.data=response.data
                console.log(self.data)
            })
            .catch(function (error) {
                console.log(error)
            });
    }
});
