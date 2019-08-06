<template>
    <main id="main-container">
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill h3 my-2">
                        Complaints
                        <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">Report an Issue</small>
                    </h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item">
                                <router-link class="link-fx" :to="{name:'dashboard'}">Dashboard</router-link>
                            </li>
                            <li class="breadcrumb-item">
                                <router-link class="link-fx" :to="{name:'complaints'}">Complaints</router-link>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                Report an Issue
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="block block-themed">
                <div class="block-header">
                    <h3 class="block-title">Report an Issue</h3>
                    <div class="block-options">
                        <button type="submit" form="complaint-form" class="btn-block-option">
                            Submit
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <ApolloMutation :mutation="$mutations.createComplaint" :variables="complaint" @done="notifyStatus('success','Your details have been updated successfully')" @error="notifyStatus('danger','Oops! An error occurred')">
                        <template slot-scope="{mutate, loading, error, gqlError}" :disabled="loading">
                            <form id="complaint-form" class="mb-5 row" action="javascript:void(0)" method="POST" @submit.prevent="mutate()">
                                <div class="form-group col-md-12">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control js-maxlength" data-threshold="15" :class="{'is-invalid':error}" v-model="complaint.title" id="title" name="title" placeholder="Complaint title.." maxlength="45" required>
                                    <div v-if="error" class="invalid-feedback">
                                        <div v-for="error in gqlError.extensions.validation.title">{{error}}</div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="description">Description</label>
                                    <ckeditor id="description" :editor="editor" v-model="complaint.description" required></ckeditor>
                                    <div v-if="error" class="invalid-feedback">
                                        <div v-for="error in gqlError.extensions.validation.description">{{error}}</div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="state">Select</label>
                                    <select class="form-control text-capitalize" id="state" name="state" v-model="complaint.state" required>
                                        <option disabled selected>Select state</option>
                                        <option :value="state" v-for="state in states_">{{state}}</option>
                                    </select>
                                    <div v-if="error" class="invalid-feedback">
                                        <div v-for="error in gqlError.extensions.validation.last_name">{{error}}</div>
                                    </div>
                                </div>
                                <div class="form-group col-md-8">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control js-maxlength" data-threshold="100" :class="{'is-invalid':error}" v-model="complaint.location" id="location" name="location" placeholder="Location of Occurrence.." maxlength="140" required>
                                    <div v-if="error" class="invalid-feedback">
                                        <div v-for="error in gqlError.extensions.validation.location">{{error}}</div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="occurred-at">Time of Occurrence</label>
                                    <input type="datetime-local" class="form-control" :class="{'is-invalid':error}" v-model="complaint.occurred_at" id="occurred-at" name="occurred_at" placeholder="Time of Occurrence.." required>
                                    <div v-if="error" class="invalid-feedback">
                                        <div v-for="error in gqlError.extensions.validation.occurred_at">{{error}}</div>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="anonymous">Post as Anonymous</label>
                                    <div class="custom-control custom-switch mb-1">
                                        <input class="custom-control-input" id="anonymous" name="anonymous" type="checkbox" v-model="complaint.anonymous">
                                        <label class="custom-control-label" for="anonymous"><span v-if="complaint.anonymous">Yes</span><span v-else>No</span></label>
                                    </div>
                                    <div v-if="error" class="invalid-feedback">
                                        <div v-for="error in gqlError.extensions.validation.tags">{{error}}</div>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="public">Publicly Visible</label>
                                    <div class="custom-control custom-switch mb-1">
                                        <input class="custom-control-input" id="public" name="public" type="checkbox" v-model="complaint.public">
                                        <label class="custom-control-label" for="public"><span v-if="complaint.public">Yes</span><span v-else>No</span></label>
                                    </div>
                                    <div v-if="error" class="invalid-feedback">
                                        <div v-for="error in gqlError.extensions.validation.tags">{{error}}</div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="tags">Tags</label>
                                    <input-tags id="tags" placeholder="Add a tag" v-model="tags" validate="text" :limit="3" @update:tags="setTags"></input-tags>
                                    <div v-if="error" class="invalid-feedback">
                                        <div v-for="error in gqlError.extensions.validation.tags">{{error}}</div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </template>
                    </ApolloMutation>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
    import {mutations} from '../mutations'
    import NProgress from '../uiux/js/nprogress.js'
    import CKEditor from '@ckeditor/ckeditor5-vue';
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
    import InputTag from 'vue-input-tag';
    import Timepicker from 'vue2-timepicker';

    export default {
        data() {
            return {
                complaint: {
                    title:       '',
                    description: '',
                    type:        '',
                    state:       '',
                    location:    '',
                    tags:        '',
                    status:      '',
                    anonymous:   '',
                    public:      ''
                },
                editor:    ClassicEditor,
                tags:      []
            };
        },
        beforeCreate() {
            this.$mutations = mutations;
        },
        created() {
            NProgress.done();
        },
        methods:    {
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
            setTags() {
                this.complaint.tags = this.tags.join(';');
            }
        },
        mounted() {

        },
        components: {
            'ckeditor':   CKEditor.component,
            'input-tags': InputTag,
            'time-picker': Timepicker,
        },
        computed:   {},
        updated:    function () {
            NProgress.done();
        },
        watch:      {
            tags: function (val) {
                this.complaint.tags = this.tags.join(';');
            }
        }
    }
</script>
