<?php
/**
 * This file is part of the doctrine spatial extension.
 *
 * PHP 8.1 | 8.2 | 8.3
 * Doctrine ORM 2.19 | 3.1
 *
 * Copyright Alexandre Tranchant <alexandre.tranchant@gmail.com> 2017-2024
 * Copyright Longitude One 2020-2024
 * Copyright 2015 Derek J. Lambert
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

declare(strict_types=1);

namespace LongitudeOne\Spatial\ORM\Query\AST\Functions\MySql;

use LongitudeOne\Spatial\ORM\Query\AST\Functions\Standard\StSrid as StandardStSrid;
use Doctrine\DBAL\Platforms\MySQLPlatform;

/**
 * ST_SRID DQL function for MySQL
 *
 * @author  Alexandre Tranchant <alexandre.tranchant@gmail.com>
 * @license https://alexandre-tranchant.mit-license.org MIT
 */
class StSrid extends StandardStSrid
{

    /**
     * Maximum number of parameters for the spatial function.
     *
     * @since 2.0 This function replace the protected property maxGeomExpr.
     *
     * @return int the inherited methods shall NOT return null, but 0 when function has no parameter
     */
    protected function getMaxParameter() : int
    {
        return 2;
    }

    protected function getPlatforms() : array
    {
        return [MySQLPlatform::class];
    }
}