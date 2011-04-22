<?php

/**
 * ResourceNode form base class.
 *
 * @method ResourceNode getObject() Returns the current form's model object
 *
 * @package    gwis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseResourceNodeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'node_id'     => new sfWidgetFormInputHidden(),
      'resource_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'node_id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('node_id')), 'empty_value' => $this->getObject()->get('node_id'), 'required' => false)),
      'resource_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('resource_id')), 'empty_value' => $this->getObject()->get('resource_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('resource_node[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ResourceNode';
  }

}
