const app = new Vue({
    el: '#privateComFirstPage',
    data() {
        return {
            data: [],
            dataLoaded: true,
            dataLoadingError: true
        }
    },
    mounted() {
        var self = this;
        self.data ={};
        self.data.institutes.eiin =111;
        self.data.institutes = {};

    },
    methods: {

    }
});


