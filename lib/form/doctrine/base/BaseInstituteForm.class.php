<?php

/**
 * Institute form base class.
 *
 * @method Institute getObject() Returns the current form's model object
 *
 * @package    gwis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseInstituteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'node_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Node'), 'add_empty' => true)),
      'is_node_leader'     => new sfWidgetFormInputCheckbox(),
      'participant_status' => new sfWidgetFormChoice(array('choices' => array('Participant' => 'Participant', 'Lab non EPN' => 'Lab non EPN', 'Associate' => 'Associate'))),
      'participant_num'    => new sfWidgetFormInputText(),
      'institute_id'       => new sfWidgetFormInputText(),
      'name'               => new sfWidgetFormInputText(),
      'fullname'           => new sfWidgetFormInputText(),
      'country_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Country'), 'add_empty' => false)),
      'address'            => new sfWidgetFormInputText(),
      'postcode'           => new sfWidgetFormInputText(),
      'city'               => new sfWidgetFormInputText(),
      'cedex'              => new sfWidgetFormInputText(),
      'excellence_fields'  => new sfWidgetFormTextarea(),
      'labos'              => new sfWidgetFormTextarea(),
      'specific_role'      => new sfWidgetFormTextarea(),
      'homepage'           => new sfWidgetFormInputText(),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'node_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Node'), 'required' => false)),
      'is_node_leader'     => new sfValidatorBoolean(array('required' => false)),
      'participant_status' => new sfValidatorChoice(array('choices' => array(0 => 'Participant', 1 => 'Lab non EPN', 2 => 'Associate'), 'required' => false)),
      'participant_num'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'institute_id'       => new sfValidatorInteger(array('required' => false)),
      'name'               => new sfValidatorString(array('max_length' => 10)),
      'fullname'           => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'country_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Country'), 'required' => false)),
      'address'            => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'postcode'           => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'city'               => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'cedex'              => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'excellence_fields'  => new sfValidatorString(),
      'labos'              => new sfValidatorString(array('required' => false)),
      'specific_role'      => new sfValidatorString(array('required' => false)),
      'homepage'           => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'created_at'         => new sfValidatorDateTime(),
      'updated_at'         => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('institute[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Institute';
  }

}
