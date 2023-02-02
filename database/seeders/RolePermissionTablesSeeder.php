<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create(['name'=>'Admin','display_name'=>'Administrator']);
        $clientRole = Role::create(['name'=>'Client','display_name'=>'Client']);
        
        //Creating Permissions
        $viewProductsPermission = Permission::create(['name'=>'ViewProducts','display_name'=>'View Products']);
        $createProductsPermission = Permission::create(['name'=>'CreateProducts','display_name'=>'Create Products']);
        $updateProductsPermission = Permission::create(['name'=>'UpdateProducts','display_name'=>'Update Products']);
        $deleteProductsPermission = Permission::create(['name'=>'DeleteProducts','display_name'=>'Delete Products']);
        
        $viewInvoicesPermission = Permission::create(['name'=>'ViewInvoices','display_name'=>'View Invoices']);
        $createInvoicesPermission = Permission::create(['name'=>'CreateInvoices','display_name'=>'Create Invoices']);
        $updateInvoicesPermission = Permission::create(['name'=>'UpdateInvoices','display_name'=>'Update Invoices']);
        $deleteInvoicesPermission = Permission::create(['name'=>'DeleteInvoices','display_name'=>'Delete Invoices']);

        $viewPurchasesPermission = Permission::create(['name'=>'ViewPurchases','display_name'=>'View Purchases']);
        $createPurchasesPermission = Permission::create(['name'=>'CreatePurchases','display_name'=>'Create Purchases']);
        
        
        
        //Giving Permission to Roles
        $adminRole->givePermissionTo($viewProductsPermission);
        $adminRole->givePermissionTo($createProductsPermission);
        $adminRole->givePermissionTo($updateProductsPermission);
        $adminRole->givePermissionTo($deleteProductsPermission);

        $adminRole->givePermissionTo($viewInvoicesPermission);
        $adminRole->givePermissionTo($createInvoicesPermission);
        $adminRole->givePermissionTo($updateInvoicesPermission);
        $adminRole->givePermissionTo($deleteInvoicesPermission);

        $adminRole->givePermissionTo($viewPurchasesPermission);

        $clientRole->givePermissionTo($viewPurchasesPermission);
        $clientRole->givePermissionTo($createPurchasesPermission);
        
        $admin = new User;
        $admin->name = 'Jose';
        $admin->email = 'jose@gmail.com';
        $admin->password = bcrypt('12345678');
        $admin->save();
        $admin->assignRole($adminRole); 

    }
}
