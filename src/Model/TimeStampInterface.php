<?php

namespace App\Model;

interface TimeStampInterface
{
    public function getCreatedAt(): ?\DateTimeInterface;
    public function setCreatedAt(\DateTimeInterface $createdAt);
    public function getUpdatedAt(): ?\DateTimeInterface;
    public function setUpdatedAt(?\DateTimeInterface $updatedAt);
}