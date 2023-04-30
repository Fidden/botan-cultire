<?php

use App\Models\Book;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('book_screenshots', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Book::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->string('src');
            $table->timestamps();
        });
    }
};
