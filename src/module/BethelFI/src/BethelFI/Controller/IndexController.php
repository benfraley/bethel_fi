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
use Zend\Http\Request;
use Zend\Db\TableGateway\TableGateway;

use \BethelFI\Model\Position as Position;
use \BethelFI\Model\PositionTable as PositionTable;


class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
    
    public function addPositionAction()
    {
        
        $config = new Config(include 'config/autoload/local.php');
        
        $position->x = $this->params()->fromQuery('x');
        $position->y = $this->params()->fromQuery('y');
        $position->position = $this->params()->fromQuery('position');
        $position->layout_id = 1;
        
        $tableGateway = new TableGateway("position", $config->get("adapter"));
        $positionTable = new PositionTable($tableGateway);
        $p = $positionTable->savePosition($position);
        
        $vm = new ViewModel();
        $vm->setTerminal(true);
        $vm->setVariable("message", print_r($p, true));
        return $vm;
        
    }
    
}
