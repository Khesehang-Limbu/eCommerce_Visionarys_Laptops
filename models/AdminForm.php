<?php
namespace app\models;
use evil\phpmvc\Model;

class AdminForm extends Model {
    public string $username = "";
    public string $password = "";

    public function rules(): array
    {
        return [
            "username" => self::RULE_REQUIRED,
            "password" => self::RULE_REQUIRED
        ];
    }

    public function labels() : array {
        return [
            "username" => "Username",
            "password" => "Password"
        ];
    }
}
