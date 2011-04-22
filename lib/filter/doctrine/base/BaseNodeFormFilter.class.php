<?php

/**
 * Node filter form base class.
 *
 * @package    gwis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseNodeFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'num'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'url'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'num'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'name' => new sfValidatorPass(array('required' => false)),
      'url'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('node_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Node';
  }

  public function getFields()
  {
    return array(
      'id'   => 'Number',
      'num'  => 'Number',
      'name' => 'Text',
      'url'  => 'Text',
    );
  }
}
