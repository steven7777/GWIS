<?php

/**
 * PersonN2dwg filter form base class.
 *
 * @package    gwis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePersonN2dwgFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'special_status' => new sfWidgetFormChoice(array('choices' => array('' => '', 'Leader' => 'Leader', 'Co-Leader' => 'Co-Leader'))),
    ));

    $this->setValidators(array(
      'special_status' => new sfValidatorChoice(array('required' => false, 'choices' => array('Leader' => 'Leader', 'Co-Leader' => 'Co-Leader'))),
    ));

    $this->widgetSchema->setNameFormat('person_n2dwg_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PersonN2dwg';
  }

  public function getFields()
  {
    return array(
      'person_id'      => 'Number',
      'n2dwg_id'       => 'Number',
      'special_status' => 'Enum',
    );
  }
}
