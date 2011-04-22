<?php

/**
 * PersonDomain form base class.
 *
 * @method PersonDomain getObject() Returns the current form's model object
 *
 * @package    gwis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePersonDomainForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'person_id' => new sfWidgetFormInputHidden(),
      'domain_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'person_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('person_id')), 'empty_value' => $this->getObject()->get('person_id'), 'required' => false)),
      'domain_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('domain_id')), 'empty_value' => $this->getObject()->get('domain_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('person_domain[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PersonDomain';
  }

}
