<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TipoUsuario', 'doctrine');

/**
 * BaseTipoUsuario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $etiqueta
 * @property string $credencial
 * @property Doctrine_Collection $Usuario
 * 
 * @method integer             getId()         Returns the current record's "id" value
 * @method string              getEtiqueta()   Returns the current record's "etiqueta" value
 * @method string              getCredencial() Returns the current record's "credencial" value
 * @method Doctrine_Collection getUsuario()    Returns the current record's "Usuario" collection
 * @method TipoUsuario         setId()         Sets the current record's "id" value
 * @method TipoUsuario         setEtiqueta()   Sets the current record's "etiqueta" value
 * @method TipoUsuario         setCredencial() Sets the current record's "credencial" value
 * @method TipoUsuario         setUsuario()    Sets the current record's "Usuario" collection
 * 
 * @package    encuesta-doctrine
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseTipoUsuario extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tipo_usuario');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('etiqueta', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('credencial', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '50',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Usuario', array(
             'local' => 'id',
             'foreign' => 'id_tipo_usuario'));
    }
}