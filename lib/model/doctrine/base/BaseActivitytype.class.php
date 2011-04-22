<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Activitytype', 'doctrine');

/**
 * BaseActivitytype
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id
 * @property string $name
 * @property string $description
 * @property Doctrine_Collection $Activity
 * 
 * @method string              getId()          Returns the current record's "id" value
 * @method string              getName()        Returns the current record's "name" value
 * @method string              getDescription() Returns the current record's "description" value
 * @method Doctrine_Collection getActivity()    Returns the current record's "Activity" collection
 * @method Activitytype        setId()          Sets the current record's "id" value
 * @method Activitytype        setName()        Sets the current record's "name" value
 * @method Activitytype        setDescription() Sets the current record's "description" value
 * @method Activitytype        setActivity()    Sets the current record's "Activity" collection
 * 
 * @package    gwis
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseActivitytype extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('activitytype');
        $this->hasColumn('id', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 3,
             ));
        $this->hasColumn('name', 'string', 80, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 80,
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
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Activity', array(
             'local' => 'id',
             'foreign' => 'activitytype_id'));
    }
}