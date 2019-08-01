<template>
    <main id="main-container">
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill h3 my-2">
                        Complaints
                        <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">View Complaint</small>
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
                                {{complaint.title_summary}}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="block block-themed">
                <div class="block-header">
                    <h3 class="block-title">{{complaint.title}}</h3>
                    <div class="block-options">
                        <button type="submit" class="btn-block-option">
                            Make Complaint
                        </button>
                    </div>
                </div>
                <div class="block-content pb-3">
                    <table class="table table-bordered">
                        <tbody>
                        <tr class="d-sm-none font-size-sm table-active">
                            <td>
                                <h3 class="text-muted">Details</h3>
                                <ul class="list-group d-md-block text-muted mt-2 mb-0">
                                    <li class="list-group-item">Created By: {{complaint.user.full_name}}</li>
                                    <li class="list-group-item">Type: {{complaint.type}}</li>
                                    <li class="list-group-item">State: {{complaint.state}}</li>
                                    <li class="list-group-item">Location: {{complaint.location}}</li>
                                    <li class="list-group-item">Tags: {{complaint.tags}}</li>
                                    <li class="list-group-item">Status: <span :class="`badge badge-pill badge-`+badgeColor(complaint.status)">{{complaint.status}}</span></li>
                                    <li class="list-group-item">{{complaint.occurred_date}}</li>
                                    <li class="list-group-item">{{complaint.created_date}}</li>
                                    <li class="list-group-item">{{complaint.updated_date}}</li>
                                    <li class="list-group-item">{{complaint.view_count}} view<span v-if="complaint.view_count!==1">s</span></li>
                                </ul>
                            </td>
                        </tr>
                        </tbody>
                    </table>
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
            complaint: {
                query:     queries.complaint,
                variables() {
                    return {
                        id: this.$route.params.id
                    }
                }
            }
        },
        data() {
            return {
                complaint: {},
                id: this.$route.params.id
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
            badgeColor(status) {
                let color = "primary";

                switch (status) {
                    case 'pending':
                        color = "info";
                        break;
                    case 'resolved':
                        color = "success";
                        break;
                    case 'closed':
                        color = "warning";
                        break;
                }

                return color;
            },
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
