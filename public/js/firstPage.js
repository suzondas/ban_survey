const app = new Vue({
    el: '#firstPage',
    data: {},
    mounted() {
        axios.get('http://127.0.0.1/firstPage/112211')
            .then(function (response) {
console.log(response.data)
            })
            .catch(function (error) {
                console.log(error)
            });
    }
});
