<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('PersonDomain', 'doctrine');

/**
 * BasePersonDomain
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $person_id
 * @property integer $domain_id
 * @property Person $Person
 * @property Domain $Domain
 * 
 * @method integer      getPersonId()  Returns the current record's "person_id" value
 * @method integer      getDomainId()  Returns the current record's "domain_id" value
 * @method Person       getPerson()    Returns the current record's "Person" value
 * @method Domain       getDomain()    Returns the current record's "Domain" value
 * @method PersonDomain setPersonId()  Sets the current record's "person_id" value
 * @method PersonDomain setDomainId()  Sets the current record's "domain_id" value
 * @method PersonDomain setPerson()    Sets the current record's "Person" value
 * @method PersonDomain setDomain()    Sets the current record's "Domain" value
 * 
 * @package    gwis
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePersonDomain extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('person_domain');
        $this->hasColumn('person_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('domain_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Person', array(
             'local' => 'person_id',
             'foreign' => 'id'));

        $this->hasOne('Domain', array(
             'local' => 'domain_id',
             'foreign' => 'id'));
    }
}