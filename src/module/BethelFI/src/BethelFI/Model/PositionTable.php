<?php

namespace BethelFI\Model;

use Zend\Db\TableGateway\TableGateway;

class PositionTable
{

    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }

    public function getPosition($id)
    {
        $id  = (int) $id;
        $rowset = $this->tableGateway->select(array('id' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }

    public function savePosition($position)
    {
        $data = array(
            'x' => $position->x,
            'y'  => $position->y,
            'position'  => $position->position,
            'layout_id'  => $position->layout_id
        );
        
        die(print_r($position));

        $id = (int) $position->id;
        if ($id == 0) {
            $this->tableGateway->insert($data);
        } else {
            if ($this->getAlbum($id)) {
                $this->tableGateway->update($data, array('id' => $id));
            } else {
                throw new \Exception('Position id does not exist');
            }
        }
    }

    public function deletePosition($id)
    {
        $this->tableGateway->delete(array('id' => (int) $id));
    }

}