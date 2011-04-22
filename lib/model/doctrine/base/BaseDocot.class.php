<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Docot', 'doctrine');

/**
 * BaseDocot
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id
 * @property string $name
 * @property Doctrine_Collection $Doc
 * 
 * @method string              getId()   Returns the current record's "id" value
 * @method string              getName() Returns the current record's "name" value
 * @method Doctrine_Collection getDoc()  Returns the current record's "Doc" collection
 * @method Docot               setId()   Sets the current record's "id" value
 * @method Docot               setName() Sets the current record's "name" value
 * @method Docot               setDoc()  Sets the current record's "Doc" collection
 * 
 * @package    gwis
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDocot extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('docot');
        $this->hasColumn('id', 'string', 5, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 5,
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Doc', array(
             'local' => 'id',
             'foreign' => 'docot_id'));
    }
}