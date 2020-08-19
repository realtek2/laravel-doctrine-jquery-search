<?php

namespace App\Domain\Entities;

use Doctrine\ORM\Mapping as ORM;
use Carbon\Carbon;

/**
 * @ORM\Entity(repositoryClass="App\Domain\Repositories\VacancyRepository")
 * @ORM\Table(name="vacancies")
 */
class Vacancy
{
    public static $fields = ['id', 'title', 'content', 'categories', 'company', 'createdAt', 'updatedAt'];
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(name="title", type="string")
     */
    protected $title;

    /**
     * @ORM\Column(name="content", type="text")
     */
    protected $content;

    /**
     * @ORM\Column(name="categories", type="string")
     */
    protected $categories;

    /**
     * @ORM\Column(name="company", type="string")
     */
    protected $company;

    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
    protected $created_at;

    /**
     * @ORM\Column(name="updated_at", type="datetime")
     */
    protected $updated_at;


    public function __construct($title, $content, $categories, $company, $createdAt = null)
    {
        $this->title = $title;
        $this->content = $content;
        $this->categories = $categories;
        $this->company = $company;
        $this->created_at = $createdAt ?: Carbon::now();
        $this->updated_at = Carbon::now();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($value)
    {
        $this->title = $value;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($value)
    {
        $this->content = $value;
    }

    public function getCategories()
    {
        return $this->categories;
    }

    public function setCategories($value)
    {
        $this->categories = $value;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function setCompany($value)
    {
        $this->company = $value;
    }

    public function getCreatedAt()
    {
        return $this->created_at->format('F d, Y');
    }

    public function setCreatedAt($value)
    {
        $this->created_at = $value;
    }

    public function getUpdatedAt()
    {
        return $this->updated_at->format('F d, Y');
    }

    public function setUpdatedAt()
    {
        $this->updated_at = Carbon::now();
    }
}
