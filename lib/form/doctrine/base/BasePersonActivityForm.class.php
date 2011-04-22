<?php

/**
 * PersonActivity form base class.
 *
 * @method PersonActivity getObject() Returns the current form's model object
 *
 * @package    gwis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePersonActivityForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'person_id'      => new sfWidgetFormInputHidden(),
      'activity_id'    => new sfWidgetFormInputHidden(),
      'special_status' => new sfWidgetFormChoice(array('choices' => array('Coordinator' => 'Coordinator', 'Deputy Coordinator' => 'Deputy Coordinator', 'Task Leader' => 'Task Leader', 'Science Manager' => 'Science Manager', 'Technical Manager' => 'Technical Manager', 'Expert' => 'Expert'))),
    ));

    $this->setValidators(array(
      'person_id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('person_id')), 'empty_value' => $this->getObject()->get('person_id'), 'required' => false)),
      'activity_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('activity_id')), 'empty_value' => $this->getObject()->get('activity_id'), 'required' => false)),
      'special_status' => new sfValidatorChoice(array('choices' => array(0 => 'Coordinator', 1 => 'Deputy Coordinator', 2 => 'Task Leader', 3 => 'Science Manager', 4 => 'Technical Manager', 5 => 'Expert'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('person_activity[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PersonActivity';
  }

}
