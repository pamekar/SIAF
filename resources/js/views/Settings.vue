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
                        <div class="col-md-8 col-sm-6">
                            <ApolloMutation :mutation="$mutations.updateUser" :variables="user">
                                <form class="mb-5 row" action="/user/settings" method="POST" slot-scope="{mutate, loading}" :disabled="loading" @submit.prevent="mutate()">
                                    <div class="form-group col-md-6">
                                        <label for="settings-first-name">First Name</label>
                                        <input type="text" class="form-control" v-model="user.first_name" id="settings-first-name" name="first_name" placeholder="Your First Name..">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="settings-last-name">Last Name</label>

                                        <input type="text" class="form-control" v-model="user.last_name" id="settings-last-name" name="last_name" placeholder="Your Last Name..">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="settings-about">About</label>

                                        <textarea class="form-control" v-model="user.about" id="settings-about" name="about" placeholder="Say something about yourself.."></textarea>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="settings-phone-no">Phone No</label>

                                        <input type="text" class="form-control" v-model="user.phone_no" id="settings-phone-no" name="phone_no" placeholder="Your Phone No..">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="settings-twitter">Twitter</label>

                                        <input type="text" class="form-control" v-model="user.twitter" id="settings-twitter" name="twitter" placeholder="Your Twitter Id..">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="settings-facebook">Facebook</label>

                                        <input type="text" class="form-control" v-model="user.facebook" id="settings-facebook" name="facebook" placeholder="Your Facebook Id..">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="settings-instagram">Instagram</label>

                                        <input type="text" class="form-control" v-model="user.instagram" id="settings-instagram" name="instagram" placeholder="Your Instagram Id..">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="settings-linkedin">Linkedin</label>

                                        <input type="text" class="form-control" v-model="user.linkedin" id="settings-linkedin" name="linkedin" placeholder="Your Linkedin Id..">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
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
                    <form class="row">
                        <div class="form-group col-md-6">
                            <label for="settings-email">Email</label>

                            <input type="email" class="form-control" v-model="user.email" id="settings-email" name="email" placeholder="Your Email.." disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="settings-username">Username</label>

                            <input type="text" class="form-control" v-model="user.name" id="settings-username" name="username" placeholder="Your Username..">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="settings-password">Password</label>

                            <input type="password" class="form-control" id="settings-password" name="password" placeholder="Your Password..">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="settings-password-new">New Password</label>

                            <input type="password" class="form-control" id="settings-password-new" name="password-new" placeholder="Your New Password..">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="settings-password-confirmation">Confirm Password</label>

                            <input type="password" class="form-control" id="settings-password-confirmation" name="password-confirmation" placeholder="Your Password Confirmation..">
                        </div>
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
    import {queries} from '../queries'
    import {mutations} from '../mutations'
    
    export default {

        data() {
            return {
                user: {
                    name:       "",
                    first_name: "",
                    last_name:  "",
                    email:      "",
                    phone_no:   "",
                    linkedin:   "",
                    instagram:  "",
                    facebook:   "",
                    twitter:    "",
                    avatar:     "",
                    about:      ""
                },
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
            /*updateUser() {
                delete this.user.__typename;
                const user = this.user;
                // We clear it early to give the UI a snappy feel
                this.user = {};
                // Call to the graphql mutation
                this.$apollo.mutate({
                    // Query
                    mutation:           mutations.updateUser,
                    // Parameters
                    variables:          this.user,
                    // Update the cache with the result
                    // The query will be updated with the optimistic response
                    // and then with the real result of the mutation
                    update:             (store, {data: {updateUser}}) => {
                        // Read the data from our cache for this query.
                        const data = store.readQuery({query: mutations.updateUser})
                        // Add our tag from the mutation to the end
                        data.tags.push([])
                        // Write our data back to the cache.
                        store.writeQuery({query: mutations.updateUser, data})
                    },
                    // Optimistic UI
                    // Will be treated as a 'fake' result as soon as the request is made
                    // so that the UI can react quickly and the user be happy
                    optimisticResponse: {
                        __typename: 'Mutation',
                        updateUser: {
                            __typename: 'user',
                            id:         -1,
                            label:      user,
                        },
                    },
                }).then((data) => {
                    // Result
                    console.log(data)
                }).catch((error) => {
                    // Error
                    console.error(error)
                    // We restore the initial user input
                    this.user = user
                })
            },*/
        },
        mounted() {

        },
        components: {},
        computed:   {}
    }
</script>
