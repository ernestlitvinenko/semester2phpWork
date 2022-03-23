<section class="form mt-5 mb-5">
            <div class="form__wrapper container row mx-auto justify-content-center">
                <form action="https://httpbin.org/post" method="post" class="col-6">
                    <div class="form__group">
                        <label for="id_username">Имя пользователя</label>
                        <input type="text" name="username" id="id_username" placeholder="ernestlitvinenko">
                    </div>

                    <div class="form__group">
                        <label for="id_email">Эл. почта</label>
                        <input type="email" name="email" id="id_email" placeholder="example@mail.com">
                    </div>
                    
                    <div class="form__group">
                        <label for="id_type_of_request">Тип обращения</label>
                        <select name="type_of_request" id="id_type_of_request">
                            <option value="complaint">Жалоба</option>
                            <option value="offer">Предложение</option>
                            <option value="gratitude">Благодарность</option>
                        </select>
                    </div>
                    

                    <div class="form__group">
                        <p>Тип ответа</p>
                        <label for="id_message_response">СМС</label>
                        <input type="checkbox" name="response" id="id_message_response" value="sms">
                        <label for="id_email_response">Email</label>
                        <input type="checkbox" name="response" id="id_email_response" value="email">    
                    </div>
                    
                    <button type="submit" class="btn btn-outline-primary">
                        Отправить
                    </button>

                </form>
            </div>
        </section>