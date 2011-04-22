<?php

/**
 * N2dwgSciencecase form base class.
 *
 * @method N2dwgSciencecase getObject() Returns the current form's model object
 *
 * @package    gwis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseN2dwgSciencecaseForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'n2dwg_id'       => new sfWidgetFormInputHidden(),
      'sciencecase_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'n2dwg_id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('n2dwg_id')), 'empty_value' => $this->getObject()->get('n2dwg_id'), 'required' => false)),
      'sciencecase_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('sciencecase_id')), 'empty_value' => $this->getObject()->get('sciencecase_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('n2dwg_sciencecase[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'N2dwgSciencecase';
  }

}
