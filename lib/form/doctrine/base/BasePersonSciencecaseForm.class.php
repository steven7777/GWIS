<?php

/**
 * PersonSciencecase form base class.
 *
 * @method PersonSciencecase getObject() Returns the current form's model object
 *
 * @package    gwis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePersonSciencecaseForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'person_id'      => new sfWidgetFormInputHidden(),
      'sciencecase_id' => new sfWidgetFormInputHidden(),
      'special_status' => new sfWidgetFormChoice(array('choices' => array('Proposer' => 'Proposer', 'Contact' => 'Contact'))),
    ));

    $this->setValidators(array(
      'person_id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('person_id')), 'empty_value' => $this->getObject()->get('person_id'), 'required' => false)),
      'sciencecase_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('sciencecase_id')), 'empty_value' => $this->getObject()->get('sciencecase_id'), 'required' => false)),
      'special_status' => new sfValidatorChoice(array('choices' => array(0 => 'Proposer', 1 => 'Contact'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('person_sciencecase[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PersonSciencecase';
  }

}
