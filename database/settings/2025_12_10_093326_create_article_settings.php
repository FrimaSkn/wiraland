<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('article.banner');
        $this->migrator->add('article.grid_title');
        $this->migrator->add('article.grid_desc');
    }

    public function down(): void
    {
        $this->migrator->delete('article.banner');
        $this->migrator->delete('article.grid_title');
        $this->migrator->delete('article.grid_desc');
    }
};
