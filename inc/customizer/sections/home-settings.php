<?php
$categories = get_categories(['hide_empty' => false]);
$cats_options = ['' => '-- همه دسته‌ها --'];
if (!is_wp_error($categories)) {
    foreach ($categories as $category) {
        $cats_options[$category->slug] = $category->name;
    }
}

$query_types = [
    'latest'   => 'آخرین مطالب (بدون محدودیت دسته)',
    'category' => 'بر اساس دسته‌بندی'
];

$post_type_choices = [
    'all'             => 'همه پست‌تایپ‌ها',
    'post'            => 'نوشته استاندارد',
    'aggregated_news' => 'خبر تجمیعی',
];

$settings = [
    'hasht_home_panel' => [
        'title'    => 'تنظیمات صفحه اصلی',
        'type'     => 'panel',
        'priority' => 30,
        'sections' => [
            
            // 1. Hero Section
            'hasht_home_hero_sec' => [
                'title' => 'بخش هیرو (Hero)',
                'fields' => [
                    'hasht_home_hero_post_type' => [
                        'label'   => 'نوع پست‌تایپ',
                        'type'    => 'select',
                        'choices' => $post_type_choices,
                        'default' => 'all',
                    ],
                    'hasht_home_hero_query_type' => [
                        'label'   => 'نوع کوئری',
                        'type'    => 'select',
                        'choices' => $query_types,
                        'default' => 'latest',
                    ],
                    'hasht_home_hero_cat' => [
                        'label'   => 'دسته‌بندی (اگر نوع روی دسته باشد)',
                        'type'    => 'select',
                        'choices' => $cats_options,
                        'default' => '',
                    ],
                    'hasht_home_hero_count' => [
                        'label'   => 'تعداد پست',
                        'type'    => 'number',
                        'default' => 5,
                    ],
                    'hasht_home_hero_ad_1_enable' => [
                        'label'   => 'فعال‌سازی تبلیغ ۱ سایدبار هیرو',
                        'type'    => 'checkbox',
                        'default' => 0,
                    ],
                    'hasht_home_hero_ad_1_type' => [
                        'label'   => 'نوع ورودی تبلیغ ۱',
                        'type'    => 'select',
                        'choices' => ['image' => 'تصویر', 'html' => 'کد HTML'],
                        'default' => 'image',
                    ],
                    'hasht_home_hero_ad_1_image' => [
                        'label'   => 'تصویر تبلیغ ۱',
                        'type'    => 'upload',
                        'default' => '',
                    ],
                    'hasht_home_hero_ad_1_link' => [
                        'label'   => 'لینک تبلیغ ۱',
                        'type'    => 'text',
                        'default' => '',
                    ],
                    'hasht_home_hero_ad_1_html' => [
                        'label'   => 'کد HTML تبلیغ ۱',
                        'type'    => 'textarea',
                        'default' => '',
                    ],
                    'hasht_home_hero_ad_2_enable' => [
                        'label'   => 'فعال‌سازی تبلیغ ۲ سایدبار هیرو',
                        'type'    => 'checkbox',
                        'default' => 0,
                    ],
                    'hasht_home_hero_ad_2_type' => [
                        'label'   => 'نوع ورودی تبلیغ ۲',
                        'type'    => 'select',
                        'choices' => ['image' => 'تصویر', 'html' => 'کد HTML'],
                        'default' => 'image',
                    ],
                    'hasht_home_hero_ad_2_image' => [
                        'label'   => 'تصویر تبلیغ ۲',
                        'type'    => 'upload',
                        'default' => '',
                    ],
                    'hasht_home_hero_ad_2_link' => [
                        'label'   => 'لینک تبلیغ ۲',
                        'type'    => 'text',
                        'default' => '',
                    ],
                    'hasht_home_hero_ad_2_html' => [
                        'label'   => 'کد HTML تبلیغ ۲',
                        'type'    => 'textarea',
                        'default' => '',
                    ],
                    'hasht_home_hero_ad_3_enable' => [
                        'label'   => 'فعال‌سازی تبلیغ ۳ سایدبار هیرو',
                        'type'    => 'checkbox',
                        'default' => 0,
                    ],
                    'hasht_home_hero_ad_3_type' => [
                        'label'   => 'نوع ورودی تبلیغ ۳',
                        'type'    => 'select',
                        'choices' => ['image' => 'تصویر', 'html' => 'کد HTML'],
                        'default' => 'image',
                    ],
                    'hasht_home_hero_ad_3_image' => [
                        'label'   => 'تصویر تبلیغ ۳',
                        'type'    => 'upload',
                        'default' => '',
                    ],
                    'hasht_home_hero_ad_3_link' => [
                        'label'   => 'لینک تبلیغ ۳',
                        'type'    => 'text',
                        'default' => '',
                    ],
                    'hasht_home_hero_ad_3_html' => [
                        'label'   => 'کد HTML تبلیغ ۳',
                        'type'    => 'textarea',
                        'default' => '',
                    ],
                    'hasht_home_hero_ad_4_enable' => [
                        'label'   => 'فعال‌سازی تبلیغ ۴ سایدبار هیرو',
                        'type'    => 'checkbox',
                        'default' => 0,
                    ],
                    'hasht_home_hero_ad_4_type' => [
                        'label'   => 'نوع ورودی تبلیغ ۴',
                        'type'    => 'select',
                        'choices' => ['image' => 'تصویر', 'html' => 'کد HTML'],
                        'default' => 'image',
                    ],
                    'hasht_home_hero_ad_4_image' => [
                        'label'   => 'تصویر تبلیغ ۴',
                        'type'    => 'upload',
                        'default' => '',
                    ],
                    'hasht_home_hero_ad_4_link' => [
                        'label'   => 'لینک تبلیغ ۴',
                        'type'    => 'text',
                        'default' => '',
                    ],
                    'hasht_home_hero_ad_4_html' => [
                        'label'   => 'کد HTML تبلیغ ۴',
                        'type'    => 'textarea',
                        'default' => '',
                    ],
                ]
            ],

            // 2. Latest News
            'hasht_home_latest_sec' => [
                'title' => 'بخش آخرین اخبار',
                'fields' => [
                    'hasht_home_latest_title' => [
                        'label'   => 'عنوان بخش',
                        'type'    => 'text',
                        'default' => 'جدیدترین اخبار',
                    ],
                    'hasht_home_latest_post_type' => [
                        'label'   => 'نوع پست‌تایپ',
                        'type'    => 'select',
                        'choices' => $post_type_choices,
                        'default' => 'all',
                    ],
                    'hasht_home_latest_query_type' => [
                        'label'   => 'نوع کوئری',
                        'type'    => 'select',
                        'choices' => $query_types,
                        'default' => 'latest',
                    ],
                    'hasht_home_latest_cat' => [
                        'label'   => 'دسته‌بندی (اگر نوع روی دسته باشد)',
                        'type'    => 'select',
                        'choices' => $cats_options,
                        'default' => '',
                    ],
                    'hasht_home_latest_count' => [
                        'label'   => 'تعداد پست',
                        'type'    => 'number',
                        'default' => 6,
                    ],
                    'hasht_home_latest_offset' => [
                        'label'       => 'تعداد نادیده گرفتن (Offset)',
                        'description' => 'برای جلوگیری از تکرار مطالب هیرو',
                        'type'        => 'number',
                        'default'     => 5,
                    ],
                    'hasht_home_latest_top_ad_enable' => [
                        'label'   => 'فعال‌سازی بنر افقی بالای بخش',
                        'type'    => 'checkbox',
                        'default' => 0,
                    ],
                    'hasht_home_latest_top_ad_type' => [
                        'label'   => 'نوع ورودی بنر',
                        'type'    => 'select',
                        'choices' => ['image' => 'تصویر', 'html' => 'کد HTML'],
                        'default' => 'image',
                    ],
                    'hasht_home_latest_top_ad_image' => [
                        'label'   => 'تصویر بنر',
                        'type'    => 'upload',
                        'default' => '',
                    ],
                    'hasht_home_latest_top_ad_link' => [
                        'label'   => 'لینک بنر',
                        'type'    => 'text',
                        'default' => '',
                    ],
                    'hasht_home_latest_top_ad_html' => [
                        'label'   => 'کد HTML بنر',
                        'type'    => 'textarea',
                        'default' => '',
                    ],
                ]
            ],

            // 3. Most Visited (اخبار داغ/پربازدید بر اساس تاریخ)
            'hasht_home_visited_sec' => [
                'title' => 'بخش پربازدیدترین',
                'fields' => [
                    'hasht_home_visited_title' => [
                        'label'   => 'عنوان بخش',
                        'type'    => 'text',
                        'default' => 'پربازدیدترین اخبار',
                    ],
                    'hasht_home_visited_post_type' => [
                        'label'   => 'نوع پست‌تایپ',
                        'type'    => 'select',
                        'choices' => $post_type_choices,
                        'default' => 'all',
                    ],
                    'hasht_home_visited_query_type' => [
                        'label'   => 'نوع کوئری',
                        'type'    => 'select',
                        'choices' => $query_types,
                        'default' => 'latest',
                    ],
                    'hasht_home_visited_cat' => [
                        'label'   => 'دسته‌بندی (اگر نوع روی دسته باشد)',
                        'type'    => 'select',
                        'choices' => $cats_options,
                        'default' => '',
                    ],
                    'hasht_home_visited_count' => [
                        'label'   => 'تعداد پست',
                        'type'    => 'number',
                        'default' => 6,
                    ],
                    'hasht_home_visited_offset' => [
                        'label'       => 'تعداد نادیده گرفتن (Offset)',
                        'description' => 'برای جلوگیری از تکرار مطالب هیرو',
                        'type'        => 'number',
                        'default'     => 5,
                    ],
                    'hasht_home_visited_ad_1_enable' => [
                        'label'   => 'فعال‌سازی تبلیغ ۱ ستون کناری',
                        'type'    => 'checkbox',
                        'default' => 0,
                    ],
                    'hasht_home_visited_ad_1_type' => [
                        'label'   => 'نوع ورودی تبلیغ ۱',
                        'type'    => 'select',
                        'choices' => ['image' => 'تصویر', 'html' => 'کد HTML'],
                        'default' => 'image',
                    ],
                    'hasht_home_visited_ad_1_image' => [
                        'label'   => 'تصویر تبلیغ ۱',
                        'type'    => 'upload',
                        'default' => '',
                    ],
                    'hasht_home_visited_ad_1_link' => [
                        'label'   => 'لینک تبلیغ ۱',
                        'type'    => 'text',
                        'default' => '',
                    ],
                    'hasht_home_visited_ad_1_html' => [
                        'label'   => 'کد HTML تبلیغ ۱',
                        'type'    => 'textarea',
                        'default' => '',
                    ],
                    'hasht_home_visited_ad_2_enable' => [
                        'label'   => 'فعال‌سازی تبلیغ ۲ ستون کناری',
                        'type'    => 'checkbox',
                        'default' => 0,
                    ],
                    'hasht_home_visited_ad_2_type' => [
                        'label'   => 'نوع ورودی تبلیغ ۲',
                        'type'    => 'select',
                        'choices' => ['image' => 'تصویر', 'html' => 'کد HTML'],
                        'default' => 'image',
                    ],
                    'hasht_home_visited_ad_2_image' => [
                        'label'   => 'تصویر تبلیغ ۲',
                        'type'    => 'upload',
                        'default' => '',
                    ],
                    'hasht_home_visited_ad_2_link' => [
                        'label'   => 'لینک تبلیغ ۲',
                        'type'    => 'text',
                        'default' => '',
                    ],
                    'hasht_home_visited_ad_2_html' => [
                        'label'   => 'کد HTML تبلیغ ۲',
                        'type'    => 'textarea',
                        'default' => '',
                    ],
                ]
            ],

            // 4. Topic Section (موضوعات ۶‌گانه)
            'hasht_home_topic_sec' => [
                'title' => 'بخش موضوعات (Tabs)',
                'fields' => [
                    'hasht_home_topics_top_ad_enable' => [
                        'label'   => 'فعال‌سازی بنر افقی بالای بخش',
                        'type'    => 'checkbox',
                        'default' => 0,
                    ],
                    'hasht_home_topics_top_ad_type' => [
                        'label'   => 'نوع ورودی بنر بالا',
                        'type'    => 'select',
                        'choices' => ['image' => 'تصویر', 'html' => 'کد HTML'],
                        'default' => 'image',
                    ],
                    'hasht_home_topics_top_ad_image' => [
                        'label'   => 'تصویر بنر بالا',
                        'type'    => 'upload',
                        'default' => '',
                    ],
                    'hasht_home_topics_top_ad_link' => [
                        'label'   => 'لینک بنر بالا',
                        'type'    => 'text',
                        'default' => '',
                    ],
                    'hasht_home_topics_top_ad_html' => [
                        'label'   => 'کد HTML بنر بالا',
                        'type'    => 'textarea',
                        'default' => '',
                    ],
                    'hasht_home_topics_bottom_ad_enable' => [
                        'label'   => 'فعال‌سازی بنر افقی پایین بخش',
                        'type'    => 'checkbox',
                        'default' => 0,
                    ],
                    'hasht_home_topics_bottom_ad_type' => [
                        'label'   => 'نوع ورودی بنر پایین',
                        'type'    => 'select',
                        'choices' => ['image' => 'تصویر', 'html' => 'کد HTML'],
                        'default' => 'image',
                    ],
                    'hasht_home_topics_bottom_ad_image' => [
                        'label'   => 'تصویر بنر پایین',
                        'type'    => 'upload',
                        'default' => '',
                    ],
                    'hasht_home_topics_bottom_ad_link' => [
                        'label'   => 'لینک بنر پایین',
                        'type'    => 'text',
                        'default' => '',
                    ],
                    'hasht_home_topics_bottom_ad_html' => [
                        'label'   => 'کد HTML بنر پایین',
                        'type'    => 'textarea',
                        'default' => '',
                    ],
                ]
            ],
        ]
    ]
];

// ایجاد فیلدها برای ۶ تاپیک به صورت داینامیک
for ($i = 1; $i <= 6; $i++) {
    $settings['hasht_home_panel']['sections']['hasht_home_topic_sec']['fields']["hasht_home_topic_{$i}_title"] = [
        'label'   => "عنوان تاپیک $i",
        'type'    => 'text',
        'default' => "موضوع $i",
    ];
    $settings['hasht_home_panel']['sections']['hasht_home_topic_sec']['fields']["hasht_home_topic_{$i}_post_type"] = [
        'label'   => "نوع پست‌تایپ تاپیک $i",
        'type'    => 'select',
        'choices' => $post_type_choices,
        'default' => 'all',
    ];
    $settings['hasht_home_panel']['sections']['hasht_home_topic_sec']['fields']["hasht_home_topic_{$i}_cat"] = [
        'label'   => "دسته‌بندی تاپیک $i",
        'type'    => 'select',
        'choices' => $cats_options,
        'default' => '',
    ];
}

// بخش تنظیمات تبلیغات صفحات داخلی
$settings['hasht_single_ads_sec'] = [
    'title'  => 'تبلیغات صفحات داخلی',
    'fields' => [
        'hasht_single_aggr_sidebar_ad_enable' => [
            'label'   => 'فعال‌سازی تبلیغ سایدبار خبر تجمیعی',
            'type'    => 'checkbox',
            'default' => 0,
        ],
        'hasht_single_aggr_sidebar_ad_type' => [
            'label'   => 'نوع ورودی تبلیغ',
            'type'    => 'select',
            'choices' => ['image' => 'تصویر', 'html' => 'کد HTML'],
            'default' => 'image',
        ],
        'hasht_single_aggr_sidebar_ad_image' => [
            'label'   => 'تصویر تبلیغ',
            'type'    => 'upload',
            'default' => '',
        ],
        'hasht_single_aggr_sidebar_ad_link' => [
            'label'   => 'لینک تبلیغ',
            'type'    => 'text',
            'default' => '',
        ],
        'hasht_single_aggr_sidebar_ad_html' => [
            'label'   => 'کد HTML تبلیغ',
            'type'    => 'textarea',
            'default' => '',
        ],
    ],
];

return $settings;
