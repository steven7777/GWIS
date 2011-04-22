<?php

/**
 * PersonExpertise form base class.
 *
 * @method PersonExpertise getObject() Returns the current form's model object
 *
 * @package    gwis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePersonExpertiseForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'person_id'    => new sfWidgetFormInputHidden(),
      'expertise_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'person_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('person_id')), 'empty_value' => $this->getObject()->get('person_id'), 'required' => false)),
      'expertise_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('expertise_id')), 'empty_value' => $this->getObject()->get('expertise_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('person_expertise[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PersonExpertise';
  }

}
