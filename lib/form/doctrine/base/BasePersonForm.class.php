<?php

/**
 * Person form base class.
 *
 * @method Person getObject() Returns the current form's model object
 *
 * @package    gwis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePersonForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'institute_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Institute'), 'add_empty' => true)),
      'institute_other'     => new sfWidgetFormInputText(),
      'n2dwg_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('N2dwg'), 'add_empty' => true)),
      'node_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Node'), 'add_empty' => true)),
      'domain_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Domain'), 'add_empty' => true)),
      'other_node_thematic' => new sfWidgetFormInputText(),
      'node_leading_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Node_5'), 'add_empty' => true)),
      'node_leading_status' => new sfWidgetFormChoice(array('choices' => array('scientific' => 'scientific', 'technical' => 'technical'))),
      'profile'             => new sfWidgetFormChoice(array('choices' => array('normal' => 'normal', 'priviledged' => 'priviledged', 'admin' => 'admin', 'dev' => 'dev'))),
      'is_enabled'          => new sfWidgetFormInputCheckbox(),
      'is_epn_contact'      => new sfWidgetFormInputCheckbox(),
      'tel'                 => new sfWidgetFormInputText(),
      'fax'                 => new sfWidgetFormInputText(),
      'department'          => new sfWidgetFormInputText(),
      'role'                => new sfWidgetFormInputText(),
      'title'               => new sfWidgetFormInputText(),
      'url'                 => new sfWidgetFormInputText(),
      'sf_guard_user_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'institute_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Institute'), 'required' => false)),
      'institute_other'     => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'n2dwg_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('N2dwg'), 'required' => false)),
      'node_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Node'), 'required' => false)),
      'domain_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Domain'), 'required' => false)),
      'other_node_thematic' => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'node_leading_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Node_5'), 'required' => false)),
      'node_leading_status' => new sfValidatorChoice(array('choices' => array(0 => 'scientific', 1 => 'technical'), 'required' => false)),
      'profile'             => new sfValidatorChoice(array('choices' => array(0 => 'normal', 1 => 'priviledged', 2 => 'admin', 3 => 'dev'), 'required' => false)),
      'is_enabled'          => new sfValidatorBoolean(array('required' => false)),
      'is_epn_contact'      => new sfValidatorBoolean(array('required' => false)),
      'tel'                 => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'fax'                 => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'department'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'role'                => new sfValidatorString(array('max_length' => 60)),
      'title'               => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'url'                 => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'sf_guard_user_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'required' => false)),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('person[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Person';
  }

}
