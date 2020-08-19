<?php

namespace Database\Migrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema as Schema;
use LaravelDoctrine\Migrations\Schema\Table;
use LaravelDoctrine\Migrations\Schema\Builder;

class Version20200819150149 extends AbstractMigration
{
    /**
    * @param Schema $schema
    */
    public function up(Schema $schema): void
    {
        (new Builder($schema))->create('vacancies', function (Table $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('categories');
            $table->string('company');
            $table->text('content');
            $table->timestamps();
        });
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema): void
    {
        (new Builder($schema))->dropIfExists('vacancies');
    }
}
