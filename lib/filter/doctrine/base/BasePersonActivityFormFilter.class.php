<?php

/**
 * PersonActivity filter form base class.
 *
 * @package    gwis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePersonActivityFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'special_status' => new sfWidgetFormChoice(array('choices' => array('' => '', 'Coordinator' => 'Coordinator', 'Deputy Coordinator' => 'Deputy Coordinator', 'Task Leader' => 'Task Leader', 'Science Manager' => 'Science Manager', 'Technical Manager' => 'Technical Manager', 'Expert' => 'Expert'))),
    ));

    $this->setValidators(array(
      'special_status' => new sfValidatorChoice(array('required' => false, 'choices' => array('Coordinator' => 'Coordinator', 'Deputy Coordinator' => 'Deputy Coordinator', 'Task Leader' => 'Task Leader', 'Science Manager' => 'Science Manager', 'Technical Manager' => 'Technical Manager', 'Expert' => 'Expert'))),
    ));

    $this->widgetSchema->setNameFormat('person_activity_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PersonActivity';
  }

  public function getFields()
  {
    return array(
      'person_id'      => 'Number',
      'activity_id'    => 'Number',
      'special_status' => 'Enum',
    );
  }
}
