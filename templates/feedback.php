<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery_mask.js"></script>
<script type="text/javascript" src="assets/js/feedback.js"></script>
<section class="section-feedback">
    <div class="wrap wrap_column">
        <div data-aos="fade-down-right" class="section-feedback_header">
            <h2>Напишите <span>нам</spa></h2>
        </div>
        <div data-aos="zoom-in" class="section-feedback_form">
            <div class="form-wrap">
                <div class="form_item input_item">
                    <label for="name_input" class="form_item-label input_item-label">Ваше имя</label>
                    <input id="name_input" type="text" class="form_item-input input_item-field">
                </div>
                <div class="form_item input_item">
                    <label for="mail_input" class="form_item-label input_item-label">Адрес электронной почты</label>
                    <input id="mail_input" type="text" class="form_item-input input_item-field">
                </div>
                <div class="form_item input_item">
                    <label for="topic_message_input" class="form_item-label input_item-label">Тема запроса</label>
                    <input list="topic_message_options" id="topic_message_input" type="text" class="form_item-input input_item-field">
                    <datalist id="topic_message_options">
                        <option value="Консультация">Консультация</option>
                    </datalist> 
                </div>
            </div>
            <div class="form-wrap">
                <div class="form_item input_item">
                    <label for="message_input" class="form_item-label input_item-label">Ваше сообщение</label>
                    <textarea id="message_input" type="text" class="form_item-input input_item-field"></textarea>
                </div>
            </div>
        </div>
        <div class="section-feedback_button">
            <button data-aos="flip-left" data-aos-duration="700" class="section-feedback_button-send">Отправить</button>
        </div>
    </div>
</section>