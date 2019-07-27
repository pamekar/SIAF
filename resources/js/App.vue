<template>
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">
        <sideoverlay-component></sideoverlay-component>
        <sidebar-component></sidebar-component>
        <header-component></header-component>
        <transition>
            <router-view></router-view>
        </transition>
        <footer-component></footer-component>
        <modals-component></modals-component>
    </div>
</template>

<script>
    import Sidebar from './components/SidebarComponent.vue'
    import Sideoverlay from './components/SideoverlayComponent.vue'
    import Header from './components/HeaderComponent.vue'
    import Footer from './components/FooterComponent.vue'
    import Modals from './components/ModalsComponent.vue'

    export default {
        name:       'App',
        data() {
            return {}
        },
        created() {
            
        },
        methods:    {},
        watch:      {
            '$route'(to, from) {
                const toDepth = to.path.split('/').length
                const fromDepth = from.path.split('/').length
                this.transitionName = toDepth < fromDepth ? 'fade-in' : 'fade-out'
            }
        },
        components: {
            'footer-component':      Footer,
            'header-component':      Header,
            'sidebar-component':     Sidebar,
            'sideoverlay-component': Sideoverlay,
            'modals-component':      Modals,
        }
    }
</script>