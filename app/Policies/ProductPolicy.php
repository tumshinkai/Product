<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProductPolicy
{
    public function viewAny(User $user): bool
    {
        // ตัวอย่าง: ให้ทุกคนเห็นรายการสินค้า
        return true;
    }

    public function view(User $user, Product $product): bool
    {
        // ตัวอย่าง: ให้ทุกคนเห็นข้อมูลสินค้า
        return true;
    }

    public function create(User $user): bool
    {
        // ตัวอย่าง: ให้เฉพาะผู้ที่ล็อกอินเท่านั้นที่สามารถสร้างสินค้าได้
        return $user->isAuthenticated();
    }

    public function update(User $user, Product $product): bool
    {
        // ตัวอย่าง: ให้เฉพาะเจ้าของสินค้าเท่านั้นที่สามารถแก้ไขข้อมูลสินค้าได้
        return $user->id === $product->user_id;
    }

    public function delete(User $user, Product $product): bool
    {
        // ตัวอย่าง: ให้เฉพาะเจ้าของสินค้าเท่านั้นที่สามารถลบสินค้าได้
        return $user->id === $product->user_id;
    }

    // ส่วนที่เหลือให้คุณทำการกำหนดตามความต้องการของแอปพลิเคชัน
    // ...

}

