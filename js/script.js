const { createApp } = Vue;

const app = createApp({
    data() {
        return {
            message: 'Hello Vue',
            aData:[],
            toDo: {
                text:'',
                done: ''
            }
        }
    },
    methods: {
        getData(){
            axios.get('server.php').then((res)=>{
                console.log(res.data);
                 const mdata = JSON.parse(res.data);
                this.aData = mdata;
            });
        },
        saveData(){
            console.log(this.toDo);
            axios.post('server.php', this.toDo,{
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response)=>{
                console.log(response.data);
            })
            this.getData()
        },
    },
    mounted() {
        this.getData()
    },
}).mount('#app')