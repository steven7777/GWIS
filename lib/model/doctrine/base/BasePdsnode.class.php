<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Pdsnode', 'doctrine');

/**
 * BasePdsnode
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $url
 * @property Doctrine_Collection $NodePdsnode
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method string              getName()        Returns the current record's "name" value
 * @method string              getUrl()         Returns the current record's "url" value
 * @method Doctrine_Collection getNodePdsnode() Returns the current record's "NodePdsnode" collection
 * @method Pdsnode             setId()          Sets the current record's "id" value
 * @method Pdsnode             setName()        Sets the current record's "name" value
 * @method Pdsnode             setUrl()         Sets the current record's "url" value
 * @method Pdsnode             setNodePdsnode() Sets the current record's "NodePdsnode" collection
 * 
 * @package    gwis
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePdsnode extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('pdsnode');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('url', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 150,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('NodePdsnode', array(
             'local' => 'id',
             'foreign' => 'pdsnode_id'));
    }
}