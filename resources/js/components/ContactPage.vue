<template>
<div class="page-5 page contact">
    <svg viewBox="0 0 300 110" class="h-100">
        <polygon class="polygon" points="300,110 0,110 0,0 49.3,0 300,0" />
    </svg>
    <div class="contact__status">Thank you for contacting us!</br>Your mail has been sent successfully!
        <div class="contact__status__close mt-3 mt-lg-5" v-on:click="removeMorph">CLOSE</div>
    </div>
    <div class="contact__body">
        <div class="contact__body__social my-3 my-lg-5">
            <a href="mailto:jokerlun@uncc.edu">
                <i class="fas fa-envelope-square"></i>
            </a>
            <a href="https://www.facebook.com/fabstatement">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.instagram.com/fabstatement/">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="">
                <i class="fab fa-twitter-square"></i>
            </a>
        </div>
        <form action="/contact" method="POST" class="contact__body__form">
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
            <button type="submit" class="btn form__submit" v-on:click="startMorph">Submit</button>
        </form>
    </div>
</div>
</template>
<script>
export default {
    methods: {
        startMorph: function() {
            var morphing = this.$anime({
                targets: '.polygon',
                points: [{
                        value: '215, 110 0, 110 0, 0 47.7, 0 67, 76'
                    },
                    {
                        value: '215, 110 0, 110 0, 0 0, 0 67, 76'
                    }
                ],
                easing: 'easeOutQuad',
                duration: 1500,
                loop: false
            });
            this.$anime({
                targets: '.contact__body',
                opacity: 1,
                duration: 1000,
                translateY: window.innerHeight,
            });
            this.$anime({
                targets: '.contact__status',
                opacity: 1,
                duration: 1000,
                top: '50%',
                translateY: '-50%',
                translateX: '-50%',
            });
        },
        removeMorph: function() {
          this.$anime({
          targets: '.polygon',
          points: [
              { value: '215, 110 0, 110 0, 0 47.7, 0 67, 76' },
              { value: '300,110 0,110 0,0 49.3,0 300,0' }
          ],
          easing: 'easeOutQuad',
          duration: 1500,
          loop: false
        });
        this.$anime({
            targets: '.contact__status',
            opacity: 0,
            duration: 1000,
            translateY: -800
        });
        this.$anime({
            targets: '.contact__body',
            opacity: 1,
            duration: 1000,
            translateY: '-50%',
        });
        }
    }
}
</script>
