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
        { path: '/', name: 'home', component: HomeComponent },
        { path: '/posts', name: 'posts', component: PostsComponent },
        { path: '/about', name: 'about', component: AboutComponent },
        { path: '/contacts', name: 'contacts', component: ContactsComponent },
        { path: '/*', name: 'NotFound', component: NotFoundComponent },
    ]
});

export default router;