<?php

/**
 * Institute filter form base class.
 *
 * @package    gwis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseInstituteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'node_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Node'), 'add_empty' => true)),
      'is_node_leader'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'participant_status' => new sfWidgetFormChoice(array('choices' => array('' => '', 'Participant' => 'Participant', 'Lab non EPN' => 'Lab non EPN', 'Associate' => 'Associate'))),
      'participant_num'    => new sfWidgetFormFilterInput(),
      'institute_id'       => new sfWidgetFormFilterInput(),
      'name'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fullname'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'country_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Country'), 'add_empty' => true)),
      'address'            => new sfWidgetFormFilterInput(),
      'postcode'           => new sfWidgetFormFilterInput(),
      'city'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cedex'              => new sfWidgetFormFilterInput(),
      'excellence_fields'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'labos'              => new sfWidgetFormFilterInput(),
      'specific_role'      => new sfWidgetFormFilterInput(),
      'homepage'           => new sfWidgetFormFilterInput(),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'node_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Node'), 'column' => 'id')),
      'is_node_leader'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'participant_status' => new sfValidatorChoice(array('required' => false, 'choices' => array('Participant' => 'Participant', 'Lab non EPN' => 'Lab non EPN', 'Associate' => 'Associate'))),
      'participant_num'    => new sfValidatorPass(array('required' => false)),
      'institute_id'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'name'               => new sfValidatorPass(array('required' => false)),
      'fullname'           => new sfValidatorPass(array('required' => false)),
      'country_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Country'), 'column' => 'id')),
      'address'            => new sfValidatorPass(array('required' => false)),
      'postcode'           => new sfValidatorPass(array('required' => false)),
      'city'               => new sfValidatorPass(array('required' => false)),
      'cedex'              => new sfValidatorPass(array('required' => false)),
      'excellence_fields'  => new sfValidatorPass(array('required' => false)),
      'labos'              => new sfValidatorPass(array('required' => false)),
      'specific_role'      => new sfValidatorPass(array('required' => false)),
      'homepage'           => new sfValidatorPass(array('required' => false)),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('institute_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Institute';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'node_id'            => 'ForeignKey',
      'is_node_leader'     => 'Boolean',
      'participant_status' => 'Enum',
      'participant_num'    => 'Text',
      'institute_id'       => 'Number',
      'name'               => 'Text',
      'fullname'           => 'Text',
      'country_id'         => 'ForeignKey',
      'address'            => 'Text',
      'postcode'           => 'Text',
      'city'               => 'Text',
      'cedex'              => 'Text',
      'excellence_fields'  => 'Text',
      'labos'              => 'Text',
      'specific_role'      => 'Text',
      'homepage'           => 'Text',
      'created_at'         => 'Date',
      'updated_at'         => 'Date',
    );
  }
}
