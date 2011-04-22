<?php

/**
 * Doc form base class.
 *
 * @method Doc getObject() Returns the current form's model object
 *
 * @package    gwis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDocForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'person_provider_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Person_3'), 'add_empty' => true)),
      'person_author_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'add_empty' => true)),
      'docot_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Docot'), 'add_empty' => true)),
      'ref'                => new sfWidgetFormInputText(),
      'name'               => new sfWidgetFormInputText(),
      'filename'           => new sfWidgetFormInputText(),
      'description'        => new sfWidgetFormInputText(),
      'is_public'          => new sfWidgetFormInputCheckbox(),
      'is_enabled'         => new sfWidgetFormInputCheckbox(),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'person_provider_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Person_3'), 'required' => false)),
      'person_author_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'required' => false)),
      'docot_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Docot'), 'required' => false)),
      'ref'                => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'name'               => new sfValidatorString(array('max_length' => 100)),
      'filename'           => new sfValidatorString(array('max_length' => 150)),
      'description'        => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'is_public'          => new sfValidatorBoolean(array('required' => false)),
      'is_enabled'         => new sfValidatorBoolean(array('required' => false)),
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('doc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Doc';
  }

}
