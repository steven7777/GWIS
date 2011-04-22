<?php

/**
 * PersonN2dwg form base class.
 *
 * @method PersonN2dwg getObject() Returns the current form's model object
 *
 * @package    gwis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePersonN2dwgForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'person_id'      => new sfWidgetFormInputHidden(),
      'n2dwg_id'       => new sfWidgetFormInputHidden(),
      'special_status' => new sfWidgetFormChoice(array('choices' => array('Leader' => 'Leader', 'Co-Leader' => 'Co-Leader'))),
    ));

    $this->setValidators(array(
      'person_id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('person_id')), 'empty_value' => $this->getObject()->get('person_id'), 'required' => false)),
      'n2dwg_id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('n2dwg_id')), 'empty_value' => $this->getObject()->get('n2dwg_id'), 'required' => false)),
      'special_status' => new sfValidatorChoice(array('choices' => array(0 => 'Leader', 1 => 'Co-Leader'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('person_n2dwg[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PersonN2dwg';
  }

}
