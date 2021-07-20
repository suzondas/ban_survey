/*Registering Modal for Add more for showAddForeignUnivModal*/

const app = new Vue({
    el: '#publicComFirstPage',
    components: {
        "modal": {
            template: "#modal-showAddForeignUnivModal",
        }
    },
    data() {
        return {
            data: null,
            dataLoaded: false,
            dataLoadingError: false,
            showAddForeignUnivModal: false,
        }
    },
    mounted() {
        var self = this;
        axios.get('http://127.0.0.1:8000/publicComFirstPage/' + inst_id)
            .then(function (response) {
                self.data = response.data;
                self.dataLoaded = true;
            })
            .catch(function (error) {
                console.log(error)
                self.dataLoadingError = true;
            });
    },
    methods: {

        test: function (v) {
            console.log(v);
        },
        submitData: function () {
            var dataToSend = {};
            dataToSend.instId = inst_id;
            dataToSend.institutes = this.data.institutes;
            dataToSend.foreign_univ_institutes = this.data.foreign_univ_institutes;
            console.log(dataToSend);
            // return;
            axios.post('http://127.0.0.1:8000/publicComFirstPage/submitData/', dataToSend)
                .then(
                    function (response) {
                        console.log(response);
                        alert("First page data has been saved successfully");
                    },
                    function (response) {
                        console.log(response);
                        alert("Error Try again");
                    });
        },
        addMoreForeignUniv: function () {
            var self = this;
            var toSend = {};
            toSend.institute_id = inst_id;
            toSend.univ_name = $("#univ_name").val();
            toSend.country_name = $("#country_name").val();
            axios.post('http://127.0.0.1:8000/publicComFirstPage/addForeignUnivInst/', toSend)
                .then(
                    function (response) {
                        self.data.foreign_univ_institutes.push(response.data);
                        $("#univ_name").val("");
                        $("#country_name").val("");
                        self.showAddForeignUnivModal = false;
                        alert("Item Added successfully");
                    },
                    function (response) {
                        alert("Error Try again");
                    });

        },
        deleteForeignUniv: function (id, index) {
            /*console.log(id)
            console.log(index);return;*/
            var self = this;
            axios.get('http://127.0.0.1:8000/publicComFirstPage/removeForeignUnivInst/' + id)
                .then(
                    function (response) {
                        self.data.foreign_univ_institutes.splice(index, 1)
                        alert("Item removed successfully");
                    },
                    function (response) {
                        alert("Error Try again");
                    });
        }
    }
});


