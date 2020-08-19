<?php

use App\Domain\Entities\Vacancy;
use Illuminate\Database\Seeder;
use LaravelDoctrine\ORM\Facades\EntityManager;
use Carbon\Carbon;

class VacanciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EntityManager::persist(new Vacancy('Web Application Developer', 'Web Application Developer is needed', 'IT, Programming', 'DevelopmentAid', Carbon::now()->subDays(1)));
        EntityManager::persist(new Vacancy('Software Engineer', 'Software Engineer is needed', 'IT, Programming', 'DevelopmentAid', Carbon::now()->subDays(2)));
        EntityManager::persist(new Vacancy('QA Engineer', 'We are looking for QA Engineer', 'IT, Programming', 'DevelopmentAid', Carbon::now()->subDays(3)));

        EntityManager::persist(new Vacancy('IT Engineering Manager', 'IT Engineering Manager is needed', 'IT, Programming', 'Mixbook', Carbon::now()->subDays(4)));
        EntityManager::persist(new Vacancy('.NET Developer | Esempla', '.NET Developer | Esempla is needed', 'IT, Programming', 'Mantis', Carbon::now()->subDays(4)));
        EntityManager::persist(new Vacancy('JAVA Developer', 'We are looking for JAVA Developer', 'IT, Programming', 'Epydoc', Carbon::now()->subDays(5)));

        EntityManager::persist(new Vacancy('Credit Control Support', 'We are looking for Credit Control Support ', 'Banks, Crediting', 'Sitra', Carbon::now()->subDays(10)));
        EntityManager::persist(new Vacancy('Comerciant pe pietele bursiere', 'We are looking for Comerciant pe pietele bursiere ', 'Banks, Crediting', 'Double Case', Carbon::now()->subDays(15)));
        EntityManager::persist(new Vacancy('Comerciant pe piata valutara (900 $)', 'We are looking for Comerciant pe piata valutara', 'Banks, Crediting', 'Double Case', Carbon::now()->subDays(35)));
        EntityManager::persist(new Vacancy('Specialist Sectia raportare', 'We are looking for Specialist Sectia raportare', 'Banks, Crediting', 'FinComBank', Carbon::now()->subDays(40)));

        EntityManager::persist(new Vacancy('Contabil', 'We are looking for Contabil ', 'Accountancy, Economists', 'Grawe Carat', Carbon::now()->subDays(41)));
        EntityManager::persist(new Vacancy('Programator 1C | DAAC System Integrator', 'We are looking for Programator 1C', 'Accountancy, Economists', 'Mantis', Carbon::now()->subDays(42)));
        EntityManager::persist(new Vacancy('Financial Analyst', 'We are looking for Financial Analyst', 'Accountancy, Economists', 'StarNet', Carbon::now()->subDays(45)));
        EntityManager::persist(new Vacancy('Chief Accountant', 'We are looking for Chief Accountant', 'Accountancy, Economists', 'StarNet', Carbon::now()->subDays(57)));

        EntityManager::persist(new Vacancy('Sofer', 'Sofer is needed', 'Driver', 'Construct Arabesque', Carbon::now()->subDays(60)));
        EntityManager::persist(new Vacancy('Sofer', 'Talent Sofer is needed', 'Driver', 'Nefis', Carbon::now()->subDays(61)));
        EntityManager::persist(new Vacancy('Curier Categoria B', 'We are looking for Curier', 'Driver', 'Smart.md', Carbon::now()->subDays(63)));

        EntityManager::persist(new Vacancy('Expert principal responsabil de organizare și gestiune TIC', 'We are looking for Expert principal responsabil de organizare și gestiune TIC', 'State institutions', 'Banca Națională a Moldovei', Carbon::now()->subDays(91)));
        EntityManager::persist(new Vacancy('Database administrator', 'We are looking for Database administrator', 'State institutions', 'Serviciul Tehnologia Informației și Securitate Cibernetică', Carbon::now()->subDays(92)));
        EntityManager::persist(new Vacancy('Operator gestiune creanţe', 'We are looking for Operator gestiune creanţe', 'State institutions', 'Moldtelecom', Carbon::now()->subDays(93)));

        EntityManager::flush();
    }
}
