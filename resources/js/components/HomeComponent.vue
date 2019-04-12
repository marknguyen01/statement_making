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
        <div class="page-1 page home" @mousemove="moveShapes">
            <img src="/img/blue_rec.svg" class="blue-rec shape" :style="{marginLeft: blue.left + 'px', marginTop: blue.top + 'px'}">
            <img src="/img/yellow_rec.svg" class="yellow-rec shape" :style="{marginLeft: yellow.left + 'px', marginTop: yellow.top + 'px'}">
            <img src="/img/teal_rec.svg" class="teal-rec shape" :style="{marginLeft: teal.left + 'px', marginTop: teal.top + 'px'}">
            <div class="home__heading">ready to make a <span class="font-weight-bold title-font">STATEMENT</span>
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
        <div class="page-2 page about">
            <div class="about__body">
                <div class="about__body__bar"></div>
                <div class="about__body__title mb-5">Be a part of UNCC's first</div>
                <div class="about__body__content">statement making showcases technological advancements in fashion and wearable technology</div>
                <div class="about__body__title mt-5">Campus wide maker fashion show!</div>
                <div class="about__body__bar"></div>
            </div>
        </div>
        <div class="page-3 page gallery">
          <div class="gallery__body">
            <div class="row">
                <div class="col-12 col-lg-8">
                    stylesheet
                </div>
                <div class="col-12 col-lg-4">
                    <carousel :perPage="1">
                        <slide>
                            <img src="/img/slide/1.png">
                        </slide>
                        <slide>
                            <img src="/img/slide/1.png">
                        </slide>
                        <slide>
                            <img src="/img/slide/1.png">
                        </slide>
                        <slide>
                            <img src="/img/slide/1.png">
                        </slide>
                    </carousel>
                </div>
            </div>
          </div>
        </div>
        <div class="page-4 page event">
        </div>
        <div class="page-5 page contact">
            <form action="/contact" method="POST" class="contact__form">
                <div class="form-row mb-3">
                    <div class="col-md-6 col-12">
                        <label for="form__email">Email address</label>
                        <input type="email" class="form-control" id="form__email" placeholder="Your email" name="email" required>
                    </div>
                    <div class="col-md-6 col-12">
                        <label for="form__name">Name</label>
                        <input type="text" class="form-control" id="form__name" placeholder="Your name" name="name" required>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label form="form__message">Message</label>
                    <textarea class="form-control" id="form__message" placeholder="Your message" name="message" required></textarea>
                </div>
                <button type="submit" class="btn form__submit">Submit</button>
            </form>
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
        let that = this;
        return {
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
        },
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
