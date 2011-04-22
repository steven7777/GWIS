<?php

/**
 * Resource filter form base class.
 *
 * @package    gwis
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseResourceFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'node_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Node'), 'add_empty' => true)),
      'resourcetype_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Resourcetype'), 'add_empty' => true)),
      'person_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'add_empty' => true)),
      'person_updater_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Person_6'), 'add_empty' => true)),
      'person_responsible_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Person_5'), 'add_empty' => true)),
      'person_contact_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Person_4'), 'add_empty' => true)),
      'institute_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Institute'), 'add_empty' => true)),
      'resource_repository_id' => new sfWidgetFormFilterInput(),
      'name'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'url'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_restricted'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'access_comment'         => new sfWidgetFormFilterInput(),
      'brief'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'            => new sfWidgetFormFilterInput(),
      'non_epn_location'       => new sfWidgetFormFilterInput(),
      'howto'                  => new sfWidgetFormFilterInput(),
      'howto_url1'             => new sfWidgetFormFilterInput(),
      'howto_url2'             => new sfWidgetFormFilterInput(),
      'howto_url3'             => new sfWidgetFormFilterInput(),
      'biblio_ref1'            => new sfWidgetFormFilterInput(),
      'biblio_ref2'            => new sfWidgetFormFilterInput(),
      'associated_url1'        => new sfWidgetFormFilterInput(),
      'associated_url2'        => new sfWidgetFormFilterInput(),
      'associated_url3'        => new sfWidgetFormFilterInput(),
      'associated_url4'        => new sfWidgetFormFilterInput(),
      'start_date'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'stop_date'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'is_english'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'non_english_language'   => new sfWidgetFormChoice(array('choices' => array('' => '', 'Chinese' => 'Chinese', 'Danish' => 'Danish', 'Dutch' => 'Dutch', 'Finnish' => 'Finnish', 'French' => 'French', 'German' => 'German', 'Italian' => 'Italian', 'Japanese' => 'Japanese', 'Spanish' => 'Spanish', 'Russian' => 'Russian', 'Other' => 'Other'))),
      'language'               => new sfWidgetFormChoice(array('choices' => array('' => '', 'English' => 'English', 'French' => 'French', 'German' => 'German', 'Italian' => 'Italian', 'Spanish' => 'Spanish'))),
      'responsible_name'       => new sfWidgetFormFilterInput(),
      'responsible_email'      => new sfWidgetFormFilterInput(),
      'contact_name'           => new sfWidgetFormFilterInput(),
      'contact_email'          => new sfWidgetFormFilterInput(),
      'resourceformat_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Resourceformat'), 'add_empty' => true)),
      'size'                   => new sfWidgetFormFilterInput(),
      'process_level'          => new sfWidgetFormFilterInput(),
      'status'                 => new sfWidgetFormFilterInput(),
      'format_comment'         => new sfWidgetFormFilterInput(),
      'is_copy'                => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'associated_url_comment' => new sfWidgetFormFilterInput(),
      'other_node_thematic'    => new sfWidgetFormFilterInput(),
      'created_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'node_id'                => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Node'), 'column' => 'id')),
      'resourcetype_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Resourcetype'), 'column' => 'id')),
      'person_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Person'), 'column' => 'id')),
      'person_updater_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Person_6'), 'column' => 'id')),
      'person_responsible_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Person_5'), 'column' => 'id')),
      'person_contact_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Person_4'), 'column' => 'id')),
      'institute_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Institute'), 'column' => 'id')),
      'resource_repository_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'name'                   => new sfValidatorPass(array('required' => false)),
      'url'                    => new sfValidatorPass(array('required' => false)),
      'is_restricted'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'access_comment'         => new sfValidatorPass(array('required' => false)),
      'brief'                  => new sfValidatorPass(array('required' => false)),
      'description'            => new sfValidatorPass(array('required' => false)),
      'non_epn_location'       => new sfValidatorPass(array('required' => false)),
      'howto'                  => new sfValidatorPass(array('required' => false)),
      'howto_url1'             => new sfValidatorPass(array('required' => false)),
      'howto_url2'             => new sfValidatorPass(array('required' => false)),
      'howto_url3'             => new sfValidatorPass(array('required' => false)),
      'biblio_ref1'            => new sfValidatorPass(array('required' => false)),
      'biblio_ref2'            => new sfValidatorPass(array('required' => false)),
      'associated_url1'        => new sfValidatorPass(array('required' => false)),
      'associated_url2'        => new sfValidatorPass(array('required' => false)),
      'associated_url3'        => new sfValidatorPass(array('required' => false)),
      'associated_url4'        => new sfValidatorPass(array('required' => false)),
      'start_date'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'stop_date'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'is_english'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'non_english_language'   => new sfValidatorChoice(array('required' => false, 'choices' => array('Chinese' => 'Chinese', 'Danish' => 'Danish', 'Dutch' => 'Dutch', 'Finnish' => 'Finnish', 'French' => 'French', 'German' => 'German', 'Italian' => 'Italian', 'Japanese' => 'Japanese', 'Spanish' => 'Spanish', 'Russian' => 'Russian', 'Other' => 'Other'))),
      'language'               => new sfValidatorChoice(array('required' => false, 'choices' => array('English' => 'English', 'French' => 'French', 'German' => 'German', 'Italian' => 'Italian', 'Spanish' => 'Spanish'))),
      'responsible_name'       => new sfValidatorPass(array('required' => false)),
      'responsible_email'      => new sfValidatorPass(array('required' => false)),
      'contact_name'           => new sfValidatorPass(array('required' => false)),
      'contact_email'          => new sfValidatorPass(array('required' => false)),
      'resourceformat_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Resourceformat'), 'column' => 'id')),
      'size'                   => new sfValidatorPass(array('required' => false)),
      'process_level'          => new sfValidatorPass(array('required' => false)),
      'status'                 => new sfValidatorPass(array('required' => false)),
      'format_comment'         => new sfValidatorPass(array('required' => false)),
      'is_copy'                => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'associated_url_comment' => new sfValidatorPass(array('required' => false)),
      'other_node_thematic'    => new sfValidatorPass(array('required' => false)),
      'created_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('resource_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Resource';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'node_id'                => 'ForeignKey',
      'resourcetype_id'        => 'ForeignKey',
      'person_id'              => 'ForeignKey',
      'person_updater_id'      => 'ForeignKey',
      'person_responsible_id'  => 'ForeignKey',
      'person_contact_id'      => 'ForeignKey',
      'institute_id'           => 'ForeignKey',
      'resource_repository_id' => 'Number',
      'name'                   => 'Text',
      'url'                    => 'Text',
      'is_restricted'          => 'Boolean',
      'access_comment'         => 'Text',
      'brief'                  => 'Text',
      'description'            => 'Text',
      'non_epn_location'       => 'Text',
      'howto'                  => 'Text',
      'howto_url1'             => 'Text',
      'howto_url2'             => 'Text',
      'howto_url3'             => 'Text',
      'biblio_ref1'            => 'Text',
      'biblio_ref2'            => 'Text',
      'associated_url1'        => 'Text',
      'associated_url2'        => 'Text',
      'associated_url3'        => 'Text',
      'associated_url4'        => 'Text',
      'start_date'             => 'Date',
      'stop_date'              => 'Date',
      'is_english'             => 'Boolean',
      'non_english_language'   => 'Enum',
      'language'               => 'Enum',
      'responsible_name'       => 'Text',
      'responsible_email'      => 'Text',
      'contact_name'           => 'Text',
      'contact_email'          => 'Text',
      'resourceformat_id'      => 'ForeignKey',
      'size'                   => 'Text',
      'process_level'          => 'Text',
      'status'                 => 'Text',
      'format_comment'         => 'Text',
      'is_copy'                => 'Boolean',
      'associated_url_comment' => 'Text',
      'other_node_thematic'    => 'Text',
      'created_at'             => 'Date',
      'updated_at'             => 'Date',
    );
  }
}
