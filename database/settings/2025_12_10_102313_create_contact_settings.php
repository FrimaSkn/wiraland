<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('contact.banner');
        $this->migrator->add('contact.grid_title');
        $this->migrator->add('contact.grid_desc');
    }

    public function down(): void
    {
        $this->migrator->delete('contact.banner');
        $this->migrator->delete('contact.grid_title');
        $this->migrator->delete('contact.grid_desc');
    }
};
