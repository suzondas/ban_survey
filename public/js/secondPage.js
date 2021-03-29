const app = new Vue({
    el: '#secondPage',
    data() {
        return {
            data:null,
            dataLoaded:false,
            dataLoadingError:false
        }
    },
    mounted() {
        var self=this
        axios.get('http://127.0.0.1:8000/secondPage/'+inst_id)
            .then(function (response) {
                self.data=response.data
                self.dataLoaded = true;

            })
            .catch(function (error) {
                console.log(error)
                self.dataLoadingError = true;
            });
    },
    methods:
    {
        addBuildingDetails(){
            this.data.building_details.push(
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
