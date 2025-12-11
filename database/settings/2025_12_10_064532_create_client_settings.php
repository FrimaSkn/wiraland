<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('clients.banner');
        $this->migrator->add('clients.title');
        $this->migrator->add('clients.desc');
    }

    public function down(): void
    {
        $this->migrator->delete('clients.banner');
        $this->migrator->delete('clients.title');
        $this->migrator->delete('clients.desc');
    }
};
