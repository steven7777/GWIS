<?php

/**
 * Event filter form base class.
 *
 * @package    gwis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEventFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'type'                    => new sfWidgetFormChoice(array('choices' => array('' => '', 'News' => 'News', 'Call' => 'Call', 'Meeting' => 'Meeting'))),
      'activity_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Activity'), 'add_empty' => true)),
      'person_responsible_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'add_empty' => true)),
      'purpose'                 => new sfWidgetFormFilterInput(),
      'description'             => new sfWidgetFormFilterInput(),
      'institute_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Institute'), 'add_empty' => true)),
      'place'                   => new sfWidgetFormFilterInput(),
      'date'                    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'duration'                => new sfWidgetFormFilterInput(),
      'registration_open_time'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'registration_close_time' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'nice_name_1'             => new sfWidgetFormFilterInput(),
      'host_website_1'          => new sfWidgetFormFilterInput(),
      'nice_name_2'             => new sfWidgetFormFilterInput(),
      'host_website_2'          => new sfWidgetFormFilterInput(),
      'is_news'                 => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'is_important'            => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'name'                    => new sfValidatorPass(array('required' => false)),
      'type'                    => new sfValidatorChoice(array('required' => false, 'choices' => array('News' => 'News', 'Call' => 'Call', 'Meeting' => 'Meeting'))),
      'activity_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Activity'), 'column' => 'id')),
      'person_responsible_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Person'), 'column' => 'id')),
      'purpose'                 => new sfValidatorPass(array('required' => false)),
      'description'             => new sfValidatorPass(array('required' => false)),
      'institute_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Institute'), 'column' => 'id')),
      'place'                   => new sfValidatorPass(array('required' => false)),
      'date'                    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'duration'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'registration_open_time'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'registration_close_time' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'nice_name_1'             => new sfValidatorPass(array('required' => false)),
      'host_website_1'          => new sfValidatorPass(array('required' => false)),
      'nice_name_2'             => new sfValidatorPass(array('required' => false)),
      'host_website_2'          => new sfValidatorPass(array('required' => false)),
      'is_news'                 => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'is_important'            => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('event_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Event';
  }

  public function getFields()
  {
    return array(
      'id'                      => 'Number',
      'name'                    => 'Text',
      'type'                    => 'Enum',
      'activity_id'             => 'ForeignKey',
      'person_responsible_id'   => 'ForeignKey',
      'purpose'                 => 'Text',
      'description'             => 'Text',
      'institute_id'            => 'ForeignKey',
      'place'                   => 'Text',
      'date'                    => 'Date',
      'duration'                => 'Number',
      'registration_open_time'  => 'Date',
      'registration_close_time' => 'Date',
      'nice_name_1'             => 'Text',
      'host_website_1'          => 'Text',
      'nice_name_2'             => 'Text',
      'host_website_2'          => 'Text',
      'is_news'                 => 'Boolean',
      'is_important'            => 'Boolean',
    );
  }
}
