<template>
    <main id="main-container">

        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill h3 my-2">
                        Complaints
                        <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">List of complaints</small>
                    </h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item">
                                <router-link class="link-fx" :to="{name:'dashboard'}">Dashboard</router-link>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                Complaints
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="block block-themed">
                <div class="block-header">
                    <h3 class="block-title">Complaints</h3>
                    <div class="block-options">
                        <button type="submit" class="btn-block-option">
                            Make Complaint
                        </button>
                    </div>
                </div>
                <div class="block-content pb-3">
                    <div class="list-group">
                        <div class="list-group-item" v-for="complaint in complaints.data">
                            <div class="media">
                                <div class="mr-3">
                                    <h1 :class="'text-center text-gray-lighter p-3 font-w400 text-uppercase img-rounded ' + backgroundColor()" style="border-radius: 2rem">{{complaint.title.charAt(0)}}</h1>
                                </div>
                                <div class="media-body">
                                    <h4 class="h5 mt-0 mb-2">
                                        <router-link :to="{name:'complaints-view',params:{id: complaint.id}}">{{complaint.title}}</router-link>
                                    </h4>
                                    <p class="mb-0">
                                        <small class="text-muted">{{complaint.updated_on}} -</small>
                                        {{complaint.summary}} ...
                                    </p>
                                    <ul class="list-inline list-inline-horizontal d-md-block font-size-sm text-muted mt-2 mb-0">
                                        <li class="list-inline-item list-group-item px-1 p-0 mr-0 d-inline-block">Type: {{complaint.type}}</li>
                                        <li class="list-inline-item list-group-item px-1 p-0 mr-0 d-inline-block">State: {{complaint.state}}</li>
                                        <li class="list-inline-item list-group-item px-1 p-0 mr-0 d-inline-block">Status: <span :class="`badge badge-pill badge-`+badgeColor(complaint.status)">{{complaint.status}}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
    import {queries} from '../queries'
    import NProgress from '../uiux/js/nprogress.js'

    export default {
        apollo:     {
            complaints: queries.complaints
        },
        data() {
            return {
                complaints: [],
            };
        },
        created() {

        },
        methods:    {
            backgroundColor() {
                const colors = ['default', 'amethyst', 'city', 'flat', 'modern', 'smooth', 'primary'];
                let color = colors[Math.floor(Math.random() * colors.length)];
                return `bg-${color}-light`;
            },
            badgeColor(status){
                let color="primary";

                switch(status){
                    case 'pending':
                        color="info";
                        break;
                    case 'resolved':
                        color="success";
                        break;
                    case 'closed':
                        color="warning";
                        break;
                }

                return color;
            }
        },
        mounted() {

        },
        components: {},
        computed:   {},
        updated:    function () {
            NProgress.done();
        }
    }
</script>
