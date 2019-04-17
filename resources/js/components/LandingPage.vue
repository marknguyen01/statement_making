<template>
<div class="page-1 page home" @mousemove="moveShapes">
    <img src="/img/blue_rec.svg" class="blue-rec shape" :style="{marginLeft: blue.left + 'px', marginTop: blue.top + 'px'}">
    <img src="/img/yellow_rec.svg" class="yellow-rec shape" :style="{marginLeft: yellow.left + 'px', marginTop: yellow.top + 'px'}">
    <img src="/img/teal_rec.svg" class="teal-rec shape" :style="{marginLeft: teal.left + 'px', marginTop: teal.top + 'px'}">
    <div class="home__heading  d-none d-md-block">ready to make a <span class="font-weight-bold title-font">STATEMENT</span>
    </div>
    <div class="home__scroll" @click="moveTo(1)">
        scroll to learn more...
    </div>
    <div class="home__model">
        <img src="/img/model.png" class="home__model__image">
        <div class="model__content">
            <div class="content__heading mb-3">
                <span class="title-font">Statement </span>
                <p>making</p>
            </div>
            <div class="content__body">
                Thursday March 15th<br>
                7PM Storrs Atrium<br><br>
                Digital Fabrication.<br>
                Connection.<br>
                Fashion.
            </div>
        </div>
    </div>
</div>
</template>
<script>
export default {
    data() {
        let that = this;
        return {
            active: 0,
            blue: {
                defLeft: -580,
                defTop: -480,
                left: -580,
                top: -480,
            },
            yellow: {
                defLeft: -400,
                defTop: -360,
                left: -400,
                top: -360,
            },
            teal: {
                defLeft: -60,
                defTop: 40,
                left: -60,
                top: 40,
            },
        }
    },
    methods: {
        moveShapes: function(event) {
            let blue = document.querySelector('.blue-rec').getBoundingClientRect();
            let yellow = document.querySelector('.yellow-rec').getBoundingClientRect();
            let teal = document.querySelector('.teal-rec').getBoundingClientRect();

            let mouseX = event.clientX;
            let mouseY = event.clientY;

            let windowWidth = window.innerWidth;
            let windowHeight = window.innerHeight;

            this.blue.left = this.blue.defLeft + (mouseX / 10);
            this.yellow.left = this.yellow.defLeft + (mouseX / 10);;
            this.teal.left = this.teal.defLeft + (mouseX / 10);


            this.blue.top = this.blue.defTop + (mouseY / 8);
            this.yellow.top = this.yellow.defTop + (mouseY / 8);;
            this.teal.top = this.teal.defTop + (mouseY / 8);
        }
    }
}
</script>
