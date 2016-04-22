<?php

class UsersField extends CheckboxesField {

  public function options() {
    foreach(kirby()->site()->users() as $user) {
      if (is_array($this->exclude['roles']) && in_array($user->role(), $this->exclude['roles'])) continue;
      if (is_array($this->exclude['users']) && in_array($user->username(), $this->exclude['users'])) continue;
        $options[$user->username()] =  $user;
    }
    return $options;
  }

}
