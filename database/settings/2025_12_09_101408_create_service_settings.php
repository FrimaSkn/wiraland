<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('service.banner');
        $this->migrator->add('service.grid_title');
        $this->migrator->add('service.grid_desc');
        $this->migrator->add('service.services');
        $this->migrator->add('service.section_two_title');
        $this->migrator->add('service.section_two');
    }

    public function down(): void
    {
        $this->migrator->delete('service.banner');
        $this->migrator->delete('service.grid_title');
        $this->migrator->delete('service.grid_desc');
        $this->migrator->delete('service.services');
        $this->migrator->delete('service.section_two_title');
        $this->migrator->delete('service.section_two');
    }
};
