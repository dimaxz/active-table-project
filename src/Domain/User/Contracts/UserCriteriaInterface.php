<?php
/**
 * Created by PhpStorm.
 * User: d.lanec
 * Date: 11.05.2019
 * Time: 14:20
 */

namespace Project\Domain\User\Contracts;


use Repo\PaginationInterface;
use Repo\RepositoryCriteriaInterface;

interface UserCriteriaInterface extends  PaginationInterface, RepositoryCriteriaInterface
{

    public function filterByName(string $name);

    public function filterByEmail(string $email);

}