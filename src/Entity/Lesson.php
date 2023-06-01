<?php

namespace App\Entity;

use App\Repository\LessonRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=LessonRepository::class)
 */
class Lesson
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Course::class, inversedBy="lessons")
     * @ORM\JoinColumn(nullable=false)
     */
    private $course;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(
     *     message = "Введите Наименование"
     * )
     * @Assert\Length(
     *     max = 255,
     *     maxMessage = "Наименование должно быть не более 255 символов."
     * )
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(
     *     message = "Введите содержимое урока"
     * )
     */
    private $content;

    /**
     * @ORM\Column(type="smallint")
     * @Assert\LessThan(
     *     value = 10000,
     *     message = "Порядок сортировки должен быть меньше 10000"
     * )
     */
    private $sort;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCourse(): ?Course
    {
        return $this->course;
    }

    public function setCourse(?Course $course): self
    {
        $this->course = $course;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getSort(): ?int
    {
        return $this->sort;
    }

    public function setSort(?int $sort): self
    {
        $this->sort = $sort;

        return $this;
    }
}
