const app = new Vue({
    el: '#firstPage',
    data() {
        return {
            data:null
        }
    },
    mounted() {
        var self=this;
        axios.get('http://127.0.0.1:80/firstPage/'+eiin)
            .then(function (response) {
                self.data=response.data
            })
            .catch(function (error) {
                console.log(error)
            });
    }

});
