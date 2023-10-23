<div class="contact_container">
    <div class="message_box_container">
        <h1 class="title">Zostaw nam wiadomość</h1>
        <form class="form">
            <div class="form_left">
                <div class="form_left__column">
                    <div class="form_left__column--slot">
                        <label for="contact_name">Imię: *</label>
                        <input type="text" name="contact_name" id="contact_name" required>
                    </div>
                    <div class="form_left__column--slot">
                        <label for="contact_email">Adres e-mail: *</label>
                        <input type="email" name="contact_email" id="contact_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                    </div>
                </div>
            </div>
            <div class="form_right">
                <div class="form_right__column">
                    <div class="form_right__column--slot">
                        <label for="contact_msg">Wiadomość: *</label>
                        <textarea name="text" id="contact_msg" required></textarea>
                    </div>
                </div>
            </div>
            <div class="send_captcha__box">
                <div class="send_btn">
                    <a href="">Wyślij</a>
                </div>
                <div class="captcha_send">
                    <img src="./assets/img/products_card/captcha.jpg" alt="captcha">
                </div>
            </div>
        </form>
    </div>
    <div class="phone_mail_address_container">
        <div class="phone_mail_container">
            <div class="phone_mail_container--slot">
                <p class="title">Telefon</p>
                <p class="desc"><a href="tel:+22 486 34 83">22 486 34 83</a></p>
            </div>
            <div class="phone_mail_container--slot">
                <p class="title">E-mail</p>
                <p class="desc"><a href="mailto:info@promoteca.pl">info@promoteca.pl</a></p>
            </div>
            <div class="phone_mail_container--slot">
                <p class="title">Godziny otwarcia</p>
                <p class="desc">9:00-17:00</p>
            </div>
        </div>
        <div class="address_container">
            <div class="address_container--slot">
                <p class="title">Adres</p>
                <p class="desc">Exito Group <br>ul. Baletowa <br>1202-862 Warszawa <br>NIP: 5213362020</p>
            </div>
        </div>
    </div>
</div>