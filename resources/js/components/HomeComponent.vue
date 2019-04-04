<template>
<div class="fullpage-container">
    <div class="navbar">
        <a href="/" alt="Statement Making" class="navbar__logo"><img src="/img/logo.png" alt="Statement Making Logo"></a>
    </div>
    <div class="fullpage-wp" v-fullpage="opts" ref="example">
        <div class="page-1 page">
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
