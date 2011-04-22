<?php

/**
 * Job form base class.
 *
 * @method Job getObject() Returns the current form's model object
 *
 * @package    gwis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseJobForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'name'          => new sfWidgetFormInputText(),
      'institute'     => new sfWidgetFormInputText(),
      'location'      => new sfWidgetFormInputText(),
      'duration'      => new sfWidgetFormInputText(),
      'qualification' => new sfWidgetFormTextarea(),
      'duties'        => new sfWidgetFormTextarea(),
      'website'       => new sfWidgetFormInputText(),
      'contact'       => new sfWidgetFormInputText(),
      'how_to_apply'  => new sfWidgetFormTextarea(),
      'closing_date'  => new sfWidgetFormInputText(),
      'is_valid'      => new sfWidgetFormInputCheckbox(),
      'sort_date'     => new sfWidgetFormDate(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'          => new sfValidatorString(array('max_length' => 200)),
      'institute'     => new sfValidatorString(array('max_length' => 200)),
      'location'      => new sfValidatorString(array('max_length' => 100)),
      'duration'      => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'qualification' => new sfValidatorString(array('required' => false)),
      'duties'        => new sfValidatorString(),
      'website'       => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'contact'       => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'how_to_apply'  => new sfValidatorString(),
      'closing_date'  => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'is_valid'      => new sfValidatorBoolean(array('required' => false)),
      'sort_date'     => new sfValidatorDate(),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('job[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Job';
  }

}
