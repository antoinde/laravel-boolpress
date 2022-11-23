<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div v-if="post" class="card">
                    <div class="card-header">
                        POST SHOW
                    </div>
                    <div class="card-body">
                        <div>Id: {{ post.id }}</div>
                        <div>Title: {{ post.title }}</div>
                        <button @click="deletePost()">Torna alla lista</button>
                    </div>
                    <br>
                </div>


                <div v-else v-for="post in posts" :key="post.id" class="card">
                    <div class="card-header">
                        POST
                    </div>
                    <div class="card-body">
                        <div>Id: {{ post.id }}</div>
                        <div>Title: <a @click="getShow(post.id)" href="#">{{ post.title }}</a> </div>
                    </div>
                    <br>
                </div>



            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'PostsComponent',
        data(){
            return {
                posts: [],
                post: ''
            }
        },
        mounted() {
            console.log('Component mounted.');

            // eseguiamo una richiesta api
            axios.get('/api/posts').then((response)=>{
                console.log('Richiesta API eseguita correttamente');
                console.log(response);
                if (response) {
                    this.posts = response.data;
                    console.log('Adesso hai a disposizione i POSTS');
                }
                else{
                    console.log('Errore, non hai i POSTS');
                }
            })
        },
        methods: {
            getShow(id){
                axios.get('/api/posts/' + id).then((response)=>{
                console.log('Richiesta API eseguita correttamente');
                console.log(response);
                if (response) {
                    this.post = response.data;
                    console.log('SINGOLO POST OTTENUTO');
                }
                else{
                    console.log('Errore, POST non ottenuto');
                }
            })
            },
            deletePost(){
                this.post='';
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>