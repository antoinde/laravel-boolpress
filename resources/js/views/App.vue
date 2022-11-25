<template>
    <div>
        <!-- <PostsComponent/> -->
        <NavComponent />
        <router-view></router-view>
    </div>
</template>

<script>
// import PostsComponent from '../components/PostsComponent.vue';
import NavComponent from '../components/NavComponent.vue';

 export default {
    name: "App",
    components: { 
        NavComponent 
    }
}
</script>

<style lang="scss" scoped>

</style>