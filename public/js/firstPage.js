const app = new Vue({
    el: '#firstPage',
    data: {},
    mounted() {
        axios.get('https://jsonplaceholder.typicode.com/todos/2')
            .then(function (response) {
                let institute = response.data.institute;
            })
            .catch(function (error) {
                console.log(error)
            });
    }
});