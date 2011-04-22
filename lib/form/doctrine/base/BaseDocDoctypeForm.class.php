<?php

/**
 * DocDoctype form base class.
 *
 * @method DocDoctype getObject() Returns the current form's model object
 *
 * @package    gwis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDocDoctypeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'doc_id'     => new sfWidgetFormInputHidden(),
      'doctype_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'doc_id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('doc_id')), 'empty_value' => $this->getObject()->get('doc_id'), 'required' => false)),
      'doctype_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('doctype_id')), 'empty_value' => $this->getObject()->get('doctype_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('doc_doctype[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DocDoctype';
  }

}
