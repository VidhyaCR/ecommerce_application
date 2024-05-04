<?php
use Migrations\AbstractMigration;

class CreatePermissionsRoles extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('permissions_roles');
        $table->addColumn('role_id','integer')
              ->addForeignKey('role_id','roles','id',['delete'=> 'CASCADE', 'update'=> 'NO_ACTION']);
        $table->addColumn('permission_id', 'integer')
              ->addForeignKey('permission_id','permissions','id',['delete'=> 'CASCADE', 'update'=> 'NO_ACTION']);
        $table->create();
    }
}
