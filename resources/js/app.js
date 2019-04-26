import Vue from 'vue';
import VueRouter from 'vue-router';
import VueHeadful from 'vue-headful';
import './uiux/css/nprogress.css';
import App from './App.vue';
import router from './routes.js';
import functions from './functions.js';
import store from './store/index.js';
import vUploader from 'v-uploader';
import 'viewerjs/dist/viewer.css';
import Viewer from 'v-viewer';

Vue.use(Viewer);

// v-uploader plugin global config
const uploaderConfig = {
    uploadCustomHeaders: {
        Authorization: 'Bearer ' + functions.readCookie('jwt_token')
    },
    // file uploader service url
    uploadFileUrl:       '/api/instructor/spatie/media/upload',
    // file delete service url
    deleteFileUrl:       '/api/instructor/spatie/media/remove',
    // set the way to show upload message(upload fail message)
    showMessage:         (vue, message) => {
        //using v-dialogs to show message
        vue.$vDialog.alert(message, null, {messageType: 'error'});
    }
};


// install plugin with options
Vue.use(vUploader, uploaderConfig);

Vue.use(VueRouter);

functions.setupAxios();

Vue.component('vue-headful', VueHeadful);

// drg >> set global variables
Vue.prototype.public_ = window.public_;

let app = new Vue({
    el:     '#app',
    render: h => h(App),
    router,
    store:  store
});