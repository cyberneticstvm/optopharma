<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Tenant;
use Carbon\Carbon;
use Hash;
use DB;

class TenantRegistrationController extends Controller
{
    private $central_domain, $db_prefix;

    function __construct(){
        $this->central_domain = Config::get('tenancy.central_domains')[1];
        $this->db_prefix = Config::get('tenancy.database.prefix');
    }

    public function register(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'domain' => 'required|unique:tenants,id',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);
        
        try{
            $db_pwd = Str::random(10);                
            $tenant = Tenant::create([
                'id' => $request->domain,
                /*'tenancy_db_username' => $request->domain,
                'tenancy_db_password' => $db_pwd,*/
            ]);
            $tenant->domains()->create(['domain' => $request->domain.'.'.$this->central_domain]);                
            DB::table('users')->insert(['name' => $request->name, 'email' => $request->email, 'tenant_id' => $request->domain, 'domain' => $request->domain.'.'.$this->central_domain,'db_name' => $this->db_prefix.$request->domain, 'db_password' => $db_pwd,'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
            Config::set('database.connections.mysql_tenant.database', $this->db_prefix.$request->domain);
            DB::reconnect('mysql_tenant');
            //Config::set('database.connections.mysql.username', $request->domain);
            //Config::set('database.connections.mysql.password', $db_pwd);
            DB::connection('mysql_tenant')->table('users')->insert(['name' => $request->name, 'email' => $request->email, 'password' => Hash::make($request->password)]);
            //Config::set('database.connections.mysql.database', env('DB_DATABASE', 'forge'));
            DB::reconnect('mysql');                        
        }catch(Exception $e){
            throw $e;
        }        
        return redirect()->route('index')->with('success','Tenant created successfully');
    }

    public function test(){
        return view('landlord.test');
    }
}
