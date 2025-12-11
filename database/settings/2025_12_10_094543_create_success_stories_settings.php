<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('success-stories.banner');
        $this->migrator->add('success-stories.grid_title');
        $this->migrator->add('success-stories.grid_desc');
    }

    public function down(): void
    {
        $this->migrator->delete('success-stories.banner');
        $this->migrator->delete('success-stories.grid_title');
        $this->migrator->delete('success-stories.grid_desc');
    }
};
