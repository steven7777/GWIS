<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Person', 'doctrine');

/**
 * BasePerson
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $institute_id
 * @property string $institute_other
 * @property integer $n2dwg_id
 * @property integer $node_id
 * @property integer $domain_id
 * @property string $other_node_thematic
 * @property integer $node_leading_id
 * @property enum $node_leading_status
 * @property enum $profile
 * @property boolean $is_enabled
 * @property boolean $is_epn_contact
 * @property string $tel
 * @property string $fax
 * @property string $department
 * @property string $role
 * @property string $title
 * @property string $url
 * @property integer $sf_guard_user_id
 * @property sfGuardUser $User
 * @property Domain $Domain
 * @property Institute $Institute
 * @property N2dwg $N2dwg
 * @property Node $Node
 * @property Node $Node_5
 * @property Doctrine_Collection $Doc
 * @property Doctrine_Collection $Doc_3
 * @property Doctrine_Collection $Event
 * @property Doctrine_Collection $EventPerson
 * @property Doctrine_Collection $PersonActivity
 * @property Doctrine_Collection $PersonDomain
 * @property Doctrine_Collection $PersonExpertise
 * @property Doctrine_Collection $PersonKeyword
 * @property Doctrine_Collection $PersonN2dwg
 * @property Doctrine_Collection $PersonSciencecase
 * @property Doctrine_Collection $Resource
 * @property Doctrine_Collection $Resource_4
 * @property Doctrine_Collection $Resource_5
 * @property Doctrine_Collection $Resource_6
 * @property Doctrine_Collection $Task
 * 
 * @method integer             getId()                  Returns the current record's "id" value
 * @method integer             getInstituteId()         Returns the current record's "institute_id" value
 * @method string              getInstituteOther()      Returns the current record's "institute_other" value
 * @method integer             getN2dwgId()             Returns the current record's "n2dwg_id" value
 * @method integer             getNodeId()              Returns the current record's "node_id" value
 * @method integer             getDomainId()            Returns the current record's "domain_id" value
 * @method string              getOtherNodeThematic()   Returns the current record's "other_node_thematic" value
 * @method integer             getNodeLeadingId()       Returns the current record's "node_leading_id" value
 * @method enum                getNodeLeadingStatus()   Returns the current record's "node_leading_status" value
 * @method enum                getProfile()             Returns the current record's "profile" value
 * @method boolean             getIsEnabled()           Returns the current record's "is_enabled" value
 * @method boolean             getIsEpnContact()        Returns the current record's "is_epn_contact" value
 * @method string              getTel()                 Returns the current record's "tel" value
 * @method string              getFax()                 Returns the current record's "fax" value
 * @method string              getDepartment()          Returns the current record's "department" value
 * @method string              getRole()                Returns the current record's "role" value
 * @method string              getTitle()               Returns the current record's "title" value
 * @method string              getUrl()                 Returns the current record's "url" value
 * @method integer             getSfGuardUserId()       Returns the current record's "sf_guard_user_id" value
 * @method sfGuardUser         getUser()                Returns the current record's "User" value
 * @method Domain              getDomain()              Returns the current record's "Domain" value
 * @method Institute           getInstitute()           Returns the current record's "Institute" value
 * @method N2dwg               getN2dwg()               Returns the current record's "N2dwg" value
 * @method Node                getNode()                Returns the current record's "Node" value
 * @method Node                getNode5()               Returns the current record's "Node_5" value
 * @method Doctrine_Collection getDoc()                 Returns the current record's "Doc" collection
 * @method Doctrine_Collection getDoc3()                Returns the current record's "Doc_3" collection
 * @method Doctrine_Collection getEvent()               Returns the current record's "Event" collection
 * @method Doctrine_Collection getEventPerson()         Returns the current record's "EventPerson" collection
 * @method Doctrine_Collection getPersonActivity()      Returns the current record's "PersonActivity" collection
 * @method Doctrine_Collection getPersonDomain()        Returns the current record's "PersonDomain" collection
 * @method Doctrine_Collection getPersonExpertise()     Returns the current record's "PersonExpertise" collection
 * @method Doctrine_Collection getPersonKeyword()       Returns the current record's "PersonKeyword" collection
 * @method Doctrine_Collection getPersonN2dwg()         Returns the current record's "PersonN2dwg" collection
 * @method Doctrine_Collection getPersonSciencecase()   Returns the current record's "PersonSciencecase" collection
 * @method Doctrine_Collection getResource()            Returns the current record's "Resource" collection
 * @method Doctrine_Collection getResource4()           Returns the current record's "Resource_4" collection
 * @method Doctrine_Collection getResource5()           Returns the current record's "Resource_5" collection
 * @method Doctrine_Collection getResource6()           Returns the current record's "Resource_6" collection
 * @method Doctrine_Collection getTask()                Returns the current record's "Task" collection
 * @method Person              setId()                  Sets the current record's "id" value
 * @method Person              setInstituteId()         Sets the current record's "institute_id" value
 * @method Person              setInstituteOther()      Sets the current record's "institute_other" value
 * @method Person              setN2dwgId()             Sets the current record's "n2dwg_id" value
 * @method Person              setNodeId()              Sets the current record's "node_id" value
 * @method Person              setDomainId()            Sets the current record's "domain_id" value
 * @method Person              setOtherNodeThematic()   Sets the current record's "other_node_thematic" value
 * @method Person              setNodeLeadingId()       Sets the current record's "node_leading_id" value
 * @method Person              setNodeLeadingStatus()   Sets the current record's "node_leading_status" value
 * @method Person              setProfile()             Sets the current record's "profile" value
 * @method Person              setIsEnabled()           Sets the current record's "is_enabled" value
 * @method Person              setIsEpnContact()        Sets the current record's "is_epn_contact" value
 * @method Person              setTel()                 Sets the current record's "tel" value
 * @method Person              setFax()                 Sets the current record's "fax" value
 * @method Person              setDepartment()          Sets the current record's "department" value
 * @method Person              setRole()                Sets the current record's "role" value
 * @method Person              setTitle()               Sets the current record's "title" value
 * @method Person              setUrl()                 Sets the current record's "url" value
 * @method Person              setSfGuardUserId()       Sets the current record's "sf_guard_user_id" value
 * @method Person              setUser()                Sets the current record's "User" value
 * @method Person              setDomain()              Sets the current record's "Domain" value
 * @method Person              setInstitute()           Sets the current record's "Institute" value
 * @method Person              setN2dwg()               Sets the current record's "N2dwg" value
 * @method Person              setNode()                Sets the current record's "Node" value
 * @method Person              setNode5()               Sets the current record's "Node_5" value
 * @method Person              setDoc()                 Sets the current record's "Doc" collection
 * @method Person              setDoc3()                Sets the current record's "Doc_3" collection
 * @method Person              setEvent()               Sets the current record's "Event" collection
 * @method Person              setEventPerson()         Sets the current record's "EventPerson" collection
 * @method Person              setPersonActivity()      Sets the current record's "PersonActivity" collection
 * @method Person              setPersonDomain()        Sets the current record's "PersonDomain" collection
 * @method Person              setPersonExpertise()     Sets the current record's "PersonExpertise" collection
 * @method Person              setPersonKeyword()       Sets the current record's "PersonKeyword" collection
 * @method Person              setPersonN2dwg()         Sets the current record's "PersonN2dwg" collection
 * @method Person              setPersonSciencecase()   Sets the current record's "PersonSciencecase" collection
 * @method Person              setResource()            Sets the current record's "Resource" collection
 * @method Person              setResource4()           Sets the current record's "Resource_4" collection
 * @method Person              setResource5()           Sets the current record's "Resource_5" collection
 * @method Person              setResource6()           Sets the current record's "Resource_6" collection
 * @method Person              setTask()                Sets the current record's "Task" collection
 * 
 * @package    gwis
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePerson extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('person');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('institute_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('institute_other', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('n2dwg_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('node_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('domain_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('other_node_thematic', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('node_leading_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('node_leading_status', 'enum', 10, array(
             'type' => 'enum',
             'fixed' => 0,
             'unsigned' => false,
             'values' => 
             array(
              0 => 'scientific',
              1 => 'technical',
             ),
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 10,
             ));
        $this->hasColumn('profile', 'enum', 11, array(
             'type' => 'enum',
             'fixed' => 0,
             'unsigned' => false,
             'values' => 
             array(
              0 => 'normal',
              1 => 'priviledged',
              2 => 'admin',
              3 => 'dev',
             ),
             'primary' => false,
             'default' => 'normal',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 11,
             ));
        $this->hasColumn('is_enabled', 'boolean', null, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('is_epn_contact', 'boolean', null, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             ));
        $this->hasColumn('tel', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('fax', 'string', 30, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 30,
             ));
        $this->hasColumn('department', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('role', 'string', 60, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 60,
             ));
        $this->hasColumn('title', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('url', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('sf_guard_user_id', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUser as User', array(
             'local' => 'sf_guard_user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Domain', array(
             'local' => 'domain_id',
             'foreign' => 'id'));

        $this->hasOne('Institute', array(
             'local' => 'institute_id',
             'foreign' => 'id'));

        $this->hasOne('N2dwg', array(
             'local' => 'n2dwg_id',
             'foreign' => 'id'));

        $this->hasOne('Node', array(
             'local' => 'node_id',
             'foreign' => 'id'));

        $this->hasOne('Node as Node_5', array(
             'local' => 'node_leading_id',
             'foreign' => 'id'));

        $this->hasMany('Doc', array(
             'local' => 'id',
             'foreign' => 'person_author_id'));

        $this->hasMany('Doc as Doc_3', array(
             'local' => 'id',
             'foreign' => 'person_provider_id'));

        $this->hasMany('Event', array(
             'local' => 'id',
             'foreign' => 'person_responsible_id'));

        $this->hasMany('EventPerson', array(
             'local' => 'id',
             'foreign' => 'person_id'));

        $this->hasMany('PersonActivity', array(
             'local' => 'id',
             'foreign' => 'person_id'));

        $this->hasMany('PersonDomain', array(
             'local' => 'id',
             'foreign' => 'person_id'));

        $this->hasMany('PersonExpertise', array(
             'local' => 'id',
             'foreign' => 'person_id'));

        $this->hasMany('PersonKeyword', array(
             'local' => 'id',
             'foreign' => 'person_id'));

        $this->hasMany('PersonN2dwg', array(
             'local' => 'id',
             'foreign' => 'person_id'));

        $this->hasMany('PersonSciencecase', array(
             'local' => 'id',
             'foreign' => 'person_id'));

        $this->hasMany('Resource', array(
             'local' => 'id',
             'foreign' => 'person_id'));

        $this->hasMany('Resource as Resource_4', array(
             'local' => 'id',
             'foreign' => 'person_contact_id'));

        $this->hasMany('Resource as Resource_5', array(
             'local' => 'id',
             'foreign' => 'person_responsible_id'));

        $this->hasMany('Resource as Resource_6', array(
             'local' => 'id',
             'foreign' => 'person_updater_id'));

        $this->hasMany('Task', array(
             'local' => 'id',
             'foreign' => 'person_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}