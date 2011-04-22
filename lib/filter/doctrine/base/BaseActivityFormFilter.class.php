<?php

/**
 * Activity filter form base class.
 *
 * @package    gwis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseActivityFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'num'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'activitytype_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Activitytype'), 'add_empty' => true)),
      'name'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'longname'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'     => new sfWidgetFormFilterInput(),
      'homepage_url'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'num'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'activitytype_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Activitytype'), 'column' => 'id')),
      'name'            => new sfValidatorPass(array('required' => false)),
      'longname'        => new sfValidatorPass(array('required' => false)),
      'description'     => new sfValidatorPass(array('required' => false)),
      'homepage_url'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('activity_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Activity';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'num'             => 'Number',
      'activitytype_id' => 'ForeignKey',
      'name'            => 'Text',
      'longname'        => 'Text',
      'description'     => 'Text',
      'homepage_url'    => 'Text',
    );
  }
}
