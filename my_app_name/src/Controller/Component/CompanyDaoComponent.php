<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

class CompanyDaoComponent extends Component
{
    public function get($id)
    {
        $company = TableRegistry::get('company');
        return $company->find('id', ['id' => $id]);
    // $connection = ConnectionManager::get('default');
    // return $connection
    // ->execute('SELECT * FROM company WHERE id = :id', ['id' => 1])
    // ->fetchAll('assoc');
    }

    public function getAll()
    {
        $company = TableRegistry::get('company');
        return $company->find("all", []);
    // $connection = ConnectionManager::get('default');
    // return $connection
    // ->execute('SELECT * FROM company WHERE id = :id', ['id' => 1])
    // ->fetchAll('assoc');
    }
}