<?php

/**
 * Doctype form base class.
 *
 * @method Doctype getObject() Returns the current form's model object
 *
 * @package    gwis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDoctypeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'num'             => new sfWidgetFormInputText(),
      'activityitem_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Activityitem'), 'add_empty' => false)),
      'name'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'num'             => new sfValidatorInteger(),
      'activityitem_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Activityitem'))),
      'name'            => new sfValidatorString(array('max_length' => 100)),
    ));

    $this->widgetSchema->setNameFormat('doctype[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Doctype';
  }

}
