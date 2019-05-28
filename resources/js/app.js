import Vue from 'vue';
import VueRouter from 'vue-router';
import VueHeadful from 'vue-headful';
import './uiux/css/nprogress.css';
import NProgress from './uiux/js/nprogress.js'
import App from './App.vue';
import router from './routes.js';
import functions from './functions.js';
import store from './store/index.js';
import vUploader from 'v-uploader';
import 'viewerjs/dist/viewer.css';
import Viewer from 'v-viewer';
import ApolloClient from "apollo-boost"
import VueApollo from "vue-apollo"
import {InMemoryCache} from 'apollo-cache-inmemory'

Vue.use(Viewer);

// v-uploader plugin global config
const uploaderConfig = {
    // file uploader service url
    uploadFileUrl: '/api/media/upload',
    // file delete service url
    deleteFileUrl: '/api/media/remove',
    // set the way to show upload message(upload fail message)
    showMessage:   (vue, message) => {
        //using v-dialogs to show message
        One.helpers('notify', {type: 'info', icon: '', message: message});
    },
    language:      "en"
};


// install plugin with options
Vue.use(vUploader, uploaderConfig);

Vue.use(VueRouter);

functions.setupAxios();

Vue.component('vue-headful', VueHeadful);

// drg >> set global variables
Vue.prototype.public_ = window.public_;

// Cache implementation
const cache = new InMemoryCache();

const apolloProvider = new VueApollo({
    defaultClient: new ApolloClient({
        uri: "/gql",
        request: operation => {
            NProgress.start();
        }
    })
});

Vue.use(VueApollo);

let app = new Vue({
    el:     '#app',
    render: h => h(App),
    router,
    store:  store,
    apolloProvider
});