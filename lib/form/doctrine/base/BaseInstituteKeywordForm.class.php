<?php

/**
 * InstituteKeyword form base class.
 *
 * @method InstituteKeyword getObject() Returns the current form's model object
 *
 * @package    gwis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseInstituteKeywordForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'institute_id' => new sfWidgetFormInputHidden(),
      'keyword_id'   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'institute_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('institute_id')), 'empty_value' => $this->getObject()->get('institute_id'), 'required' => false)),
      'keyword_id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('keyword_id')), 'empty_value' => $this->getObject()->get('keyword_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('institute_keyword[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'InstituteKeyword';
  }

}
