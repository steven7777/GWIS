<?php

/**
 * Keyword form base class.
 *
 * @method Keyword getObject() Returns the current form's model object
 *
 * @package    gwis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseKeywordForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'keywordtype_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Keywordtype'), 'add_empty' => false)),
      'keyword_id'     => new sfWidgetFormInputText(),
      'family'         => new sfWidgetFormInputText(),
      'name'           => new sfWidgetFormInputText(),
      'description'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'keywordtype_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Keywordtype'), 'required' => false)),
      'keyword_id'     => new sfValidatorInteger(array('required' => false)),
      'family'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'name'           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'description'    => new sfValidatorString(array('max_length' => 200, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('keyword[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Keyword';
  }

}
