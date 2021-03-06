<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('PersonSciencecase', 'doctrine');

/**
 * BasePersonSciencecase
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $person_id
 * @property integer $sciencecase_id
 * @property enum $special_status
 * @property Person $Person
 * @property Sciencecase $Sciencecase
 * 
 * @method integer           getPersonId()       Returns the current record's "person_id" value
 * @method integer           getSciencecaseId()  Returns the current record's "sciencecase_id" value
 * @method enum              getSpecialStatus()  Returns the current record's "special_status" value
 * @method Person            getPerson()         Returns the current record's "Person" value
 * @method Sciencecase       getSciencecase()    Returns the current record's "Sciencecase" value
 * @method PersonSciencecase setPersonId()       Sets the current record's "person_id" value
 * @method PersonSciencecase setSciencecaseId()  Sets the current record's "sciencecase_id" value
 * @method PersonSciencecase setSpecialStatus()  Sets the current record's "special_status" value
 * @method PersonSciencecase setPerson()         Sets the current record's "Person" value
 * @method PersonSciencecase setSciencecase()    Sets the current record's "Sciencecase" value
 * 
 * @package    gwis
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePersonSciencecase extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('person_sciencecase');
        $this->hasColumn('person_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('sciencecase_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('special_status', 'enum', 8, array(
             'type' => 'enum',
             'fixed' => 0,
             'unsigned' => false,
             'values' => 
             array(
              0 => 'Proposer',
              1 => 'Contact',
             ),
             'primary' => false,
             'default' => 'Contact',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Person', array(
             'local' => 'person_id',
             'foreign' => 'id'));

        $this->hasOne('Sciencecase', array(
             'local' => 'sciencecase_id',
             'foreign' => 'id'));
    }
}