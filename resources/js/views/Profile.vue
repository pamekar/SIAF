<template>
    <main id="main-container">
        <div class="bg-image" :style="'background-image: url('+public_+'/jpg/photo8%402x.jpg);'">
            <div class="bg-black-50">
                <div class="content content-full text-center">
                    <div class="my-3">
                        <img class="img-avatar img-avatar-thumb" :src="user.avatar" alt="">
                    </div>
                    <h1 class="h2 text-white mb-0">{{user.full_name}}</h1>
                    <span class="text-white-75">{{user.about}}</span>
                </div>
            </div>
        </div>
        <div class="bg-white border-bottom">
            <div class="content content-boxed">
                <div class="row items-push text-center">
                    <div class="col-6 col-md-3">
                        <div class="font-size-sm font-w600 text-muted text-uppercase">Twitter</div>
                        <a class="link-fx font-size-h3" :href="'http://twitter.com/'+user.twitter" target="_blank">@{{user.twitter}}</a>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="font-size-sm font-w600 text-muted text-uppercase">Facebook</div>
                        <a class="link-fx font-size-h3" :href="'http://facebook.com/'+user.facebook" target="_blank">@{{user.facebook}}</a>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="font-size-sm font-w600 text-muted text-uppercase">Instagram</div>
                        <a class="link-fx font-size-h3" :href="'http://instagram.com/'+user.instagram" target="_blank">@{{user.instagram}}</a>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="font-size-sm font-w600 text-muted text-uppercase mb-2">Linkedin</div>
                        <a class="link-fx font-size-h3" :href="'http://linkedin.com/in'+user.linkedin" target="_blank">@{{user.linkedin}}</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
    import {queries} from '../queries'
    import {mutations} from '../mutations'
    import NProgress from '../uiux/js/nprogress.js'

    export default {
        
        data() {
            return {
                user:         {
                    name:       null,
                    first_name: null,
                    last_name:  null,
                    email:      null,
                    phone_no:   null,
                    linkedin:   null,
                    instagram:  null,
                    facebook:   null,
                    twitter:    null,
                    avatar:     null,
                    about:      null
                },
                avatar:       null,
                editEmail:    false,
                editUsername: false,
                password:     {
                    current_password:          "",
                    new_password:              "",
                    new_password_confirmation: ""
                }
            };
        },
        apollo:     {
            user: queries.profile
        },
        created() {
        },
        methods:    {
            alterEdit:    function (type) {
                switch (type) {
                    case 'username':
                        this.editUsername = !this.editUsername;
                        break;
                    case 'email':
                        this.editEmail = !this.editEmail;
                        break;
                }
            },
            createImage(file) {
                let reader = new FileReader();

                reader.onload = (e) => {
                    this.avatar = e.target.result;
                };
                reader.readAsDataURL(file);
            },
            notifyStatus: function (type, message) {
                let icon = 'fa fa-check mr-1';
                switch (status) {
                    case 'success':
                        icon = 'fa fa-check mr-1';
                        break;
                    case 'danger':
                        icon = 'fa fa-times mr-1';
                        break;
                    case 'warning':
                        icon = 'fa fa-exclamation mr-1';
                        break;
                }
                One.helpers('notify', {type: type, icon: icon, message: message})
            },
            userImageChanged(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.user.avatar = files[0];
                this.createImage(files[0]);
            },
        },
        mounted() {
            
        },
        components: {},
        computed:   {},
        updated: function(){
            NProgress.done();
        }
    }
</script>
