import Vue from 'vue';
import VueRouter from 'vue-router';

import PostsComponent from './components/PostsComponent';
import HomeComponent from './components/HomeComponent';
import AboutComponent from './components/AboutComponent';
import ContactsComponent from './components/ContactsComponent';
import NotFoundComponent from './components/NotFoundComponent';


Vue.use(VueRouter);
const router = new VueRouter({
    routes: [
        //qui si crea il vero collegamento all'indirizzo localhost:8000/guest#/
        //qui si crea il vero collegamento all'indirizzo localhost:8000/guest#/posts
        //qui si crea il vero collegamento all'indirizzo localhost:8000/guest#/about
        //qui si crea il vero collegamento all'indirizzo localhost:8000/guest#/contacts
        { path: '/', name: 'home', component: HomeComponent },
        { path: '/posts', name: 'posts', component: PostsComponent },
        { path: '/about', name: 'about', component: AboutComponent },
        { path: '/contacts', name: 'contacts', component: ContactsComponent },
        { path: '/*', name: 'NotFound', component: NotFoundComponent },
    ]
});

export default router;