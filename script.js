console.log('JS OK');

const app = new Vue ({
    el : '#app',
    data(){
        return {
            containerMusic: [],
        }
    },
    mounted(){
        axios
        .get('disk.php')
        .then((result)=>{
            console.log(result)
        })
    }
})