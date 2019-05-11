<?php
/**
 * Created by PhpStorm.
 * User: d.lanec
 * Date: 11.05.2019
 * Time: 13:22
 */

namespace Project\Infrastructure\User;


use Project\Domain\User\Contracts\UserCriteriaInterface;
use Project\Domain\User\Contracts\UserRepositoryInterface;
use Project\Domain\User\User;
use Project\Domain\User\UserCollection;
use Repo\CollectionInterface;
use Repo\EntityInterface;
use Repo\PaginationInterface;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @param UserCriteriaInterface $criteria
     * @return UserCollection
     */
    public function findByCriteria(PaginationInterface $criteria): CollectionInterface
    {
        return (new UserCollection())
            ->push(
                (new User())
                ->setId(1)
                ->setEmail("test@mail.ru")
                ->setName("Vova")
            )
            ->push(
                (new User())
                    ->setId(2)
                    ->setEmail("test1@mail.ru")
                    ->setName("Petia")
            )
            ;
    }

    /**
     * @return int
     */
    public function count(): int
    {
        // TODO: Implement count() method.
    }

    /**
     * @param \Repo\EntityInterface $entity
     * @return mixed
     */
    public function save(\Repo\EntityInterface $entity)
    {
        // TODO: Implement save() method.
    }

    /**
     * @param int $id
     * @return \Repo\EntityInterface|null
     */
    public function findById(int $id): ?EntityInterface
    {
        // TODO: Implement findById() method.
    }

    /**
     * @param \Repo\EntityInterface $entity
     * @return mixed
     */
    public function delete(\Repo\EntityInterface $entity)
    {
        // TODO: Implement delete() method.
    }

    /**
     * @return \Repo\EntityInterface
     */
    public static function createEntity(): EntityInterface
    {
        // TODO: Implement createEntity() method.
    }

    /**
     * @param array $row
     * @return \Repo\EntityInterface
     */
    public static function buildEntityFromArray(array $row): EntityInterface
    {
        // TODO: Implement buildEntityFromArray() method.
    }


}