<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('UsuarioOrganizacion', 'doctrine');

/**
 * BaseUsuarioOrganizacion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $id_usuario
 * @property integer $id_organizacion
 * @property Usuario $Usuario
 * @property Organizacion $Organizacion
 * 
 * @method integer             getId()              Returns the current record's "id" value
 * @method integer             getIdUsuario()       Returns the current record's "id_usuario" value
 * @method integer             getIdOrganizacion()  Returns the current record's "id_organizacion" value
 * @method Usuario             getUsuario()         Returns the current record's "Usuario" value
 * @method Organizacion        getOrganizacion()    Returns the current record's "Organizacion" value
 * @method UsuarioOrganizacion setId()              Sets the current record's "id" value
 * @method UsuarioOrganizacion setIdUsuario()       Sets the current record's "id_usuario" value
 * @method UsuarioOrganizacion setIdOrganizacion()  Sets the current record's "id_organizacion" value
 * @method UsuarioOrganizacion setUsuario()         Sets the current record's "Usuario" value
 * @method UsuarioOrganizacion setOrganizacion()    Sets the current record's "Organizacion" value
 * 
 * @package    encuesta-doctrine
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseUsuarioOrganizacion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('usuario_organizacion');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('id_usuario', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('id_organizacion', 'integer', 4, array(
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
        $this->hasOne('Usuario', array(
             'local' => 'id_usuario',
             'foreign' => 'id'));

        $this->hasOne('Organizacion', array(
             'local' => 'id_organizacion',
             'foreign' => 'id'));
    }
}