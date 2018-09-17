<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

/**
 * Class MatrixLog
 * @package App
 */
class MatrixLog extends Model
{
    protected $collection = 'log';
    protected $connection = 'mongodb';
}