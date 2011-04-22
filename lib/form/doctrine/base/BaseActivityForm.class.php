<?php

/**
 * Activity form base class.
 *
 * @method Activity getObject() Returns the current form's model object
 *
 * @package    gwis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseActivityForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'num'             => new sfWidgetFormInputText(),
      'activitytype_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Activitytype'), 'add_empty' => false)),
      'name'            => new sfWidgetFormInputText(),
      'longname'        => new sfWidgetFormInputText(),
      'description'     => new sfWidgetFormTextarea(),
      'homepage_url'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'num'             => new sfValidatorInteger(),
      'activitytype_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Activitytype'))),
      'name'            => new sfValidatorString(array('max_length' => 8)),
      'longname'        => new sfValidatorString(array('max_length' => 60)),
      'description'     => new sfValidatorString(array('required' => false)),
      'homepage_url'    => new sfValidatorString(array('max_length' => 200, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('activity[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Activity';
  }

}
