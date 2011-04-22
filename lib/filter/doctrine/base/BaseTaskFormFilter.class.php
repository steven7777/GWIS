<?php

/**
 * Task filter form base class.
 *
 * @package    gwis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTaskFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'person_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'add_empty' => true)),
      'name'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'  => new sfWidgetFormFilterInput(),
      'is_public'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'priority'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'priority_old' => new sfWidgetFormChoice(array('choices' => array('' => '', 'very high' => 'very high', 'high' => 'high', 'medium' => 'medium', 'low' => 'low', 'very low' => 'very low'))),
      'is_done'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'done'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'category'     => new sfWidgetFormChoice(array('choices' => array('' => '', 'bug fix' => 'bug fix', 'modification' => 'modification', 'new addition' => 'new addition'))),
      'topic'        => new sfWidgetFormChoice(array('choices' => array('' => '', 'framework' => 'framework', 'project' => 'project'))),
      'level'        => new sfWidgetFormChoice(array('choices' => array('' => '', 'structure' => 'structure', 'presentation' => 'presentation', 'data' => 'data'))),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'person_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Person'), 'column' => 'id')),
      'name'         => new sfValidatorPass(array('required' => false)),
      'description'  => new sfValidatorPass(array('required' => false)),
      'is_public'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'priority'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'priority_old' => new sfValidatorChoice(array('required' => false, 'choices' => array('very high' => 'very high', 'high' => 'high', 'medium' => 'medium', 'low' => 'low', 'very low' => 'very low'))),
      'is_done'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'done'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'category'     => new sfValidatorChoice(array('required' => false, 'choices' => array('bug fix' => 'bug fix', 'modification' => 'modification', 'new addition' => 'new addition'))),
      'topic'        => new sfValidatorChoice(array('required' => false, 'choices' => array('framework' => 'framework', 'project' => 'project'))),
      'level'        => new sfValidatorChoice(array('required' => false, 'choices' => array('structure' => 'structure', 'presentation' => 'presentation', 'data' => 'data'))),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('task_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Task';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'person_id'    => 'ForeignKey',
      'name'         => 'Text',
      'description'  => 'Text',
      'is_public'    => 'Boolean',
      'priority'     => 'Number',
      'priority_old' => 'Enum',
      'is_done'      => 'Boolean',
      'done'         => 'Date',
      'category'     => 'Enum',
      'topic'        => 'Enum',
      'level'        => 'Enum',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
    );
  }
}
