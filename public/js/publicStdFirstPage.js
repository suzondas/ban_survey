const app = new Vue({
    el: '#publicStdFirstPage',
    data() {
        return {
            data: [],
            testArray:[1,3,4,4,4],
            dataLoaded: true,
            dataLoadingError: true
        }
    },
    mounted() {

    },
    methods: {
        submitData:function () {

        },
        addTestArray:function () {
            this.testArray.push(1);
        }
    }
});


