<?php
namespace dec\models;

use dec\models\Model;
use dec\models\User;

class RegisterForm extends Model
{
    public $name;
    public $email;
    public $password;
    public $remember;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        'name' => 'name',
        'email' => 'email',
        'password' => 'password',
        ];
    }

    public function attributeLabels()
    {
        return [
        'name' => 'Full Name',
        'email' => 'Email',
        'password' => 'Password',
        ];
    }

    // Register the user, returns the user instance if succesful
    public function register()
    {
        $pass_hash = User::generatePasswordHash($this->password);
        $user = User::create(array(
         'name' => $this->name,
         'email' => $this->email,
         'password_hash' => $pass_hash,
         ));
        if ($user) {
            return $user;
        }
        return false;
    }


}
