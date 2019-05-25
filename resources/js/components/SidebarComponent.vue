<template>
    <nav id="sidebar" aria-label="Main Navigation">
        <div class="content-header bg-white-5">
            <a class="font-w600 text-dual" href="/">
                <i class="fa fa-circle-notch text-primary"></i>
                <span class="smini-hide">
                <span class="font-w700 font-size-h5">ne</span> <span class="font-w400">4.2</span>
            </span>
            </a>
        </div>
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <router-link class="nav-main-link disabled" :to="{name:'dashboard'}">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                    </router-link>
                </li>
                <li class="nav-main-item" v-if="user.is_admin">
                    <a class="nav-main-link disabled" href="/admin">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Admin</span>
                    </a>
                </li>
                <li class="nav-main-heading">Complaints</li>
                <li class="nav-main-item">
                    <a class="nav-main-link disabled" href="/users/complaints">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">View Reports</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link disabled" href="/users/report">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Report an Issue</span>
                    </a>
                </li>
                <li class="nav-main-heading">Contributions</li>
                <li class="nav-main-item">
                    <a class="nav-main-link disabled" href="/users/contribute">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Contribute</span>
                    </a>


                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link disabled" href="/users/contributions">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">View Contributions</span>
                    </a>
                </li>
                <li class="nav-main-heading">User</li>
                <li class="nav-main-item">
                    <a class="nav-main-link disabled" href="/users/profile">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Profile</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <router-link class="nav-main-link disabled" :to="{name:'settings'}">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Settings</span>
                    </router-link>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
    import {queries} from '../queries'

    export default {
        data() {
            return {
                user: {
                    is_admin: 0
                }
            }
        },
        apollo: {
            user: queries.checkAdmin,
        },
        props: {
            menu: Array
        }
    }
</script>