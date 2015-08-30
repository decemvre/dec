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

    // Register the user
    public function register()
    {
            $user = new User();
            $user->name = $this->name;
            $user->email = $this->email;
            $user->setPassword($this->password);
            if ($user->save()) {
                return $user;
            }

        return false;
    }


}
