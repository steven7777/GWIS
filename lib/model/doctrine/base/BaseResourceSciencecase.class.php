<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ResourceSciencecase', 'doctrine');

/**
 * BaseResourceSciencecase
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $resource_id
 * @property integer $sciencecase_id
 * @property Resource $Resource
 * @property Sciencecase $Sciencecase
 * 
 * @method integer             getResourceId()     Returns the current record's "resource_id" value
 * @method integer             getSciencecaseId()  Returns the current record's "sciencecase_id" value
 * @method Resource            getResource()       Returns the current record's "Resource" value
 * @method Sciencecase         getSciencecase()    Returns the current record's "Sciencecase" value
 * @method ResourceSciencecase setResourceId()     Sets the current record's "resource_id" value
 * @method ResourceSciencecase setSciencecaseId()  Sets the current record's "sciencecase_id" value
 * @method ResourceSciencecase setResource()       Sets the current record's "Resource" value
 * @method ResourceSciencecase setSciencecase()    Sets the current record's "Sciencecase" value
 * 
 * @package    gwis
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseResourceSciencecase extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('resource_sciencecase');
        $this->hasColumn('resource_id', 'integer', 4, array(
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
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Resource', array(
             'local' => 'resource_id',
             'foreign' => 'id'));

        $this->hasOne('Sciencecase', array(
             'local' => 'sciencecase_id',
             'foreign' => 'id'));
    }
}