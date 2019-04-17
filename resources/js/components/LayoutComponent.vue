<template>
<div class="fullpage-container">
    <header class="header">
        <nav class="navbar navbar-expand">
            <a href="/" alt="Statement Making" class="header__logo navbar-brand">
                <img src="/img/logo.png" class="img-fluid" alt="Statement Making Logo">
            </a>
            <ul class="header__navbar navbar-nav mr-auto">
                <li class="header__navbar__item nav-item active px-lg-3 px-1">
                    <a :class="{active:index == 0}" class="nav-link" @click="moveTo(0)">
                        <i class="fas fa-home d-block d-md-none"></i>
                        <span class="d-none d-md-inline-block">Home</span>
                    </a>
                </li>
                <li class="header__navbar__item nav-item px-lg-3 px-1">
                    <a :class="{active:index == 1}" class="nav-link" @click="moveTo(1)">
                        <i class="fas fa-info d-block d-md-none"></i>
                        <span class="d-none d-md-inline-block">About</span>
                    </a>
                </li>
                <li class="header__navbar__item nav-item px-lg-3 px-1">
                    <a :class="{active:index == 2}" class="nav-link" @click="moveTo(2)">
                        <i class="fas fa-images d-block d-md-none"></i>
                        <span class="d-none d-md-inline-block">Gallery</span>
                    </a>
                </li>
                <li class="header__navbar__item nav-item px-lg-3 px-1">
                    <a :class="{active:index == 3}" class="nav-link" @click="moveTo(3)">
                        <i class="fas fa-calendar-alt d-block d-md-none"></i>
                        <span class="d-none d-md-inline-block">Events</span>
                    </a>
                </li>
                <li class="header__navbar__item nav-item px-lg-3 px-1">
                    <a :class="{active:index == 4}" class="nav-link" @click="moveTo(4)">
                        <i class="fas fa-envelope-open-text d-block d-md-none"></i>
                        <span class="d-none d-md-inline-block">Contact</span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="fullpage-wp" v-fullpage="opts" ref="fullpage">
      <landing-page></landing-page>
      <about-page></about-page>
      <gallery-page></gallery-page>
      <event-page></event-page>
      <contact-page></contact-page>
    </div>
</div>
</template>

<script>
import LandingPage from './LandingPage.vue';
import GalleryPage from './GalleryPage.vue';
import AboutPage from './AboutPage.vue';
import EventPage from './EventPage.vue';
import ContactPage from './ContactPage.vue';

export default {
    components: {
      'landing-page': LandingPage,
      'gallery-page': GalleryPage,
      'about-page': AboutPage,
      'event-page': EventPage,
      'contact-page': ContactPage,
    },
    mounted() {
        console.log('Component mounted.')
    },
    data() {
        let that = this;
        return {
            active: 0,
            index: 0,
            opts: {
                start: 0,
                dir: 'v',
                loop: false,
                duration: 300,
                beforeChange: function(ele, current, next) {
                    console.log('before', current, next)
                    that.index = next;
                },
                afterChange: function(ele, current) {
                    that.index = current;
                    console.log('after', current)
                }
            }
        }
    },
    methods: {
        moveTo: function(index) {
            this.$refs.fullpage.$fullpage.moveTo(index, true);
        }
    }
}
</script>
