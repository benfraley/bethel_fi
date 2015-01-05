<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace BethelFI\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Config\Config;
use \BethelFI\Model\Position as Position;
use \BethelFI\Model\PositionTable as PositionTable;
use Zend\Db\TableGateway\TableGateway;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $config = new Config(include 'config/autoload/local.php');
        
        $tableGateway = new TableGateway("position", $config->get("adapter"));
        $positionTable = new PositionTable($tableGateway);
        $p = $positionTable->getPosition(1);
        echo $p->date_created;
        die();
        
        return new ViewModel();
    }
}
