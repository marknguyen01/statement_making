<template>
<div class="page-5 page contact">
    <div class="contact__body">
        <div class="contact__body__social my-3 my-lg-5">
            <a href="mailto:jokerlun@uncc.edu">
                <i class="fas fa-envelope-square"></i>
            </a>
            <a>
                <i class="fab fa-facebook"></i>
            </a>
            <a>
                <i class="fab fa-instagram"></i>
            </a>
            <a>
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
            <button type="submit" class="btn form__submit">Submit</button>
        </form>
    </div>
</div>
</template>
