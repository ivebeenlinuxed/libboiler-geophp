<?php
namespace Library\GeoPHP\Geometry;
use Library\GeoPHP\geoPHP;
/**
 * MultiPolygon: A collection of Polygons
 */
class MultiPolygon extends Collection 
{
  protected $geom_type = 'MultiPolygon';
}
