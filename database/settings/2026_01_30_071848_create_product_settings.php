<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('product.banner', '');
        $this->migrator->add('product.thumb_catalogue', null);
        $this->migrator->add('product.product_catalogue', null);
        $this->migrator->add('product.ecommerce', null);
    }

    public function down(): void
    {
        $this->migrator->delete('product.banner');
        $this->migrator->delete('product.thumb_catalogue');
        $this->migrator->delete('product.product_catalogue');
        $this->migrator->delete('product.ecommerce');
    }
};
