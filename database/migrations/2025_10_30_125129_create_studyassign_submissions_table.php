<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studyassign_submissions', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('slug')->unique();
            $table->string('biodata_id', 18)->index();
            $table->foreignId('section_id');
            $table->foreignId('education_level_id');
            $table->morphs('positionable');
            $table->foreignId('structural_id');
            $table->foreignId('workunit_id');
            $table->foreignId('target_edulevel_id');
            $table->string('college_name')->index();
            $table->string('study_program')->index();
            $table->string('officer_id', 18)->nullable()->index();
            $table->enum('mode', ['RECOMMEND', 'LICENSE'])->default('RECOMMEND');
            $table->enum('type', ['PERMIT', 'ASSIGNMENT'])->default('PERMIT');

            // surat ijin atasan/kepala dinas
            $table->date('recommend_permission_date')->nullable()->index();
            $table->string('recommend_permission_number')->nullable();
            $table->string('recommend_permission_position')->nullable();
            $table->string('recommend_permission_officer')->nullable();
            $table->string('recommend_permission_section')->nullable();
            $table->string('recommend_permission_nip')->nullable();
            $table->string('recommend_permission_path')->nullable();
            $table->boolean('recommend_permission_status')->index()->default(false);

            $table->string('recommend_status')->index();
            $table->boolean('recommend_linear')->index()->default(false);
            $table->jsonb('recommend_files')->nullable();

            // surat rekomendasi
            $table->date('recommend_letter_date')->nullable()->index();
            $table->string('recommend_letter_number')->nullable();
            $table->string('recommend_letter_position')->nullable();
            $table->string('recommend_letter_officer')->nullable();
            $table->string('recommend_letter_section')->nullable();
            $table->string('recommend_letter_nip')->nullable();
            $table->string('recommend_letter_path')->nullable();
            $table->boolean('recommend_letter_status')->index()->default(false);

            // surat keterangan di terima seleksi
            $table->date('selection_pass_date')->nullable()->index();
            $table->string('selection_pass_number')->nullable();
            $table->string('selection_pass_path')->nullable();

            // surat usulan (S3)
            $table->date('license_proposal_date')->nullable()->index();
            $table->string('license_proposal_number')->nullable();
            $table->string('license_proposal_position')->nullable();
            $table->string('license_proposal_officer')->nullable();
            $table->string('license_proposal_section')->nullable();
            $table->string('license_proposal_nip')->nullable();
            $table->string('license_proposal_path')->nullable();
            $table->boolean('license_proposal_status')->index()->default(false);

            // surat rekomendasi
            $table->date('license_letter_date')->nullable()->index();
            $table->string('license_letter_number')->nullable();
            $table->string('license_letter_position')->nullable();
            $table->string('license_letter_officer')->nullable();
            $table->string('license_letter_section')->nullable();
            $table->string('license_letter_nip')->nullable();
            $table->string('license_letter_path')->nullable();
            $table->boolean('license_letter_status')->index()->default(false);

            $table->string('license_status')->nullable()->index();
            $table->jsonb('meta')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studyassign_submissions');
    }
};
