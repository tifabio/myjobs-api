<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\JobRepository")
 */
class Job
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"rest"})
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"rest"})
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"rest"})
     */
    private $company;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"rest"})
     */
    private $link;

    /**
     * @ORM\Column(type="string", length=20)
     * @Groups({"rest"})
     */
    private $status;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"rest"})
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"rest"})
     */
    private $updated_at;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\JobUpdate", mappedBy="job")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"rest"})
     */
    private $jobUpdates;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function getJobUpdates()
    {
        return \count($this->jobUpdates);
    }
}
