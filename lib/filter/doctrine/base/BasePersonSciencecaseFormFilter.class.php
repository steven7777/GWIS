<?php

/**
 * PersonSciencecase filter form base class.
 *
 * @package    gwis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePersonSciencecaseFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'special_status' => new sfWidgetFormChoice(array('choices' => array('' => '', 'Proposer' => 'Proposer', 'Contact' => 'Contact'))),
    ));

    $this->setValidators(array(
      'special_status' => new sfValidatorChoice(array('required' => false, 'choices' => array('Proposer' => 'Proposer', 'Contact' => 'Contact'))),
    ));

    $this->widgetSchema->setNameFormat('person_sciencecase_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PersonSciencecase';
  }

  public function getFields()
  {
    return array(
      'person_id'      => 'Number',
      'sciencecase_id' => 'Number',
      'special_status' => 'Enum',
    );
  }
}
