<?php

/**
 * sfGuardUserAdminForm for admin generators
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfGuardUserAdminForm.class.php 23536 2009-11-02 21:41:21Z Kris.Wallsmith $
 */
class sfGuardUserAdminForm extends BasesfGuardUserAdminForm
{
  /**
   * @see sfForm
   */
  public function configure()
  {
      parent::configure();
      
      $personForm = new PersonForm($this->object->Person);
      unset($personForm['id'],
          $personForm['sf_guard_user_id'],
          $personForm['created_at'],
          $personForm['updated-at']
      );
      $this->embedForm('Person', $personForm);
  }
}
