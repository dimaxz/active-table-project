<?php
/**
 * Created by PhpStorm.
 * User: d.lanec
 * Date: 11.05.2019
 * Time: 14:25
 */

namespace Project\Infrastructure\User;


use Project\Domain\User\Contracts\UserCriteriaInterface;

class UserCriteria implements UserCriteriaInterface
{
    /**
     * @return int
     */
    public function getPage(): int
    {
        // TODO: Implement getPage() method.
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        // TODO: Implement getLimit() method.
    }

    /**
     * @return int
     */
    public function getDefaultLimit(): int
    {
        // TODO: Implement getDefaultLimit() method.
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function filterByName(string $name)
    {
        // TODO: Implement filterByName() method.
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function filterById(?int $id)
    {
        // TODO: Implement filterById() method.
    }

    /**
     * @param string $email
     * @return mixed
     */
    public function filterByEmail(string $email)
    {
        // TODO: Implement filterByEmail() method.
    }

    /**
     * @param string|null $sort
     * @return mixed
     */
    public function sortById(?string $sort)
    {
        // TODO: Implement sortById() method.
    }


    public static function create()
    {
        return new self;
    }

}