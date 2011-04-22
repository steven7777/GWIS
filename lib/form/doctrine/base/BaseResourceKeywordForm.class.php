<?php

/**
 * ResourceKeyword form base class.
 *
 * @method ResourceKeyword getObject() Returns the current form's model object
 *
 * @package    gwis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseResourceKeywordForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'keyword_id'  => new sfWidgetFormInputHidden(),
      'resource_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'keyword_id'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('keyword_id')), 'empty_value' => $this->getObject()->get('keyword_id'), 'required' => false)),
      'resource_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('resource_id')), 'empty_value' => $this->getObject()->get('resource_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('resource_keyword[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ResourceKeyword';
  }

}
