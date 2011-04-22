<?php

/**
 * InstituteActivity filter form base class.
 *
 * @package    gwis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseInstituteActivityFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'special_status' => new sfWidgetFormChoice(array('choices' => array('' => '', 'Coordinator' => 'Coordinator'))),
    ));

    $this->setValidators(array(
      'special_status' => new sfValidatorChoice(array('required' => false, 'choices' => array('Coordinator' => 'Coordinator'))),
    ));

    $this->widgetSchema->setNameFormat('institute_activity_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'InstituteActivity';
  }

  public function getFields()
  {
    return array(
      'activity_id'    => 'Number',
      'institute_id'   => 'Number',
      'special_status' => 'Enum',
    );
  }
}
