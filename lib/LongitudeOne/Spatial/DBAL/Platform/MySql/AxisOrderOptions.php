<?php
declare(strict_types=1);

namespace LongitudeOne\Spatial\DBAL\Platform\MySql;

use LongitudeOne\Spatial\DBAL\Types\AbstractSpatialType;
use LongitudeOne\Spatial\Exception\MissingArgumentException;
use LongitudeOne\Spatial\PHP\Types\SpatialInterface;
use LongitudeOne\Spatial\DBAL\Types\GeographyType;

/**
 * For Geographic types MySQL follows the WKT specifications and returns (latitude,longitude) while (x,y) / (longitude,latitude) might be expected by userland code.
 *
 * Using the following option the preferred axis-order can be indicated.
 *
 * @link https://dev.mysql.com/blog-archive/axis-order-in-spatial-reference-systems
 */
enum AxisOrderOptions : string
{
    case LONGITUDE_LATITUDE = 'axis-order=long-lat';
    case LATITUDE_LONGITUDE = 'axis-order=lat-long';
}