<?php
if (!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Дополнительные поля' )
    ->where( 'post_id', '=', '8' )
    ->add_tab( 'Настройки шапки', [
        Field::make( 'image', 'site_logo', 'Логотип' ),
        Field::make( 'text', 'company_address', 'Адрес компании1' ),
    ]);