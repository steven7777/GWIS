<?php

/**
 * Person filter form base class.
 *
 * @package    gwis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePersonFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'institute_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Institute'), 'add_empty' => true)),
      'institute_other'     => new sfWidgetFormFilterInput(),
      'n2dwg_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('N2dwg'), 'add_empty' => true)),
      'node_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Node'), 'add_empty' => true)),
      'domain_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Domain'), 'add_empty' => true)),
      'other_node_thematic' => new sfWidgetFormFilterInput(),
      'node_leading_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Node_5'), 'add_empty' => true)),
      'node_leading_status' => new sfWidgetFormChoice(array('choices' => array('' => '', 'scientific' => 'scientific', 'technical' => 'technical'))),
      'profile'             => new sfWidgetFormChoice(array('choices' => array('' => '', 'normal' => 'normal', 'priviledged' => 'priviledged', 'admin' => 'admin', 'dev' => 'dev'))),
      'is_enabled'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_epn_contact'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tel'                 => new sfWidgetFormFilterInput(),
      'fax'                 => new sfWidgetFormFilterInput(),
      'department'          => new sfWidgetFormFilterInput(),
      'role'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'title'               => new sfWidgetFormFilterInput(),
      'url'                 => new sfWidgetFormFilterInput(),
      'sf_guard_user_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'institute_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Institute'), 'column' => 'id')),
      'institute_other'     => new sfValidatorPass(array('required' => false)),
      'n2dwg_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('N2dwg'), 'column' => 'id')),
      'node_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Node'), 'column' => 'id')),
      'domain_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Domain'), 'column' => 'id')),
      'other_node_thematic' => new sfValidatorPass(array('required' => false)),
      'node_leading_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Node_5'), 'column' => 'id')),
      'node_leading_status' => new sfValidatorChoice(array('required' => false, 'choices' => array('scientific' => 'scientific', 'technical' => 'technical'))),
      'profile'             => new sfValidatorChoice(array('required' => false, 'choices' => array('normal' => 'normal', 'priviledged' => 'priviledged', 'admin' => 'admin', 'dev' => 'dev'))),
      'is_enabled'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_epn_contact'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tel'                 => new sfValidatorPass(array('required' => false)),
      'fax'                 => new sfValidatorPass(array('required' => false)),
      'department'          => new sfValidatorPass(array('required' => false)),
      'role'                => new sfValidatorPass(array('required' => false)),
      'title'               => new sfValidatorPass(array('required' => false)),
      'url'                 => new sfValidatorPass(array('required' => false)),
      'sf_guard_user_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('person_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Person';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'institute_id'        => 'ForeignKey',
      'institute_other'     => 'Text',
      'n2dwg_id'            => 'ForeignKey',
      'node_id'             => 'ForeignKey',
      'domain_id'           => 'ForeignKey',
      'other_node_thematic' => 'Text',
      'node_leading_id'     => 'ForeignKey',
      'node_leading_status' => 'Enum',
      'profile'             => 'Enum',
      'is_enabled'          => 'Boolean',
      'is_epn_contact'      => 'Boolean',
      'tel'                 => 'Text',
      'fax'                 => 'Text',
      'department'          => 'Text',
      'role'                => 'Text',
      'title'               => 'Text',
      'url'                 => 'Text',
      'sf_guard_user_id'    => 'ForeignKey',
      'created_at'          => 'Date',
      'updated_at'          => 'Date',
    );
  }
}
