<?php

/**
 * Keyword filter form base class.
 *
 * @package    gwis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseKeywordFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'keywordtype_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Keywordtype'), 'add_empty' => true)),
      'keyword_id'     => new sfWidgetFormFilterInput(),
      'family'         => new sfWidgetFormFilterInput(),
      'name'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'keywordtype_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Keywordtype'), 'column' => 'id')),
      'keyword_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'family'         => new sfValidatorPass(array('required' => false)),
      'name'           => new sfValidatorPass(array('required' => false)),
      'description'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('keyword_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Keyword';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'keywordtype_id' => 'ForeignKey',
      'keyword_id'     => 'Number',
      'family'         => 'Text',
      'name'           => 'Text',
      'description'    => 'Text',
    );
  }
}
