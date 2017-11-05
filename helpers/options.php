<?php
/**
 * Created by PhpStorm.
 * User: maximnepomniashiy
 * Date: 11/4/17
 * Time: 4:29 PM
 */

return [
    'title' => __('Настройки Audent', 'audent'),
    'logo' => get_template_directory_uri() . '/img/logo.png',
    'menus' => [
        [
            'title' => __('Основные', 'audent'),
            'name' => 'menu_1',
            'icon' => 'font-awesome:fa-cogs',
            'controls' => [
                [
                    'type' => 'section',
                    'title' => __('', 'audent'),
                    'name' => 'section_1',
                    'description' => __('', 'audent'),
                    'fields' => [
                        [
                            'type' => 'textbox',
                            'name' => 'address',
                            'label' => __('Адрес', 'audent'),
                            'default' => 'г. Днепр, ул. Князя Владимира Великого, 15а',
                        ],
                        [
                            'type' => 'textbox',
                            'name' => 'phone_1',
                            'label' => __('Номер телефона', 'audent'),
                            'default' => '(067) 567-89-00',
                        ],
                        [
                            'type' => 'textbox',
                            'name' => 'phone_2',
                            'label' => __('Номер телефона', 'audent'),
                            'default' => '(067) 567-89-00',
                        ]
                    ]
                ],
                [
                    'type' => 'section',
                    'title' => __('Google maps', 'audent'),
                    'name' => 'section_2',
                    'description' => __('', 'audent'),
                    'fields' => [
                        [
                            'type' => 'textbox',
                            'name' => 'gmaps_title',
                            'label' => __('Заголовок для карты', 'audent'),
                            'default' => '',
                        ],
                        [
                            'type' => 'textarea',
                            'name' => 'gmaps_iframe_source',
                            'label' => __('Исходный код карты', 'audent'),
                            'default' => '',
                        ]
                    ]
                ]
            ]
        ],
        [
            'title' => __('Главная страница', 'audent'),
            'name' => 'menu_2',
            'icon' => 'font-awesome:fa-home',
            'controls' => [
                [
                    'type' => 'section',
                    'title' => __('', 'audent'),
                    'name' => 'section_2',
                    'description' => __('', 'audent'),
                    'fields' => [
                        [
                            'type' => 'textbox',
                            'name' => 'homepage_title',
                            'label' => __('Заголовок', 'audent'),
                            'default' => '',
                        ],
                        [
                            'type' => 'textbox',
                            'name' => 'homepage_subtitle',
                            'label' => __('Подзаголовок', 'audent'),
                        ],
                        [
                            'type' => 'textbox',
                            'name' => 'homepage_form_title',
                            'label' => __('Заголовок для формы', 'audent'),
                        ],
                        [
                            'type' => 'textbox',
                            'name' => 'homepage_form_subtitle',
                            'label' => __('Подзаголовок для формы', 'audent'),
                        ],
                        [
                            'type' => 'wpeditor',
                            'name' => 'homepage_about_ud',
                            'label' => __('О нас', 'audent'),
//                            'use_external_plugins' => '1',
                            'disabled_externals_plugins' => '',
                            'disabled_internals_plugins' => '',
                        ],
                        [
                            'type' => 'Select',
                            'name' => 'about_us_page',
                            'label' => __('Страница о нас', 'audent'),
                            'items' => [
                                'data' => [
                                    [
                                        'source' => 'function',
                                        'value' => 'favpress_get_pages'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];