<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         3.3.4
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Event\Event;
use Cake\Controller\Component\CompanyDao;
/**
 * Error Handling Controller
 *
 * Controller used by ExceptionRenderer to render error responses.
 */
class IndexController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('CompanyDao');
    }

   public function index()
   {
        $this->set('company', $this->CompanyDao->get(1));
        $this->set('companies', $this->CompanyDao->getAll());
   }
}
