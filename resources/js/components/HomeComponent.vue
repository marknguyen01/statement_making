<template>
<div class="fullpage-container">
    <header class="header">
        <nav class="navbar navbar-expand-sm">
          <a href="/" alt="Statement Making" class="header__logo navbar-brand">
            <img src="/img/logo.png" class="img-fluid"  alt="Statement Making Logo">
          </a>
          <ul class="header__navbar navbar-nav mr-auto">
            <li class="header__navbar__item nav-item active px-3">
              <a href="#home" class="nav-link">Home</a>
            </li>
            <li class="header__navbar__item nav-item px-3">
              <a href="#contact" class="nav-link">Contact</a>
            </li>
          </ul>
        </nav>
    </header>
    <div class="fullpage-wp" v-fullpage="opts" ref="example">
        <div class="page-1 page">
          <img src="/img/blue_rec.svg" class="blue-rec">
          <img src="/img/yellow_rec.svg" class="yellow-rec">
          <img src="/img/lblue_rec.svg" class="lblue-rec">
        </div>
        <div class="page-2 page">
        </div>
        <div class="page-3 page">

        </div>
    </div>
</div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    },
    data() {
      return {
        opts: {
          start: 0,
          dir: 'v',
          loop: false,
          duration: 300,
          beforeChange: function (currentSlideEl,currenIndex,nextIndex) {
          },
          afterChange: function (currentSlideEl,currenIndex,nextIndex) {
          }
        }
      }
    },
    methods: {
      moveNext(){
        this.$refs.example.$fullpage.moveNext(); //Move to the next page
      }
    }
}
</script>
