<div class="top-bar-left-container">
    <div class="cbd-top-header-left">
        <ul class="cbd-top-header-list">
            <li><i class="fas fa-envelope"></i><span class="site-general-info"><?= get_theme_mod('set_email','add your email here');?></span></li>
            <li><i class="fas fa-phone-volume"></i> <span class="site-general-info"><?= get_theme_mod('set_phone','add your phone here');?></span></li>
            <li><i class="fas fa-clock"></i><span class="site-general-info"><?= get_theme_mod('set_opening_time','');?></span></li>
        </ul>
    </div>
</div>
<div class="top-bar-right-container">
    <div class="cbd-top-header-right">
        <div class="cbd-top-header-social">
            <ul>
                <li><a target="_blank" href="<?= esc_url(get_theme_mod('set_facebook_url','')); ?>"><i class="fab fa-facebook"></i></a></li>
            </ul>
        </div>
    </div>
</div>