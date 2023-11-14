<div class="register_container">
    <h1 class="title">Rejestracja</h1>
    <p class="desc">Zarejestruj się na promoteca.pl</p>
    <form class="register_container__box">
        <div class="register_container__box--left">
            <p class="title">Załóż konto</p>
            <div class="input-slot">
                <label for="email_login">Adres e-mail: *</label>
                <input type="email" name="email_login" id="email_login" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
            </div>
            <div class="input-slot">
                <label for="password_login">Hasło: *</label>
                <input type="password" name="password_login" id="password_login" required>
            </div>
            <div class="input-slot">
                <label for="repeat_password_login">Powtórz hasło: *</label>
                <input type="password" name="repeat_password_login" id="repeat_password_login" required>
            </div>
            <div class="input-slot checkbox-slot">
                <input type="checkbox" name="register_checkbox" id="register_checkbox" required>
                <label class="checkbox" for="register_checkbox">Zapoznałem się i akceptuję Regulamin oraz Politykę Prywatności</label>
            </div>
            <div class="input-slot">
                <div class="blue-button create-account">
                    <button>Utwórz konto</button>
                </div>
            </div>
        </div>
        <div class="register_container__box--right">
            <div class="input-slot">
                <label for="company_name_surname">Nazwa firmy / Imię i Nazwisko:</label>
                <input type="text" name="company_name_surname" id="company_name_surname">
            </div>
            <div class="input-slot with-btn">
                <label for="nip_code">NIP:</label>
                <input type="text" name="nip_code" id="nip_code">
                <div class="gus_btn">
                    <button>Pobierz dane z GUS</button>
                </div>
            </div>
            <div class="input-slot">
                <label for="address">Adres:</label>
                <input type="text" name="address" id="address">
            </div>
            <div class="input-slot">
                <label for="zipcode">Kod pocztowy:</label>
                <input type="text" name="zipcode" id="zipcode">
            </div>
            <div class="input-slot">
                <label for="city">Miasto:</label>
                <input type="text" name="city" id="city">
            </div>
        </div>
    </form>
    <div class="register_container__button">
        <a href="">Wstecz</a>
    </div>
</div>