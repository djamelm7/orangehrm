<?php

/**
 * BaseEmpTerminationReason
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $description
 * @property EmpTermination $EmpTermination
 * 
 * @method integer              getId()             Returns the current record's "id" value
 * @method string               getDescription()    Returns the current record's "description" value
 * @method EmpTermination       getEmpTermination() Returns the current record's "EmpTermination" value
 * @method EmpTerminationReason setId()             Sets the current record's "id" value
 * @method EmpTerminationReason setDescription()    Sets the current record's "description" value
 * @method EmpTerminationReason setEmpTermination() Sets the current record's "EmpTermination" value
 * 
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEmpTerminationReason extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_emp_termination_reason');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('description', 'string', 225, array(
             'type' => 'string',
             'length' => 225,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('EmpTermination', array(
             'local' => 'id',
             'foreign' => 'reasonId'));
    }
}