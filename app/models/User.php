<?php
/**
 * 
 * class User
 */
class User extends Model {

    protected $fillable = ['nom', 'username', 'password'];

    protected static $attributs = [
        [
            'name' =>  'id',
            'lib' => '#ID',
            'type' => 'int',
            'fillable' => false,
            'primary_key' => true,
            'auto_increment' => true,
            'required' => 'required'
        ],
        [
            'name' =>  'nom',
            'lib' => 'Nom',
            'type' => 'string',
            'primary_key' => false,
            'auto_increment' => false,
            'fillable' => true,
            'input_type' => 'text',
            'required' => 'required'
        ],
        [
            'name' =>  'username',
            'lib' => 'Nom d\'utilisateur',
            'type' => 'string',
            'primary_key' => false,
            'auto_increment' => false,
            'fillable' => true,
            'input_type' => 'text',
            'required' => 'required'
        ],
        [
            'name' =>  'password',
            'lib' => 'Mot de passe',
            'type' => 'string',
            'primary_key' => false,
            'auto_increment' => false,
            'fillable' => true,
            'input_type' => 'password',
            'required' => 'required'
        ],

    ];

    
    public static function attributs() {
        return self::$attributs;
    }

    // the password must be hash
    public static function create(array $attributes = [])
    {
        
        if(isset($attributes['password'])) 
            $attributes['password'] = sha1($attributes['password']);
        
        return parent::create($attributes);

    }

    public function update(array $attributes = [])
    {

        if(isset($attributes['password'])) 
            $attributes['password'] = sha1($attributes['password']);
        else {
            unset($attributes['password']);
        }

        return parent::update($attributes);
        
    }

    // on verra les possibilité de unset le password, lorsque non utilise dans un récupération


    // comportement
    
    // login

    // logout

    // register


    
}