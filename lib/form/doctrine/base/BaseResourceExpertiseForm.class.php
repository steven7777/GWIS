<?php

/**
 * ResourceExpertise form base class.
 *
 * @method ResourceExpertise getObject() Returns the current form's model object
 *
 * @package    gwis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseResourceExpertiseForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'resource_id'  => new sfWidgetFormInputHidden(),
      'expertise_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'resource_id'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('resource_id')), 'empty_value' => $this->getObject()->get('resource_id'), 'required' => false)),
      'expertise_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('expertise_id')), 'empty_value' => $this->getObject()->get('expertise_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('resource_expertise[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ResourceExpertise';
  }

}
