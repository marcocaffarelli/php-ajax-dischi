import Vue from 'vue';

let app = new Vue({
    el: "#app",
    data:{
        arrayDischi: [],
        selected: "Tutti",
    },
    mounted(){
        axios.get("http://localhost/php-ajax-dischi/bonus/parti_php/database.php")
        .then(response =>{
            //verifico lo stato della risposta
            //console.log(response);
            //console.log(response.data);
            const dischi = response.data;
            //console.log(dischi);
            dischi.forEach(element => {
                //console.log(element);
                this.arrayDischi.push(element);  
            });
            
        })
        .catch(function (error) {
            //console.log(error);
        }); 
        
    
    }
});