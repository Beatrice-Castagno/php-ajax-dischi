let app = new Vue({
    el: '#root',
    data:{
        dischi: []
    },
    methods: {
        getDischi(){

            axios.get("http://localhost/php-ajax-dischi/api.php")
            .then( (response)=>{
                this.dischi = response.data;
            });        
        },
    },
    created(){
        this.getDischi();
    },
});