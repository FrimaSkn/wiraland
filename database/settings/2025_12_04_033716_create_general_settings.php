<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.circular');
        $this->migrator->add('general.director');
        $this->migrator->add('general.social_media');
    }

    public function down(): void
    {
        $this->migrator->delete('general.circular');
        $this->migrator->delete('general.director');
        $this->migrator->delete('general.social_media');
    }
};
