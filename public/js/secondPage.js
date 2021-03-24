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
    },
    methods:
    {
        addBuildingDetails(){
            var self=this
            self.data.building_details.push(
                {
                    "id": '',
                    "institute_id": null,
                    "year": null,
                    "building_name": null,
                    "foundation_floor": null,
                    "build_floor": null,
                    "build_year": null,
                    "upper_increase_yn": null,
                    "created_at": null,
                    "updated_at": null
                }
            )
    }
    }

});
