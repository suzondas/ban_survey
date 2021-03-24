const app = new Vue({
    el: '#firstPage',
    data: {
        inst:{}
    },
    mounted() {
        var self = this;
        axios.get('http://127.0.0.1:8000/firstPage/112211')
            .then(function (response) {
                self.inst = response.data;
            })
            .catch(function (error) {
                console.log(error)
            });
    }
});