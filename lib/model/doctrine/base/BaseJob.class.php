<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Job', 'doctrine');

/**
 * BaseJob
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $institute
 * @property string $location
 * @property string $duration
 * @property string $qualification
 * @property string $duties
 * @property string $website
 * @property string $contact
 * @property string $how_to_apply
 * @property string $closing_date
 * @property boolean $is_valid
 * @property date $sort_date
 * 
 * @method integer getId()            Returns the current record's "id" value
 * @method string  getName()          Returns the current record's "name" value
 * @method string  getInstitute()     Returns the current record's "institute" value
 * @method string  getLocation()      Returns the current record's "location" value
 * @method string  getDuration()      Returns the current record's "duration" value
 * @method string  getQualification() Returns the current record's "qualification" value
 * @method string  getDuties()        Returns the current record's "duties" value
 * @method string  getWebsite()       Returns the current record's "website" value
 * @method string  getContact()       Returns the current record's "contact" value
 * @method string  getHowToApply()    Returns the current record's "how_to_apply" value
 * @method string  getClosingDate()   Returns the current record's "closing_date" value
 * @method boolean getIsValid()       Returns the current record's "is_valid" value
 * @method date    getSortDate()      Returns the current record's "sort_date" value
 * @method Job     setId()            Sets the current record's "id" value
 * @method Job     setName()          Sets the current record's "name" value
 * @method Job     setInstitute()     Sets the current record's "institute" value
 * @method Job     setLocation()      Sets the current record's "location" value
 * @method Job     setDuration()      Sets the current record's "duration" value
 * @method Job     setQualification() Sets the current record's "qualification" value
 * @method Job     setDuties()        Sets the current record's "duties" value
 * @method Job     setWebsite()       Sets the current record's "website" value
 * @method Job     setContact()       Sets the current record's "contact" value
 * @method Job     setHowToApply()    Sets the current record's "how_to_apply" value
 * @method Job     setClosingDate()   Sets the current record's "closing_date" value
 * @method Job     setIsValid()       Sets the current record's "is_valid" value
 * @method Job     setSortDate()      Sets the current record's "sort_date" value
 * 
 * @package    gwis
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseJob extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('job');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('institute', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('location', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('duration', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('qualification', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('duties', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('website', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('contact', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('how_to_apply', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('closing_date', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('is_valid', 'boolean', null, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '1',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('sort_date', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}