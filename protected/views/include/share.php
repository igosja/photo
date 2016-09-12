<a
    href="https://www.facebook.com/sharer/sharer.php?u=<?= $url; ?>"
    class="blog-item__soc__item blog-item__soc__item_fb"
    target="_blank"
>
    <span></span>
</a>
<a
    href="https://pinterest.com/pin/create/button/?url=<?= $url; ?>&description=<?= isset($description) ? $description : $this->seo_description; ?>&media=http://<?= $_SERVER['HTTP_HOST'] . $image; ?>"
    class="blog-item__soc__item blog-item__soc__item_pin"
    target="_blank"
>
    <span></span>
</a>
<a
    href="http://vk.com/share.php?url=<?= $url; ?>&title=<?= isset($title) ? $title : $this->seo_title; ?>&description=<?= isset($description) ? $description : $this->seo_description; ?>&image=http://<?= $_SERVER['HTTP_HOST'] . $image; ?>"
    class="blog-item__soc__item blog-item__soc__item_vk"
    target="_blank"
>
    <span></span>
</a>