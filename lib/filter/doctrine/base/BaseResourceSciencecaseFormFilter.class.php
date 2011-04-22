<?php

/**
 * ResourceSciencecase filter form base class.
 *
 * @package    gwis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseResourceSciencecaseFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('resource_sciencecase_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ResourceSciencecase';
  }

  public function getFields()
  {
    return array(
      'resource_id'    => 'Number',
      'sciencecase_id' => 'Number',
    );
  }
}
