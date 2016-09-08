<?php $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
<a
    href="https://www.facebook.com/sharer/sharer.php?u=<?= $url; ?>"
    class="blog-item__soc__item blog-item__soc__item_fb"
    target="_blank"
>
    <span></span>
</a>
<a
    href="https://pinterest.com/pin/create/button/?url=<?= $url; ?>"
    class="blog-item__soc__item blog-item__soc__item_pin"
    target="_blank"
>
    <span></span>
</a>
<a
    href="http://vk.com/share.php?url=<?= $url; ?>"
    class="blog-item__soc__item blog-item__soc__item_vk"
    target="_blank"
>
    <span></span>
</a>