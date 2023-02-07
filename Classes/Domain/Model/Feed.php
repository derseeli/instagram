<?php

declare(strict_types=1);

/*
 * This file is part of the Extension "instagram" for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace SvenPetersen\Instagram\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Feed extends AbstractEntity
{
    protected string $userId = '';

    protected string $token = '';

    protected string $tokenType = 'bearer';

    protected string $username = '';

    protected bool $showLiveData = false;

    /**
     * @var int
     */
    protected $_languageUid = -1;

    /**
     * @var ObjectStorage<\SvenPetersen\Instagram\Domain\Model\Post>
     */
    protected ?ObjectStorage $posts = null;

    protected ?\DateTimeImmutable $expiresAt = null;

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function setUserId(string $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getTokenType(): string
    {
        return $this->tokenType;
    }

    public function setTokenType(string $tokenType): self
    {
        $this->tokenType = $tokenType;

        return $this;
    }

    public function getExpiresAt(): ?\DateTimeImmutable
    {
        return $this->expiresAt;
    }

    public function setExpiresAt(\DateTimeImmutable $expiresAt): self
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return ObjectStorage<\SvenPetersen\Instagram\Domain\Model\Post>
     */
    public function getPosts(): ?ObjectStorage
    {
        return $this->posts;
    }

    /**
     * @param ObjectStorage<\SvenPetersen\Instagram\Domain\Model\Post> $posts
     */
    public function setPosts(ObjectStorage $posts): self
    {
        $this->posts = $posts;

        return $this;
    }

    /**
     * @param bool $showLiveData
     * @return Feed
     */
    public function setShowLiveData(bool $showLiveData): Feed
    {
        $this->showLiveData = $showLiveData;
        return $this;
    }

    /**
     * @return bool
     */
    public function isShowLiveData(): bool
    {
        return $this->showLiveData;
    }
}
