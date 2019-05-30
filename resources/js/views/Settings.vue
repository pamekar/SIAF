<template>
    <main id="main-container">
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill h3 my-2">
                        Settings
                        <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">Your settings</small>
                    </h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item">
                                <router-link class="link-fx" :to="{name:'dashboard'}">Dashboard</router-link>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                Settings
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="block block-themed">
                <div class="block-header">
                    <h3 class="block-title">Profile Settings</h3>
                    <div class="block-options">
                        <button type="submit" class="btn-block-option">
                            Update
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="align-items-center" v-viewer="{movable: false}">
                                <div class="text-center mb-3">
                                    <img :src="avatar" style="cursor: pointer; width:80%;" alt="" class="rounded" v-if="avatar">
                                    <img :src="user.avatar" style="cursor: pointer; width:80%;" alt="" class="rounded" v-else>
                                </div>
                                <v-uploader :preview="false" uploadFileObjName="avatar" file-exts-type="jpeg,jpg,gif,png" :before-upload="beginUpload" @done="fileUploaded" button-text="Change Image" title="Change Image"></v-uploader>
                            </div>
                        </div>

                        <div class="col-sm-8">
                            <ApolloMutation :mutation="$mutations.updateUser" :variables="user" @done="notifyStatus('success','Your details have been updated successfully')" @error="notifyStatus('danger','Oops! An error occurred')">
                                <template slot-scope="{mutate, loading, error, gqlError}" :disabled="loading">
                                    <form class="mb-5 row" action="/user/settings" method="POST" @submit.prevent="mutate()">
                                        <div class="form-group col-md-6">
                                            <label for="settings-first-name">First Name</label>
                                            <input type="text" class="form-control js-maxlength" data-threshold="15" :class="{'is-invalid':error}" v-model="user.first_name" id="settings-first-name" name="first_name" placeholder="Your First Name.." maxlength="25">
                                            <div v-if="error" class="invalid-feedback">
                                                <div v-for="error in gqlError.extensions.validation.first_name">{{error}}</div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="settings-last-name">Last Name</label>

                                            <input type="text" class="form-control js-maxlength" data-threshold="15" :class="{'is-invalid':error}" v-model="user.last_name" id="settings-last-name" name="last_name" placeholder="Your Last Name.." maxlength="25">
                                            <div v-if="error" class="invalid-feedback">
                                                <div v-for="error in gqlError.extensions.validation.last_name">{{error}}</div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="settings-about">About</label>

                                            <textarea class="form-control js-maxlength" data-threshold="100" :class="{'is-invalid':error}" v-model="user.about" id="settings-about" name="about" placeholder="Say something about yourself.." maxlength="140"></textarea>
                                            <div v-if="error" class="invalid-feedback">
                                                <div v-for="error in gqlError.extensions.validation.about">{{error}}</div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="settings-phone-no">Phone No</label>

                                            <input type="text" class="form-control js-maxlength" data-threshold="10" :class="{'is-invalid':error}" v-model="user.phone_no" id="settings-phone-no" name="phone_no" placeholder="Your Phone No.." maxlength="15">
                                            <div v-if="error" class="invalid-feedback">
                                                <div v-for="error in gqlError.extensions.validation.phone_no">{{error}}</div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="settings-twitter">Twitter</label>
                                            <input type="text" class="form-control js-maxlength" data-threshold="10" :class="{'is-invalid':error}" v-model="user.twitter" id="settings-twitter" name="twitter" placeholder="Your Twitter Id.." maxlength="15">
                                            <div v-if="error" class="invalid-feedback">
                                                <div v-for="error in gqlError.extensions.validation.twitter">{{error}}</div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="settings-facebook">Facebook</label>
                                            <input type="text" class="form-control js-maxlength" data-threshold="10" :class="{'is-invalid':error}" v-model="user.facebook" id="settings-facebook" name="facebook" placeholder="Your Facebook Id.." maxlength="15">
                                            <div v-if="error" class="invalid-feedback">
                                                <div v-for="error in gqlError.extensions.validation.facebook">{{error}}</div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="settings-instagram">Instagram</label>
                                            <input type="text" class="form-control js-maxlength" data-threshold="10" :class="{'is-invalid':error}" v-model="user.instagram" id="settings-instagram" name="instagram" placeholder="Your Instagram Id.." maxlength="15">
                                            <div v-if="error" class="invalid-feedback">
                                                <div v-for="error in gqlError.extensions.validation.instagram">{{error}}</div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="settings-linkedin">Linkedin</label>
                                            <input type="text" class="form-control js-maxlength" data-threshold="10" :class="{'is-invalid':error}" v-model="user.linkedin" id="settings-linkedin" name="linkedin" placeholder="Your Linkedin Id.." maxlength="15">
                                            <div v-if="error" class="invalid-feedback">
                                                <div v-for="error in gqlError.extensions.validation.linkedin">{{error}}</div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </template>
                            </ApolloMutation>
                        </div>
                    </div>
                </div>
            </div>

            <div class="block block-themed">
                <div class="block-header bg-city">
                    <h3 class="block-title">Account Settings</h3>
                    <div class="block-options">
                        <button type="submit" class="btn-block-option">
                            Update
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row">
                        <div class="form-group col-md-6" v-if="editEmail">
                            <ApolloMutation :mutation="$mutations.updateEmail" :variables="{email:user.email}" @done="notifyStatus('success','Your email has been updated successfully')" @error="notifyStatus('danger','Oops! An error occurred')">
                                <template slot-scope="{ mutate, loading, error, gqlError }">
                                    <form action="/user/change/email" @submit.prevent="mutate()" :disabled="loading">

                                        <div class="form-group">
                                            <label for="settings-email">Email</label>
                                            <div class="input-group">

                                                <input type="email" class="form-control" :class="{'is-invalid':error}" v-model="user.email" id="settings-email" name="email" placeholder="Your Email..">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-outline-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Update Email"><i class="fa fa-check"></i></button>
                                                    <button type="button" class="btn btn-outline-warning" @click="alterEdit('email')" data-toggle="tooltip" data-placement="top" title="" data-original-title="Changed your mind?"><i class="fa fa-tint-slash"></i></button>
                                                </div>
                                                <div v-if="error" class="invalid-feedback">
                                                    <div v-for="error in gqlError.extensions.validation.email">{{error}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </template>
                            </ApolloMutation>
                        </div>
                        <div class="form-group col-md-6" v-else>
                            <label for="settings-email">Email</label>
                            <div class="input-group">
                                <input type="email" class="form-control" v-model="user.email" id="settings-email" name="email" placeholder="Your Email.." disabled>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-outline-secondary" @click="alterEdit('email')" data-toggle="tooltip" data-placement="top" title="" data-original-title="Change your Email."><i class="fa fa-edit"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6" v-if="editUsername">
                            <ApolloMutation :mutation="$mutations.updateName" :variables="{name:user.name}" @done="notifyStatus('success','Your username has been updated successfully')" @error="notifyStatus('danger','Oops! An error occurred')">
                                <template slot-scope="{ mutate, loading, error, gqlError }">
                                    <form action="/user/change/email" @submit.prevent="mutate()" :disabled="loading">
                                        <label for="settings-username">Username</label>
                                        <div class="input-group">

                                            <input type="text" class="form-control js-maxlength" data-threshold="10" :class="{'is-invalid':error}" v-model="user.name" id="settings-username" name="username" placeholder="Your Username.." maxlength="15">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-outline-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Update username..."><i class="fa fa-check"></i></button>
                                                <button type="button" class="btn btn-outline-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Changed your mind?" @click="alterEdit('username')"><i class="fa fa-tint-slash"></i></button>
                                            </div>

                                            <div v-if="error" class="invalid-feedback">
                                                <div v-for="error in gqlError.extensions.validation.name">{{error}}</div>
                                            </div>
                                        </div>
                                    </form>
                                </template>
                            </ApolloMutation>
                        </div>
                        <div class="form-group col-md-6" v-else>
                            <label for="settings-username">Username</label>
                            <div class="input-group">
                                <input type="text" class="form-control" v-model="user.name" id="settings-username" name="username" placeholder="Your Username.." disabled>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-outline-secondary" @click="alterEdit('username')" data-toggle="tooltip" data-placement="top" title="" data-original-title="Change your Username."><i class="fa fa-edit"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <ApolloMutation :mutation="$mutations.updatePassword" :variables="{current_password:password.current_password, new_password:password.new_password, new_password_confirmation:password.new_password_confirmation}" @done="notifyStatus('success','Your password has been updated successfully')" @error="notifyStatus('danger','Oops! An error occurred')">
                                <template slot-scope="{ mutate, loading, error, gqlError }">
                                    <form class="row" action="/user/change/password" @submit.prevent="mutate()" :disabled="loading">
                                        <div class="form-group col-md-4">
                                            <label for="settings-password">Current Password</label>

                                            <input type="password" class="form-control" :class="{'is-invalid':error}" id="settings-password" name="password" placeholder="Your Password.." v-model="password.current_password">
                                            <div v-if="error" class="invalid-feedback">
                                                <div v-for="error in gqlError.extensions.validation.current_password">{{error}}</div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="settings-password-new">New Password</label>
                                            <input type="password" class="form-control" :class="{'is-invalid':error}" id="settings-password-new" name="password-new" placeholder="Your New Password.." v-model="password.new_password">
                                            <div v-if="error" class="invalid-feedback">
                                                <div v-for="error in gqlError.extensions.validation.new_password">{{error}}</div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="settings-password-confirmation">Confirm Password</label>
                                            <input type="password" class="form-control" :class="{'is-invalid':error}" id="settings-password-confirmation" name="password-confirmation" placeholder="Your Password Confirmation.." v-model="password.new_password_confirmation">
                                            <div v-if="error" class="invalid-feedback">
                                                <div v-for="error in gqlError.extensions.validation.new_password_confirmation">{{error}}</div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </template>
                            </ApolloMutation>
                        </div>
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
            user: queries.settings
        },
        beforeCreate() {
            this.$mutations = mutations;
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
            beginUpload: function(){
                this.user.avatar = null;
                NProgress.done('start')
            },
            createImage(file) {
                let reader = new FileReader();

                reader.onload = (e) => {
                    this.avatar = e.target.result;
                };
                reader.readAsDataURL(file);
            },
            fileUploaded: function (files) {
                this.avatar = files[0].url;
                this.user.avatar = files[0].path;
                NProgress.done()
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
                One.helpers('notify', {type: type, icon: icon, message: message});
                NProgress.done();
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
