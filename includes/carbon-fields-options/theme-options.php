<?php
if (!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', 'Настройки сайта' )
    ->add_tab( 'Настройки шапки', [
        Field::make( 'image', 'site_logo', 'Логотип' ),
		 		
        Field::make( 'text', 'company_address', 'Адрес компании1' ),
        Field::make( 'text', 'company_contact-phone-1', 'Первый номер телефона в формате +3751111111' ),
        Field::make( 'text', 'company_contact-phone-1-printing', 'Отображение первого номера телефона' ),
        Field::make( 'text', 'company_contact-phone-2', 'Второй номер телефона в формате +3751111111' ),
        Field::make( 'text', 'company_contact-phone-2-printing', 'Отображение второго номера телефона' ),
		 		Field::make( 'text', 'company_email', 'E-mail предприятия' ),
        Field::make( 'text', 'company_occupation', 'Чем мы занимаемся' ),
        Field::make( 'text', 'menu-item-1-main-page', 'Пункт меню Главная' ),
        Field::make( 'text', 'menu-item-2-dress-models', 'Пункт меню Модели платьев' ),
        Field::make( 'text', 'menu-item-3-advantages', 'Пункт меню  Преимущества' ),
        Field::make( 'text', 'menu-item-4-reviews', 'Пункт меню Отзывы' ),
        Field::make( 'text', 'menu-item-5-about-company', 'Пункт меню Об ателье' ),
        Field::make( 'text', 'menu-item-6-contacts', 'Пункт меню Контакты' ),
    ])

    ->add_tab( 'Настройки слайдера', [
      Field::make( 'image', 'slider-bg-1', 'Фон для первого слайда' ),
      Field::make( 'image', 'slider-bg-2', 'Фон для второго слайда' ),
      Field::make( 'image', 'slider-bg-3', 'Фон для третьего слайда' ),
      Field::make( 'text', 'company-buziness1', 'Чем занимается компания (до переноса строки)' ),
      Field::make( 'text', 'company-buziness2', 'Чем занимается компания (после переноса строки)' ),
      Field::make( 'text', 'company-slider-adv-1', '1-е преимущество на слайдере' ),
      Field::make( 'text', 'company-slider-adv-2', '2-е преимущество на слайдере' ),
      Field::make( 'text', 'company-slider-adv-3', '3-е преимущество на слайдере' ),
    ])
    ->add_tab( 'Модели платьев', [
      Field::make( 'image', 'dress-model-1', 'Фото платья №1' ),
      Field::make( 'image', 'dress-model-2', 'Фото платья №2' ),
      Field::make( 'image', 'dress-model-3', 'Фото платья №3' ),
      Field::make( 'image', 'dress-model-4', 'Фото платья №4' ),
      Field::make( 'image', 'dress-model-5', 'Фото платья №5' ),
      Field::make( 'image', 'dress-model-6', 'Фото платья №6' ),
      Field::make( 'image', 'dress-model-7', 'Фото платья №7' ),
      Field::make( 'image', 'dress-model-8', 'Фото платья №8' ),
      Field::make( 'text', 'look-model-photo', 'Отображается при наведении курсора на фото' ),
    ])
  ->add_tab( 'Особенности работы', [
    Field::make( 'text', 'company-spec-work-item-1', 'Производство' ),
    Field::make( 'text', 'company-spec-work-item-2', 'Сроки' ),
    Field::make( 'text', 'company-spec-work-item-3', 'Оплата' ),
    Field::make( 'text', 'company-spec-work-item-4', 'Доставка' ),
    Field::make( 'text', 'text-near-model-order-form', 'Текст напротив формы выбора модели платья' ),
  ])
  ->add_tab( 'Схема работы', [
    Field::make( 'text', 'work-order-title', 'Схема работы' ),
    Field::make( 'text', 'work-order-item-1', 'Заявка' ),
    Field::make( 'text', 'work-order-item-2', 'Уточнение размеров' ),
    Field::make( 'text', 'work-order-item-3', 'Определение цены' ),
    Field::make( 'text', 'work-order-item-4', 'Всё готово' ),
  ])
  ->add_tab( 'Наши преимущеста', [
    Field::make( 'text', 'our-adv-title', 'Наши преимущества' ),
    Field::make( 'text', 'our-adv-item-1-title', 'Размер (заголовок)' ),
    Field::make( 'text', 'our-adv-item-1-content', 'Размер (содержание)' ),
    Field::make( 'text', 'our-adv-item-2-title', 'Упаковка (заголовок)' ),
    Field::make( 'text', 'our-adv-item-2-content', 'Упаковка (содержание)' ),
    Field::make( 'text', 'our-adv-item-3-title', 'Особенности (заголовок)' ),
    Field::make( 'text', 'our-adv-item-3-content', 'Особенности (содержание)' ),
    Field::make( 'text', 'our-adv-item-4-title', 'Производство (заголовок)' ),
    Field::make( 'text', 'our-adv-item-4-content', 'Производство (содержание)' ),
    Field::make( 'text', 'our-adv-item-5-title', 'Опыт (заголовок)' ),
    Field::make( 'text', 'our-adv-item-5-content', 'Опыт (содержание)' ),
    Field::make( 'text', 'our-adv-item-6-title', 'Подход (заголовок)' ),
    Field::make( 'text', 'our-adv-item-6-content', 'Подход (содержание)' ),
    Field::make( 'text', 'our-adv-item-7-title', 'Условия (заголовок)' ),
    Field::make( 'text', 'our-adv-item-7-content', 'Условия (содержание)' ),
  ])
  ->add_tab( 'Отзывы клиентов', [
    Field::make( 'text', 'reviews-section-title', 'Отзывы (заголовок)'),
    Field::make( 'image', 'review-photo-1', 'Фото отзыва № 1' ),
  ])
  ->add_tab( 'Кратко о нас', [
    Field::make( 'text', 'in-brief-title', 'Кратко о нас (заголовок)' ),
    Field::make( 'text', 'in-brief-item-1', 'Абзац' ),
    Field::make( 'text', 'in-brief-item-2', 'Абзац' ),
    Field::make( 'text', 'in-brief-item-3', 'Абзац' ),
    Field::make( 'text', 'in-brief-list-item-1', 'Элемент списка 1' ),
    Field::make( 'text', 'in-brief-list-item-2', 'Элемент списка 2' ),
    Field::make( 'text', 'in-brief-list-item-3', 'Элемент списка 3' ),
    Field::make( 'text', 'in-brief-list-item-4', 'Элемент списка 4' ),
  ])
	 ->add_tab( 'Подвал', [
		Field::make( 'image', 'site_footer_logo', 'Логотип в подвале сайта' ),
		Field::make( 'text', 'company_footer_description', 'Краткое описание деятельности компании в подвале сайта' ),
		Field::make( 'text', 'company_footer_menu-title', 'Название блока меню' ),
		Field::make( 'text', 'company_footer_contacts-title', 'Название блока контактов' ),
		Field::make( 'text', 'company_footer_order-form-title', 'Название формы заказа' ),
	 ])
  ->add_tab( 'Политика конфиденциальности', [
    Field::make( 'rich_text', 'politic_text', 'Текст политики конфиденциальности' ),
  ])
    ->add_tab( 'Контакты', [
        Field::make( 'text', 'site_phone', 'Телефон' ),
        Field::make( 'text', 'site_phone_digits', 'Телефон без пробелов в формате +79999999999' ),
        Field::make( 'text', 'site_address', 'Адрес' ),
        Field::make( 'text', 'site_map_coordinates', 'Координаты карты' ),
        Field::make( 'text', 'site_vk_url', 'Вконтакте' ),
        Field::make( 'text', 'site_fb_url', 'Facebook' ),
        Field::make( 'text', 'site_inst_url', 'Instagram' ),
    ]);