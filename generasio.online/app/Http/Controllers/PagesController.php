<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Visitor;
use App\Models\AdsLogin;
use App\Models\ActivityLog;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public static $pageTitle = 'Generasio';
    public static $pageDescription = 'Top Up Murah, Aman, Cepat, Terpercaya & Tanpa Biaya Admin';

    public function index()
    {
        if (auth()->user()) {
            return redirect()->route('dashboard');
        }

        // change status login to logout within 5 hour
        $userNotOnline = User::where('is_logged_in', 2)->get();
        foreach($userNotOnline as $key => $notOnline){

            $expired = strtotime($notOnline->last_logged_in);
            $expired = $expired + (3600 * 5);

            if(time() >= $expired){
                User::where('id', $notOnline->id)->update([
                    'is_logged_in' => 1
                ]);
            }
        }
                
        $pageTitle = self::$pageTitle;

        return view('pages.login', compact('pageTitle'));
    }

    public function login(Request $request)
    {

        $req = $request->all();

        $user = User::where('email', $req['email'])->first();

        if(!empty($user)){

            if($user->is_active == 0){
    
                return redirect()->route('login')->with('non-active', true);
    
            }
        }

        if (Auth::attempt($request->only('email', 'password'))) {

            $user = Auth::user();

            // 2 means actively login
            User::where('id', $user['id'])->update([
                'is_logged_in' => 2,
                'last_logged_in' => date('Y-m-d H:i:s'),
                'logged_in_attempt' => 0
            ]);
            
            // change status login to logout within 5 hour
            $userNotOnline = User::where('is_logged_in', 2)->get();
            foreach($userNotOnline as $key => $notOnline){

                $expired = strtotime($notOnline->last_logged_in);
                $expired = $expired + (3600 * 5);

                if(time() >= $expired){
                    User::where('id', $notOnline->id)->update([
                        'is_logged_in' => 1
                    ]);
                }
            }

            // logs
            ActivityLog::create([
                'name' => $user->name . ' login pada ' . date('Y-m-d H:i:s'),
                'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor"></path>
                    <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor"></path>
                </svg>',
                'created_by' => $user->id,
            ]);
            
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        } else {

            $data = User::where('email', $req['email']);
            
            if($data->count() > 0) {
                
                $attempts = $data->pluck('logged_in_attempt')->first();
                $data->update([
                    'logged_in_attempt' => $attempts + 1
                ]);

                if($attempts >= 1){
                    return redirect()->route('login')->with('failed', ($data->pluck('password_hint')->first() ?? true));
                }
            }
            return redirect()->route('login')->with('failed', true);
        }
    }

    public function logout(Request $request)
    {
        
        // change status login to logout within 5 hour
        $userNotOnline = User::where('is_logged_in', 2)->get();
        foreach($userNotOnline as $key => $notOnline){

            $expired = strtotime($notOnline->last_logged_in);
            $expired = $expired + (3600 * 5);

            if(time() >= $expired){
                User::where('id', $notOnline->id)->update([
                    'is_logged_in' => 1
                ]);
            }
        }

        $user = Auth::user();

        // logs
        ActivityLog::create([
            'name' => $user->name . ' logout pada ' . date('Y-m-d H:i:s'),
            'icon' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor"></path>
                <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor"></path>
            </svg>',
            'created_by' => $user->id,
        ]);

        User::where('id', $user['id'])->update([
            'is_logged_in' => 1,
        ]);

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', true);;
    }

    public function dashboard()
    {
        $user = Auth::user();

        $activityLog = ActivityLog::where('created_by', $user->id)->limit(5)->get();

        $transactions = Transaction::with('catalog', 'product')->orderBy('id', 'desc')->limit(5)->get();

        $pageTitle = 'Dashboard';

        return view('pages.dashboard', compact('pageTitle', 'activityLog', 'user', 'transactions'));
    }
}
