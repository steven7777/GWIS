<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ResourceExpertise', 'doctrine');

/**
 * BaseResourceExpertise
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $resource_id
 * @property integer $expertise_id
 * @property Resource $Resource
 * @property Expertise $Expertise
 * 
 * @method integer           getResourceId()   Returns the current record's "resource_id" value
 * @method integer           getExpertiseId()  Returns the current record's "expertise_id" value
 * @method Resource          getResource()     Returns the current record's "Resource" value
 * @method Expertise         getExpertise()    Returns the current record's "Expertise" value
 * @method ResourceExpertise setResourceId()   Sets the current record's "resource_id" value
 * @method ResourceExpertise setExpertiseId()  Sets the current record's "expertise_id" value
 * @method ResourceExpertise setResource()     Sets the current record's "Resource" value
 * @method ResourceExpertise setExpertise()    Sets the current record's "Expertise" value
 * 
 * @package    gwis
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseResourceExpertise extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('resource_expertise');
        $this->hasColumn('resource_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('expertise_id', 'integer', 4, array(
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
        $this->hasOne('Resource', array(
             'local' => 'resource_id',
             'foreign' => 'id'));

        $this->hasOne('Expertise', array(
             'local' => 'expertise_id',
             'foreign' => 'id'));
    }
}