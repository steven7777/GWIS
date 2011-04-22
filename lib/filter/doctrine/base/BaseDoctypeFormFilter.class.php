<?php

/**
 * Doctype filter form base class.
 *
 * @package    gwis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDoctypeFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'num'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'activityitem_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Activityitem'), 'add_empty' => true)),
      'name'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'num'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'activityitem_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Activityitem'), 'column' => 'id')),
      'name'            => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('doctype_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Doctype';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'num'             => 'Number',
      'activityitem_id' => 'ForeignKey',
      'name'            => 'Text',
    );
  }
}
