import Vue from 'vue';

let app = new Vue({
    el: "#app",
    data:{
        messaggio: "Vue con laravelmix",
    },
    mounted(){
        axios.get("http://localhost/php-ajax-dischi/milestone-2/parti_php/database.php")
        .then(response =>{
            //verifico lo stato della risposta
            //console.log(response);
            console.log(response.data);
        })
        .catch(function (error) {
            //console.log(error);
        }); 
        
    
    }
});