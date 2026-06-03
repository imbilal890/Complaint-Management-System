 <?php
 
 Schema::create('complaints', function (Blueprint $table) {
    $table->id();
    $table->string('complaint_code')->unique();
    $table->string('name');
    $table->string('category');
    $table->text('address');
    $table->text('description');
    $table->string('status')->default('Pending');
    $table->timestamps();
});