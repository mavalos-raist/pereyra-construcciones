<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_leads', function (Blueprint $table): void {
            $table->id();
            $table->string('full_name', 120);
            $table->string('phone', 40);
            $table->string('email', 120)->nullable();
            $table->string('service', 120);
            $table->string('budget_scope', 32);
            $table->string('project_location', 120)->nullable();
            $table->string('preferred_contact', 32);
            $table->text('message');
            $table->ipAddress('ip_address')->nullable();
            $table->string('user_agent')->nullable();
            $table->string('status', 32)->default('nuevo');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_leads');
    }
};
