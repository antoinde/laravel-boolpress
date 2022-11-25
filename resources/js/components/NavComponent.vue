<template>
    <div>
        <div class="header">
            <nav>
                 <!-- qui reindirizzo la pagina al to  -->
                <router-link to="/">Home</router-link>
                <router-link to="/about">About</router-link>
                <router-link to="/contacts">Contacts</router-link>
                <router-link to="/posts">Posts</router-link>
            </nav>
            <div>
                <a href="http://localhost:8000/admin">Accedi all'area riservata</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'NavComponent',

}
</script>

<style lang="scss" scoped>
.header {
    display: flex;
    justify-content: space-between;
    background-color: cadetblue;
    align-items: center;
}

nav {
    display: flex;
    justify-content: center;
    padding: 10px 0px;

}

a {
    background-color: black;
    color: #fff;
    border-radius: 15px;
    margin: 0 10px;
    padding: 10px 5px;
}
</style>