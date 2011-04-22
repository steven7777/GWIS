<?php

/**
 * Job filter form base class.
 *
 * @package    gwis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJobFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'institute'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'location'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'duration'      => new sfWidgetFormFilterInput(),
      'qualification' => new sfWidgetFormFilterInput(),
      'duties'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'website'       => new sfWidgetFormFilterInput(),
      'contact'       => new sfWidgetFormFilterInput(),
      'how_to_apply'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'closing_date'  => new sfWidgetFormFilterInput(),
      'is_valid'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'sort_date'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'name'          => new sfValidatorPass(array('required' => false)),
      'institute'     => new sfValidatorPass(array('required' => false)),
      'location'      => new sfValidatorPass(array('required' => false)),
      'duration'      => new sfValidatorPass(array('required' => false)),
      'qualification' => new sfValidatorPass(array('required' => false)),
      'duties'        => new sfValidatorPass(array('required' => false)),
      'website'       => new sfValidatorPass(array('required' => false)),
      'contact'       => new sfValidatorPass(array('required' => false)),
      'how_to_apply'  => new sfValidatorPass(array('required' => false)),
      'closing_date'  => new sfValidatorPass(array('required' => false)),
      'is_valid'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'sort_date'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('job_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Job';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'name'          => 'Text',
      'institute'     => 'Text',
      'location'      => 'Text',
      'duration'      => 'Text',
      'qualification' => 'Text',
      'duties'        => 'Text',
      'website'       => 'Text',
      'contact'       => 'Text',
      'how_to_apply'  => 'Text',
      'closing_date'  => 'Text',
      'is_valid'      => 'Boolean',
      'sort_date'     => 'Date',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
    );
  }
}
