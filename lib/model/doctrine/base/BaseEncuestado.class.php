<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Encuestado', 'doctrine');

/**
 * BaseEncuestado
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $login
 * @property string $password
 * @property string $nombre_completo
 * @property string $correo
 * @property integer $id_encuesta
 * @property Encuesta $Encuesta
 * @property Doctrine_Collection $EncuestadoGrupoUsuario
 * 
 * @method integer             getId()                     Returns the current record's "id" value
 * @method string              getLogin()                  Returns the current record's "login" value
 * @method string              getPassword()               Returns the current record's "password" value
 * @method string              getNombreCompleto()         Returns the current record's "nombre_completo" value
 * @method string              getCorreo()                 Returns the current record's "correo" value
 * @method integer             getIdEncuesta()             Returns the current record's "id_encuesta" value
 * @method Encuesta            getEncuesta()               Returns the current record's "Encuesta" value
 * @method Doctrine_Collection getEncuestadoGrupoUsuario() Returns the current record's "EncuestadoGrupoUsuario" collection
 * @method Encuestado          setId()                     Sets the current record's "id" value
 * @method Encuestado          setLogin()                  Sets the current record's "login" value
 * @method Encuestado          setPassword()               Sets the current record's "password" value
 * @method Encuestado          setNombreCompleto()         Sets the current record's "nombre_completo" value
 * @method Encuestado          setCorreo()                 Sets the current record's "correo" value
 * @method Encuestado          setIdEncuesta()             Sets the current record's "id_encuesta" value
 * @method Encuestado          setEncuesta()               Sets the current record's "Encuesta" value
 * @method Encuestado          setEncuestadoGrupoUsuario() Sets the current record's "EncuestadoGrupoUsuario" collection
 * 
 * @package    encuesta-doctrine
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseEncuestado extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('encuestado');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('login', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('password', 'string', 40, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '40',
             ));
        $this->hasColumn('nombre_completo', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '255',
             ));
        $this->hasColumn('correo', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '255',
             ));
        $this->hasColumn('id_encuesta', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Encuesta', array(
             'local' => 'id_encuesta',
             'foreign' => 'id'));

        $this->hasMany('EncuestadoGrupoUsuario', array(
             'local' => 'id',
             'foreign' => 'id_encuestado'));
    }
}