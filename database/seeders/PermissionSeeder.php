<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        /*
         * categories permissions =====================================================
         */
        Permission::query()->insert([
            [
                'title' => 'create-category',
                'label' => 'ایجاد دسته بندی',
            ],
            [
                'title' => 'read-category',
                'label' => 'مشاهده دسته بندی',
            ],
            [
                'title' => 'update-category',
                'label' => 'ویرایش دسته بندی',
            ], [
                'title' => 'delete-category',
                'label' => 'حذف دسته بندی',
            ],
        ]);
        /*
         * brands permissions =====================================================
         */
        Permission::query()->insert([
            [
                'title' => 'create-brand',
                'label' => 'ایجاد برند',
            ],
            [
                'title' => 'read-brand',
                'label' => 'مشاهده برند',
            ],
            [
                'title' => 'update-brand',
                'label' => 'ویرایش برند',
            ], [
                'title' => 'delete-brand',
                'label' => 'حذف برند',
            ],
        ]);
        /*
        * products permissions =====================================================
        */
        Permission::query()->insert([
            [
                'title' => 'create-product',
                'label' => 'ایجاد محصول',
            ],
            [
                'title' => 'read-product',
                'label' => 'مشاهده محصول',
            ],
            [
                'title' => 'update-product',
                'label' => 'ویرایش محصول',
            ], [
                'title' => 'delete-product',
                'label' => 'حذف محصول',
            ],
        ]);
        /*
        * discount(number%) permissions =====================================================
        */
        Permission::query()->insert([
            [
                'title' => 'create-discount',
                'label' => 'ایجاد تخفیف',
            ],
            [
                'title' => 'read-discount',
                'label' => 'مشاهده تخفیف',
            ],
            [
                'title' => 'update-discount',
                'label' => 'ویرایش تخفیف',
            ], [
                'title' => 'delete-discount',
                'label' => 'حذف تخفیف',
            ],
        ]);
        /*
        * offers(discountCode) permissions =====================================================
        */
        Permission::query()->insert([
            [
                'title' => 'create-offers',
                'label' => 'ایجاد کد تخفیف',
            ],
            [
                'title' => 'read-offers',
                'label' => 'مشاهده کد تخفیف',
            ],
            [
                'title' => 'update-offers',
                'label' => 'ویرایش کد تخفیف',
            ], [
                'title' => 'delete-offers',
                'label' => 'حذف کد تخفیف',
            ],
        ]);
        /*
        * pictures(gallery) permissions =====================================================
        */
        Permission::query()->insert([
            [
                'title' => 'create-gallery',
                'label' => 'ایجاد گالری',
            ],
            [
                'title' => 'read-gallery',
                'label' => 'مشاهده گالری',
            ],
            [
                'title' => 'update-gallery',
                'label' => 'ویرایش گالری',
            ], [
                'title' => 'delete-gallery',
                'label' => 'حذف گالری',
            ],
        ]);
        /*
        * roles permissions =====================================================
        */
        Permission::query()->insert([
            [
                'title' => 'create-role',
                'label' => 'ایجاد نقش',
            ],
            [
                'title' => 'read-role',
                'label' => 'مشاهده نقش',
            ],
            [
                'title' => 'update-role',
                'label' => 'ویرایش نقش',
            ], [
                'title' => 'delete-role',
                'label' => 'حذف نقش',
            ],
        ]);
        /*
        * dashboard permissions =====================================================
        */
        Permission::query()->create([
            'title' => 'view-dashboard',
            'label' => 'مشاهده داشبورد',
        ]);
    }
}
