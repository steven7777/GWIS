<?php

/**
 * InstituteActivity form base class.
 *
 * @method InstituteActivity getObject() Returns the current form's model object
 *
 * @package    gwis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseInstituteActivityForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'activity_id'    => new sfWidgetFormInputHidden(),
      'institute_id'   => new sfWidgetFormInputHidden(),
      'special_status' => new sfWidgetFormChoice(array('choices' => array('Coordinator' => 'Coordinator'))),
    ));

    $this->setValidators(array(
      'activity_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('activity_id')), 'empty_value' => $this->getObject()->get('activity_id'), 'required' => false)),
      'institute_id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('institute_id')), 'empty_value' => $this->getObject()->get('institute_id'), 'required' => false)),
      'special_status' => new sfValidatorChoice(array('choices' => array(0 => 'Coordinator'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('institute_activity[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'InstituteActivity';
  }

}
