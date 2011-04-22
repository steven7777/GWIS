<?php

/**
 * Event form base class.
 *
 * @method Event getObject() Returns the current form's model object
 *
 * @package    gwis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEventForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                      => new sfWidgetFormInputHidden(),
      'name'                    => new sfWidgetFormInputText(),
      'type'                    => new sfWidgetFormChoice(array('choices' => array('News' => 'News', 'Call' => 'Call', 'Meeting' => 'Meeting'))),
      'activity_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Activity'), 'add_empty' => true)),
      'person_responsible_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'add_empty' => true)),
      'purpose'                 => new sfWidgetFormInputText(),
      'description'             => new sfWidgetFormTextarea(),
      'institute_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Institute'), 'add_empty' => true)),
      'place'                   => new sfWidgetFormInputText(),
      'date'                    => new sfWidgetFormDate(),
      'duration'                => new sfWidgetFormInputText(),
      'registration_open_time'  => new sfWidgetFormDateTime(),
      'registration_close_time' => new sfWidgetFormDateTime(),
      'nice_name_1'             => new sfWidgetFormInputText(),
      'host_website_1'          => new sfWidgetFormInputText(),
      'nice_name_2'             => new sfWidgetFormInputText(),
      'host_website_2'          => new sfWidgetFormInputText(),
      'is_news'                 => new sfWidgetFormInputCheckbox(),
      'is_important'            => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'id'                      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'                    => new sfValidatorString(array('max_length' => 50)),
      'type'                    => new sfValidatorChoice(array('choices' => array(0 => 'News', 1 => 'Call', 2 => 'Meeting'), 'required' => false)),
      'activity_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Activity'), 'required' => false)),
      'person_responsible_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'required' => false)),
      'purpose'                 => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'description'             => new sfValidatorString(array('required' => false)),
      'institute_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Institute'), 'required' => false)),
      'place'                   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'date'                    => new sfValidatorDate(array('required' => false)),
      'duration'                => new sfValidatorInteger(array('required' => false)),
      'registration_open_time'  => new sfValidatorDateTime(array('required' => false)),
      'registration_close_time' => new sfValidatorDateTime(array('required' => false)),
      'nice_name_1'             => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'host_website_1'          => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'nice_name_2'             => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'host_website_2'          => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'is_news'                 => new sfValidatorBoolean(array('required' => false)),
      'is_important'            => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('event[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Event';
  }

}
