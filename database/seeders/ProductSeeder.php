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
        $attributes = [
            'size' => [
                'name' => 'Size',
                'slug' => 'size',
            ],
            'color' => [
                'name' => 'Color',
                'slug' => 'color',
            ],
        ];
        $attributeOptions = [
            '14_inch' => [
                'name' => '14 Inch',
                'value' => '14_inch',
            ],
            '15_inch' => [
                'name' => '15 Inch',
                'value' => '15_inch',
            ],
            'silver' => [
                'name' => 'Silver',
                'value' => 'silver',
            ],
            'black' => [
                'name' => 'Black',
                'value' => 'black',
            ],
            'white' => [
                'name' => 'White',
                'value' => 'white',
            ],
            'red' => [
                'name' => 'Red',
                'value' => 'red',
            ],
            'blue' => [
                'name' => 'Blue',
                'value' => 'blue',
            ],
            'gray' => [
                'name' => 'Gray',
                'value' => 'gray',
            ],
            'lilac_purple' => [
                'name' => 'Lilac Purple',
                'value' => 'lilac_purple',
            ],
            'midnight_black' => [
                'name' => 'Midnight Black',
                'value' => 'midnight_black',
            ],
            'coral_blue' => [
                'name' => 'Coral Blue',
                'value' => 'coral_blue',
            ],
            'aura_glow' => [
                'name' => 'Aura Glow',
                'value' => 'aura_glow',
            ],
            'aura_white' => [
                'name' => 'Aura White',
                'value' => 'aura_white',
            ],
            'aura_black' => [
                'name' => 'Aura Black',
                'value' => 'aura_black',
            ],
            'opal_blue' => [
                'name' => 'Opal Blue',
                'value' => 'opal_blue',
            ],
            'space_black' => [
                'name' => 'Space Black',
                'value' => 'space_black',
            ],
        ];
        $laptops = [
            [
                'name' => 'Zenbook',
                'sku' => 'ZB-001',
                'description' => "Elegant, trendy, thin and light, it's the best laptop for on-the-go work and entertainment.",
                'attributes' => [
                    [
                        'slug' => 'size',
                        'value' => '14_inch',
                    ],
                    [
                        'slug' => 'color',
                        'value' => 'silver',
                    ],
                    [
                        'slug' => 'size',
                        'value' => '15_inch',
                    ],
                    [
                        'slug' => 'color',
                        'value' => 'black',
                    ],
                ],
                'variations' => [
                    [
                        'sku' => 'ZB-001-14inch-silver',
                        'price' => 3000.00,
                        'images' => [
                            [
                                'path' => '/images/asus-zenbook-silver.png'
                            ]
                        ],
                        'attributes' => [
                            '14_inch',
                            'silver',
                        ]
                    ],
                    [
                        'sku' => 'ZB-001-15inch-silver',
                        'price' => 3100.00,
                        'images' => [
                            [
                                'path' => '/images/asus-zenbook-silver.png'
                            ]
                        ],
                        'attributes' => [
                            '15_inch',
                            'silver',
                        ]
                    ],
                    [
                        'sku' => 'ZB-001-14inch-black',
                        'price' => 3000.00,
                        'images' => [
                            [
                                'path' => '/images/asus-zenbook-black.png'
                            ]
                        ],
                        'attributes' => [
                            '14_inch',
                            'black',
                        ]
                    ],
                    [
                        'sku' => 'ZB-001-15inch-black',
                        'price' => 3100.00,
                        'images' => [
                            [
                                'path' => '/images/asus-zenbook-black.png'
                            ]
                        ],
                        'attributes' => [
                            '15_inch',
                            'black',
                        ]
                    ],
                ]
            ],
            [
                'name' => 'Hp Pavilion',
                'sku' => 'HPAV-001',
                'description' => "HP Pavilion is a line of consumer-oriented laptop and desktop computers produced by HP Inc.",
                'attributes' => [
                    [
                        'slug' => 'size',
                        'value' => '14_inch',
                    ],
                    [
                        'slug' => 'color',
                        'value' => 'silver',
                    ],
                    [
                        'slug' => 'size',
                        'value' => '15_inch',
                    ],
                    [
                        'slug' => 'color',
                        'value' => 'red',
                    ],
                ],
                'variations' => [
                    [
                        'sku' => 'HPAV-001-14inch-red',
                        'price' => 2800.00,
                        'images' => [
                            [
                                'path' => '/images/hp-pavillion-red.jpg'
                            ]
                        ],
                        'attributes' => [
                            '14_inch',
                            'red',
                        ]
                    ],
                    [
                        'sku' => 'HPAV-001-15inch-red',
                        'price' => 3000.00,
                        'images' => [
                            [
                                'path' => '/images/hp-pavillion-red.jpg'
                            ]
                        ],
                        'attributes' => [
                            '15_inch',
                            'red',
                        ]
                    ],
                    [
                        'sku' => 'HPAV-001-14inch-silver',
                        'price' => 2800.00,
                        'images' => [
                            [
                                'path' => '/images/hp-pavillion-silver.jpg'
                            ]
                        ],
                        'attributes' => [
                            '14_inch',
                            'silver',
                        ]
                    ],
                    [
                        'sku' => 'HPAV-001-15inch-silver',
                        'price' => 3000.00,
                        'images' => [
                            [
                                'path' => '/images/hp-pavillion-red.jpg'
                            ]
                        ],
                        'attributes' => [
                            '15_inch',
                            'silver',
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
                'attributes' => [
                    [
                        'slug' => 'color',
                        'value' => 'midnight_black',
                    ],
                    [
                        'slug' => 'color',
                        'value' => 'lilac_purple',
                    ],
                    [
                        'slug' => 'color',
                        'value' => 'coral_blue',
                    ],
                ],
                'variations' => [
                    [
                        'sku' => 'SG-009-lilac_purple',
                        'price' => 2000.00,
                        'images' => [
                            [
                                'path' => '/images/s9-purple.jpg'
                            ]
                        ],
                        'attributes' => [
                            'lilac_purple',
                        ],
                    ],
                    [
                        'sku' => 'SG-009-midnight_black',
                        'price' => 2000.00,
                        'images' => [
                            [
                                'path' => '/images/s9-black.jpg'
                            ]
                        ],
                        'attributes' => [
                            'midnight_black',
                        ],
                    ],
                    [
                        'sku' => 'SG-009-coral_blue',
                        'price' => 2000.00,
                        'images' => [
                            [
                                'path' => '/images/s9-blue.jpg'
                            ]
                        ],
                        'attributes' => [
                            'coral_blue',
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Samsung Note 10',
                'sku' => 'SN-010',
                'description' => "Elegant, trendy, thin and light, it's the best laptop for on-the-go work and entertainment.",
                'category' => 'samsung',
                'attributes' => [
                    [
                        'slug' => 'color',
                        'value' => 'aura_glow',
                    ],
                    [
                        'slug' => 'color',
                        'value' => 'aura_white',
                    ],
                    [
                        'slug' => 'color',
                        'value' => 'aura_black',
                    ],
                ],
                'variations' => [
                    [
                        'sku' => 'SN-010-aura_glow',
                        'price' => 3000.00,
                        'images' => [
                            [
                                'path' => '/images/sn10-glow.jpg'
                            ]
                        ],
                        'attributes' => [
                            'aura_glow',
                        ],
                    ],
                    [
                        'sku' => 'SN-010-aura_white',
                        'price' => 3000.00,
                        'images' => [
                            [
                                'path' => '/images/sn10-white.jpg'
                            ]
                        ],
                        'attributes' => [
                            'aura_white',
                        ],
                    ],
                    [
                        'sku' => 'SN-010-aura_black',
                        'price' => 3000.00,
                        'images' => [
                            [
                                'path' => '/images/sn10-black.jpg'
                            ]
                        ],
                        'attributes' => [
                            'aura_black',
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Samsung Galaxy s59',
                'sku' => 'SG-068',
                'description' => 'New condition • No returns, but backed by eBay Money back guarantee',
                'category' => 'samsung',
                'attributes' => [
                    [
                        'slug' => 'color',
                        'value' => 'blue',
                    ],
                    [
                        'slug' => 'color',
                        'value' => 'black',
                    ],
                    [
                        'slug' => 'color',
                        'value' => 'white',
                    ],
                ],
                'variations' => [
                    [
                        'sku' => 'SG-068-blue',
                        'price' => 658.00,
                        'images' => [
                            [
                                'path' => '/images/s59-blue.jpg'
                            ]
                        ],
                        'attributes' => [
                            'blue',
                        ],
                    ],
                    [
                        'sku' => 'SG-068-black',
                        'price' => 658.00,
                        'images' => [
                            [
                                'path' => '/images/s59-black.jpg'
                            ]
                        ],
                        'attributes' => [
                            'black',
                        ],
                    ],
                    [
                        'sku' => 'SG-068-white',
                        'price' => 658.00,
                        'images' => [
                            [
                                'path' => '/images/s59-white.jpg'
                            ]
                        ],
                        'attributes' => [
                            'white',
                        ],
                    ],
                ],
            ],
            [
                'name' => 'LG V10 H900',
                'sku' => 'LG-V10-H900',
                'description' => 'NETWORK Technology GSM. Protection Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue. SAR EU 0.59 W/kg (head).',
                'category' => 'lg',
                'attributes' => [
                    [
                        'slug' => 'color',
                        'value' => 'opal_blue',
                    ],
                    [
                        'slug' => 'color',
                        'value' => 'space_black',
                    ],
                ],
                'variations' => [
                    [
                        'sku' => 'LG-V10-H900-opal_blue',
                        'price' => 159.00,
                        'images' => [
                            [
                                'path' => '/images/lg-blue.jpg'
                            ]
                        ],
                        'attributes' => [
                            'opal_blue',
                        ],
                    ],
                    [
                        'sku' => 'LG-V10-H900-space_black',
                        'price' => 159.00,
                        'images' => [
                            [
                                'path' => '/images/lg-black.jpg'
                            ]
                        ],
                        'attributes' => [
                            'space_black',
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Huawei Elate',
                'sku' => 'HW-E001',
                'description' => 'Cricket Wireless - Huawei Elate. New Sealed Huawei Elate Smartphone.',
                'category' => 'huawei',
                'attributes' => [
                    [
                        'slug' => 'color',
                        'value' => 'gray',
                    ],
                ],
                'variations' => [
                    [
                        'sku' => 'HW-E001-gray',
                        'price' => 300.00,
                        'images' => [
                            [
                                'path' => '/images/hw-gray.jpg'
                            ]
                        ],
                        'attributes' => [
                            'gray',
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
        $smartphoneCategory->children()->createMany([
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
            $productData = $data;
            unset($productData['variations']);
            unset($productData['attributes']);
            $product = Product::create($productData);
            $product->categories()->attach($laptopCategory->id);
            $product->attributes()->createMany($attributes);
            $productAttributes = $product->refresh()->attributes->keyBy('slug');
            array_map(function ($attribute) use ($productAttributes, $attributeOptions) {
                $productAttributes[$attribute['slug']]->options()->create($attributeOptions[$attribute['value']]);
            }, $data['attributes']);
            $productAttributeOptions = $product->refresh()->attribute_options->keyBy('value');
            foreach ($data['variations'] as $variationData) {
                $variationAttributes = $variationData['attributes'];
                $imageData = $variationData['images'];
                unset($variationData['attributes']);
                unset($variationData['images']);
                $variation = $product->variations()->create($variationData);
                $attributeData = array_map(function ($option) use ($productAttributeOptions) {
                    return $productAttributeOptions[$option]->id;
                }, $variationAttributes);
                $variation->attribute_options()->sync($attributeData);
                $variation->images()->createMany($imageData);
            }
        }
        
        foreach ($smartphones as $data) {
            $productData = $data;
            unset($productData['variations']);
            unset($productData['attributes']);
            unset($productData['category']);
            $product = Product::create($productData);

            if ($data['category'] === 'samsung') {
                $product->categories()->attach($samsungCategory);
            }
            if ($data['category'] === 'lg') {
                $product->categories()->attach($lgCategory);
            }
            if ($data['category'] === 'huawei') {
                $product->categories()->attach($huaweiCategory);
            }

            $product->attributes()->createMany($attributes);
            $productAttributes = $product->refresh()->attributes->keyBy('slug');
            array_map(function ($attribute) use ($productAttributes, $attributeOptions) {
                $productAttributes[$attribute['slug']]->options()->create($attributeOptions[$attribute['value']]);
            }, $data['attributes']);
            $productAttributeOptions = $product->refresh()->attribute_options->keyBy('value');
            foreach ($data['variations'] as $variationData) {
                $variationAttributes = $variationData['attributes'];
                $imageData = $variationData['images'];
                unset($variationData['attributes']);
                unset($variationData['images']);
                $variation = $product->variations()->create($variationData);
                $attributeData = array_map(function ($option) use ($productAttributeOptions) {
                    return $productAttributeOptions[$option]->id;
                }, $variationAttributes);
                $variation->attribute_options()->sync($attributeData);
                $variation->images()->createMany($imageData);
            }
        }
    }
}
