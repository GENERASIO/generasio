<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use App\Models\ActivityLog;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Mail\EmailVerification;
use Yajra\Datatables\Datatables;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public static $pageTitle = 'Profile';
    // public static $pageDescription = 'User Description';
    // public static $modelName = 'App\Models\User';
    public static $permissionName = 'profile';
    public static $folderPath = 'profile';
    public static $routePath = 'profiles';
    public static $pageBreadcrumbs = [];

    function __construct()
    {
        $this->middleware('permission:'.self::$permissionName.'-list', ['only' => ['index']]);
        $this->middleware('permission:'.self::$permissionName.'-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:'.self::$permissionName.'-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:'.self::$permissionName.'-delete', ['only' => ['destroy']]);
        $this->middleware('permission:'.self::$permissionName.'-show', ['only' => ['show']]);

        self::$pageBreadcrumbs[] = [
            'page' => '/application/'.self::$routePath,
            'title' => 'List '.self::$pageTitle,
        ];
    }

    public function index(Request $req)
    {

        if ($req->ajax()) {
            return Datatables::of(ActivityLog::where('created_by', Auth::user()->id)->get())->addIndexColumn()->make(true);
        }

        $user = User::find(Auth::user()->id);
        $role = Role::where('id', $user->role_id)->pluck('name')->first();

        $activityLog = ActivityLog::where('created_by', $user->id)->get();

        // completion profile
        $completion = 0;

        if(!empty($user->name)){
            $completion += 1;
        }
        if(!empty($user->email)){
            $completion += 1;
        }
        if(!empty($user->email_verified_at)){
            $completion += 1;
        }
        if(!empty($user->password)){
            $completion += 1;
        }
        if(!empty($user->password_hint)){
            $completion += 1;
        }
        if(!empty($user->position)){
            $completion += 1;
        }
        if(!empty($user->address)){
            $completion += 1;
        }
        if(!empty($user->phone)){
            $completion += 1;
        }
        if(!empty($user->religion)){
            $completion += 1;
        }
        if(!empty($user->gender)){
            $completion += 1;
        }
        if(!empty($user->education)){
            $completion += 1;
        }
        if(!empty($user->marital_status)){
            $completion += 1;
        }
        if(!empty($user->profile_image)){
            $completion += 1;
        }
        if(!empty($user->birth_date)){
            $completion += 1;
        }

        $completion = ceil($completion/14 *100);

        $pageTitle = self::$pageTitle;
        $pageBreadcrumbs = self::$pageBreadcrumbs;
        $pageBreadcrumbs[] = [
            'page' => '/application/'.self::$routePath.'/'.$user->id,
            'title' => 'Show '.self::$pageTitle,
        ];
        $routePath = self::$routePath;

        $minimize = 'on';

        $transactions = Transaction::where(function($q) use ($user){
            $q->where('email', $user->email);
            $q->orWhere('whatsapp', $user->phone);
            $q->orWhere('created_by', $user->id);
        })->get();

        return view(self::$folderPath.'.index', compact('user', 'activityLog','pageTitle',  'routePath', 'role', 'completion', 'minimize', 'transactions'));
    }

    public function create()
    {
        $user = new User();
        $roles = Role::pluck('name', 'id')->all();

        $pageTitle = self::$pageTitle;
        $pageBreadcrumbs = self::$pageBreadcrumbs;
        $pageBreadcrumbs[] = [
            'page' => '/application/'.self::$routePath.'/create',
            'title' => 'Create '.self::$pageTitle,
        ];
        $routePath = self::$routePath;
        
        return view(self::$folderPath.'.create', compact('user', 'pageTitle',  'routePath', 'roles'));
    }

    public function store(Request $request)
    {
        request()->validate(User::$rules);
        $req = $request->all();
        $req['password'] = Hash::make($req['password']);

        $roleName = Role::where('id', $req['roles'])->pluck('name', 'id')->first();
        $req['role_id'] = $req['roles'];
        $req['is_logged_in'] = null;
        $req['is_active'] = 1;

        $user = User::create($req);
        $user->assignRole($roleName);

        return redirect()->route(self::$routePath.'.index')
            ->with('success', self::$pageTitle.' berhasil di tambahkan.');
    }

    public function show($id)
    {
        $user = User::find($id);
        $role = Role::where('id', $user->role_id)->pluck('name')->first();

        $pageTitle = self::$pageTitle;
        $pageBreadcrumbs = self::$pageBreadcrumbs;
        $pageBreadcrumbs[] = [
            'page' => '/application/'.self::$routePath.'/'.$id,
            'title' => 'Show '.self::$pageTitle,
        ];
        $routePath = self::$routePath;

        return view(self::$folderPath.'.show', compact('user', 'pageTitle',  'routePath', 'role'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        $pageTitle = self::$pageTitle;
        $pageBreadcrumbs = self::$pageBreadcrumbs;
        $pageBreadcrumbs[] = [
            'page' => '/application/'.self::$routePath.'/'.$id.'/edit',
            'title' => 'Update '.self::$pageTitle,
        ];
        $routePath = self::$routePath;

        return view(self::$folderPath.'.edit', compact('user', 'pageTitle',  'routePath', 'roles', 'userRole'));
    }

    public function update(Request $request)
    {
        $req = $request->all();
        
        $user = User::find($req['id']);

        if(empty($req['password'])){
            $req['password'] = $user->password;
        }else{
            $req['password'] = Hash::make($req['password']);
        }
        
        if(User::where('username', $req['username'])->where('id', '!=', $user->id)->count() > 0){

            return redirect()->route(self::$routePath.'.index')
            ->with('failed', self::$pageTitle.' gagal di update karena username sudah terpakai');

        }

        if ($request->file('avatar')) {
            $name = $request->file('avatar')->getClientOriginalName();
            
            $name = str_replace(' ', '_', $name);
            $name = str_replace(',', '_', $name);
            $name = strtolower($name);

            $fileName = date('Y_m_d_').rand(1,99).rand(1,99).'_'.$name;  
            
            $request->avatar->move(public_path('uploads/profile'), $fileName);

            // kompres ukuran file
            $compressedPath = public_path('uploads/profile/'.$fileName);
            $image = Image::make($compressedPath);
            $image->save($compressedPath, 20);

            try {
                unlink(public_path($user->profile_dir).'/'.$user->profile_image);
            } catch (\Throwable $th) {
                // throw $th;
            }

            $req['profile_image'] = $fileName;
            $req['profile_dir'] = 'uploads/profile';
        }else{

            if(!empty($req['avatar_remove'])){
                if(!empty($user->profile_image)){
                    
                    try {
                        unlink(public_path($user->profile_dir).'/'.$user->profile_image);
                    } catch (\Throwable $th) {
                        // throw $th;
                    }
    
                }
                $req['profile_image'] = NULL;
                $req['profile_dir'] = NULL;
            }
        }

        $user->update($req);

        return redirect()->route(self::$routePath.'.index')
            ->with('success', self::$pageTitle.' berhasil di update');
    }

    public function destroy(Request $req, $id)
    {
        $user = User::find($id)->delete();

        if ($req->ajax()) {
            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => self::$pageTitle.' berhasil di hapus'
            ], 200);
        }

        return redirect()->route(self::$routePath.'.index')
            ->with('success', self::$pageTitle.' berhasil di hapus');
    }
    
    public function deactivated(Request $request, $id){

        $req = $request->all();

        User::find($id)->update([
            'is_active' => 0
        ]);
        
        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => ' User berhasil di nonaktifkan'
            ], 200);
        }

        

    }
}
