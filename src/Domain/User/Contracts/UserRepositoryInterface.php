<?php
/**
 * Created by PhpStorm.
 * User: d.lanec
 * Date: 11.05.2019
 * Time: 13:42
 */

namespace Project\Domain\User\Contracts;

use Repo\CrudRepositoryInterface;
use Repo\MapperInterface;

interface UserRepositoryInterface extends CrudRepositoryInterface, MapperInterface
{



}