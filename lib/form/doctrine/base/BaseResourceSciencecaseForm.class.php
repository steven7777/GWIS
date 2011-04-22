<?php

/**
 * ResourceSciencecase form base class.
 *
 * @method ResourceSciencecase getObject() Returns the current form's model object
 *
 * @package    gwis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseResourceSciencecaseForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'resource_id'    => new sfWidgetFormInputHidden(),
      'sciencecase_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'resource_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('resource_id')), 'empty_value' => $this->getObject()->get('resource_id'), 'required' => false)),
      'sciencecase_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('sciencecase_id')), 'empty_value' => $this->getObject()->get('sciencecase_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('resource_sciencecase[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ResourceSciencecase';
  }

}
