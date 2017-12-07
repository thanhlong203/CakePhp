<?php
namespace App\Model\Table;
use Cake\ORM\Query;
use Cake\ORM\Table;

class CompanyTable extends Table
{

    public function initialize(array $config)
    {
        // $this->setTable('company');

        // Prior to 3.4.0
        $this->table('company');
    }

    public function findId(Query $query, array $options)
    {
        $id = $options['id'];
        return $query->where(['ID' => $id])->first();
    }

    public function findAll(Query $query, array $options)
    {
        return $query->toArray();
    }

}