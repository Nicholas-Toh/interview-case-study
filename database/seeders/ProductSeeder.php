<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $laptops = [
            [
                'name' => 'Zenbook',
                'sku' => 'ZB-001',
                'description' => "Elegant, trendy, thin and light, it's the best laptop for on-the-go work and entertainment.",
                'variations' => [
                    [
                        'sku' => 'ZB-001-14inch-silver',
                        'price' => 3000.00,
                        'attributes' => [
                            [
                                'name' => 'Size',
                                'slug' => 'size',
                                'value_label' => '14 Inch',
                                'value' => '14-inch',
                            ],
                            [
                                'name' => 'Colour',
                                'slug' => 'colour',
                                'value_label' => 'Silver',
                                'value' => 'silver',
                            ],
                        ]
                    ],
                    [
                        'sku' => 'ZB-001-15inch-silver',
                        'price' => 3100.00,
                        'attributes' => [
                            [
                                'name' => 'Size',
                                'slug' => 'size',
                                'value_label' => '15 Inch',
                                'value' => '15-inch',
                            ],
                            [
                                'name' => 'Colour',
                                'slug' => 'colour',
                                'value_label' => 'Silver',
                                'value' => 'silver',
                            ],
                        ]
                    ],
                    [
                        'sku' => 'ZB-001-14inch-black',
                        'price' => 3000.00,
                        'attributes' => [
                            [
                                'name' => 'Size',
                                'slug' => 'size',
                                'value_label' => '14 Inch',
                                'value' => '14-inch',
                            ],
                            [
                                'name' => 'Colour',
                                'slug' => 'colour',
                                'value_label' => 'Black',
                                'value' => 'black',
                            ],
                        ]
                    ],
                    [
                        'sku' => 'ZB-001-15inch-black',
                        'price' => 3100.00,
                        'attributes' => [
                            [
                                'name' => 'Size',
                                'slug' => 'size',
                                'value_label' => '15 Inch',
                                'value' => '15-inch',
                            ],
                            [
                                'name' => 'Colour',
                                'slug' => 'colour',
                                'value_label' => 'Black',
                                'value' => 'black',
                            ],
                        ]
                    ],
                ]
            ],
            [
                'name' => 'Hp Pavilion',
                'sku' => 'HPAV-001',
                'description' => "HP Pavilion is a line of consumer-oriented laptop and desktop computers produced by HP Inc.",
                'variations' => [
                    [
                        'sku' => 'HPAV-001-14inch-red',
                        'price' => 2800.00,
                        'attributes' => [
                            [
                                'name' => 'Size',
                                'slug' => 'size',
                                'value_label' => '14 Inch',
                                'value' => '14-inch',
                            ],
                            [
                                'name' => 'Colour',
                                'slug' => 'colour',
                                'value_label' => 'Red',
                                'value' => 'red',
                            ],
                        ]
                    ],
                    [
                        'sku' => 'HPAV-001-15inch-red',
                        'price' => 3000.00,
                        'attributes' => [
                            [
                                'name' => 'Size',
                                'slug' => 'size',
                                'value_label' => '15 Inch',
                                'value' => '15-inch',
                            ],
                            [
                                'name' => 'Colour',
                                'slug' => 'colour',
                                'value_label' => 'Red',
                                'value' => 'red',
                            ],
                        ]
                    ],
                    [
                        'sku' => 'HPAV-001-14inch-silver',
                        'price' => 2800.00,
                        'attributes' => [
                            [
                                'name' => 'Size',
                                'slug' => 'size',
                                'value_label' => '14 Inch',
                                'value' => '14-inch',
                            ],
                            [
                                'name' => 'Colour',
                                'slug' => 'colour',
                                'value_label' => 'Silver',
                                'value' => 'silver',
                            ],
                        ]
                    ],
                    [
                        'sku' => 'HPAV-001-15inch-silver',
                        'price' => 3000.00,
                        'attributes' => [
                            [
                                'name' => 'Size',
                                'slug' => 'size',
                                'value_label' => '15 Inch',
                                'value' => '15-inch',
                            ],
                            [
                                'name' => 'Colour',
                                'slug' => 'colour',
                                'value_label' => 'Silver',
                                'value' => 'silver',
                            ],
                        ]
                    ],
                ]
            ],
        ];
        $smartphones = [
            [
                'name' => 'Samsung Galaxy S9',
                'sku' => 'SG-009',
                'description' => "A brand new, sealed Lilac Purple Verizon Global Unlocked Galaxy S9 by Samsung. This is an upgrade. Clean ESN and activation ready.",
                'category' => 'samsung',
                'variations' => [
                    [
                        'sku' => 'SG-009-lilac_purple',
                        'price' => 2000.00,
                        'attributes' => [
                            [
                                'name' => 'Colour',
                                'slug' => 'colour',
                                'value_label' => 'Lilac Purple',
                                'value' => 'lilac_purple',
                            ],
                        ],
                    ],
                    [
                        'sku' => 'SG-009-midnight_black',
                        'price' => 2000.00,
                        'attributes' => [
                            [
                                'name' => 'Colour',
                                'slug' => 'colour',
                                'value_label' => 'Midnight Black',
                                'value' => 'midnight_black',
                            ],
                        ],
                    ],
                    [
                        'sku' => 'SG-009-coral_blue',
                        'price' => 2000.00,
                        'attributes' => [
                            [
                                'name' => 'Colour',
                                'slug' => 'colour',
                                'value_label' => 'Coral Blue',
                                'value' => 'coral_blue',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Samsung Note 10',
                'sku' => 'SN-010',
                'description' => "Elegant, trendy, thin and light, it's the best laptop for on-the-go work and entertainment.",
                'category' => 'samsung',
                'variations' => [
                    [
                        'sku' => 'SN-010-aura_glow',
                        'price' => 3000.00,
                        'attributes' => [
                            [
                                'name' => 'Colour',
                                'slug' => 'colour',
                                'value_label' => 'Aura Glow',
                                'value' => 'aura_glow',
                            ],
                        ],
                    ],
                    [
                        'sku' => 'SN-010-aura_white',
                        'price' => 3000.00,
                        'attributes' => [
                            [
                                'name' => 'Colour',
                                'slug' => 'colour',
                                'value_label' => 'Aura White',
                                'value' => 'aura_white',
                            ],
                        ],
                    ],
                    [
                        'sku' => 'SN-010-aura_black',
                        'price' => 3000.00,
                        'attributes' => [
                            [
                                'name' => 'Colour',
                                'slug' => 'colour',
                                'value_label' => 'Aura Black',
                                'value' => 'aura_black',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Samsung Galaxy A59',
                'sku' => 'SG-068',
                'description' => 'New condition • No returns, but backed by eBay Money back guarantee',
                'category' => 'samsung',
                'variations' => [
                    [
                        'sku' => 'SG-068-blue',
                        'price' => 658.00,
                        'attributes' => [
                            [
                                'name' => 'Colour',
                                'slug' => 'colour',
                                'value_label' => 'Blue',
                                'value' => 'blue',
                            ],
                        ],
                    ],
                    [
                        'sku' => 'SG-068-black',
                        'price' => 658.00,
                        'attributes' => [
                            [
                                'name' => 'Colour',
                                'slug' => 'colour',
                                'value_label' => 'Black',
                                'value' => 'black',
                            ],
                        ],
                    ],
                    [
                        'sku' => 'SG-068-white',
                        'price' => 658.00,
                        'attributes' => [
                            [
                                'name' => 'Colour',
                                'slug' => 'colour',
                                'value_label' => 'White',
                                'value' => 'white',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'LG V10 H900',
                'sku' => 'LG-V10-H900',
                'description' => 'NETWORK Technology GSM. Protection Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue. SAR EU 0.59 W/kg (head).',
                'category' => 'lg',
                'variations' => [
                    [
                        'sku' => 'LG-V10-H900-opal_blue',
                        'price' => 159.00,
                        'attributes' => [
                            [
                                'name' => 'Colour',
                                'slug' => 'colour',
                                'value_label' => 'Opal Blue',
                                'value' => 'opal_blue',
                            ],
                        ],
                    ],
                    [
                        'sku' => 'LG-V10-H900-space_black',
                        'price' => 159.00,
                        'attributes' => [
                            [
                                'name' => 'Colour',
                                'slug' => 'colour',
                                'value_label' => 'Space Black',
                                'value' => 'space_black',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Huawei Elate',
                'sku' => 'HW-E001',
                'description' => 'Cricket Wireless - Huawei Elate. New Sealed Huawei Elate Smartphone.',
                'category' => 'huawei',
                'variations' => [
                    [
                        'sku' => 'HW-E001-gray',
                        'price' => 300.00,
                        'attributes' => [
                            [
                                'name' => 'Colour',
                                'slug' => 'colour',
                                'value_label' => 'Gray',
                                'value' => 'gray',
                            ],
                        ],
                    ],
                ]
            ],
        ];

        $laptopCategory = ProductCategory::create([
            'name' => 'Laptops',
            'slug' => 'laptops',
        ]);
        $smartphoneCategory = ProductCategory::create([
            'name' => 'Smartphones',
            'slug' => 'smartphones',
        ]);
        $smartphoneCategory->children()->create([
            [
                'name' => 'Samsung',
                'slug' => 'samsung',
            ],
            [
                'name' => 'LG',
                'slug' => 'lg',
            ],
            [
                'name' => 'Huawei',
                'slug' => 'huawei',
            ],
        ]);

        $samsungCategory = ProductCategory::whereSlug('samsung')->get()->first();
        $lgCategory = ProductCategory::whereSlug('lg')->get()->first();
        $huaweiCategory = ProductCategory::whereSlug('huawei')->get()->first();

        foreach ($laptops as $data) {
            $product = Product::create($data);
            $product->categories()->attach($laptopCategory);
            foreach ($data['variations'] as $variationData) {
                $variation = $product->variations()->create($variationData);
                $variation->attributes()->create($variationData['attributes']);
            }
        }

        foreach ($smartphones as $data) {
            $product = Product::create($data);

            if ($data['category'] === 'samsung') {
                $product->categories()->attach($samsungCategory);
            }
            if ($data['category'] === 'lg') {
                $product->categories()->attach($lgCategory);
            }
            if ($data['category'] === 'huawei') {
                $product->categories()->attach($huaweiCategory);
            }
            foreach ($data['variations'] as $variationData) {
                $variation = $product->variations()->create($variationData);
                $variation->attributes()->create($variationData['attributes']);
            }
        }
    }
}