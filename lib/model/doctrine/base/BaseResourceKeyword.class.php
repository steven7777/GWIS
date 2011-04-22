<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ResourceKeyword', 'doctrine');

/**
 * BaseResourceKeyword
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $keyword_id
 * @property integer $resource_id
 * @property Resource $Resource
 * @property Keyword $Keyword
 * 
 * @method integer         getKeywordId()   Returns the current record's "keyword_id" value
 * @method integer         getResourceId()  Returns the current record's "resource_id" value
 * @method Resource        getResource()    Returns the current record's "Resource" value
 * @method Keyword         getKeyword()     Returns the current record's "Keyword" value
 * @method ResourceKeyword setKeywordId()   Sets the current record's "keyword_id" value
 * @method ResourceKeyword setResourceId()  Sets the current record's "resource_id" value
 * @method ResourceKeyword setResource()    Sets the current record's "Resource" value
 * @method ResourceKeyword setKeyword()     Sets the current record's "Keyword" value
 * 
 * @package    gwis
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseResourceKeyword extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('resource_keyword');
        $this->hasColumn('keyword_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('resource_id', 'integer', 4, array(
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

        $this->hasOne('Keyword', array(
             'local' => 'keyword_id',
             'foreign' => 'id'));
    }
}