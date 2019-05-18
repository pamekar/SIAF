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
                    <a class="nav-main-link active" href="/">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-main-heading">Complaints</li>
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="/">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">View Reports</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="/">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Report an Issue</span>
                    </a>
                </li>
                <li class="nav-main-heading">Contributions</li>
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="/">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Contribute</span>
                    </a>


                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="/">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">View Contributions</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>

    export default {
        data() {
            return{
                user:{
                    name:"",
                    avatar:""
                }
            }
        },
        props: {
            menu: Array
        }
    }
</script>