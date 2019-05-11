<?php
/**
 * Created by PhpStorm.
 * User: d.lanec
 * Date: 11.05.2019
 * Time: 13:08
 */

namespace Project\Application\Controllers;


use ActiveTableEngine\Concrete\ColumnTable;
use ActiveTableEngine\Concrete\FormInput;
use ActiveTableEngine\DataTableSimple;
use Project\Infrastructure\User\UserCriteria;
use Project\Infrastructure\User\UserRepository;

class Home
{

    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index(){

        $table = new DataTableSimple($this->userRepository,"users");
        $table->setSearchCriteria( new UserCriteria() );

        //columns
        $table->addColumn( new ColumnTable("id","№"));
        $table->addColumn( new ColumnTable("name","Наименование"));
        $table->addColumn( new ColumnTable("email","E-mail"));

        //fields
        $table->addField( new FormInput("id"));
        $table->addField( new FormInput("name"));
        $table->addField( new FormInput("email"));


        dump($table->render());

        echo "ok";
    }

}