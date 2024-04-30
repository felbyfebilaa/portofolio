<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\setting;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->String('key');
            $table->String('label');
            $table->String('value')->nullable();
            $table->String('type');
            $table->timestamps();
        });

        setting::create([
            'key' => '_site_name',
            'label' => 'Judul Situs',
            'value' => 'Website Sederhana Portofolio',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_location',
            'label' => 'alamat',
            'value' => 'Felby, Padang, Indonesia',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_instagram',
            'label' => 'instagram',
            'value' => 'https://www.instagram.com/felbyfebilaa?igsh=NGxxbDViaTRvanFi',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_tiktok',
            'label' => 'tiktok',
            'value' => 'https://www.tiktok.com/@felbyyfebilaa?_t=8kOy8TA2yH3&_r=1',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_site_description',
            'label' => 'site deskription',
            'value' => 'website sederhana portofolio',
            'type' => 'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
