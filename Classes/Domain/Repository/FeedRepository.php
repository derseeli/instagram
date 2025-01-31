<?php

declare(strict_types=1);

/*
 * This file is part of the Extension "instagram" for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace SvenPetersen\Instagram\Domain\Repository;

use SvenPetersen\Instagram\Domain\Model\Feed;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * @method Feed|null findOneByUsername(string $username)
 */
class FeedRepository extends Repository
{
}
