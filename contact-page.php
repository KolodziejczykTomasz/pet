<?php get_header(); ?>
<body id="main__body__page__form">
    <header>
        <nav class="nav__container__form page__form--nav ">
            <div class="page__form__background--color"></div>
            <div id="nav__brand__form" class="nav__brand page__form__close--brand">
                <img class="nav__brand--image" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" /> </div>
            <div class="page__form__close--button">
                <a href="index.html" target="_self"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/x.svg" /></a>
            </div>

        </nav>
    </header>

    <main>
        <section class="page__form">
            <div class="page__form__side--left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/bakterie 5.svg" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/pies-2.png" />
            </div>
            <div class="page__form__side--right">
                <div class="page__form__side__right__wrapper">
                    <div class="page__form--title">Write to us</div>
                    <div class="page__form--message">we will reply within 24 h</div>
                </div>
                <form id="form" class="form" name="contactForm" action="post" method="get" onsubmit="">
                    <div class="form__wrapper--input form-control">
                        <input class="form_input" type="text" id="name" mame="name" placeholder="" required />
                        <label id="name" for="name" class="form-label" name="name"> Name </label>
                        <p class="help">Please enter your username.</p>
                    </div>
                    <div class="form__wrapper--input form-control">
                        <input class="form_input" type="text" id="lastName" name="lastName" placeholder="" required />
                        <label id="lastName" for="lastname" class="form-label" name="lastname"> Last name </label>
                        <p class="help">Please enter your last name.</p>
                    </div>
                    <div class="form__wrapper--input form-control">
                        <input class="form_input" type="email" id="email" name="email" placeholder="" required />
                        <label id="email" for="email" class="form-label" name="email"> Email </label>
                        <p class="help">Please enter your email.</p>
                    </div>
                    <div class="form__wrapper--input form-control">
                        <textarea class="form_input" id="message" name="message" type="text" required></textarea>
                        <label id="message" for="message" class="form-label" name="message"> Message </label>
                        <p class="help">Please enter your message.</p>
                    </div>
                    <div class="page__form__checkbox--wrapper">
                        <input type="checkbox" id="checkbox__form" />
                        <div>I consent to the processing of my personal data by Owlie S.A. for the purpose and to the extent necessary to handle this application. I have read the information on the method of processing my data.</div>

                    </div>


                    <div class="page__form--buttons">
                        <div class="form__slider--wrapper">
                            <input type="range" min="1" max="100" value="0" class="input-slider" id="button-slide" />
                            <label for="button-slide" id="slider__label " class="slider__label">Slide and send</label>
                        </div>
                        <div>
                            <button class="page__form__button--dark " type="submit" value="Submit">Send</button>

                        </div>
                    </div>
                </form>
            </div>
        </section>

    </main>

</body>

</html>