<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('home.banner');
        $this->migrator->add('home.section_one_title');
        $this->migrator->add('home.section_one_desc');
        $this->migrator->add('home.section_one_video');
        $this->migrator->add('home.services');
        $this->migrator->add('home.section_image');
    }

    public function down(): void
    {
        $this->migrator->delete('home.banner');
        $this->migrator->delete('home.section_one_title');
        $this->migrator->delete('home.section_one_desc');
        $this->migrator->delete('home.section_one_video');
        $this->migrator->delete('home.services');
        $this->migrator->delete('home.section_image');
    }
};
