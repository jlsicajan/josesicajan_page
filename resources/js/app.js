/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';

window.Vue.use(VueRouter);

import CompaniesIndex from './components/companies/CompaniesIndex.vue';
import CompaniesCreate from './components/companies/CompaniesCreate.vue';
import CompaniesEdit from './components/companies/CompaniesEdit.vue';

import KnowledgeIndex from './components/knowledges/KnowledgesIndex.vue';
import KnowledgeEdit from './components/knowledges/KnowledgesEdit.vue';
import KnowledgeCreate from './components/knowledges/KnowledgesCreate.vue';

const routes = [
    {path: '/companies', component: CompaniesIndex, name: 'companiesIndex'},
    {path: '/companies/create', component: CompaniesCreate, name: 'createCompany'},
    {path: '/companies/edit/:id', component: CompaniesEdit, name: 'editCompany'},

    {path: '/knowledges', component: KnowledgeIndex, name: 'knowledgesIndex'},
    {path: '/knowledges/create', component: KnowledgeCreate, name: 'createKnowledge'},
    {path: '/knowledges/edit/:id', component: KnowledgeEdit, name: 'editKnowledge'},
];

const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue({router}).$mount('#app');