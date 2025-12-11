<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.banner_faq');
        $this->migrator->add('general.banner_testimonial');
    }

    public function down(): void
    {
        $this->migrator->delete('general.banner_faq');
        $this->migrator->delete('general.banner_testimonial');
    }
};
