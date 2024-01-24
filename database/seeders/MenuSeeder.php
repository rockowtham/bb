<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $menus = [
            [
                'label' => 'Home',
                'url' => '/',
                'children' => [],
            ],
            [
                'label' => 'Products',
                'url' => '/products',
                'children' => [],
            ],
            [
                'label' => 'Categories',
                'url' => null,
                'children' => [
                    [
                        'label' => 'Hair Accessories',
                        'url' => '/categories/hair-accessories',
                        'children' => [],
                    ],
                    [
                        'label' => 'Stationaries',
                        'url' => '/categories/stationaries',
                        'children' => [],
                    ],
                ],
            ],
            [
                'label' => 'About Us',
                'url' => '/about-us',
                'children' => [],
            ],
            [
                'label' => 'Contact',
                'url' => '/contact',
                'children' => [],
            ],
        ];

        foreach ($menus as $menu) {
            $this->createMenu($menu);
        }
    }

    private function createMenu($menuData, $parentId = null)
    {
        $url = $menuData['url'] ?? ''; // Provide a default value if 'url' is null
    
        $menu = DB::table('menus')->insertGetId([
            'label' => $menuData['label'],
            'url' => $url,
            'parent_id' => $parentId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
        if (isset($menuData['children']) && is_array($menuData['children'])) {
            foreach ($menuData['children'] as $child) {
                $this->createMenu($child, $menu);
            }
        }
    }
    
}
