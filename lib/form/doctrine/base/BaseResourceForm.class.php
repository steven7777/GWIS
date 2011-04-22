<?php

/**
 * Resource form base class.
 *
 * @method Resource getObject() Returns the current form's model object
 *
 * @package    gwis
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseResourceForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'node_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Node'), 'add_empty' => false)),
      'resourcetype_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Resourcetype'), 'add_empty' => false)),
      'person_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'add_empty' => false)),
      'person_updater_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Person_6'), 'add_empty' => true)),
      'person_responsible_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Person_5'), 'add_empty' => true)),
      'person_contact_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Person_4'), 'add_empty' => true)),
      'institute_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Institute'), 'add_empty' => true)),
      'resource_repository_id' => new sfWidgetFormInputText(),
      'name'                   => new sfWidgetFormInputText(),
      'url'                    => new sfWidgetFormInputText(),
      'is_restricted'          => new sfWidgetFormInputCheckbox(),
      'access_comment'         => new sfWidgetFormTextarea(),
      'brief'                  => new sfWidgetFormInputText(),
      'description'            => new sfWidgetFormTextarea(),
      'non_epn_location'       => new sfWidgetFormInputText(),
      'howto'                  => new sfWidgetFormTextarea(),
      'howto_url1'             => new sfWidgetFormInputText(),
      'howto_url2'             => new sfWidgetFormInputText(),
      'howto_url3'             => new sfWidgetFormInputText(),
      'biblio_ref1'            => new sfWidgetFormInputText(),
      'biblio_ref2'            => new sfWidgetFormInputText(),
      'associated_url1'        => new sfWidgetFormInputText(),
      'associated_url2'        => new sfWidgetFormInputText(),
      'associated_url3'        => new sfWidgetFormInputText(),
      'associated_url4'        => new sfWidgetFormInputText(),
      'start_date'             => new sfWidgetFormDate(),
      'stop_date'              => new sfWidgetFormDate(),
      'is_english'             => new sfWidgetFormInputCheckbox(),
      'non_english_language'   => new sfWidgetFormChoice(array('choices' => array('Chinese' => 'Chinese', 'Danish' => 'Danish', 'Dutch' => 'Dutch', 'Finnish' => 'Finnish', 'French' => 'French', 'German' => 'German', 'Italian' => 'Italian', 'Japanese' => 'Japanese', 'Spanish' => 'Spanish', 'Russian' => 'Russian', 'Other' => 'Other'))),
      'language'               => new sfWidgetFormChoice(array('choices' => array('English' => 'English', 'French' => 'French', 'German' => 'German', 'Italian' => 'Italian', 'Spanish' => 'Spanish'))),
      'responsible_name'       => new sfWidgetFormInputText(),
      'responsible_email'      => new sfWidgetFormInputText(),
      'contact_name'           => new sfWidgetFormInputText(),
      'contact_email'          => new sfWidgetFormInputText(),
      'resourceformat_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Resourceformat'), 'add_empty' => true)),
      'size'                   => new sfWidgetFormTextarea(),
      'process_level'          => new sfWidgetFormTextarea(),
      'status'                 => new sfWidgetFormTextarea(),
      'format_comment'         => new sfWidgetFormTextarea(),
      'is_copy'                => new sfWidgetFormInputCheckbox(),
      'associated_url_comment' => new sfWidgetFormTextarea(),
      'other_node_thematic'    => new sfWidgetFormInputText(),
      'created_at'             => new sfWidgetFormDateTime(),
      'updated_at'             => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'node_id'                => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Node'))),
      'resourcetype_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Resourcetype'), 'required' => false)),
      'person_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'required' => false)),
      'person_updater_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Person_6'), 'required' => false)),
      'person_responsible_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Person_5'), 'required' => false)),
      'person_contact_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Person_4'), 'required' => false)),
      'institute_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Institute'), 'required' => false)),
      'resource_repository_id' => new sfValidatorInteger(array('required' => false)),
      'name'                   => new sfValidatorString(array('max_length' => 80)),
      'url'                    => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'is_restricted'          => new sfValidatorBoolean(array('required' => false)),
      'access_comment'         => new sfValidatorString(array('required' => false)),
      'brief'                  => new sfValidatorString(array('max_length' => 140, 'required' => false)),
      'description'            => new sfValidatorString(array('required' => false)),
      'non_epn_location'       => new sfValidatorString(array('max_length' => 130, 'required' => false)),
      'howto'                  => new sfValidatorString(array('required' => false)),
      'howto_url1'             => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'howto_url2'             => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'howto_url3'             => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'biblio_ref1'            => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'biblio_ref2'            => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'associated_url1'        => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'associated_url2'        => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'associated_url3'        => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'associated_url4'        => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'start_date'             => new sfValidatorDate(array('required' => false)),
      'stop_date'              => new sfValidatorDate(array('required' => false)),
      'is_english'             => new sfValidatorBoolean(array('required' => false)),
      'non_english_language'   => new sfValidatorChoice(array('choices' => array(0 => 'Chinese', 1 => 'Danish', 2 => 'Dutch', 3 => 'Finnish', 4 => 'French', 5 => 'German', 6 => 'Italian', 7 => 'Japanese', 8 => 'Spanish', 9 => 'Russian', 10 => 'Other'), 'required' => false)),
      'language'               => new sfValidatorChoice(array('choices' => array(0 => 'English', 1 => 'French', 2 => 'German', 3 => 'Italian', 4 => 'Spanish'), 'required' => false)),
      'responsible_name'       => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'responsible_email'      => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'contact_name'           => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'contact_email'          => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'resourceformat_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Resourceformat'), 'required' => false)),
      'size'                   => new sfValidatorString(array('required' => false)),
      'process_level'          => new sfValidatorString(array('required' => false)),
      'status'                 => new sfValidatorString(array('required' => false)),
      'format_comment'         => new sfValidatorString(array('required' => false)),
      'is_copy'                => new sfValidatorBoolean(array('required' => false)),
      'associated_url_comment' => new sfValidatorString(array('required' => false)),
      'other_node_thematic'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'created_at'             => new sfValidatorDateTime(),
      'updated_at'             => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('resource[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Resource';
  }

}
