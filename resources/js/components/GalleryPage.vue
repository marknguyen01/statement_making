<template>
<div class="page-3 page gallery">
    <div class="gallery__body">
        <h3 class="text-center">2018 STATEMENT MAKING FASHION SHOW</h3>
        <vue-glide v-model="active" :bullet="true" :breakpoints="{
          767.98: { perView: 1},
          991.98: { perView: 2},
          }">
            <vue-glide-slide v-for="i in 6" :key="i">
                <img :src="'/img/slide/' + i + '.png'" class="glide__img img-fluid" alt="Statement making 2018">
            </vue-glide-slide>
        </vue-glide>
    </div>
</div>
</template>
<script>
export default {
    data() {
        let that = this;
        return {
            active: 0,
        }
    },
}
</script>
