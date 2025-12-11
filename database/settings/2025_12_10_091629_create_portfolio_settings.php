<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('portfolio.banner');
        $this->migrator->add('portfolio.title');
        $this->migrator->add('portfolio.desc');
    }

    public function down(): void
    {
        $this->migrator->delete('portfolio.banner');
        $this->migrator->delete('portfolio.title');
        $this->migrator->delete('portfolio.desc');
    }
};
