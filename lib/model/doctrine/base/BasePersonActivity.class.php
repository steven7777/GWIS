<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('PersonActivity', 'doctrine');

/**
 * BasePersonActivity
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $person_id
 * @property integer $activity_id
 * @property enum $special_status
 * @property Person $Person
 * @property Activity $Activity
 * 
 * @method integer        getPersonId()       Returns the current record's "person_id" value
 * @method integer        getActivityId()     Returns the current record's "activity_id" value
 * @method enum           getSpecialStatus()  Returns the current record's "special_status" value
 * @method Person         getPerson()         Returns the current record's "Person" value
 * @method Activity       getActivity()       Returns the current record's "Activity" value
 * @method PersonActivity setPersonId()       Sets the current record's "person_id" value
 * @method PersonActivity setActivityId()     Sets the current record's "activity_id" value
 * @method PersonActivity setSpecialStatus()  Sets the current record's "special_status" value
 * @method PersonActivity setPerson()         Sets the current record's "Person" value
 * @method PersonActivity setActivity()       Sets the current record's "Activity" value
 * 
 * @package    gwis
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePersonActivity extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('person_activity');
        $this->hasColumn('person_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('activity_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('special_status', 'enum', 18, array(
             'type' => 'enum',
             'fixed' => 0,
             'unsigned' => false,
             'values' => 
             array(
              0 => 'Coordinator',
              1 => 'Deputy Coordinator',
              2 => 'Task Leader',
              3 => 'Science Manager',
              4 => 'Technical Manager',
              5 => 'Expert',
             ),
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 18,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Person', array(
             'local' => 'person_id',
             'foreign' => 'id'));

        $this->hasOne('Activity', array(
             'local' => 'activity_id',
             'foreign' => 'id'));
    }
}