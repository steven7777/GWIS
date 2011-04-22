<?php

/**
 * NodePdsnode form base class.
 *
 * @method NodePdsnode getObject() Returns the current form's model object
 *
 * @package    gwis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseNodePdsnodeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'node_id'    => new sfWidgetFormInputHidden(),
      'pdsnode_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'node_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('node_id')), 'empty_value' => $this->getObject()->get('node_id'), 'required' => false)),
      'pdsnode_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('pdsnode_id')), 'empty_value' => $this->getObject()->get('pdsnode_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('node_pdsnode[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'NodePdsnode';
  }

}
