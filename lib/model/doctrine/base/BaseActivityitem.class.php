<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Activityitem', 'doctrine');

/**
 * BaseActivityitem
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $num
 * @property integer $activity_id
 * @property string $name
 * @property Activity $Activity
 * @property Doctrine_Collection $Doctype
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method integer             getNum()         Returns the current record's "num" value
 * @method integer             getActivityId()  Returns the current record's "activity_id" value
 * @method string              getName()        Returns the current record's "name" value
 * @method Activity            getActivity()    Returns the current record's "Activity" value
 * @method Doctrine_Collection getDoctype()     Returns the current record's "Doctype" collection
 * @method Activityitem        setId()          Sets the current record's "id" value
 * @method Activityitem        setNum()         Sets the current record's "num" value
 * @method Activityitem        setActivityId()  Sets the current record's "activity_id" value
 * @method Activityitem        setName()        Sets the current record's "name" value
 * @method Activityitem        setActivity()    Sets the current record's "Activity" value
 * @method Activityitem        setDoctype()     Sets the current record's "Doctype" collection
 * 
 * @package    gwis
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseActivityitem extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('activityitem');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('num', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('activity_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Activity', array(
             'local' => 'activity_id',
             'foreign' => 'id'));

        $this->hasMany('Doctype', array(
             'local' => 'id',
             'foreign' => 'activityitem_id'));
    }
}