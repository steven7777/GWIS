<?php

/**
 * Task form base class.
 *
 * @method Task getObject() Returns the current form's model object
 *
 * @package    gwis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTaskForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'person_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'add_empty' => false)),
      'name'         => new sfWidgetFormInputText(),
      'description'  => new sfWidgetFormTextarea(),
      'is_public'    => new sfWidgetFormInputCheckbox(),
      'priority'     => new sfWidgetFormInputText(),
      'priority_old' => new sfWidgetFormChoice(array('choices' => array('very high' => 'very high', 'high' => 'high', 'medium' => 'medium', 'low' => 'low', 'very low' => 'very low'))),
      'is_done'      => new sfWidgetFormInputCheckbox(),
      'done'         => new sfWidgetFormDate(),
      'category'     => new sfWidgetFormChoice(array('choices' => array('bug fix' => 'bug fix', 'modification' => 'modification', 'new addition' => 'new addition'))),
      'topic'        => new sfWidgetFormChoice(array('choices' => array('framework' => 'framework', 'project' => 'project'))),
      'level'        => new sfWidgetFormChoice(array('choices' => array('structure' => 'structure', 'presentation' => 'presentation', 'data' => 'data'))),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'person_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'required' => false)),
      'name'         => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'description'  => new sfValidatorString(array('required' => false)),
      'is_public'    => new sfValidatorBoolean(array('required' => false)),
      'priority'     => new sfValidatorInteger(array('required' => false)),
      'priority_old' => new sfValidatorChoice(array('choices' => array(0 => 'very high', 1 => 'high', 2 => 'medium', 3 => 'low', 4 => 'very low'), 'required' => false)),
      'is_done'      => new sfValidatorBoolean(array('required' => false)),
      'done'         => new sfValidatorDate(array('required' => false)),
      'category'     => new sfValidatorChoice(array('choices' => array(0 => 'bug fix', 1 => 'modification', 2 => 'new addition'), 'required' => false)),
      'topic'        => new sfValidatorChoice(array('choices' => array(0 => 'framework', 1 => 'project'), 'required' => false)),
      'level'        => new sfValidatorChoice(array('choices' => array(0 => 'structure', 1 => 'presentation', 2 => 'data'), 'required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('task[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Task';
  }

}
