<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Activity', 'doctrine');

/**
 * BaseActivity
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $num
 * @property string $activitytype_id
 * @property string $name
 * @property string $longname
 * @property string $description
 * @property string $homepage_url
 * @property Activitytype $Activitytype
 * @property Doctrine_Collection $Activityitem
 * @property Doctrine_Collection $Event
 * @property Doctrine_Collection $InstituteActivity
 * @property Doctrine_Collection $PersonActivity
 * 
 * @method integer             getId()                Returns the current record's "id" value
 * @method integer             getNum()               Returns the current record's "num" value
 * @method string              getActivitytypeId()    Returns the current record's "activitytype_id" value
 * @method string              getName()              Returns the current record's "name" value
 * @method string              getLongname()          Returns the current record's "longname" value
 * @method string              getDescription()       Returns the current record's "description" value
 * @method string              getHomepageUrl()       Returns the current record's "homepage_url" value
 * @method Activitytype        getActivitytype()      Returns the current record's "Activitytype" value
 * @method Doctrine_Collection getActivityitem()      Returns the current record's "Activityitem" collection
 * @method Doctrine_Collection getEvent()             Returns the current record's "Event" collection
 * @method Doctrine_Collection getInstituteActivity() Returns the current record's "InstituteActivity" collection
 * @method Doctrine_Collection getPersonActivity()    Returns the current record's "PersonActivity" collection
 * @method Activity            setId()                Sets the current record's "id" value
 * @method Activity            setNum()               Sets the current record's "num" value
 * @method Activity            setActivitytypeId()    Sets the current record's "activitytype_id" value
 * @method Activity            setName()              Sets the current record's "name" value
 * @method Activity            setLongname()          Sets the current record's "longname" value
 * @method Activity            setDescription()       Sets the current record's "description" value
 * @method Activity            setHomepageUrl()       Sets the current record's "homepage_url" value
 * @method Activity            setActivitytype()      Sets the current record's "Activitytype" value
 * @method Activity            setActivityitem()      Sets the current record's "Activityitem" collection
 * @method Activity            setEvent()             Sets the current record's "Event" collection
 * @method Activity            setInstituteActivity() Sets the current record's "InstituteActivity" collection
 * @method Activity            setPersonActivity()    Sets the current record's "PersonActivity" collection
 * 
 * @package    gwis
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseActivity extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('activity');
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
        $this->hasColumn('activitytype_id', 'string', 3, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 3,
             ));
        $this->hasColumn('name', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('longname', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 60,
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
        $this->hasColumn('homepage_url', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 200,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Activitytype', array(
             'local' => 'activitytype_id',
             'foreign' => 'id'));

        $this->hasMany('Activityitem', array(
             'local' => 'id',
             'foreign' => 'activity_id'));

        $this->hasMany('Event', array(
             'local' => 'id',
             'foreign' => 'activity_id'));

        $this->hasMany('InstituteActivity', array(
             'local' => 'id',
             'foreign' => 'activity_id'));

        $this->hasMany('PersonActivity', array(
             'local' => 'id',
             'foreign' => 'activity_id'));
    }
}