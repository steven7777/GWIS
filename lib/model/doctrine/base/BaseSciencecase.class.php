<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Sciencecase', 'doctrine');

/**
 * BaseSciencecase
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $node_id
 * @property string $num
 * @property string $name
 * @property string $description
 * @property string $url
 * @property Node $Node
 * @property Doctrine_Collection $N2dwgSciencecase
 * @property Doctrine_Collection $NodeSciencecase
 * @property Doctrine_Collection $PersonSciencecase
 * @property Doctrine_Collection $ResourceSciencecase
 * 
 * @method integer             getId()                  Returns the current record's "id" value
 * @method integer             getNodeId()              Returns the current record's "node_id" value
 * @method string              getNum()                 Returns the current record's "num" value
 * @method string              getName()                Returns the current record's "name" value
 * @method string              getDescription()         Returns the current record's "description" value
 * @method string              getUrl()                 Returns the current record's "url" value
 * @method Node                getNode()                Returns the current record's "Node" value
 * @method Doctrine_Collection getN2dwgSciencecase()    Returns the current record's "N2dwgSciencecase" collection
 * @method Doctrine_Collection getNodeSciencecase()     Returns the current record's "NodeSciencecase" collection
 * @method Doctrine_Collection getPersonSciencecase()   Returns the current record's "PersonSciencecase" collection
 * @method Doctrine_Collection getResourceSciencecase() Returns the current record's "ResourceSciencecase" collection
 * @method Sciencecase         setId()                  Sets the current record's "id" value
 * @method Sciencecase         setNodeId()              Sets the current record's "node_id" value
 * @method Sciencecase         setNum()                 Sets the current record's "num" value
 * @method Sciencecase         setName()                Sets the current record's "name" value
 * @method Sciencecase         setDescription()         Sets the current record's "description" value
 * @method Sciencecase         setUrl()                 Sets the current record's "url" value
 * @method Sciencecase         setNode()                Sets the current record's "Node" value
 * @method Sciencecase         setN2dwgSciencecase()    Sets the current record's "N2dwgSciencecase" collection
 * @method Sciencecase         setNodeSciencecase()     Sets the current record's "NodeSciencecase" collection
 * @method Sciencecase         setPersonSciencecase()   Sets the current record's "PersonSciencecase" collection
 * @method Sciencecase         setResourceSciencecase() Sets the current record's "ResourceSciencecase" collection
 * 
 * @package    gwis
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSciencecase extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sciencecase');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('node_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('num', 'string', 5, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 5,
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('url', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => 'http://',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 150,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Node', array(
             'local' => 'node_id',
             'foreign' => 'id'));

        $this->hasMany('N2dwgSciencecase', array(
             'local' => 'id',
             'foreign' => 'sciencecase_id'));

        $this->hasMany('NodeSciencecase', array(
             'local' => 'id',
             'foreign' => 'sciencecase_id'));

        $this->hasMany('PersonSciencecase', array(
             'local' => 'id',
             'foreign' => 'sciencecase_id'));

        $this->hasMany('ResourceSciencecase', array(
             'local' => 'id',
             'foreign' => 'sciencecase_id'));
    }
}