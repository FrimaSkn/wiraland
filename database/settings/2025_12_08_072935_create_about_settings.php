<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('about.banner');
        $this->migrator->add('about.grid_title');
        $this->migrator->add('about.grid_desc');
        $this->migrator->add('about.vision_mission');
        $this->migrator->add('about.journey');
    }

    public function down(): void
    {
        $this->migrator->delete('about.banner');
        $this->migrator->delete('about.grid_title');
        $this->migrator->delete('about.grid_desc');
        $this->migrator->delete('about.vision_mission');
        $this->migrator->delete('about.journey');
    }
};
