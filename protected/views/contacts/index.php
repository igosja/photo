<section class="content">
    <div class="wrap clearfix">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="m-title">Контакты</h1>
        <div class="clearfix">
            <div class="contacts-l">
                <div class="contcts-l__info">
                    <a href="javascript:;"><span>+38</span> <?= $this->contacts->lifecell; ?></a> — Lifecell/viber
                </div>
                <div class="contcts-l__info">
                    <a href="javascript:;"><span>+38</span> <?= $this->contacts->kyivstar; ?></a> — Киевстар
                </div>
                <div class="contcts-l__info">E-mail:
                    <a href="mailto:<?= $this->contacts->email; ?>"><?= $this->contacts->email; ?></a>
                </div>
            </div>
            <div class="contacts-c">
                <img src="<?= ImageIgosja::resize($this->contacts->image_id, 380, 570); ?>" alt="">
            </div>
            <div class="contacts-r">
                <h2 class="contacts-r__title">Пишите мне!</h2>
                <form>
                    <input type="text" class="of-input of-input_name" placeholder="Ваше имя" required />
                    <input type="tel" class="of-input of-input_phone phone_mask" placeholder="Телефон" required />
                    <input type="email" class="of-input of-input_email" placeholder="E-mail" required />
                    <textarea placeholder="Сообщение" class="of-form__textarea"></textarea>
                    <a href="javascript:;" class="of-submit">Заказать</a>
                </form>
            </div>
        </div>
        <div class="text-b">
            <div class="text-b__soc text-b__soc_mt">
                <?= $this->renderPartial('/include/social'); ?>
            </div>
        </div>
    </div>
</section>